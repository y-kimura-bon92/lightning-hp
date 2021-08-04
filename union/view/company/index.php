<?php

const TITLE = '会社概要';
const CSS = '<link rel="stylesheet" href="union/public/css/company.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">COMPANY<br><span class="">会社概要</span></h1>
  </div>
EOF;
require(dirname( __FILE__ ) . '/company.php');