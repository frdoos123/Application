<?php
$dsn="mysql:host=localhost;dbname=univercity";
$user="root";
$pass="";
$db=new PDO($dsn ,$user ,$pass);
if(isset($_POST['sub'])){
   
   $doctor=$_POST['doctor'];
   $subject=$_POST['subject'];
   $sql=$db->prepare("insert into doctors (name ,subjects) 
   values ('$doctor',' $subject')");
   $sql->execute();
}
 $dsn="mysql:host=localhost;dbname=univercity";
$user="root";
$pass="";
$db=new PDO($dsn ,$user ,$pass);
if(isset($_POST['sub'])){
  
   $name=$_POST['student'];
   $subject=$_POST['subject'];
   $id_d=$_POST['id_d'];
   $sql=$db->prepare("insert into students (name ,subjects,do_s) 
   values ('$name',' $subject', $id_d)");
   $sql->execute();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" >
        <h3>doctor</h3>
     
        <input type="text" name="doctor" placeholder="enter your name"><br>
        <input type="text" name="subject" placeholder="enter your sabject"><br>
    

        <h3>student</h3>
       
        <input type="text" name="student" placeholder="enter your name"><br>
        <input type="text" name="subject" placeholder="enter your sabject"><br>
        <input type="text" name="id_d" placeholder="enter your doctor id"><br>
     
        <input type="submit" name="sub" value="insrte">
</form>
</body>
</html>