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
                    <h4 class="card-title mt-3">Blog Siyahısı</h4>
                    <div class="BlogMessage"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Başlıq</th>
                                    <th>Kateqoriya</th>
                                    <th>Status</th>
                                    <th>Əməliyyat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($siyahi); $i++) { ?>
                                <tr class="BlogKateqoriya">
                                    <td><a href="javascript:void(0)"> #<?= $siyahi[$i]["id"] ?></a></td>
                                    <td><?= $siyahi[$i]["Basliq"] ?></td>
                                    <td><?php if($CRUD->Select("blogkateqoriya",0,"where id=".$siyahi[$i]["Kat_id"])){
                                        echo $CRUD->Select("blogkateqoriya",0,"where id=".$siyahi[$i]["Kat_id"])["Ad"];
                                    }else{
                                        echo "Seçdiyiniz kateqoriya silinmisşdir";
                                    } ?></td>
                                    <td>
                                        <input type="checkbox" <?php if($CRUD->Select("blogkateqoriya",0,"where id=".$siyahi[$i]["Kat_id"])){
                                            echo $siyahi[$i]["status"] ? 'checked="checked"' : "";
                                        }else{
                                            echo 'disabled="disabled"';
                                        } ?> onchange="Status(<?= $siyahi[$i]['id'] ?>)" class="js-switch" id="blog_check"
                                            data-color="#33AFE3" data-size="small" />
                                    </td>
                                    <td>
                                        <button onclick="Bax(<?= $siyahi[$i]['id'] ?>)" data-toggle="modal"
                                            data-target="#staticBackdrop"
                                            class="btn btn-outline-info btn-sm">Bax</button>
                                        <a href="blog-redakte.php?id=<?= $siyahi[$i]['id'] ?>&rdk=ok"><button
                                                class="btn btn-outline-success btn-sm">Redaktə Et</button></a>
                                        <button
                                            onclick="Sil(<?= $siyahi[$i]['id'] ?>, '../../<?= $siyahi[$i]['Sekil'] ?>')"
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
                    <label>Şəkil</label>
                    <img class="pl-4" id="blogsekil" style="width:150px; height:100px;" src="" alt="Blog_Sekil" />
                </div>
               <div class="form-group">
                    <label>Ad</label>
                    <p id="blogbasliq"></p>
                </div>
                <div class="form-group">
                    <label>Soyad</label>
                    <p id="blogslug"></p>
                </div>
                <div class="form-group">
                    <label>Tarix</label>
                    <p id="blogtarix"></p>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div id="blogmezmun"></div>
                </div>
                <div class="form-group">
                    <label>Rol</label>
                    <div id="blogmezmun"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>