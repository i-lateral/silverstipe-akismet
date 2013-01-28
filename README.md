Silverstipe Akismet
===================

Add on for silverstripe-comments that adds akismet support for Silverstripe 3.x

Author
------

Morven Lewis-Everley (Mo): http://www.i-lateral.com/
morven [at] i-lateral [dot] com

Forked from the SSAkismet functionality developed by Silverstripe: http://www.silverstripe.org/

Originally created by Alex Potsides: http://www.achingbrain.net

Requirements
------------

* Silverstripe 3
* Silverstripe-Comments (can be used without however)

Install
-------

1. Download the akismet module
2. Extract the archive into your Silverstripe root directory (in a folder named 'akismet')
3. Add your Akismet API key by adding SSAkismet::setAPIKey('<your-key>'); to your _config.php
4. If you wish to add exismet support to any other data objects, add Object::add_extension('<MyObject>', 'Akismet_Comment'); to your _config.php

Akismet API Key
---------------

You require an Akismet API key in order to use Akismet. You can get an API key from:

https://akismet.com/signup/
