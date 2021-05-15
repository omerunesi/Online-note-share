<?php include ('includes/connection.php');
include "includes/adminheader.php"; ?>
<?php if($_SESSION['role'] == 'admin')
{
?>
<div id="wrapper">
    <?php include "includes/adminnav.php"; ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Tüm Kullanıcılar
                    </h1>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Soyadı</th>
                            <th>Adı</th>
                            <th>Email</th>
                            <th>Rolü</th>
                            <th>Ders</th>
                            <th>Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM users ORDER BY name ASC ";
                        $select_users = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        if (mysqli_num_rows($select_users) > 0 ) {
                        while ($row = mysqli_fetch_array($select_users)) {
                            $user_id = $row['id'];
                            $username = $row['username'];
                            $name = $row['name'];
                            $user_email = $row['email'];
                            $user_role = $row['role'];
                            $user_course = $row['course'];
                            echo "<tr>";
                            echo "<td>$user_id</td>";
                            echo "<td><a href='viewprofile.php?name=$username' target='_blank'> $username</a></td>";
                            echo "<td>$name</td>";
                            echo "<td>$user_email</td>";
                            echo "<td>$user_role</td>";
                            echo "<td>$user_course</td>";
                            echo "<td><a onClick=\"javascript: return confirm('Bu kullanıcıyı silmek istediğinizden emin misiniz?')\" href='users.php?delete=$user_id'><i class='fa fa-times fa-lg'></i>Sil</a></td>";
                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                    }
                    if (isset($_GET['delete'])) {
                        $the_user_id = mysqli_real_escape_string($conn , $_GET['delete']);
                        $query0 = "SELECT role FROM users WHERE id = '$the_user_id'";
                        $result = mysqli_query($conn , $query0) or die(mysqli_error($conn));
                        if (mysqli_num_rows($result) > 0 ) {
                            $row = mysqli_fetch_array($result);
                            $id1 = $row['role'];
                        }
                        if ($id1 == 'admin') {
                            echo "<script>alert('Yönetici silinemez');</script>";
                        }
                        else {
                            $query = "DELETE FROM users WHERE id = '$the_user_id'";
                            $delete_query = mysqli_query($conn, $query) or die (mysqli_error($conn));
                            if (mysqli_affected_rows($conn) > 0 ) {
                                echo "<script>alert('Kullanıcı başarıyla silindi');
            window.location.href= 'users.php';</script>";
                            }
                            else {
                                echo "<script>alert('Bir hata oluştu! Tekrar deneyiniz!');
            window.location.href= 'users.php';</script>";
                            }
                        }
                    }
                    ?>
                    <?php } else {
                        header("location: index.php");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>