<?php
/**
 * News controller.
 * 
 * @author Intelligent Design (S�awomir Kaliszczak)
 * @copyright (c) 2012 Intelligent Design (S�awomir Kaliszczak)
 * @package Core
 */ 
class News extends Controller{
	function show($id, $title) {
		dump($id);
		dump($title);
		$this->vars['title'] = 'MyTitle';
		return $this->view('article');
	}
	function index() {
		
		return $this->view('index');
	}	
}