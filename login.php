<?php
$username=$_POST['username'];
$password=$_POST['password'];
$error="";
$success="";

if(isset($_POST['submit'])){
    if($username=="zuleyhamuzennet@gmail.com"){
        if($password=="123"){
            $error="";
            $success="Giriş Başarılı, Hoşgeldiniz";
            header("Location:deneme.html");
        }
        else{
            $error="Şifre Yanlış!";
            $success="";
        }
    }
    else{
        $error="Kullanıcı adı Yanlış!";
        $success="";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Login</title>
</head>

<body>
    <div class="container">
    
    <p class="error"><?php echo $error; ?></p><p class="success"><?php echo $success; ?></p>
    <form method="post">
    <div class="form-input">
        <i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
        <input type="text" name="username" value=""  placeholder="Kullanıcı adını giriniz" required> <br>
        <i class="fa fa-lock fa-2x cust" aria-hidden="true"></i>
        <input type="password" name="password" value=""  placeholder="Şifre giriniz" required> <br>
        <input type="submit" name="submit" value="LOGIN"> <br>

    </div>

    </form>
    </div>
</body>

</html>