<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/about.php"; require_once "tinymce.php"; ?>
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
                                <h4 class="card-title">Haqqında</h4>
                                <form class="mt-4" enctype="multipart/form-data" action="#" method="POST">
                                <input type="hidden" name="ksekil" value="<?= $data["sekil"] ?>" />
                                <div class="form-group">
                                        <label for="basliq">Cari Şəkil</label> <br />
                                       <img src="../../<?= $data["sekil"] ?>" alt="sekil" style="height:150px;" />
                                    </div>
                                    <div class="form-group">
                                        <label for="basliq">Başlıq</label>
                                        <input type="text" value="<?= $data["Basliq"] ?>" maxlength="250" class="form-control" id="basliq" name="basliq" />
                                    </div>
                                    <div class="form-group">
                                        <label for="aciqlama">Məzmun</label>
                                       <textarea name="mezmun" style="height: 200px;" class="form-control"><?= $data["Mezmun"] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="inputGroupFile01">Şəkil seç</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="sekil" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">(.png .jpeg .gif) fayl seçin</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="haqqinda">Redaktə Et</button>
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