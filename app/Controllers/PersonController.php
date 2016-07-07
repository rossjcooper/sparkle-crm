<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SparkleCRM\Controllers;

/**
 * Description of PersonController
 *
 * @author Ross
 */
class PersonController
{
    function index(){
        return view('@SparkleCRM/people/index.twig');
    }
}
