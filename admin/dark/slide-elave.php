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
                        <h4 class="card-title">Slide</h4>
                        <form class="mt-4" enctype="multipart/form-data" action="#" method="POST">
                            <div class="form-group">
                                <label for="basliq">Başlıq</label>
                                <input type="text" required="required" placeholder="Başlıq Daxil edin..." maxlength="250" class="form-control" id="basliq" name="basliq" />
                            </div>
                            <div class="form-group">
                                <label for="aciqlama">Məzmun</label>
                                <textarea name="mezmun" style="height: 200px;" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="robots">Şəkil seç</label>
                                <div class="custom-file">
                                    <input type="file" required="required" class="custom-file-input" name="sekil" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">(.png .jpeg .gif) fayl seçin</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="slide_elave">Əlavə Et</button>
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