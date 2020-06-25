<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/xidmetler.php" ?>
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
                    <h4 class="card-title mt-3">Xidmətlər Siyahısı</h4>
                    <div class="XidmetlerMessage"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ad</th>
                                    <th>Başlıq</th>
                                    <th>Status</th>
                                    <th>Əməliyyat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($xsiyahi); $i++) { ?>
                                <tr class="BlogKateqoriya">
                                    <td><a href="javascript:void(0)"> #<?= $xsiyahi[$i]["id"] ?></a></td>
                                    <td><?= $xsiyahi[$i]["ad"] ?></td>
                                    <td><?= $xsiyahi[$i]["basliq"] ?></td>
                                    <td>
                                        <input type="checkbox" <?= $xsiyahi[$i]["status"] ? 'checked="checked"' : ""; ?>
                                            onchange="Status(<?= $xsiyahi[$i]['id'] ?>)" class="js-switch"
                                            id="blog_check" data-color="#33AFE3" data-size="small" />
                                    </td>
                                    <td>
                                        <button onclick="Bax(<?= $xsiyahi[$i]['id'] ?>)" data-toggle="modal"
                                            data-target="#staticBackdrop"
                                            class="btn btn-outline-info btn-sm">Bax</button>
                                        <a href="xidmetler-redakte.php?id=<?= $xsiyahi[$i]['id'] ?>&rdk=ok"><button
                                                class="btn btn-outline-success btn-sm">Redaktə Et</button></a>
                                        <button
                                            onclick="Sil(<?= $xsiyahi[$i]['id'] ?>, '../../<?= $xsiyahi[$i]['sekil'] ?>')"
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

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ətraflı baxış</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label> Cari Şəkil:</label>
                    <img class="pl-4" id="xidmetsekil" style="width:150px; height:100px;" src=""
                        alt="Xidmetler_Sekil" />
                </div>
                <div class="form-group">
                    <label>Ad:</label>
                    <p id="xidmetad"></p>
                </div>
                <div class="form-group">
                    <label>Başlıq:</label>
                    <p id="xidmetbasliq"></p>
                </div>
                <div class="form-group">
                    <label>Alt Başlıq:</label>
                    <p id="xidmetaltbasliq"></p>
                </div>
                <div class="form-group">
                    <label>Sıra:</label>
                    <p id="xidmetsira"></p>
                </div>
                <div class="form-group">
                    <label>Cari İcon:</label>
                    <div id="xidmeticon">
                        <?php require_once "icon.php"; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>