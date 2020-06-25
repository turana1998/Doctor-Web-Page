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
                                <h4 class="card-title">Portfolio Kateqoriyası Əlavə Etmə Səhifəsi</h4>
                                <form class="mt-4" action="#" method="POST">
                                    <div class="form-group">
                                        <label for="ad">Ad</label>
                                        <input type="text" require="require" maxlength="100" placeholder="Ad daxil edin..." class="form-control" id="ad" name="ad" />
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" maxlength="150" require="require" placeholder="Slug daxil edin..." class="form-control" id="slug" name="slug" />
                                    </div>
                                    <div class="form-group">
                                        <label for="sira">Sıra</label>
                                        <select class="form-control" name="sira" id="portkatsira" required="required"></select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="port_kat_elave">Əlavə Et</button>
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