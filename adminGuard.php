<?php
    session_start();
    include('./connection.php');
    $_username = $_SESSION['username'];

    $_query = "SELECT * from userinfo where Username = '$_username'";
    $_res = mysqli_query($conn, $_query);

    $USER = mysqli_fetch_assoc($_res);

    if ($USER['is_admin'] != 1) {
        echo"<script>location.href='Forbidden.php'</script>";
    }
?>