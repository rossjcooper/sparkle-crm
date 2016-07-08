<?php 

namespace SparkleCRM;

use SparkleCRM\Helper;

/** @var \Herbert\Framework\Enqueue $enqueue */


$enqueue->admin([
    'as'     => 'sparkle-crm-style',
    'src'    => Helper::assetUrl('/css/admin.css'),
    'filter' => [ 'panel' => 'peoplePanel' ]
]);
