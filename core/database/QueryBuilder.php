<?php

class QueryBuilder

{

	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}


	public function selectAll($table)
	{
		 // prepared statement
    $statement = $this->pdo->prepare("select * from {$table}");
    //execute statement
    $statement->execute();
    // fetching results and save to variable or memory
    return $statement->fetchAll(PDO::FETCH_CLASS);
	}


}