if (CurrentURLName() == "port-kat-elave.php") {
  PortKatSira("Sıra Seç...");
}

function PortKatSira(ad) {
  let opt = `<option value="" disabled="disabled" selected="selected">${ad}</option>`;
  let PKS = [];

  $.ajax({
    url: "../settings/code/portfolio-ajax.php",
    data: { pks: true },
    method: "POST",

    success: function (data) {
      PKS = JSON.parse(data);
      for (let i = 1; i <= 10; i++) {
        if (PKS.indexOf(i) == -1) opt += `<option value="${i}">${i}</option>`;
        else opt += `<option value="${i}" disabled="disabled">${i}</option>`;
      }
      document.getElementById("portkatsira").innerHTML = opt;
    },

    error: function (x, sts) {
      alert("Error...");
    },
  });
}

function CurrentURLName() {
  let path = location.pathname;
  let page = path.split("/").pop();
  return page;
}

function KatSil(id) {
  swal({
    title: "Əminsinizmi?",
    text: "Silinən kateqoriya geri qaytarılmır",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    buttons: ["İmtina!", "Bəli!"],
  }).then((willDelete) => {
    if (willDelete) {
      location.href = CurrentURLName() + `?id=${id}&sil=ok`;
    } else {
      swal("İmtina Edildi!");
    }
  });
}
function PortSil(id, sekil) {
  swal({
    title: "Əminsinizmi?",
    text: "Silinən portfolio geri qaytarılmır",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    buttons: ["İmtina!", "Bəli!"],
  }).then((willDelete) => {
    if (willDelete) {
      location.href = CurrentURLName() + `?id=${id}&delete=ok&sekil=${sekil}`;
    } else {
      swal("İmtina Edildi!");
    }
  });
}

function KatStatus(id) {
  let message = "";
  $.ajax({
    url: "../settings/code/portfolio-ajax.php",
    data: { ks: true, id: id },
    method: "POST",

    success: function (data) {
      if (data) {
        message = `<div class="alert alert-success" role="alert">
       Status Uğurla Dəyişdirildi!
   </div>`;
      } else {
        message = `<div class="alert alert-danger" role="alert">
        Status Dəyişdirilmədi!
    </div>`;
      }

      document.getElementsByClassName("PortfolioMessage")[0].innerHTML = message;

      setTimeout(function () {
        document.getElementsByClassName("PortfolioMessage")[0].innerHTML = "";
      }, 1500);

    },

    error: function (x, sts) {
      alert("Error...");
    },
  });
}
function Status(id) {
  let message = "";
  $.ajax({
    url: "../settings/code/portfolio-ajax.php",
    data: { status: true, id: id},
    method: "POST",

    success: function (data) {
      if (data) {
        message = `<div class="alert alert-success" role="alert">
       Status Uğurla Dəyişdirildi!
   </div>`;
      } else {
        message = `<div class="alert alert-danger" role="alert">
        Status Dəyişdirilmədi!
    </div>`;
      }

      document.getElementsByClassName("PortMessage")[0].innerHTML = message;

      setTimeout(function () {
        document.getElementsByClassName("PortMessage")[0].innerHTML = "";
      }, 1500);

    },

    error: function (x, sts) {
      alert("Error...");
    },
  });
}

function KatRedakte(id, i) {
  let tr = document.getElementsByClassName("port-kat-tr")[i].getElementsByTagName("td");
  let ad = tr[1].textContent;
  let sira = tr[2].textContent;
  let slug = tr[3].textContent;
  document.getElementById("ad").value = ad;
  PortKatSira("Seçdiyiniz sira - " + sira);
  document.getElementById("slug").value = slug;
  document.getElementById("id").value = id;
  document.getElementById("portkatsira_nomre").value = sira;
}

function PortRedakte(id, i) {
  let tr = document.getElementsByClassName("port-tr")[i].getElementsByTagName("td");
  let sekil = tr[0].innerHTML;
  let sekil2 = sekil.split(" ")[3];
  let sekil3 = sekil2.substring(11, (sekil2.length - 1));
  let ad = tr[1].textContent;
  let kateqoriya = tr[2].textContent;
  let link = tr[3].textContent;
  let kat_id = tr[4].textContent;
  document.getElementById("sekil").innerHTML = sekil;
  document.getElementById("ad").value = ad;
  document.getElementById("port_opt").innerHTML = `Seçilmiş kateqoriya - ${kateqoriya}`;
  document.getElementById("port_id_kateqoriya").value = kat_id;
  document.getElementById("link").value = link;
  document.getElementById("id").value = id;
  document.getElementById("ksekil").value = sekil3;
}
