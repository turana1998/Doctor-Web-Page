<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/slide.php" ?>
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
          <h4 class="card-title">Slide Siyahısı</h4>
          <div class="SlideMessage"></div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Başlıq</th>
                  <th>Status</th>
                  <th>Əməliyyat</th>
                </tr>
              </thead>
              <tbody>
                <?php for ($i = 0; $i < count($siyahi); $i++) { ?>
                  <tr class="SlideHaqqinda">
                    <td><a href="javascript:void(0)"> #<?= $siyahi[$i]["id"] ?></a></td>
                    <td><?= $siyahi[$i]["basliq"] ?></td>
                    <td>
                      <input type="checkbox" onchange="Status(<?= $siyahi[$i]['id'] ?>)" <?= $siyahi[$i]["status"] ? 'checked="checked"' : ""; ?> class="js-switch" data-color="#33AFE3" data-size="small" />
                    </td>
                    <td>
                      <button onclick="Bax(<?= $siyahi[$i]['id'] ?>)" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-outline-info btn-sm">Bax</button>
                      <a href="slide-redakte.php?id=<?= $siyahi[$i]['id'] ?>&rdk=ok"><button class="btn btn-outline-success btn-sm">Redaktə Et</button></a>
                      <button onclick="Sil(<?= $siyahi[$i]['id'] ?>,'../../<?= $siyahi[$i]['sekil'] ?>')" class="btn btn-outline-danger btn-sm">Sil</button>
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
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Şəkil</label>
          <img id="slidesekil" style="width: 150px; height:100px;" src="" alt="" />
        </div>
        <div class="form-group">
          <label>Başlıq</label>
          <p id="slidebasliq"></p>
        </div>
        <div class="form-group">
          <label>Məzmun</label>
          <div id="slidemezmun"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
      </div>
    </div>
  </div>
</div>
<?php require_once "footer.php" ?>