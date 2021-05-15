<?php include 'includes/connection.php';?>
<?php include 'includes/adminheader.php';?>
<div id="wrapper">
    <?php include 'includes/adminnav.php';?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Not Yükleme
                    </h1>
                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="post_title">Not Adı</label>
                            <input type="text" name="title" class="form-control" placeholder="Örneğin: Php Eğitim Dosyası" ">
                        </div>
                        <div class="form-group">
                            <label for="post_content">Not hakkında kısa bir açıklama yazınız.</label>
                            <textarea  class="form-control" name="description" id="" cols="12" rows="6">
		</textarea>
                        </div>
                        <div class="form-group">
                            <label for="post_image">Dosya ekle</label>
                            <input type="file" name="file">
                        </div>
                        <button type="submit" name="upload" class="btn btn-primary" value="Upload Note">Not Yükle</button>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



