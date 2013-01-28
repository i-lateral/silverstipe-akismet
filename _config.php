<?php

// Add Akismet extension to comment, if it exists
if(class_exists('Comment'))
    Object::add_extension('Comment', 'Akismet_Comment');
