<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/blog.php"; require_once "tinymce.php"; ?>
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
                        <h4 class="card-title">Blog Redaktə</h4>
                        <form class="mt-4" enctype="multipart/form-data" action="#" method="POST">
                        <input type="hidden" value="<?= $rdk["id"] ?>" name="id" />
                        <input type="hidden" value="../../<?= $rdk["Sekil"] ?>" name="kohne_sekil" />
                            <div class="form-group">
                                <label for="basliq">Cari Şəkil</label>
                                <img style="width: 250px; height: 150px; padding-left: 20px" src="../../<?= $rdk["Sekil"] ?>" alt="Blog_Sekil" />
                            </div>
                            <div class="form-group">
                                <label for="kateqoriya">Kateqoriya</label>
                                <select class="form-control" name="kateqoriya" id="kateqoriya">
                                    <?php for($i=0;$i<count($ksiyahi);$i++){ ?>
                                    <option value="<?= $ksiyahi[$i]['id'] ?>" <?= $rdk["Kat_id"] == $ksiyahi[$i]['id'] ? 'selected = "selected"' : "" ?> ><?= $ksiyahi[$i]['Ad'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="basliq">Slug</label>
                                <input type="text" class="form-control" value="<?= $rdk["slug"] ?>" required="required" maxlength="250"
                                    id="slug" name="slug" />
                            </div>
                            <div class="form-group">
                                <label for="basliq">Başlıq</label>
                                <input type="text" class="form-control" value="<?= $rdk["Basliq"] ?>" required="required" maxlength="250"
                                    id="basliq" name="basliq" />
                            </div>
                            <div class="form-group">
                                <label for="aciqlama">Məzmun</label>
                                <textarea name="mezmun" style="height: 200px;" class="form-control"><?= $rdk["Mezmun"] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="robots">Şəkil seç</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="sekil"
                                        id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">(.png .jpeg .gif) fayl
                                        seçin</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="blog_redakte">Redaktə Et</button>
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