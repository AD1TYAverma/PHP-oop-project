<?php

// This is CRUD Operation using OOP in PHP


include "database.php";


$obj = new Database();

// $obj->insert('students', ['student_name'=>'Ram Kumar', 'age'=>'22', 'city'=>'Noida']);
// echo "Insert result is :";
// print_r($obj->getResult());

// $obj->update('students', ['student_name'=>'Kumar Sanu', 'age'=>'26', 'city'=>'Goa'], 'id="7"');
// echo "Update result is :";
// print_r($obj->getResult());

// $obj->delete('students', 'id="7"');
// echo "Delete result is :";
// print_r($obj->getResult());

// $obj->sql('SELECT * FROM students WHERE age = "22"');
// echo "Sql result is :";
// echo"<pre>";
// print_r($obj->getResult());
// echo "</pre>";

$obj->select('students', '*', null, null, 'student_name', null);
echo "Select result is :";
echo"<pre>";
print_r($obj->getResult());
echo "</pre>";

?>
