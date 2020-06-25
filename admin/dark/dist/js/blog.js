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

function Sil(id, sekil) {
  swal({
    title: "Əminsinizmi?",
    text: "Silinən məqalə geri qaytarılmır",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    buttons: ["İmtina!", "Bəli!"],
  }).then((willDelete) => {
    if (willDelete) {
      location.href = CurrentURLName() + `?id=${id}&BlogSil=ok&sekil=${sekil}`;
    } else {
      swal("İmtina Edildi!");
    }
  });
}

function KatStatus(id) {
  let message = "";
  $.ajax({
    url: "../settings/code/blog-ajax.php",
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
      document.getElementsByClassName("BlogCatMessage")[0].innerHTML = message;
      setTimeout(function () {
        document.getElementsByClassName("BlogCatMessage")[0].innerHTML = "";
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
    url: "../settings/code/blog-ajax.php",
    data: { status: true, id: id },
    method: "POST",
     success: function (data) {
      if (data) {
        message = `<div class="alert alert-success" role="alert"> Status Uğurla Dəyişdirildi!</div>`;
      } else {
        message = `<div class="alert alert-danger" role="alert">Status Dəyişdirilmədi!</div>`;
      }
      document.getElementsByClassName("BlogMessage")[0].innerHTML = message;

      setTimeout(function () {
        document.getElementsByClassName("BlogMessage")[0].innerHTML = "";
      }, 1500);
    }, error: function (x, sts) {
      alert("Error...");
    },
  });
}


function Redakte(id, i) {
  let cls = document.getElementsByClassName("BlogKateqoriya")[i].getElementsByTagName("td");
  let ad = cls[1].textContent;
  let slug = cls[2].textContent;
  document.getElementById("ad").value = ad;
  document.getElementById("slug").value = slug;
  document.getElementById("id").value = id;
}

function Bax(id) {
  $.ajax({
    url: "../settings/code/blog-ajax.php",
    data: { bax: true, id: id },
    method: "POST",

    success: function (data) {
      blog = JSON.parse(data);
      document.getElementById("blogkat").innerHTML = blog.Kat_id;
      document.getElementById("blogbasliq").innerHTML = blog.Basliq;
      document.getElementById("blogslug").innerHTML = blog.slug;
      document.getElementById("blogtarix").innerHTML = blog.tarix;
      document.getElementById("blogmezmun").innerHTML = blog.Mezmun;
      document.getElementById("blogsekil").src = "../../" + blog.Sekil;
    },

    error: function (x, sts) {
      alert("Error...");
    },
  });
}


