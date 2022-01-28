<?php

// class MySqlDriver {
//   private $link;
// 	private $host = "localhost";
// 	private $database = "cpmsphp";
// 	private $username =  "root";
// 	private $password = "8080";

//    function __construct($database=""){
// 	   if (!empty($database)){ $this->database = $database; }
// 	   $this->link = new mysqli($host,$username,$password,$database);  // returns false if connection could not be made.
//    }
//    // this will be called automatically at the end of scope
//    public function __destruct() {
//       mysql_close( $this->link );
//    }
// }
// $gLink=new MySqlDriver();

 $host = "localhost";
 $database = "cpmsphp";
 $username =  "root";
 $password = "8080";

 $conn = new mysqli($host,$username,$password,$database);
 if ($conn -> connect_error) {
   echo "$conn->connect_error";
}


$web_name = "Complaint Management System";
?>
