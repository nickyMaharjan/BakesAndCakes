<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST["signup"])){
        include 'connection.php';
    }

    if(isset($_POST['signup'])){
        $user_name=$_POST['uname'];
    
    $fetch="SELECT Username FROM userinfo";
    $res1=mysqli_query($conn,$fetch);
    $count=0;
    while($row=mysqli_fetch_assoc($res1)){
    if ($row['Username']==$user_name )
      {
         $count=1;
      }
    }
    if($count!=1)
    {
        $full_name=$_POST['fname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $insert="INSERT into userinfo(Full_name,Phone,Email,Address,Username,Pass_word) VALUES('$full_name','$phone','$email','$address','$user_name','$password')";
        $res2=mysqli_query($conn,$insert);
        $conn->commit();
        if(!$res2){
            die("ERROR inserting values into database due to ".mysqli_error($conn));
        }
        echo"Data inserted successfully";
        echo"<script>location.href='login.php'</script>";
    }
    else{
        echo "data already inserted";
    }
   }
    ?>
</body>
</html>