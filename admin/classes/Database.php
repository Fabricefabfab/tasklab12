<?php

class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "bb389b69eea232", "a60ca44c", "heroku_1267aaff086f44e");
		return $this->con;
	}
}

?>
