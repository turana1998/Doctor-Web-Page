<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/blog.php" ?>
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
                    <h4 class="card-title mt-3">Blog Kateqoriya Siyahısı</h4>
                    <div class="BlogCatMessage"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ad</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Əməliyyat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($ksiyahi); $i++) { ?>
                                <tr class="BlogKateqoriya">
                                    <td><a href="javascript:void(0)"> #<?= $ksiyahi[$i]["id"] ?></a></td>
                                    <td><?= $ksiyahi[$i]["Ad"] ?></td>
                                    <td><?= $ksiyahi[$i]["slug"] ?></td>
                                    <td>
                                        <input type="checkbox" onchange="KatStatus(<?= $ksiyahi[$i]['id'] ?>)"
                                            <?= $ksiyahi[$i]["status"] ? 'checked="checked"' : ""; ?> class="js-switch"
                                            data-color="#33AFE3" data-size="small" />
                                    </td>
                                    <td>
                                        <button onclick="Redakte(<?= $ksiyahi[$i]['id'] ?>, <?= $i ?>)" data-toggle="modal" data-target="#exampleModal"
                                            class="btn btn-outline-success btn-sm">Redaktə Et</button>
                                        <button onclick="KatSil(<?= $ksiyahi[$i]['id'] ?>)" class="btn btn-outline-danger btn-sm">Sil</button>
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
            <form method="POST" action="">
                <div class="modal-body">
                <input type="hidden" name="id" id="id" value="" />
                    <div class="form-group">
                        <label for="ad" class="col-form-label">Ad:</label>
                        <input type="text" class="form-control" id="ad" name="ad" />
                    </div>
                    <div class="form-group">
                        <label for="slug" class="col-form-label">Slug:</label>
                        <input type="text" class="form-control" id="slug" name="slug" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                    <button type="submit" name="bkredakte" class="btn btn-primary">Redaktə Et</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>