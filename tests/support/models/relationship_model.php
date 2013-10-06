<?php
/**
 * An extension of CodeIgniter's base Model class to remove repetition and increase productivity by providing
 * a couple handy methods(powered by CI's query builder), validation-in-model support, event callbacks and more.
 *
 * @author  Jamie Rumbelow <http://jamierumbelow.net>
 * @author  Md Emran Hasan <phpfour@gmail.com>
 * @author  Roni Kumar Saha <roni.cse@gmail.com>
 * @version 2.0
 *
 * @link    http://github.com/jamierumbelow/codeigniter-base-model
 * @link    https://github.com/phpfour/MY_Model
 * @link    https://github.com/ronisaha/ci-base-model
 *
 */

/**
 * relationship_model.php contains a test model that has a belongs_to and has_many relationship
 */

class Belongs_to_modelCI extends CI_MY_Model
{
    public $belongs_to = array( 'author' );
    public $has_many = array( 'comments' );
}

class Author_modelCI extends CI_MY_Model
{
    protected $_table = 'authors';
    protected $primary_key = 'id';
}