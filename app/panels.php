<?php

namespace SparkleCRM;

/** @var \Herbert\Framework\Panel $panel */
$panel->add([
    'type' => 'panel',
    'as' => 'peoplePanel',
    'title' => 'People',
    'slug' => 'sparklecrm-people',
    'icon' => 'dashicons-groups',
    'uses' => __NAMESPACE__ . '\Controllers\PersonController@index'
]);
