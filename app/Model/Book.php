<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BooksModel
 *
 * @author jano
 */
class Book extends AppModel {
    public $hasMany = array(
        'Comment' => array(
            'className'     => 'Comment'
        )
    );
    
    public $belongsTo = 'Publisher';
    
    
}
