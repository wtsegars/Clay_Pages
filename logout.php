<?php

require 'includes/init.php';
//require 'classes/Url.php';

Auth::logout();

Url::redirect('/');
