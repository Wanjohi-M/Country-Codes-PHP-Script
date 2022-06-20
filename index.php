<?php
$conn=new mysqli('localhost', 'root', '', 'juaxp');

$json = file_get_contents("countries.json");

$arr=json_decode($json, TRUE);
if (json_last_error()) {
    die('Invalid JSON provided!');
}

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
//var_dump($jsonIterator);
foreach ($arr as $key) {
    //echo $key['name'];  echo $key['code'];
       $code=$key['code'];
       $name=$key['name'];
           $sql='INSERT INTO countries(code, name, is_active) VALUES ("'.$code.'", "'.$name.'", 1)';

       $query = $conn->query($sql) or die(mysqli_error($conn));

    
}


 


       
        
?>