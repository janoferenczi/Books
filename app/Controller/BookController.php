<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BooksController
 *
 * @author jano
 */
class BookController extends AppController {

    public $helpers = array("Html","Form");
    
    public $uses = array('Book','User');


    public function index(){
        $books = $this->Book->find("all");
               
        $this->set("books",$books);
    }
        
}
