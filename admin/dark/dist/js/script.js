function GetUrlQuery() {
    let url_string = location.href;
    let url = new URL(url_string);
    let st = url.searchParams.get("status");
    if (st == "ok") {
      swal({
          title: "Əla!",
          text: "Əməliyyat uğurla icra edildi!",
          icon: "success",
          button: "Ok!",
        });
      setTimeout(Redirect, 1500);
    }
    else if (st == "send") {
      swal({
          title: "Əla!",
          text: "Şərhiniz baxılmaq üçün göndərildi!",
          icon: "success",
          button: "Ok!",
        });
      setTimeout(Redirect, 2000);
    }
    else if (st == "no") {
      swal({
          title: "Təəssüf!",
          text: "Əməliyyat icra edilmədi!",
          icon: "error",
          button: "Ok!",
        });
      setTimeout(Redirect, 1500);
    }
  }
  
  function Redirect() {
    location.href = location.protocol + "//" + location.host + location.pathname;
  }
  
  GetUrlQuery();