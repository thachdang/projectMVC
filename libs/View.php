<?php

class View {

	protected $content = array();

    function __construct() {
        //echo 'this is the view';
    }

    public function render($name, $noInclude = false)
    {
    	$content = $this->content;
        require 'views/' . $name . '.php';    
    }

    public function set_content($name, $value)
    {
        $this->content[$name] = $value;
    }

    public function get_content($name)
    {
        return $this->content[$name];
    }

}