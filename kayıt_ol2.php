<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONLINENOTE - KAYIT OL</title>
    <link rel="icon" type="image/png" href="image/ON_logo.png"/>
    <!-- Font Icon -->
    <link rel="stylesheet" href="kayit_ol/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="kayit_ol/css/style.css">

    <link rel="stylesheet" type="text/css" href="giris/css/util.css">
    <link rel="stylesheet" type="text/css" href="giris/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="main">
    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                <form method="POST" id="signup-form" class="signup-form">
                    <span class="login100-form-title p-b-48">
						<img src="image/ON_logo.png" alt="">
					</span>
                    <h2 class="form-title">Hesap Oluştur</h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="İsim"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="username" id="username" placeholder="Kullanıcı İsmi"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password" placeholder="Şifre"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Şifrenizi Doğrulayın"/>
                    </div>
                    <div class="form-group">
                        <select name="gender" class="form-input" tabindex="-1" id="gender" aria-hidden="true" >
                            <option disabled="disabled" selected="selected">Cinsiyet</option>
                            <option>Kadın</option>
                            <option>Erkek</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="gender" class="form-input" tabindex="-1" id="gender" aria-hidden="true" >
                            <option disabled="disabled" selected="selected">Öğretmen / Öğrenci</option>
                            <option>Öğretmen</option>
                            <option>Öğrenci</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="gender" class="form-input" tabindex="-1" id="gender" aria-hidden="true" >
                            <option disabled="disabled" selected="selected">Bölüm</option>
                            <option>Bilgisayar Mühendisliği</option>
                            <option>Elektrik Elektronik Mühendisliği</option>
                            <option>Makine Mühendisliği</option>
                        </select>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                KAYIT OL
                            </button>
                        </div>
                    </div>
                </form>
                <p class="loginhere">
                    Hesabınız var mı? <a href="#" class="loginhere-link">Hemen Giriş Yapın</a>
                </p>
            </div>
        </div>
    </section>
</div>
<!-- JS -->
<script src="kayit_ol/vendor/jquery/jquery.min.js"></script>
<script src="kayit_ol/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
