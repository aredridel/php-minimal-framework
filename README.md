PHP Minimal Framework
=====================

This is intended to be the simplest possible PHP framework for a
request/action/response style with separate templates.

PHP is already a fantastic templating engine, so there's no need to reinvent
the wheel. Templates are plain PHP.

There's no object orientation. There's no need -- that's great for a model
layer, but this framework leaves that part up to you. 

There's no routing. The web server does this neatly by mapping to filenames.

Each of these action files is short: include the framework functions, look at input, decide what to display.

The `demo.php`, `templates/demo.template.php` and `handle_demo.php` show a
two-stage form handler, a great way to do things -- first one is easy, just
display the form. Then when it's posted, do validation and store errors. If
there's no errors, show success. If not, show the form again. In the form
template, if there are errors for a field, show them.

Users only see the action files in URLs. The templates are behind the scenes.

The site layout -- things like CSS files and titles -- is in `templates/layout.template.php`.
