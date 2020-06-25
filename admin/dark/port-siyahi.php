<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/portfolio.php" ?>
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
                    <h4 class="card-title mt-3">Portfolio Siyahısı</h4>
                    <div class="PortMessage"></div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Şəkil</th>
                                    <th>Ad</th>
                                    <th>Kateqoriya</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Əməliyyat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<count($psiyahi);$i++){ ?>
                                <tr class="port-tr">
                                    <td><img width="50px" height="50px" src="../../<?= $psiyahi[$i]['sekil'] ?>"
                                            alt="<?= $psiyahi[$i]['Adi'] ?>" /></td>
                                    <td><?= $psiyahi[$i]['Adi'] ?></td>
                                    <td><?php if($CRUD->Select("portfoliokateqoriya",0,"where id=".$psiyahi[$i]['kat_id'])){
                                        echo $CRUD->Select("portfoliokateqoriya",0,"where id=".$psiyahi[$i]['kat_id'])["Ad"];
                                    }
                                    else{
                                        echo "Seçdiyiniz kateqoriya silinmisşdir";
                                    } ?>
                                    </td>
                                    <td><?= $psiyahi[$i]['link'] ?></td>
                                    <td class="d-none"><?= $CRUD->Select("portfoliokateqoriya",0,"where id=".$psiyahi[$i]['kat_id'])["id"] ?></td>
                                    <td>
                                        <input type="checkbox" <?php if($CRUD->Select("portfoliokateqoriya",0,"where id=".$psiyahi[$i]['kat_id'])){
                                                echo $psiyahi[$i]['status'] ? 'checked="checked"' : "";
                                            }else{
                                                echo 'disabled="disabled"' ;
                                            } ?> onchange="Status(<?= $psiyahi[$i]['id'] ?>)"
                                             class="js-switch"
                                            data-color="#33AFE3" data-size="small" />
                                    </td>
                                    <td>
                                        <button onclick="PortRedakte(<?= $psiyahi[$i]['id'] ?>, <?= $i ?>)"
                                            data-toggle="modal" data-target="#exampleModal"
                                            class="btn btn-outline-success btn-sm">Redaktə Et</button>
                                        <button onclick="PortSil(<?= $psiyahi[$i]['id'] ?>, '../../<?= $psiyahi[$i]['sekil'] ?>')"
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
                            <div id="sekil" class="col-2"></div>
                            <input type="hidden" id="ksekil" name="ksekil" value="" />
                            <div class="custom-file col-10 mt-2">
                                <input type="file" class="custom-file-input" id="sekil_red" name="sekil_red" />
                                <label class="custom-file-label" for="sekil_red">(.png .jpeg) fayl seçin</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ad" class="col-form-label">Ad:</label>
                        <input type="text" class="form-control" id="ad" name="ad" />
                    </div>
                    <div class="form-group">
                        <label for="ad">Kateqoriya</label>
                        <input type="hidden" name="port_id_kateqoriya" id="port_id_kateqoriya" value="" />
                        <select class="form-control" name="portid" id="portid">
                            <option disabled="disabled" selected="selected" id="port_opt"></option>
                            <?php for($i = 0; $i<count($ksiyahi); $i++){ ?>
                            <option value="<?= $ksiyahi[$i]["id"] ?>"><?= $ksiyahi[$i]["Ad"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="link" class="col-form-label">Link:</label>
                        <input type="text" class="form-control" id="link" name="link" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                    <button type="submit" name="predakte" class="btn btn-primary">Redaktə Et</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>