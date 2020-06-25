function Serh(id) {
    $.ajax({
        url: "../settings/code/comment-ajax.php",
        data: { serh: true, id: id },
        method: "POST",

        success: function (data) {
            comment = JSON.parse(data);
            document.getElementById("comment_yaz").innerHTML = comment.serh;my_comment
            document.getElementById("id_yaz").value = comment.id;
            document.getElementById("my_comment").value = comment.cavab;
            if(comment.cavab == ""){
                document.getElementById("cavab_yaz").innerHTML = "Aktiv cavab yoxdur";
            }
            else{
                document.getElementById("cavab_yaz").innerHTML = comment.cavab;
            }
        },

        error: function (x, sts) {
            alert("Error...");
        },
    });
}

function Status(id) {
    let message = "";
    $.ajax({
        url: "../settings/code/comment-ajax.php",
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
            document.getElementsByClassName("CommentMessage")[0].innerHTML = message;

            setTimeout(function () {
                document.getElementsByClassName("CommentMessage")[0].innerHTML = "";
            }, 1500);

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

function Sil(id, sekil) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən şərh geri qaytarılmır",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["İmtina!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = CurrentURLName() + `?id=${id}&SerhSil=ok&sekil=${sekil}`;
        } else {
            swal("İmtina Edildi!");
        }
    });
}

