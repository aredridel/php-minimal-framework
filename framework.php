<?php
/**
 * render is really the entire framework, other than the conceptual layout: 
 * It's a simple function to render a template, hold it for a moment, then
 * render a layout that can include the rendered template.
 */
function render($template, $layout = 'layout') {
   extract($GLOBALS); // Make global variables accessible to the template.

   ob_start(); // Hold the output of the template.

	// Load the template (with some filename extensions to keep things obvious, 
   // but so we don't have to specify in the code.)
   include("templates/$template.template.php"); 

   $content = ob_get_contents(); // Snag what was held.

   ob_end_clean(); // Clean out the buffer so we don't get two copies.

	// Now include the layout -- it can use $content to put the template 
   // output where it belongs.
   include("templates/$layout.template.php"); 
}
