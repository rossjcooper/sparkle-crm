<?php

/** @var  \Herbert\Framework\Application $container */
/** @var  \Herbert\Framework\Http $http */
/** @var  \Herbert\Framework\Router $router */
/** @var  \Herbert\Framework\Enqueue $enqueue */
/** @var  \Herbert\Framework\Panel $panel */
/** @var  \Herbert\Framework\Shortcode $shortcode */
/** @var  \Herbert\Framework\Widget $widget */

use Illuminate\Database\Capsule\Manager as Capsule;
use Herbert\Framework\Notifier;

Capsule::schema()->create('people', function($table)
{
    $table->increments('id');
    $table->string('name');
    $table->string('email');
    $table->string('mobile');
    $table->string('telephone');
    $table->string('twitter');
    $table->string('website');
    $table->string('profile_image');
    $table->timestamps();
});