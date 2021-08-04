(function($){
	var interval = 2000; //スライド実行のインターバル
	var $slider = $('.slider'); //スライドの親要素
	var splitX = 11; //X方向の分割数
	var splitY = 5; //Y方向の分割数
	
	//各スライダー要素の中にdivを敷き詰める
	var setDiv = function(){
		$slider.each(function(key,value){
			$(value).children().each(function(key2,value2){
				var $div = $('<div />').css({
					width: 100 / splitX + '%',
					height: 100 / splitY + '%',
				});
				var i = 0;
				while(i < splitX * splitY){
					$(value2).append($div.clone());
					i++;
				}
			});
		});
	}
	
	//敷き詰めたdivに背景としてセット
	var setBg = function(sliderW,sliderH){
		$slider.each(function(key,value){
			$(value).children().each(function(key2,value2){
				//value2 = slider > div
				var $img = $(this).find('.slider-img');
				var imgW = $img.get(0).naturalWidth;
				var imgH = $img.get(0).naturalHeight;
				var imgSrc = $img.attr('src');
				var fixY = 0;
				var fixX = 0;
				
				if(sliderW / sliderH < imgW / imgH){
					//枠に比べて画像が横長の場合、高さをあわせる
					var bgs = 'auto ' + sliderH + 'px';
					
					//ど真ん中に合わせるようにXを調整
					var fixX = ((sliderH / imgH * imgW) - sliderW) / 2;

				} else {
					//枠に比べて画像が縦長の場合、幅をあわせる
					var bgs = sliderW + 'px auto';
					
					//ど真ん中に合わせるようにYを調整
					var fixY = ((sliderW / imgW * imgH) - sliderH) / 2;
				}
				
				$(value2).children('div').each(function(key3,value3){
					//value3 = slider > div > div
					var bgpX = key3 % splitX / splitX ;
					var bgpY = Math.floor(key3 / splitX) / splitY;
					
					
					$(value3).css({
						width: 100 / splitX + '%',
						height: 100 / splitY + '%',
						backgroundImage: 'url(' + imgSrc + ')',
						backgroundPosition: ((-1 * bgpX * sliderW) - fixX) + 'px ' + ((-1 * bgpY * sliderH) - fixY) + 'px',
						backgroundSize: bgs
					});
					
					
					
				});
				
				
			});
		});
	}
	
	//アニメーション本体
	//アニメーションのパターン
	var animePattern = {
		0: {
				scaleY: [1,0],
				easing: 'easeOutExpo',
				delay: anime.stagger(50,{
					grid: [splitX,splitY],
					from: 'center',
					easing: 'linear',
					start: interval
				})
			},
		1: {
			scale: [1,0],
			rotate: [0,360],
			easing: 'easeOutExpo',
			delay: anime.stagger(100,{
				grid: [splitX,splitY],
				from: 'center',
				easing: 'linear',
				start: interval
			})
		},
		2: {
			scaleY: [1,0],
			easing: 'easeOutExpo',
			delay: anime.stagger(50,{
				grid: [splitX,splitY],
				from: 'first',
				axis: 'y',
				easing: 'linear',
				start: interval
			})
		},
		3: {
			scaleX: [1,0],
			easing: 'easeOutExpo',
			delay: anime.stagger(50,{
				grid: [splitX,splitY],
				from: 'first',
				axis: 'x',
				easing: 'linear',
				start: interval
			})
		}
	};
	
	var animation = function(){
		var param = animePattern[$slider.find('> div:last-child').attr('data-anime')];
		param['targets'] = $slider.find('> div:last-child > div').get();
		param['complete'] = function(el){
				$slider.find('> div:last-child').prependTo($slider);
				$slider.find('> div:first-child > div').css({
					transform: ''
				});
				animation();
		};
		anime(param);
	}

	//実行
	setDiv();

	$(window).on('load',function(){
		setBg($slider.width(),$slider.height());
		animation();
	});
	//リサイズ時に背景を取り直す
	$(window).on('resize',function(){
		setBg($slider.width(),$slider.height());
	});
})(jQuery);