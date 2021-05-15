<html>
<head>
    <title>ONLINENOTE - Ana Sayfa</title>
    <link rel="icon" type="image/png" href="image/ON_logo.png"/>
    <link rel="stylesheet" href="home_page/css/main.css">
    <link rel="stylesheet" href="home_page/css/bootstrap.min.css">
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

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('image/home_page_pic1.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-3">ONLINE NOTE</h3>
                    <p class="lead">Kolaylıkla Notlarınızı Paylaşmanız İçin Varız. </p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('image/home_page_pic22.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Notlarınız Bizimle Güvende</h3>
                    <p class="lead"></p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('image/home_page_pic3.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="display-4">Tamamen Ücretsiz, Hemen Deneyin!</h3>
                    <p class="lead"></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h1 class="font-weight-light">Siz Hala Kayıt Olmadınız mı?</h1>
        <p class="lead">Sınırlı bir süre için tamamen ÜCRETSİZ, hemen <a href="signup.php">KAYIT OL</a>!</p>
    </div>
</section>

<script src="home_page/js/jquery.slim.min.js"></script>
<script src="home_page/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php include 'includes/connection.php';?>

<?php
