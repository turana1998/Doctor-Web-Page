let arr = [
    'mobile', 'laptop', 'desktop', 'tablet', 'phone', 'document', 'documents', 'search', 'clipboard', 'newspaper',
    'notebook', 'book-open', 'browser', 'calendar', 'presentation', 'picture', 'pictures', 'video', 'camera', 'printer',
    'toolbox', 'briefcase', 'wallet', 'gift', 'bargraph', 'grid', 'expand', 'focus', 'edit', 'adjustments',
    'ribbon', 'hourglass', 'lock', 'megaphone', 'shield', 'trophy', 'flag', 'map', 'puzzle', 'basket',
    'envelope', 'streetsign', 'telescope', 'gears', 'key', 'paperclip', 'attachment', 'pricetags', 'lightbulb', 'layers',
    'pencil', 'tools', 'tools-2', 'scissors', 'paintbrush', 'magnifying-glass', 'circle-compass', 'linegraph', 'mic', 'strategy',
    'beaker', 'caution', 'recycle', 'anchor', 'profile-male', 'profile-female', 'bike', 'wine', 'hotairballoon', 'globe',
    'genius', 'map-pin', 'dial', 'chat', 'heart', 'cloud', 'upload', 'download', 'target', 'hazardous',
    'piechart', 'speedometer', 'global', 'compass', 'lifesaver', 'clock', 'aperture', 'quote', 'scope', 'alarmclock',
    'refresh', 'happy', 'sad', 'facebook', 'twitter', 'googleplus', 'rss', 'tumblr', 'linkedin'
];

function IconSec() {
    let show = "";
    for (let i = 0; i < arr.length; i++) {
        show += `
        <span class="box1">
            <span aria-hidden="true" class="icon-${arr[i]}"></span>
            <input type="radio" class="option-input radio" id="icon-${arr[i]}" name="box1" value="icon-${arr[i]}" />
        </span>`;
    }
    document.getElementById("glyphs").innerHTML = show;
}

function IconElave() {
    for (let i = 0; i < arr.length; i++) {
        if (document.getElementById(`icon-${arr[i]}`).checked == true) {
            document.getElementById("icon").value = document.getElementById(`icon-${arr[i]}`).value;
        }
    }
}

function CurrentURLName() {
    let path = location.pathname;
    let page = path.split("/").pop();
    return page;
}

if (CurrentURLName() == "xidmetler-elave.php") {
    XidmetlerSira("Sıra Seç...");
}
if (CurrentURLName() == "xidmetler-redakte.php") {
    let sira = document.getElementById("xidmet_sira").value;
    XidmetlerSira("Seçdiyiniz sira - " + sira);
    let icon = document.getElementById("xidmet_icon").value;
    document.getElementById("cari_icon").innerHTML = `
    <span class="box1">
        <span aria-hidden="true" style="font-size: 35px;" class="${icon}"></span>
    </span>`;
}


function XidmetlerSira(ad) {
    let opt = `<option value="" disabled="disabled" selected="selected">${ad}</option>`;
    let XS = [];

    $.ajax({
        url: "../settings/code/xidmetler-ajax.php",
        data: { xs: true },
        method: "POST",

        success: function (data) {
            XS = JSON.parse(data);
            for (let i = 1; i <= 10; i++) {
                if (XS.indexOf(i) == -1) opt += `<option value="${i}">${i}</option>`;
                else opt += `<option value="${i}" disabled="disabled">${i}</option>`;
            }
            document.getElementById("xidmetler_sira").innerHTML = opt;
        },

        error: function (x, sts) {
            alert("Error...");
        },
    });
}

function Status(id) {
    let message = "";
    $.ajax({
        url: "../settings/code/xidmetler-ajax.php",
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
            document.getElementsByClassName("XidmetlerMessage")[0].innerHTML = message;

            setTimeout(function () {
                document.getElementsByClassName("XidmetlerMessage")[0].innerHTML = "";
            }, 1500);

        },

        error: function (x, sts) {
            alert("Error...");
        },
    });
}

function Bax(id) {
    $.ajax({
        url: "../settings/code/xidmetler-ajax.php",
        data: { bax: true, id: id },
        method: "POST",

        success: function (data) {
            xidmet = JSON.parse(data);
            document.getElementById("xidmetsekil").src = "../../" + xidmet.sekil;
            document.getElementById("xidmetad").innerHTML = xidmet.ad;
            document.getElementById("xidmetbasliq").innerHTML = xidmet.basliq;
            document.getElementById("xidmetaltbasliq").innerHTML = xidmet.alt_basliq;
            document.getElementById("xidmetsira").innerHTML = xidmet.sira;
            let icon = document.getElementById("glyphs");
            icon.innerHTML = `
            <span class="box1" style="text-align: center; margin-top: -55px; border: none">
                <span aria-hidden="true" class="${xidmet.icon}"></span>
            </span>`;
        },

        error: function (x, sts) {
            alert("Error...");
        },
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
            location.href = CurrentURLName() + `?id=${id}&XidmetSil=ok&sekil=${sekil}`;
        } else {
            swal("İmtina Edildi!");
        }
    });
}