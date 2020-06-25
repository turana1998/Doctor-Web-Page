if (CurrentURLName() == "slider-elave.php") {
  SliderSira("Sıra Seç...");
}

function SliderSira(ad) {
  let opt = `<option value="" disabled="disabled" selected="selected">${ad}</option>`;
  let SS = [];

  $.ajax({
    url: "../settings/code/slider-ajax.php",
    data: { ss: true },
    method: "POST",

    success: function (data) {
      SS = JSON.parse(data);
      for (let i = 1; i <= 5; i++) {
        if (SS.indexOf(i) == -1) opt += `<option value="${i}">${i}</option>`;
        else opt += `<option value="${i}" disabled="disabled">${i}</option>`;
      }
      document.getElementById("slider_sira").innerHTML = opt;
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

function Status(id) {
  let message = "";
  $.ajax({
    url: "../settings/code/slider-ajax.php",
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

function SliderSil(id, sekil) {
  swal({
    title: "Əminsinizmi?",
    text: "Silinən portfolio geri qaytarılmır",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    buttons: ["İmtina!", "Bəli!"],
  }).then((willDelete) => {
    if (willDelete) {
      location.href = CurrentURLName() + `?id=${id}&sil=ok&sekil=${sekil}`;
    } else {
      swal("İmtina Edildi!");
    }
  });
}

function SliderRedakte(id, i){
  let tr = document.getElementsByClassName("slider_tr")[i].getElementsByTagName("td");
  let basliq = tr[1].textContent;
  let alt_basliq = tr[2].textContent;
  let sira = tr[3].textContent;
  let sekil = tr[0].innerHTML;
  let sekil2 = sekil.split(" ")[3];
  let sekil3 = sekil2.substring(11, (sekil2.length - 1));
  document.getElementById("id").value=id;
  document.getElementById("basliq").value=basliq;
  document.getElementById("alt_basliq").value=alt_basliq;
  SliderSira("Seçdiyiniz sira - " + sira);
  document.getElementById("sekil").src="../../"+sekil3;
  document.getElementById("ksekil").value=sekil3;
  document.getElementById("sira_nomresi").value=sira;
}
