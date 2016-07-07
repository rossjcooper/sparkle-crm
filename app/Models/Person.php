<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SparkCRM\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Description of Person
 *
 * @author Ross
 */
class Person extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'telephone', 'twitter', 'website', 'profile_image'];
}
