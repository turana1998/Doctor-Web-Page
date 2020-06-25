function SifreQur() {
   var result = '';
   var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#_)(!';
   var charactersLength = characters.length;
   for (var i = 0; i < 8; i++) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("sifre").value = result;
}

let btn = document.getElementById("button_yenile");
btn.disabled = true;

let tekrar = document.getElementById("yenisifretekrar");
tekrar.disabled = true;


let yeni = document.getElementById("yenisifre");
yeni.disabled = true;

let yaz = document.getElementById("yoxla");

function SifreYoxla() {
   if (tekrar.value == yeni.value) {
      yaz.innerHTML = `<div class="alert alert-success" role="alert">Şifrə uyğundur...</div>`;
      btn.disabled = false;
   }
   else {
      yaz.innerHTML = `<div class="alert alert-danger" role="alert">Şifrə uyğun gəlmir...</div>`;
   }
}

function YeniSifre() {
   if (yeni.value.match(/^(?=(?:.*[A-Z]))(?=(?:.*[a-z]))(?=(?:.*[0-9]))(?=(?:.*[@$!%*#?&]))\S{8,}$/)) {
      yaz.innerHTML = `<div class="alert alert-success" role="alert">Şifrə güclüdür...</div>`;
      tekrar.disabled = false;
   }
   else {
      yaz.innerHTML = `<div class="alert alert-danger" role="alert">Böyük və kiçik hərf, xüsusi simvol, rəqəm və minimum 8 simvoldan ibarət olmalıdır...</div>`;
      tekrar.disabled = true;
   }
}

function KohneSifre(sifre, email) {
   $.ajax({
      url: "../settings/code/istifadeciler-ajax.php",
      data: { ksifre: true, sifre: sifre, email: email },
      method: "POST",

      success: function (data) {
         if (data == 0) {
            yaz.innerHTML = `<div class="alert alert-danger" role="alert">Köhnə şifrə yanlışdır...</div>`;
            yeni.disabled = true;
         } else {
            yaz.innerHTML = `<div class="alert alert-success" role="alert">Köhnə şifrə doğrudur...</div>`;
            yeni.disabled = false;
         }
      },

      error: function (x, sts) {
         alert("Error...");
      },
   });
}