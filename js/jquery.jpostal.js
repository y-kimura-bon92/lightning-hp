/*jslint browser:true, devel:true*/
/*jslint unparam:true*/
/*global window, $, jQuery*/

/**
 * jquery.jpostal.js ver2.7
 * 
 * Copyright 2014, Aoki Makoto, Ninton G.K. http://www.ninton.co.jp
 * 
 * Released under the MIT license - http://en.wikipedia.org/wiki/MIT_License
 * 
 * Requirements
 * jquery.js
 */
var Jpostal = {};

Jpostal.Database = function () {
    "use strict";

    this.address = [];    // database cache
    this.map     = {};
    this.url     = {
        'http'  : '//jpostal-1006.appspot.com/json/',
        'https' : '//jpostal-1006.appspot.com/json/'
    };
    this.strict7match = false;
};

Jpostal.Database.prototype.find = function (i_postcode) {
    "use strict";

    var address = [];

    this.address.forEach(function (eachAddress) {
        if (eachAddress[0] === '_' + i_postcode) {
            address = eachAddress;
        }
    });

    return address;
};

Jpostal.Database.prototype.get = function (i_postcode) {
    "use strict";

    //    --------------------------------------------------
    //    i_postcode    find()    find()    result
    //                1234567    123
    //    --------------------------------------------------
    //    1             -        -        defaults
    //    12            -        -        defaults
    //    123           -        Y        find( '123' )
    //    123           -        N        defaults
    //    1234          -        Y        find( '123' )
    //    1234          -        N        defaults
    //    1234567       Y        -        find( '1234567' )
    //    1234567       N        Y        find( '123' )
    //    1234567       N        N        defaults
    //    --------------------------------------------------
    var defaults = ['', '', '', '', '', '', '', '', ''],
        address,
        head3;

    switch (i_postcode.length) {
    case 3:
    case 4:
    case 5:
    case 6:
        head3 = i_postcode.substr(0, 3);
        address = this.find(head3);
        address = $.extend(defaults, address);
        break;

    case 7:
        address = this.find(i_postcode);
        if (address.length === 0 && !this.strict7Match) {
            head3 = i_postcode.substr(0, 3);
            address = this.find(head3);
        }
        address = $.extend(defaults, address);
        break;

    default:
        address = defaults;
        break;
    }

    return address;
};

Jpostal.Database.prototype.getUrl = function (i_head3) {
    "use strict";

    var url = '';

    switch (this.getProtocol()) {
    case 'http:':
        url = this.url.http;
        break;

    case 'https:':
        url = this.url.https;
        break;
    }
    url = url + i_head3 + '.json';

    try {
        url = url + '?referer=' + encodeURIComponent(window.location.href);
    } catch (e) {}

    return url;
};

Jpostal.Database.prototype.request = function (i_postcode, i_callback) {
    "use strict";

    var head3,
        url,
        options;

    head3 = i_postcode.substr(0, 3);

    if (i_postcode.length <= 2 || this.getStatus(head3) !== 'none' || head3.match(/\D/)) {
        return false;
    }
    this.setStatus(head3, 'waiting');

    url = this.getUrl(head3);

    options = {
        async         : true,
        dataType      : 'jsonp',
        jsonpCallback : 'jQuery_jpostal_callback',
        type          : 'GET',
        url           : url,
        success       : function () {    // function(i_data, i_dataType
            i_callback();
        },
        timeout : 5000    // msec
    };
    this.ajax(options);
    return true;
};

Jpostal.Database.prototype.ajax = function (options) {
    "use strict";

    $.ajax(options);
};

Jpostal.Database.prototype.save = function (i_data) {
    "use strict";

    var that = this;

    i_data.forEach(function (rcd) {
        var postcode = rcd[0];

        if (that.map[postcode] === undefined) {
            that.address.push(rcd);
            that.map[postcode] = {state : 'complete', time : 0};
        } else if (that.map[postcode].state === 'waiting') {
            that.address.push(rcd);
            that.map[postcode].state = 'complete';
        }
    });
};

Jpostal.Database.prototype.getStatus = function (i_postcode) {
    "use strict";

    //    --------------------------------------------------
    //    #    ['_001']    ..state        .time        result
    //    --------------------------------------------------
    //    1     =undefined    -            -            none
    //    2    !=undefined    'complete'    -           complete
    //    3    !=undefined    'waiting'    <5sec        waiting
    //    4    !=undefined    'waiting'    >=5sec       none
    //    --------------------------------------------------
    var st = '',
        postcode = '_' + i_postcode,
        t_ms;

    if (this.map[postcode] === undefined) {
        // # 1
        st = 'none';

    } else if ('complete' === this.map[postcode].state) {
        // # 2
        st = 'complete';

    } else {
        t_ms = this.getTime() - this.map[postcode].time;
        if (t_ms < 5000) {
            // # 3
            st = 'waiting';

        } else {
            // # 4
            st = 'none';
        }
    }

    return st;
};

Jpostal.Database.prototype.setStatus = function (i_postcode) {
    "use strict";

    var postcode = '_' + i_postcode;

    if (this.map[postcode] === undefined) {
        this.map[postcode] = {
            state : 'waiting',
            time  : 0
        };
    }

    this.map[postcode].time = this.getTime();
};

Jpostal.Database.prototype.getProtocol = function () {
    "use strict";

    return window.location.protocol;
};

Jpostal.Database.prototype.getTime = function () {
    "use strict";

    return (new Date()).getTime();
};

Jpostal.Database.prototype.setStrict7match = function (value) {
    this.strict7Match = value;
};

(function () {
    "use strict";

    var instance;

    Jpostal.Database.getInstance = function () {
        if (instance === undefined) {
            instance = new Jpostal.Database();
        }
        return instance;
    };
}());

Jpostal.Jpostal = function (i_JposDb) {
    "use strict";

    this.address  = '';
    this.jposDb   = i_JposDb;
    this.options  = {};
    this.postcode = '';
    this.minLen   = 3;
};

Jpostal.Jpostal.prototype.displayAddress = function () {
    "use strict";

    var that = this;

    if (this.postcode === '000info') {
        this.address[2] += ' ' + this.getScriptSrc();
    }

    Object.keys(this.options.address).forEach(function (key) {
        var format = that.options.address[key],
            value = that.formatAddress(format, that.address);

        if (that.isSelectTagForPrefecture(key, format)) {
            that.setSelectTagForPrefecture(key, value);
        } else {
            $(key).val(value);
            that.trigger(key);
        }
    });
};

Jpostal.Jpostal.prototype.isSelectTagForPrefecture = function (i_key, i_fmt) {
    "use strict";

    // 驛ｽ驕灘ｺ懃恁縺ｮSELECT繧ｿ繧ｰ縺具ｼ�
    var f;

    switch (i_fmt) {
    case '%3':
    case '%p':
    case '%prefecture':
        if ($(i_key).get(0).tagName.toUpperCase() === 'SELECT') {
            f = true;
        } else {
            f = false;
        }
        break;

    default:
        f = false;
        break;
    }
    return f;
};

Jpostal.Jpostal.prototype.setSelectTagForPrefecture = function (i_key, i_value) {
    "use strict";

    var value,
        el;

    // 驛ｽ驕灘ｺ懃恁縺ｮSELECT繧ｿ繧ｰ
    // 繧ｱ繝ｼ繧ｹ1: <option value="譚ｱ莠ｬ驛ｽ">譚ｱ莠ｬ驛ｽ</option>
    $(i_key).val(i_value);
    if ($(i_key).val() === i_value) {
        this.trigger(i_key);
        return;
    }

    // 繧ｱ繝ｼ繧ｹ2: value縺梧焚蛟､(閾ｪ豐ｻ菴薙さ繝ｼ繝峨�蝣ｴ蜷医′螟壹＞)
    //    繝�く繧ｹ繝医′縲悟圏豬ｷ驕薙阪ｒ蜷ｫ繧縺九←縺�°縺ｧ蛻､譁ｭ縺吶ｋ
    //    <option value="01">蛹玲ｵｷ驕�(01)</option>
    //    <option value="1">1.蛹玲ｵｷ驕�</option>
    value = '';
    el = $(i_key)[0];
    Object.keys(el.options).forEach(function (i) {
        var p = String(el.options[i].text).indexOf(i_value);
        if (0 <= p) {
            value = el.options[i].value;
        }
    });

    if (value !== '') {
        $(i_key).val(value);
        this.trigger(i_key);
    }

};

Jpostal.Jpostal.prototype.trigger = function (i_key) {
    "use strict";

    if (this.options.trigger === undefined || this.options.trigger[i_key] === undefined || this.options.trigger[i_key] === false) {
        return;
    }
    $(i_key).trigger("change");
};

Jpostal.Jpostal.prototype.formatAddress = function (i_fmt, i_address) {
    "use strict";

    var s = i_fmt,
        that = this;

    s = s.replace(/%3|%p|%prefecture/, i_address[1]);
    s = s.replace(/%4|%c|%city/,       i_address[2]);
    s = s.replace(/%5|%t|%town/,       i_address[3]);
    s = s.replace(/%6|%a|%address/,    i_address[4]);
    s = s.replace(/%7|%n|%name/,       i_address[5]);

    s = s.replace(/%8/,  i_address[6]);
    s = s.replace(/%9/,  i_address[7]);
    s = s.replace(/%10/, i_address[8]);

    s = s.replace(/%([ASHKV]+)8/, function (match, p1) {
        return that.mb_convert_kana(i_address[6], p1);
    });
    s = s.replace(/%([ASHKV]+)9/, function (match, p1) {
        return that.mb_convert_kana(i_address[7], p1);
    });
    s = s.replace(/%([ASHKV]+)10/, function (match, p1) {
        return that.mb_convert_kana(i_address[8], p1);
    });

    return s;
};

Jpostal.Jpostal.prototype.mb_convert_kana = function (i_str, i_option) {
    "use strict";

    var str = i_str,
        i,
        o,
        funcs;

    function tr(i_str, map) {
        var reg = new RegExp("(" + Object.keys(map).join("|") + ")", "g");

        return i_str.replace(reg, function (s) {
            return map[s];
        });
    }

    funcs = {
        A: function (i_str) {
            var reg = /[A-Za-z0-9!#\$%&\(\)\*\+,\-\.\/:;<=>\?@\[\]\^_`\{\|\}]/g,
                s;

            s = i_str.replace(reg, function (s) {
                return String.fromCharCode(s.charCodeAt(0) + 65248);
            });

            return s;
        },
        S: function (i_str) {
            return i_str.replace(/\u0020/g, '\u3000');
        },
        H: function (i_str) {
            var map = {
                "�ｱ": "縺�",
                "�ｲ": "縺�",
                "�ｳ": "縺�",
                "�ｴ": "縺�",
                "�ｵ": "縺�",
                "�ｶ": "縺�",
                "�ｷ": "縺�",
                "�ｸ": "縺�",
                "�ｹ": "縺�",
                "�ｺ": "縺�",
                "�ｻ": "縺�",
                "�ｼ": "縺�",
                "�ｽ": "縺�",
                "�ｾ": "縺�",
                "�ｿ": "縺�",
                "�": "縺�",
                "��": "縺｡",
                "��": "縺､",
                "��": "縺ｦ",
                "��": "縺ｨ",
                "��": "縺ｪ",
                "��": "縺ｫ",
                "��": "縺ｬ",
                "��": "縺ｭ",
                "��": "縺ｮ",
                "��": "縺ｯ",
                "��": "縺ｲ",
                "��": "縺ｵ",
                "��": "縺ｸ",
                "��": "縺ｻ",
                "��": "縺ｾ",
                "��": "縺ｿ",
                "��": "繧",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "��": "繧�",
                "�ｦ": "繧�",
                "��": "繧�",
                "�ｧ": "縺�",
                "�ｨ": "縺�",
                "�ｩ": "縺�",
                "�ｪ": "縺�",
                "�ｫ": "縺�",
                "�ｯ": "縺｣",
                "�ｬ": "繧�",
                "�ｭ": "繧�",
                "�ｮ": "繧�",
                "�｡": "縲�",
                "�､": "縲�",
                "�ｰ": "繝ｼ",
                "�｢": "縲�",
                "�｣": "縲�",
                "�･": "繝ｻ",
                "��": "繧�",
                "��": "繧�"
            };
            return tr(i_str, map);
        },
        K: function (i_str) {
            var map = {
                "�ｱ": "繧｢",
                "�ｲ": "繧､",
                "�ｳ": "繧ｦ",
                "�ｴ": "繧ｨ",
                "�ｵ": "繧ｪ",
                "�ｶ": "繧ｫ",
                "�ｷ": "繧ｭ",
                "�ｸ": "繧ｯ",
                "�ｹ": "繧ｱ",
                "�ｺ": "繧ｳ",
                "�ｻ": "繧ｵ",
                "�ｼ": "繧ｷ",
                "�ｽ": "繧ｹ",
                "�ｾ": "繧ｻ",
                "�ｿ": "繧ｽ",
                "�": "繧ｿ",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝�",
                "��": "繝｡",
                "��": "繝｢",
                "��": "繝､",
                "��": "繝ｦ",
                "��": "繝ｨ",
                "��": "繝ｩ",
                "��": "繝ｪ",
                "��": "繝ｫ",
                "��": "繝ｬ",
                "��": "繝ｭ",
                "��": "繝ｯ",
                "�ｦ": "繝ｲ",
                "��": "繝ｳ",
                "�ｧ": "繧｡",
                "�ｨ": "繧｣",
                "�ｩ": "繧･",
                "�ｪ": "繧ｧ",
                "�ｫ": "繧ｩ",
                "�ｯ": "繝�",
                "�ｬ": "繝｣",
                "�ｭ": "繝･",
                "�ｮ": "繝ｧ",
                "�｡": "縲�",
                "�､": "縲�",
                "�ｰ": "繝ｼ",
                "�｢": "縲�",
                "�｣": "縲�",
                "�･": "繝ｻ",
                "��": "繧�",
                "��": "繧�"
            };
            return tr(i_str, map);
        },
        V: function (i_str) {
            var map = {
                "縺九�": "縺�",
                "縺阪�": "縺�",
                "縺上�": "縺�",
                "縺代�": "縺�",
                "縺薙�": "縺�",
                "縺輔�": "縺�",
                "縺励�": "縺�",
                "縺吶�": "縺�",
                "縺帙�": "縺�",
                "縺昴�": "縺�",
                "縺溘�": "縺�",
                "縺｡繧�": "縺｢",
                "縺､繧�": "縺･",
                "縺ｦ繧�": "縺ｧ",
                "縺ｨ繧�": "縺ｩ",
                "縺ｯ繧�": "縺ｰ",
                "縺ｲ繧�": "縺ｳ",
                "縺ｵ繧�": "縺ｶ",
                "縺ｸ繧�": "縺ｹ",
                "縺ｻ繧�": "縺ｼ",
                "縺ｯ繧�": "縺ｱ",
                "縺ｲ繧�": "縺ｴ",
                "縺ｵ繧�": "縺ｷ",
                "縺ｸ繧�": "縺ｺ",
                "縺ｻ繧�": "縺ｽ",

                "繧ｫ繧�": "繧ｬ",
                "繧ｭ繧�": "繧ｮ",
                "繧ｯ繧�": "繧ｰ",
                "繧ｱ繧�": "繧ｲ",
                "繧ｳ繧�": "繧ｴ",
                "繧ｵ繧�": "繧ｶ",
                "繧ｷ繧�": "繧ｸ",
                "繧ｹ繧�": "繧ｺ",
                "繧ｻ繧�": "繧ｼ",
                "繧ｽ繧�": "繧ｾ",
                "繧ｿ繧�": "繝",
                "繝√�": "繝�",
                "繝��": "繝�",
                "繝��": "繝�",
                "繝医�": "繝�",
                "繝上�": "繝�",
                "繝偵�": "繝�",
                "繝輔�": "繝�",
                "繝倥�": "繝�",
                "繝帙�": "繝�",
                "繝上�": "繝�",
                "繝偵�": "繝�",
                "繝輔�": "繝�",
                "繝倥�": "繝�",
                "繝帙�": "繝�"
            };
            return tr(i_str, map);
        }
    };

    for (i = 0; i < i_option.length; i += 1) {
        o = i_option[i];
        str = funcs[o](str);
    }

    return str;
};

Jpostal.Jpostal.prototype.getScriptSrc = function () {
    "use strict";

    var src = '',
        el_arr,
        i,
        n,
        el_src;

    el_arr = document.getElementsByTagName('script');
    n = el_arr.length;
    for (i = 0; i < n; i += 1) {
        el_src = el_arr[i].src;
        if (0 <= el_src.indexOf("jquery.jpostal.js")) {
            src = el_src;
            break;
        }
    }

    return src;
};

Jpostal.Jpostal.prototype.init = function (i_options) {
    "use strict";

    if (i_options.postcode === undefined) {
        throw new Error('postcode undefined');
    }
    if (i_options.address === undefined) {
        throw new Error('address undefined');
    }

    this.options.postcode = [];
    if (typeof i_options.postcode === 'string') {
        this.options.postcode.push(i_options.postcode);
    } else {
        this.options.postcode = i_options.postcode;
    }

    this.options.address = i_options.address;

    if (i_options.url !== undefined) {
        this.jposDb.url = i_options.url;
    }

    this.options.trigger = {};
    if (i_options.trigger !== undefined) {
        this.options.trigger = i_options.trigger;
    }

    this.options.strict7Match = false;
    if (i_options.strict7Match !== undefined) {
        this.options.strict7Match = i_options.strict7Match;
    }

    this.jposDb.setStrict7match(this.options.strict7Match);
};

Jpostal.Jpostal.prototype.main = function () {
    "use strict";

    var that,
        f;

    this.scanPostcode();
    if (this.postcode.length < this.minLen) {
        // git hub issue #4: 驛ｵ萓ｿ逡ｪ蜿ｷ谺�′0��2譁�ｭ励�縺ｨ縺阪∽ｽ乗園谺�ｒ遨ｺ谺�↓縺帙★縲∝�蜉帛�螳ｹ繧堤ｶｭ謖√＠縺ｦ縺ｻ縺励＞ 
        return;
    }

    that = this;
    f = this.jposDb.request(this.postcode, function () {
        that.callback();
    });
    if (!f) {
        this.callback();
    }
};

Jpostal.Jpostal.prototype.callback = function () {
    "use strict";

    this.address = this.jposDb.get(this.postcode);
    this.displayAddress();
};

Jpostal.Jpostal.prototype.scanPostcode = function () {
    "use strict";

    var s = '',
        s3,
        s4;

    switch (this.options.postcode.length) {
    case 0:
        break;

    case 1:
        //    github issue #8: 1縺､逶ｮ繧堤ｩｺ谺��2縺､逶ｮ繧偵�001縲阪→縺励※繧ゅ√�001縲阪→縺励※蛹玲ｵｷ驕捺惆蟷悟ｸゅｒ陦ｨ遉ｺ縺励※縺励∪縺�
        //    ----------------------------------------
        //    case    postcode    result
        //    ----------------------------------------
        //    1        ''            ''
        //    1        12            ''
        //    2        123           123
        //    2        123-          123
        //    2        123-4         123
        //    3        123-4567      1234567
        //    2        1234          123
        //    4        1234567       1234567
        //    ----------------------------------------
        s = String($(this.options.postcode[0]).val());
        if (0 <= s.search(/^([0-9]{3})([0-9A-Za-z]{4})/)) {
            // case 4
            s = s.substr(0, 7);
        } else if (0 <= s.search(/^([0-9]{3})-([0-9A-Za-z]{4})/)) {
            // case 3
            s = s.substr(0, 3) + s.substr(4, 4);
        } else if (0 <= s.search(/^([0-9]{3})/)) {
            // case 2
            s = s.substr(0, 3);
        } else {
            // case 1
            s = '';
        }
        break;

    case 2:
        //    github issue #8: 1縺､逶ｮ繧堤ｩｺ谺��2縺､逶ｮ繧偵�001縲阪→縺励※繧ゅ√�001縲阪→縺励※蛹玲ｵｷ驕捺惆蟷悟ｸゅｒ陦ｨ遉ｺ縺励※縺励∪縺�
        //    ----------------------------------------
        //    case    post1    post2    result
        //    ----------------------------------------
        //    1        ''        ---        ''
        //    1        12        ---        ''
        //    2        123        ''        123
        //    2        123        4         123
        //    3        123        4567      1234567
        //    ----------------------------------------
        s3 = String($(this.options.postcode[0]).val());
        s4 = String($(this.options.postcode[1]).val());
        if (0 <= s3.search(/^[0-9]{3}$/)) {
            if (0 <= s4.search(/^[0-9A-Za-z]{4}$/)) {
                // case 3
                s = s3 + s4;
            } else {
                // case 2
                s = s3;
            }
        } else {
            // case 1
            s = '';
        }
        break;
    }

    this.postcode = s;
};

//    MEMO: For the following reason, JposDb was put on the global scope, not local scope.
//    ---------------------------------------------------------------------
//     data file    callback            JposDb scope
//    ---------------------------------------------------------------------
//    001.js        JposDb.save            global scope
//    001.js.php    $_GET['callback']    local scopde for function($){}
//    ---------------------------------------------------------------------
window.jQuery_jpostal_callback = function (i_data) {
    "use strict";

    Jpostal.Database.getInstance().save(i_data);
};


(function (factory) {
    "use strict";

    if (typeof module === "object" && typeof module.exports === "object") {
        module.exports = factory(require("jquery"), window, document);
    } else {
        factory(jQuery, window, document);
    }
//}(function ($, window, document, undefined) {
}(function ($) {
    "use strict";

    $.fn.jpostal = function (i_options) {
        var Jpos,
            selector;

        Jpos = new Jpostal.Jpostal(Jpostal.Database.getInstance());
        Jpos.init(i_options);

        if (typeof i_options.click === 'string' && i_options.click !== '') {
            $(i_options.click).bind('click', function () {
                Jpos.main();
            });
        } else {
            selector = Jpos.options.postcode[0];
            $(selector).bind('keyup change', function () {
                Jpos.main();
            });

            if (1 <= Jpos.options.postcode.length) {
                selector = Jpos.options.postcode[1];
                $(selector).bind('keyup change', function () {
                    Jpos.main();
                });
            }
        }
    };

}));