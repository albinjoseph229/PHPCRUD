<?php
include('dbcon.php');
 if(isset($_POST['save_student'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];
    $sql="INSERT into students(name,email,phone,course) values('$name','$email','$phone','$course')";
    if($conn->query($sql)==TRUE){
        echo 'student added successfully';
    }
    else{
        echo 'student added failed';
    }
}

?>