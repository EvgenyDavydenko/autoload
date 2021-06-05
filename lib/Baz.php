<?php



class Baz extends Bar
{    
    public function __construct()
    {
        echo 'Hello, i\'m Baz class!<br>';
        Bar::__construct();
        
    }



    public function init()
    {
    	echo 'Hello, i\'m init method from Baz class!<br>';
    	parent::init();
    }

}