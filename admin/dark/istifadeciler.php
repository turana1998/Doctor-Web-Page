<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/istifadeciler.php" ?>
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
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="col-12">
            <div>
                <div class="card-table">
                    <h4 class="card-title mt-3">İstifadəçilərin Siyahısı</h4>
                    <a href="istifadeci-elave.php"><button style="float:right;" class="btn btn-outline-primary btn-sm mb-3">Əlavə Et</button></a>
                    <div class="Message"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Şəkil</th>
                                    <th>Ad Soyad</th>
                                    <th>Email</th>
                                    <th>Səlahiyyəti</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($istifadeciler); $i++) { ?>
                                    <tr>
                                        <td><img width="55" height="55" src="<?= $istifadeciler[$i]["sekil"] ?>" alt=""></td>
                                        <td><?= $istifadeciler[$i]["AdSoyad"] ?></td>
                                        <td><?= $istifadeciler[$i]["email"] ?></td>
                                        <td><?= $istifadeciler[$i]["icazeler"] == 1 ? '<span class="badge badge-primary">Adminstrator</span>' : '<span class="badge badge-warning">Moderator</span>' ?></td>
                                        <td><input type="checkbox" onchange="Status(<?= $istifadeciler[$i]['id'] ?>)" <?= $istifadeciler[$i]["status"] ? 'checked="checked"' : ""; ?> class="js-switch" data-color="#33AFE3" data-size="small" /></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<?php require_once "footer.php" ?>