<?php

const TITLE = 'お問い合わせ';
const CSS = '<link rel="stylesheet" href="css/contact.css">';
const SPLIT_LAYOUT_FIXED = <<<EOF
  <div class="jumbotron catch_copy">
    <h1 class="display-3">CONTACT<br><span class="">お問い合わせ</span></h1>
  </div>
EOF;
require(dirname( __FILE__ ) . '/contact.php');