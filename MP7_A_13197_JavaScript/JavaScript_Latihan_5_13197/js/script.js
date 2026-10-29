
var rumit_email = /^[a-z0-9][a-z0-9 \ .- ] {0,} [a-z0-9]@[a-z0-9] [a-z0-9 \ .- ] {0,} [a-z0-9] [\.] [a-z0-9] {2,4} $/;

function fn_valForm() {
    var nama = document.getElementById("nama");
    var umur = document.getElementById("umur");
    var sMsg = "";
    var email = document.getElementById("email");
    var pilihan_lomba;

    if (nAma == "") {
        sMsg += "\n* Anda belum mengisikan nama";
    }
    if (eMail == "") {
        sMsg += "\n* Anda belum mengisikan email";
    }
    if (uMur == "") {
        sMsg += "\n* Anda belum mengisikan umur";
    }

    if (uMur == "") {
        sMsg += "\n* Anda belum mengisikan pilihan lomba";
    }



}



