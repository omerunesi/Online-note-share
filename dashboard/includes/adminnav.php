
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">Online Note</a>
    </div>

    <ul class="nav navbar-right top-nav">
        <?php if($_SESSION['role'] !== 'admin') { ?> <li><a href="./uploadnote.php">Not Yükle</a></li> <?php } ?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>"><i class="fa fa-fw fa-user"></i>Hesap</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../index.php"><i class="fa fa-fw fa-power-off"></i>Çıkış Yap</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php" class="active"><i class="fa fa-fw fa-dashboard"></i>Online Notlar</a>
            </li>
            <?php if($_SESSION['role'] == 'admin') {
                ?>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> Kullanıcılar <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="user" class="collapse">
                        <li>
                            <a href="./users.php">Tüm Kullanıcıları Göster</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i>Hesabım<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="posts" class="collapse">
                        <li>
                            <a href="./viewprofile.php?name=<?php echo $_SESSION['username']; ?>">Profil</a>
                        </li>
                        <li>
                            <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>">Profili Düzenle</a>
                        </li>
                    </ul>
                </li>
            <?php } else { ?>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i>Notlarım<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="user" class="collapse">
                        <li>
                            <a href="./notes.php">Tüm Notları Göster</a>
                        </li>
                        <li>
                            <a href="./uploadnote.php">Not Yükle</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i>Hesabım<i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="posts" class="collapse">
                        <li>
                            <a href="./viewprofile.php?name=<?php echo $_SESSION['username']; ?>"> Profil</a>
                        </li>
                        <li>
                            <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>">Profili Düzenle</a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>
