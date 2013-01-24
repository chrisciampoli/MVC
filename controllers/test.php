<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class Test_Controller
{
	/**
	 * This template variable will hold the 'view' portion of our MVC for this 
	 * controller
	 */
	public $template = 'test';
	
	/**
	 * This is the default function that will be called by router.php
	 * 
	 * @param array $getVars the GET variables posted to index.php
	 */
	public function summon(array $getVars)
	{
		//$newsModel = new News_Model;
		
		//get an article
		//$article = $newsModel->get_article($getVars['author']);
		//$test = $newsModel->testString($_POST['name'],$_POST['age']);
		$test = $getVars['test'];
		//create a new view and pass it our template
		//$view = new View_Model($this->template);
		
		//assign article data to view
		//$view->assign('article' , $article);
		//$view->assign('test', $test);
		echo $test;
	}
}
