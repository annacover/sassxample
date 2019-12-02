<?php

namespace Weissheiten\Sassxample;

require 'vendor/autoload.php';

$myTemplate = new Template();
$myTemplate->render('./src/Templates/home.html');