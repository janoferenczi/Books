<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publisher
 *
 * @author jano
 */
class Publisher extends AppModel{
    public $hasMany = array(
        'Book'  =>array(
            'className'     => 'Book'
        )
    );
    
}
