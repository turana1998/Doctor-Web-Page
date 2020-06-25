<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/istifadeciler.php"; ?>
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
                        <h4 class="card-title">İstifadəçi Əlavə</h4>
                        <form class="mt-4" action="#" method="POST">
                            <div class="form-group">
                                <label for="AdSoyad">Ad Soyad</label>
                                <input type="text" maxlength="50" class="form-control" id="AdSoyad" name="AdSoyad" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" maxlength="100" class="form-control" id="email" name="email" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="sifre">Şifrə</label>
                                <input type="text" maxlength="50" readonly="readonly" class="form-control" id="sifre" name="sifre" />
                                <button type="button" onclick="SifreQur()" class="btn btn-outline-danger btn-sm mt-3">Şifrə Qur</button>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Səlahiyyət</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio11" value="1" name="icaze" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio11">Admistrator</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio22" value="2" name="icaze" checked="checked" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio22">Moderator</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="ist_elave">Əlavə Et</button>
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