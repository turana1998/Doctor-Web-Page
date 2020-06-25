<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/comment.php" ?>
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
                    <h4 class="card-title mt-3">Şərhlər Siyahısı</h4>
                    <div class="CommentMessage"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Şəkil</th>
                                    <th>Ad və Soyad</th>
                                    <th>Blog Adı</th>
                                    <th>Tarix</th>
                                    <th>Status</th>
                                    <th>Əməliyyat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($csiyahi); $i++) { ?>
                                <tr class="Comment">
                                    <td><img src="../../<?= $csiyahi[$i]["sekil"] ?>" style="width:50px; height:50px;" alt="<?= $csiyahi[$i]["AdSoyad"] ?>"></td>
                                    <td><?= $csiyahi[$i]["AdSoyad"] ?></td>
                                    <td><?= $CRUD->Select("blog",0,"where id=".$csiyahi[$i]["Blog_Id"])["Basliq"] ?></td>
                                    <td><?= $csiyahi[$i]["tarix"] ?></td>
                                    <td>
                                        <input type="checkbox" <?= $csiyahi[$i]["status"] ? 'checked="checked"' : ""; ?>
                                            onchange="Status(<?= $csiyahi[$i]['id'] ?>)" class="js-switch"
                                            id="blog_check" data-color="#33AFE3" data-size="small" />
                                    </td>
                                    <td>
                                        <button onclick="Serh(<?= $csiyahi[$i]['id'] ?>)" data-toggle="modal"
                                            data-target="#staticBackdrop"
                                            class="btn btn-outline-success btn-sm">Şərh</button>
                                        <button
                                            onclick="Sil(<?= $csiyahi[$i]['id'] ?>, '../../<?= $csiyahi[$i]['sekil'] ?>')"
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
                <h5 class="modal-title" id="staticBackdropLabel">Ətraflı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="">
            <div class="modal-body">
                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td style="width: 120px !important">Şərh :</td>
                                <td id="comment_yaz"></td>
                                <td><input type="hidden" value="" name="id_yaz" id="id_yaz" /></td>
                            </tr>
                            <tr>
                                <td style="width: 120px !important">Aktiv Cavab :</td>
                                <td><p id="cavab_yaz"></p></td>
                            </tr>
                            <tr>
                                <td style="width: 120px !important">Cavab :</td>
                                <td><input class="form-control" type="text" id="my_comment" name="my_comment" value="" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="cavab">Cavabla</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>