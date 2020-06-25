function Status(id) {
   let message = "";
   $.ajax({
     url: "../settings/code/istifadeciler-ajax.php",
     data: { st: true, id: id },
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
       document.getElementsByClassName("Message")[0].innerHTML = message;
       setTimeout(function () {
         document.getElementsByClassName("Message")[0].innerHTML = "";
       }, 1500);
     },
 
     error: function (x, sts) {
       alert("Error...");
     },
   });
 }