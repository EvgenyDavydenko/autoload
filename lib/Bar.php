<?php

class Bar
{    
    public function __construct()
    {
        echo 'Hello, i\'m Bar class!<br>';
        $this->init();
    }


	public function init()
    {
    	echo 'Hello, i\'m init method from Bar class!<br>';
    }
}