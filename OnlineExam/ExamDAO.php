<?php 
class ExamDAO{
	public static function getQuestion(){
		global $db;

		$sql = "SELECT * FROM test_question ORDER BY id";
		$result = mysql_query($sql);
		$row = array();
        if(mysql_num_rows($result) > 0){
            while($record = mysql_fetch_assoc($result)){
                $row[] = $record;
            }
         return $row;   
        }else{
            $return = mysql_query($sql);
            if(!$return){
            die ("Somethong went wrong. ".mysql_error());
            }
        }
	}

	public function getUser(){
		global $db;
		$query = "SELECT * FROM registration";
        $result = mysql_query($query);

        // if(mysql_num_rows($result) > 0 ){
        //     $row = array();
        //     while($record = mysql_fetch_assoc($result)){
        //         $row[] = $record;
        //     }
        //     return $row;
        // }
        return $result;
		
	}


	public static function createUser($first_name, $last_name, $email, $password){
		if (!$email) return false;
		if (!$password) return false;

		$sql = "INSERT INTO registration (first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email', '$password')";
		$result = mysql_query($sql);
	}

}
 ?>