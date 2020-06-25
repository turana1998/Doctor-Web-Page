<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/slider.php" ?>
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
                    <h4 class="card-title mt-3">Slider Siyahısı</h4>
                    <div class="PortMessage"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Şəkil</th>
                                    <th>Başlıq</th>
                                    <th>Alt Başlıq</th>
                                    <th>Sıra</th>
                                    <th>Status</th>
                                    <th>Əməliyyat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<count($ssiyahi);$i++){ ?>
                                <tr class="slider_tr">
                                    <td><img width="50px" height="50px" src="../../<?= $ssiyahi[$i]['sekil'] ?>"
                                            alt="<?= $ssiyahi[$i]['basliq'] ?>" /></td>
                                    <td><?= $ssiyahi[$i]['basliq'] ?></td>
                                    <td><?= $ssiyahi[$i]['alt_basliq'] ?></td>
                                    <td><?= $ssiyahi[$i]['sira'] ?></td>
                                    <td>
                                        <input type="checkbox" <?= $ssiyahi[$i]['status'] ? 'checked="checked"' : ""; ?>
                                            onchange="Status(<?= $ssiyahi[$i]['id'] ?>)" class="js-switch"
                                            data-color="#33AFE3" data-size="small" />
                                    </td>
                                    <td>
                                        <button onclick="SliderRedakte(<?= $ssiyahi[$i]['id'] ?>, <?= $i ?>)"
                                            data-toggle="modal" data-target="#exampleModal"
                                            class="btn btn-outline-success btn-sm">Redaktə Et</button>
                                        <button
                                            onclick="SliderSil(<?= $ssiyahi[$i]['id'] ?>, '../../<?= $ssiyahi[$i]['sekil'] ?>')"
                                            class="btn btn-outline-danger btn-sm">Sil</button>
                                    </td>
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
<!-- ============================================================== -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Redaktə</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="" />
                    <div class="form-group">
                        <label for="file" class="col-form-label">Cari Şəkil:</label>
                        <div class="row">
                            <img src="" id="sekil" style="width: 50px;height: 50px;" class="col-2" />
                            <input type="hidden" id="ksekil" name="ksekil" value="" />
                            <div class="custom-file col-10 mt-2">
                                <input type="file" class="custom-file-input" id="sekil_red" name="sekil_red" />
                                <label class="custom-file-label" for="sekil_red">1920 x 1100 ölçüdə .png və ya .jpeg faylı seçin</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="basliq" class="col-form-label">Başlıq:</label>
                        <input type="text" class="form-control" id="basliq" name="basliq" maxlength="100" />
                    </div>
                    <div class="form-group">
                        <label for="alt_basliq" class="col-form-label">Alt Başlıq:</label>
                        <input type="text" class="form-control" id="alt_basliq" name="alt_basliq" maxlength="100" />
                    </div>
                    <div class="form-group">
                        <label for="sira" class="col-form-label">Sıra</label>
                        <input type="hidden" name="sira_nomresi" id="sira_nomresi" value="" />
                        <select class="form-control" name="slider_sira" id="slider_sira"></select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                    <button type="submit" name="sredakte" class="btn btn-primary">Redaktə Et</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>