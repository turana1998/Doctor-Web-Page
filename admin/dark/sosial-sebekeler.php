<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/sos-sebeke.php" ?>
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
                                <h4 class="card-title">Sosial Şəbəkələr</h4>
                                <form class="mt-4" enctype="multipart/form-data" action="#" method="POST">
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="url" value="<?= $data["facebook"] ?>" maxlength="255" class="form-control" id="facebook" name="facebook" />
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram">İnstagram</label>
                                        <input type="url" value="<?= $data["instagram"] ?>" maxlength="255" class="form-control" id="instagram" name="instagram" />
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="url" value="<?= $data["twitter"] ?>" maxlength="255" class="form-control" id="twitter" name="twitter" />
                                    </div>
                                    <div class="form-group">
                                        <label for="linkedin">Linkedin</label>
                                        <input type="url" value="<?= $data["linkedin"] ?>" maxlength="255" class="form-control" id="linkedin" name="linkedin" />
                                    </div>
                                    <div class="form-group">
                                        <label for="github">Github</label>
                                        <input type="url" value="<?= $data["github"] ?>" maxlength="255" class="form-control" id="github" name="github" />
                                    </div>
                                    <div class="form-group">
                                        <label for="youtube">Youtube</label>
                                        <input type="url" value="<?= $data["youtube"] ?>" maxlength="255" class="form-control" id="youtube" name="youtube" />
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="sosial-sebekeler">Redaktə et</button>
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