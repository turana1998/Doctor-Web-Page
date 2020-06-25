<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/slide.php";
require_once "tinymce.php"; ?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">

        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Slide Redaktə</h4>
                        <form class="mt-4" enctype="multipart/form-data" action="#" method="POST">
                        <input type="hidden" value="<?= $rdk["id"] ?>" name="id" />
                        <input type="hidden" value="../../<?= $rdk["sekil"] ?>" name="kohne_sekil" />
                        <div class="form-group">
                                <label for="basliq">Cari Şəkil</label>
                                <img style="width: 250px;height:150px;" src="../../<?= $rdk["sekil"] ?>" alt="">
                            </div>
                            <div class="form-group">
                                <label for="basliq">Başlıq</label>
                                <input type="text" required="required" value="<?= $rdk["basliq"] ?>" maxlength="250" class="form-control" id="basliq" name="basliq" />
                            </div>
                            <div class="form-group">
                                <label for="aciqlama">Məzmun</label>
                                <textarea name="mezmun" style="height: 200px;" class="form-control"><?= $rdk["mezmun"] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="robots">Şəkil seç</label>
                                <div class="custom-file">
                                    <input type="file"  class="custom-file-input" name="sekil" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">(.png .jpeg .gif) fayl seçin</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="slide_redakte">Redaktə Et</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php require_once "footer.php" ?>