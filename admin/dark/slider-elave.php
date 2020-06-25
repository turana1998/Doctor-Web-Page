<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/slider.php" ?>
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
                                <h4 class="card-title">Slider Əlavə Etmə Səhifəsi</h4>
                                <form class="mt-4" action="#" method="POST"  enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="basliq">Başlıq</label>
                                        <input type="text" required="required" maxlength="100" placeholder="Başlıq daxil edin..." class="form-control" id="basliq" name="basliq" />
                                    </div>
                                    <div class="form-group">
                                        <label for="alt_basliq">Alt Başlıq</label>
                                        <input type="text" required="required" maxlength="100" placeholder="Alt Başlıq daxil edin..." class="form-control" id="alt_basliq" name="alt_basliq" />
                                    </div>
                                    <div class="form-group">
                                        <label for="slider_sira">Sıra</label>
                                        <select class="form-control" name="sira" id="slider_sira" required="required"></select>
                                    </div>
                                    <div class="form-group">
                                    <label for="inputGroupFile01">Şəkil seç</label>
                                        <div class="custom-file">
                                            <input type="file" required="required" class="custom-file-input" name="sekil" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">1920 x 1100 ölçüdə .png və ya .jpeg faylı seçin</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="slider_elave">Əlavə Et</button>
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