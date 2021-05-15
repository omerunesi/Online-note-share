<?php include 'includes/connection.php';?>
<?php
@session_start();
if (isset($_POST['login'])) {
    $username  = $_POST['user'];
    $password = $_POST['pass'];
    mysqli_real_escape_string($conn, $username);
    mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn , $query) or die (mysqli_error($conn));
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $user = $row['username'];
            $pass = $row['password'];
            $name = $row['name'];
            $email = $row['email'];
            $role= $row['role'];
            $course = $row['course'];
            if (password_verify($password, $pass )) {
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['name'] = $name;
                $_SESSION['email']  = $email;
                $_SESSION['role'] = $role;
                $_SESSION['course'] = $course;
                header('location: dashboard/');
            }
            else {
                echo "<script>alert('Geçersiz kullanıcı adı / şifre');
      window.location.href= 'login.php';</script>";

            }
        }
    }
    else {
        echo "<script>alert('Geçersiz kullanıcı adı / şifre');
      window.location.href= 'login.php';</script>";

    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONLINENOTE - GİRİŞ YAP</title>
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
    <link rel="stylesheet" type="text/css" href="giris/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <img src="image/ON_logo.png" alt="">
        <a class="navbar-brand" href="index.php">ONLINE NOTE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Ana Sayfa
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
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
            <form class="login100-form validate-form" method="POST">
                <span class="login100-form-title p-b-48">
						<img src="image/ON_logo.png" alt="">
					</span>
                <span class="login100-form-title p-b-26">
                        HOŞ GELDİN
					</span>
                <span>Kullanıcı adı: omerunesi</span>
                <br>Şifre:123<br>                
                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="user" required="">
                    <span class="focus-input100" data-placeholder="Kullanıcı Adı"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="pass"  required="">
                    <span class="focus-input100" data-placeholder="Şifre"></span>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit" name="login" value="login">
                            GİRİŞ YAP
                        </button>
                    </div>
                </div>
                <div class="text-center p-t-115">
						<span class="txt1">
							Hesabınız yok mu?
						</span>
                    <a class="txt2" href="signup.php">
                        Şimdi Kayıt Ol!
                    </a>
                </div>
            </form>
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