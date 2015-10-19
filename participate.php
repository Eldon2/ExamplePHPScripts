<?php
$user = $pass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
	$username = "cs386";
	$password = "starwars";
	$dbname = "cs386";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_set_charset($conn,"utf8mb4");

    $data=json_decode(file_get_contents('php//input'),true);

    $user= filter_var($data['User'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pass= filter_var($data['Pass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $eval_id=filter_var($data['Eval_id']
        FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $reviewee=filter_var($data['Reviewee'])
        FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $criteria=filter_var($data['Criteria'])
        FILTER_SANOTOZE_FULL_SPECIAL_CHARS);
        
    //function

    if(!$stmt = mysqli_prepare($conn, "SELECT Emp_ID,Emp_Password FROM Employee WHERE   ") )

    // Uses a prepared statement for easier concatenating, which replaces ?'s with values.
    if(!$stmt = mysqli_prepare($conn, "INSERT INTO Review Reviewer_ID,Reviewee_ID,Criteria_ID,Eval_ID,score,comments
    VALUES ?,?,?,?,?,?);    
    	die("Error: " . mysqli_error());
    }
    // Bind string,string with $user,$pass.
    if(!mysqli_stmt_bind_param($stmt,"iiiiis",$Start_Data,$End_Data,$Eval_Creator_Data)) {
    	die("Error: " . mysqli_stmt_error());
    }

    if(!mysqli_stmt_execute($stmt)) {
    	die("Error: " . mysqli_stmt_error());
    }
    mysqli_stmt_store_result($stmt);
    header('Content-Type: text/plain');
    if(mysqli_stmt_num_rows($stmt) > 0) {
    	echo "true";
    }
    else {
    	echo "false";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>