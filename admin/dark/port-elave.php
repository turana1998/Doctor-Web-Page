<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/portfolio.php" ?>
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
                                <h4 class="card-title">Portfolio Əlavə Etmə Səhifəsi</h4>
                                <form class="mt-4" action="#" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label for="ad">Kateqoriya</label>
                                        <select class="form-control" name="katid">
                                            <?php for($i = 0; $i<count($ksiyahi); $i++){ ?>
                                                <option value="<?= $ksiyahi[$i]["id"] ?>"><?= $ksiyahi[$i]["Ad"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ad">Ad</label>
                                        <input type="text" required="required" maxlength="100" placeholder="Ad daxil edin..." class="form-control" id="ad" name="ad" />
                                    </div>
                                    <div class="form-group">
                                    <label for="robots">Şəkil seç</label>
                                        <div class="custom-file">
                                            <input type="file" required="required" class="custom-file-input" name="sekil" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">(.png .jpeg) fayl seçin</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Link</label>
                                        <input type="text" maxlength="250" required="required" placeholder="Slug daxil edin..." class="form-control" id="link" name="link" />
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="port_elave">Əlavə Et</button>
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