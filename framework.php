<?php

function render($template, $layout = 'layout') {
   extract($GLOBALS);
   ob_start();
   include("templates/$template.template.php");
   $content = ob_get_contents();
   ob_end_clean();
   include("templates/$layout.template.php");
}
