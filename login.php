<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/CSS">
    body{
        margin:0;
        padding:0;
        font-family:Garamond;
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/login5.jpg);
        background-size:cover;
        height:100vh;
        overflow:hidden;
    }
    .center{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        width:400px;
        background:white;
        border-radius:10px;
    }
    .center h1{
        text-align:center;
        padding: 0 0 20px 0;
        border-bottom:1px solid silver;
    }
    .center form{
        padding:0 40px;
        box-sizing:border-box;
    }
    form .txt_field{
        position:relative;
        border-bottom:2px solid #adadad;
        margin:30px 0;
    }
    .txt_field input{
        width:100%;
        padding:0 5px;
        height:40px;
        font-size:16px;
        border:none;
        background:none;
        outline:none;
    }
    .txt_field label{
        position:absolute;
        top:50%;
        left:5px;
        color:#adadad;
        transform:translateY(-50%);
        font-size:16px;
        pointer-events:none;
        transition:.5s;
    }
    .txt_field span::before{
        content:'';
        position:absolute;
        top:40px;
        left:0;
        width:0%;
        height:2px;
        background:rgb(255,132,167);
        transition:.5s;;
        transition:.5s;
    }
    .txt_field input:focus~label,
    .txt_field input:valid~label{
        top:-5px;
        color:rgb(255,132,167);
        transition:.5s;;
    }
    .txt_field input:focus~span::before,
    .txt_field input:valid~span::before{
        width:100%;
    }
    .pass{
        margin:-5px 0 20px 5px;
        color:#a6a6a6;
        cursor:pointer;
    }
    .pass:hover{
        text-decoration:underline;
    }
    .logo img{
            float:left;
            width:150px;
            height:auto;
        }
    input[type="submit"]{
        width:100%;
        height:50px;
        border:1px solid;
        background:rgb(255,132,167);
        transition:.5s;;
        border-radius:25px;
        font-size:18px;
        color:white;
        font-weight:700;
        cursor:pointer;
        outline:none;
    }
    input[type="submit"]:hover{
        border-color:rgb(255,132,167);
        transition:.5s;
    }
    .signup-container {
        text-align: center;
        
    }
    .signup-container a{
        color:rgb(255,132,167);
    }
    </style>
</head>
<body>
        <div class="logo">
                <img src="images/bakes-removebg-preview.png">;
             </div>
    <div class="center">
        <h1>Login</h1>
        <form action="loginVerify.php" method="post">
            <div class="txt_field">
                <input type="text" name="uname" required/>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required/>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" name="login" value="Login"/>
            <div class="signup-container">
                <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>