<?php

/**
 * Description of Comment
 *
 * @author jano
 */

class Comment extends AppModel {

    public $hasOne = array(
        'User'  =>  array(
            'className'     => 'User',
        ),
        'Book'  =>  array(
            'className'     => 'Book',
        )
    );   
    
}
