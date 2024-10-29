<?php

ob_start(); // Turn on output buffering
session_start();

date_default_timezone_set("Asia/Kuala_Lumpur");

// try{
// 	// $con = new PDO("**Your Host Name**", "**Your DB name**", "**Your DB Password**");
// 	$con = new PDO("mysql:host=localhost;dbname=my_youtube", 'root', '');
// 	$con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
// } catch(PDOException $e){
// 	echo "Connection failed: " . $e->getMessage();
// }


// try {
//     //$dsn = 'mysql:host=localhost;dbname=my_youtube';
// 	$dsn = 'mysql:host=localhost;dbname=dfngbhmy_online_job_db';
//     $username = 'dfngbhmy_nana_kwesi';
//     $password = '^y8Tn8cZ=z@fJ:()j';
//     $options = array(
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     );

//     $con = new PDO($dsn, $username, $password, $options);
//     echo "Connection successful!";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }




try {
    $dsn = 'mysql:host=localhost;dbname=my_youtube';
    $username = 'root';
    $password = '';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    );

    $con = new PDO($dsn, $username, $password, $options);
    //echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}







// # CREATING CONNECTION TO THE DATABASE
// $servername = "localhost";
// $username = "root";
// $password = "";
// $databasename = "my_youtube";

// #CREATE CONNECTION
// #$con = new mysqli($servername,$username,$password,$databasename);

// $con = mysqli_connect($servername, $username, $password, $databasename );

?>
