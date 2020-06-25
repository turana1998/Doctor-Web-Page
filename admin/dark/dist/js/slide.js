
function CurrentURLName() {
  let path = location.pathname;
  let page = path.split("/").pop();
  return page;
}

function Sil(id,sekil) {
  swal({
    title: "Əminsinizmi?",
    text: "Silinən məqalə geri qaytarılmır",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    buttons: ["İmtina!", "Bəli!"],
  }).then((willDelete) => {
    if (willDelete) {
      location.href = CurrentURLName() + `?id=${id}&SlideSil=ok&sekil=${sekil}`;
    } else {
      swal("İmtina Edildi!");
    }
  });
}

function Redakte(id,i){
  let cls = document.getElementsByClassName("SlideHaqqinda")[i].getElementsByTagName("td");
  let ad = cls[1].textContent;
  let slug = cls[2].textContent;
  document.getElementById("ad").value = ad;
  document.getElementById("slug").value = slug;
  document.getElementById("id").value = id;
}


function Bax(id){
  $.ajax({
    url: "../settings/code/slide-ajax.php",
    data: { bax: true, id: id },
    method: "POST",

    success: function (data) {
      slide = JSON.parse(data);
      document.getElementById("slidesekil").src = "../../"+slide.sekil;
      document.getElementById("slidebasliq").innerHTML = slide.basliq;
      document.getElementById("slidemezmun").innerHTML = slide.mezmun;
    },

    error: function (x, sts) {
      alert("Error...");
    },
  });
}

function Status(id) {
  let message = "";
  $.ajax({
    url: "../settings/code/slide-ajax.php",
    data: { status: true, id: id },
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
      document.getElementsByClassName("SlideMessage")[0].innerHTML = message;
      setTimeout(function(){
        document.getElementsByClassName("SlideMessage")[0].innerHTML = "";
      },1500);
    },

    error: function (x, sts) {
      alert("Error...");
    },
  });
}