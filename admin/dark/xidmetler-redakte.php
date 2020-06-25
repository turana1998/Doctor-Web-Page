<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/xidmetler.php"; ?>
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
                        <h4 class="card-title">Xidmətlər Redaktə</h4>
                        <form class="mt-4" enctype="multipart/form-data" action="#" method="POST">
                            <input type="hidden" value="<?= $rdk["id"] ?>" name="id" />
                            <input type="hidden" value="<?= $rdk["sekil"] ?>" name="kohne_sekil" />
                            <input type="hidden" value="<?= $rdk["sira"] ?>" name="xidmet_sira" id="xidmet_sira" />
                            <input type="hidden" value="<?= $rdk["icon"] ?>" name="xidmet_icon" id="xidmet_icon" />
                            <div class="form-group">
                                <label for="basliq">Cari Şəkil</label>
                                <img style="width: 250px; height: 150px; padding-left: 20px"
                                    src="../../<?= $rdk["sekil"] ?>" alt="Xidmetler_Sekil" />
                            </div>
                            <div class="form-group">
                                <label for="cari_icon">Cari İcon</label>
                                <div id="cari_icon" style="display: inline-block; margin-left: 25px;"></div>
                            </div>
                            <div class="form-group">
                                <label for="ad">Ad</label>
                                <input type="text" class="form-control" value="<?= $rdk["ad"] ?>" required="required"
                                    maxlength="100" id="ad" name="ad" />
                            </div>
                            <div class="form-group">
                                <label for="basliq">Başlıq</label>
                                <input type="text" class="form-control" value="<?= $rdk["basliq"] ?>"
                                    required="required" maxlength="100" id="basliq" name="basliq" />
                            </div>
                            <div class="form-group">
                                <label for="alt_basliq">Alt Başlıq</label>
                                <input type="text" class="form-control" value="<?= $rdk["alt_basliq"] ?>"
                                    required="required" maxlength="250" id="alt_basliq" name="alt_basliq" />
                            </div>
                            <div class="form-group">
                                <label for="iconn">İcon</label>
                                <input type="text" readonly="readonly" placeholder="İcon seçin..." class="form-control"
                                    id="icon" name="icon" value="" />
                                <button type="button" onclick="IconSec()" id="iconn" class="btn btn-primary mt-4"
                                    data-toggle="modal" data-target="#exampleModal">Seçin</button>
                            </div>
                            <div class="form-group">
                                <label for="xidmetler_sira">Sıra</label>
                                <select class="form-control" name="sira" id="xidmetler_sira"></select>
                            </div>
                            <div class="form-group">
                                <label for="inputGroupFile01">Şəkil seç</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="sekil" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">(.png və ya .jpeg) faylı
                                        seçin</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="xidmetler_redakte">Redaktə Et</button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog text-center" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">İcon seçin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php require_once "icon.php"; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                <button type="button" onclick="IconElave()" class="btn btn-primary" data-dismiss="modal">Əlavə
                    et</button>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>