<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/ela-melumat.php" ?>
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
                                <h4 class="card-title">Əlaqə Məlumatları</h4>
                                <form class="mt-4" enctype="multipart/form-data" action="#" method="POST">
                                    <div class="form-group">
                                        <label for="telefon">Telefon</label>
                                        <input type="text" value="<?= $data["tel"] ?>" maxlength="50" class="form-control" id="telefon" name="telefon" />
                                    </div>
                                    <div class="form-group">
                                        <label for="ofis">Ofis</label>
                                        <input type="text" value="<?= $data["ofis"] ?>" maxlength="50" class="form-control" id="ofis" name="ofis" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Elektron poçt ünvanı</label>
                                        <input type="email" value="<?= $data["email"] ?>" maxlength="100" class="form-control" id="email" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="unvan">Ünvan</label>
                                        <input type="text" value="<?= $data["unvan"] ?>" maxlength="255" class="form-control" id="unvan" name="unvan" />
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="elaqe-melumatlari">Redaktə Et</button>
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