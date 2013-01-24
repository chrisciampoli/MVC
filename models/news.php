<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */
class News_Model
{
	/**
	 * Holds instance of database connection
	 */
	private $db;
		
	public function __construct()
	{
		$this->db = new MysqlImproved_Driver;
	}
	
	/**
	 * Fetches article based on supplied name
	 * 
	 * @param string $author
	 * 
	 * @return array $article
	 */
	public function get_article($author)
	{		
		//connect to database
		$this->db->connect();
		
		//sanitize data
		$author = $this->db->escape($author);
		
		//prepare query
		$this->db->prepare
		(
			"
			SELECT
				`date`,
				`title`,
				`content`,
				`author`
			FROM
				`articles`
			WHERE
				`author` = '$author'
			LIMIT
				1
			;
			"
		);
		
		//execute query
		$this->db->query();
		
		$article = $this->db->fetch('array');
		
		return $article;
	}
	
	public function testString($name,$age){
		$this->name	= $_POST['name'];
		$this->age	= $_POST['age'];
		$person = array($name,$age);
		return $person;
	}
	
	/*
	 * Saves a user created article to the database
	 * 
	 * @params string $title, string $content,
	 *         string $author
	 */
	public function save_article($title, $content, $author){
		$this->db->connect();
		$title = $this->db->escape($title);
		$content = $this->db->escape($content);
		$author = $this->db->escape($author);
		$this->db->prepare
		(
		"INSERT INTO articles (id, date, title, content, author) VALUES (null, NOW, $title, $content, $author)"
		);
		$this->db->query();
	}
	
}
