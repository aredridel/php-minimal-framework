<?php

function render($template, $layout = 'templates/layout.php') {
   extract($GLOBALS);
   ob_start();
   include($template);
   $content = ob_get_contents();
   ob_end_clean();
   include($layout);
}