<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/nizam.php" ?>
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
                                <h4 class="card-title">Ümumi Nizamlamalar</h4>
                                <form class="mt-4" enctype="multipart/form-data" action="#" method="POST">
                                    <div class="form-group">
                                        <label for="basliq">Başlıq</label>
                                        <input type="text" value="<?= $data["Title"] ?>" maxlength="250" class="form-control" id="basliq" name="basliq" />
                                    </div>
                                    <div class="form-group">
                                        <label for="aciqlama">Açıqlama</label>
                                        <input type="text" value="<?= $data["Description"] ?>" maxlength="250" class="form-control" id="aciqlama" name="aciqlama" />
                                    </div>
                                    <div class="form-group">
                                        <label for="acar">Açar Sözlər</label>
                                        <input type="text" value="<?= $data["keywords"] ?>" maxlength="255" class="form-control" id="acar" name="acar" />
                                    </div>
                                    <div class="form-group">
                                    <label for="robots">Robots.txt</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="robots" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">.txt fayl seçin</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="nizam">Redaktə Et</button>
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