<?php

const TITLE = ' ';
const CSS = '<link rel="stylesheet" href="union/public/css/style.css">';

const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="slider">
    <div data-anime="2"><img src="https://kachibon.work/lightning/union/public/img/top_main_03.jpg" class="slider-img" alt="" /></div>
    <div data-anime="1"><img src="https://kachibon.work/lightning/union/public/img/top_main_02.jpg" class="slider-img" alt="" /></div>
    <div data-anime="0"><img src="https://kachibon.work/lightning/union/public/img/top_main_01.jpg" class="slider-img" alt="" /></div>
    <div data-anime="3"><img src="https://kachibon.work/lightning/union/public/img/top_main_04.jpg" class="slider-img" alt="" /></div>
  </div>
EOF;

require(dirname( __FILE__ ) . '/view/index.php');