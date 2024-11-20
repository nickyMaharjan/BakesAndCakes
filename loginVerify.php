<?php
if(isset($_POST['login'])){
    $uname=$_POST['uname'];
    $pwd=$_POST['password'];
    echo $uname;
    echo "<br>".$pwd;

    include 'connection.php';
    
    $fetch="SELECT * FROM userinfo WHERE Username='".$uname."' AND Pass_word='".$pwd."'";
    $res=mysqli_query($conn,$fetch);
    $r_fetch=mysqli_fetch_assoc($res);
   
    $count=mysqli_num_rows($res);
    echo $count;
    if($count>0){
        session_start();
        $_SESSION['username']=$uname;
        if($r_fetch['is_admin']!=1){
        echo"<script> location.href='menu.php'</script>";
        }
        else{
            echo"<script> location.href='adminPanel.php'</script>";
        }
    }
    else{
        echo"<h1 align='center'>Invalid username and password</h1>";
    }
}
?>