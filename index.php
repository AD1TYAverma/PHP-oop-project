<?php
include "database.php";



$obj = new Database();

// $obj->insert('students', ['student_name'=>'Ram Kumar', 'age'=>'22', 'city'=>'Noida']);
// echo "Insert result is :";
// print_r($obj->getResult());

// $obj->update('students', ['student_name'=>'Kumar Sanu', 'age'=>'26', 'city'=>'Goa'], 'id="7"');
// echo "Update result is :";
// print_r($obj->getResult());

$obj->delete('students', 'id="7"');
echo "Delete result is :";
print_r($obj->getResult());
?>