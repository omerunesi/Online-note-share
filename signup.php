<?php include 'includes/connection.php';?>
<?php

if (isset($_POST['signup'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $password = password_hash("$pass" , PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $joindate = date("F j, Y");

    if ($_POST['password'] !== $_POST['repassword'])
    {
        echo  "<center><font color='red'>Passwords do not match </font></center>";
    }
    else {
        $username = $_POST['username'];
        $checkusername = "SELECT * FROM users WHERE username = '$username'";
        $run_check = mysqli_query($conn , $checkusername) or die(mysqli_error($conn));
        $countusername = mysqli_num_rows($run_check);
        if ($countusername > 0 ) {
            echo  "<center><font color='red'>Username is already taken! try a different one</font></center>";
        }
        $checkemail = "SELECT * FROM users WHERE email = '$email'";
        $run_check = mysqli_query($conn , $checkemail) or die(mysqli_error($conn));
        $countemail = mysqli_num_rows($run_check);
        if ($countemail > 0 ) {
            echo  "<center><font color='red'>Email is already taken! try a different one</font></center>";
        }

        else {
            $query = "INSERT INTO users(username,name,email,password,role,course,gender,joindate,token) VALUES ('$username' , '$name' , '$email', '$password' , '$role', '$course', '$gender' , '$joindate' , '' )";
            $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
            if (mysqli_affected_rows($conn) > 0) {
                echo "<script>alert('Kayıt Başarılı');
        window.location.href='login.php';</script>";
            }
            else {
                echo "<script>alert('Hata Oluştu');</script>";
            }
        }
    }
}
?>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONLINENOTE - ÜYE OL</title>
    <link rel="icon" type="image/png" href="image/ON_logo.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="giris/css/util.css">
    <link rel="stylesheet" type="text/css" href="kayit_ol/css/main.css">
    <!--===============================================================================================-->

    <!-- Main css -->
    <link rel="stylesheet" href="kayit_ol/css/style.css">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <img src="image/ON_logo.png" alt="">
        <a class="navbar-brand" href="#">ONLINE NOTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Ana Sayfa
                        <span class="sr-only">(current)</span>
                    </a>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Giriş Yap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Kayıt Ol</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard/">Not Yükle</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="POST" id="signup-form" class="signup-form">
                <h2 class="form-title">Hesap Oluştur</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="name" id="name" placeholder="İsim Soyisim" required="" tabindex="1" value="<?php if(isset($_POST['signup'])) { echo $_POST['name']; } ?>"/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Email" required="" value="<?php if(isset($_POST['signup'])) { echo $_POST['email']; } ?>"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="username" id="username" placeholder="Kullanıcı İsmi" required="" tabindex="2" type="text" value="<?php if(isset($_POST['signup'])) { echo $_POST['username']; } ?>"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" name="password" id="password" placeholder="Şifre" required=""/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" name="repassword" id="repassword" placeholder="Şifrenizi Doğrulayın" required=""/>
                </div>
                <div class="form-group">
                    <select name="gender" class="form-input" for="gender" id="gender" aria-hidden="true" >
                        <option disabled="disabled" selected="selected">Cinsiyet</option>
                        <option value="Kadın">Kadın</option>
                        <option value="Erkek">Erkek</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="role" class="form-input" for="role" id="role" aria-hidden="true" >
                        <option disabled="disabled" selected="selected">Ünvan</option>
                        <option value="Öğretmen">Öğretmen</option>
                        <option value="Öğrenci">Öğrenci</option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="course" class="form-input" for="course" id="course" aria-hidden="true" >
                        <option disabled="disabled" selected="selected">Bölüm</option>
                        <option value="Bilgisayar Mühendisliği">Bilgisayar Mühendisliği</option>
                        <option value="Elektrik Elektronik Mühendisliği">Elektrik Elektronik Mühendisliği</option>
                        <option value="Makine Mühendisliği">Makine Mühendisliği</option>
                    </select>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="signup" id="submit" tabindex="5" value="Sign me up!" type="submit">
                            KAYIT OL
                        </button>
                    </div>
                </div>
            </form>
            <p class="loginhere">
                Hesabınız var mı? <a href="giris.php" class="loginhere-link">Hemen Giriş Yapın</a>
            </p>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="giris/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="giris/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="giris/vendor/bootstrap/js/popper.js"></script>
<script src="giris/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="giris/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="giris/vendor/daterangepicker/moment.min.js"></script>
<script src="giris/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="giris/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="giris/js/main.js"></script>
</body>
</html>