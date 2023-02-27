<?php
session_start();

require_once __DIR__.'/vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

// Build the captcha
$builder = new CaptchaBuilder;
$builder->build();

// Saving as image
$builder->save(__DIR__.'/assets/captcha.jpg');
        
// Showing directly the captcha
#header('Content-type: image/jpeg');
#$builder->output();

//  Generating the captcha
#$captcha = $builder->inline();

// Seving the captcha into session
$_SESSION['phrase'] = $builder->getPhrase();

require_once __DIR__.'/login.php';