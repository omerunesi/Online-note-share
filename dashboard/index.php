<?php include ('includes/connection.php'); ?>
<?php include('includes/adminheader.php');  ?>


<div id="wrapper">
    <?php include 'includes/adminnav.php';?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Hoşgeldiniz !
                        <small><?php echo $_SESSION['name']; ?></small>
                    </h1>
                    <?php if($_SESSION['role'] == 'admin') {
                        ?>
                        <h3 class="page-header">
                            <center> <marquee width = 70% ><font color="green" > Çeşitli kullanıcılar tarafından yüklenen notlar</font></marquee></center>
                        </h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">

                                    <form action="" method="post">
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>Dosya Adı</th>
                                                <th>Açıklama</th>
                                                <th>Uzantısı</th>
                                                <th>Yükleme Tarihi</th>
                                                <th>Yükleyen</th>
                                                <th>Onay Durumu</th>
                                                <th>İncele</th>
                                                <th>Onayla</th>
                                                <th>Sil</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = "SELECT * FROM uploads ORDER BY file_uploaded_on DESC";
                                            $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                            if (mysqli_num_rows($run_query) > 0) {
                                                while ($row = mysqli_fetch_array($run_query)) {
                                                    $file_id = $row['file_id'];
                                                    $file_name = $row['file_name'];
                                                    $file_description = $row['file_description'];
                                                    $file_type = $row['file_type'];
                                                    $file_date = $row['file_uploaded_on'];
                                                    $file_uploader = $row['file_uploader'];
                                                    $file_status = $row['status'];
                                                    $file = $row['file'];
                                                    echo "<tr>";
                                                    echo "<td>$file_name</td>";
                                                    echo "<td>$file_description</td>";
                                                    echo "<td>$file_type</td>";
                                                    echo "<td>$file_date</td>";
                                                    echo "<td><a href='viewprofile.php?name=$file_uploader' target='_blank'> $file_uploader </a></td>";
                                                    echo "<td>$file_status</td>";
                                                    echo "<td><a href='allfiles/$file' target='_blank' style='color:green'>İncele </a></td>";
                                                    echo "<td><a onClick=\"javascript: return confirm('Bu notu onaylamak istediğinizden emin misiniz?')\"href='?approve=$file_id'><i class='fa fa-times' style='color: red;'></i>Onayla</a></td>";
                                                    echo "<td><a onClick=\"javascript: return confirm('Bu notu silmek istediğinizden emin misiniz?')\" href='?del=$file_id'><i class='fa fa-times' style='color: red;'></i>Sil</a></td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_GET['del'])) {
                            $note_del = mysqli_real_escape_string($conn, $_GET['del']);
                            $file_uploader = $_SESSION['username'];
                            $del_query = "DELETE FROM uploads WHERE file_id='$note_del'";
                            $run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
                            if (mysqli_affected_rows($conn) > 0) {
                                echo "<script>alert('Not başarıyla silindi');
            window.location.href='index.php';</script>";
                            }
                            else {
                                echo "<script>alert('Bir hata oluştu! Tekrar deneyin');</script>";
                            }
                        }
                        if (isset($_GET['approve'])) {
                            $note_approve = mysqli_real_escape_string($conn,$_GET['approve']);
                            $approve_query = "UPDATE uploads SET status='Onaylandı' WHERE file_id='$note_approve'";
                            $run_approve_query = mysqli_query($conn, $approve_query) or die (mysqli_error($conn));
                            if (mysqli_affected_rows($conn) > 0) {
                                echo "<script>alert('Not başarıyla onaylandı');
            window.location.href='index.php';</script>";
                            }
                            else {
                                echo "<script>alert('Bir hata oluştu! Tekrar deneyin');</script>";
                            }
                        }
                        ?>
                        <?php
                    }
                    else {
                    ?>
                    <h3 class="page-header">
                        <center> <marquee width = 70% ><font color="green" ><?php echo $_SESSION['course']; ?></font><font color="brown"> çeşitli kullanıcıları tarafından yüklenen notlar</font></marquee></center>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <form action="" method="post">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Dosya Adı</th>
                                    <th>Açıklama</th>
                                    <th>Uzantısı </th>
                                    <th>Yükleyen</th>
                                    <th>Yükleme Tarihi</th>
                                    <th>İndir</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $currentusercourse = $_SESSION['course'];

                                $query = "SELECT * FROM uploads WHERE file_uploaded_to = '$currentusercourse' AND status = 'Onaylandı' ORDER BY file_uploaded_on DESC";
                                $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                if (mysqli_num_rows($run_query) > 0) {
                                    while ($row = mysqli_fetch_array($run_query)) {
                                        $file_id = $row['file_id'];
                                        $file_name = $row['file_name'];
                                        $file_description = $row['file_description'];
                                        $file_type = $row['file_type'];
                                        $file_date = $row['file_uploaded_on'];
                                        $file = $row['file'];
                                        $file_uploader = $row['file_uploader'];
                                        echo "<tr>";
                                        echo "<td>$file_name</td>";
                                        echo "<td>$file_description</td>";
                                        echo "<td>$file_type</td>";
                                        echo "<td><a href='viewprofile.php?name=$file_uploader' target='_blank'> $file_uploader </a></td>";
                                        echo "<td>$file_date</td>";
                                        echo "<td><a href='allfiles/$file' target='_blank' style='color:green'>İndir</a></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <?php }
            ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
</div>