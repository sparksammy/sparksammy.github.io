var enFinal = ""
var deFinal = ""
function encrypt(decrypted, passphrase) {
    enFinal = CryptoJS.AES.encrypt(decrypted, passphrase)
}

function decrypt(encrypted, passphrase) {
    deFinal = CryptoJS.AES.decrypt(encrypted, passphrase).toString(CryptoJS.enc.Utf8)
}

function formsubmit() {
    var en = document.getElementById("en").value;
    var de = document.getElementById("de").value;
    var key = document.getElementById("key").value;
    if (en == "") {
        decrypt(de, key)
        document.getElementById("de").value = `${deFinal}`;
    }

    if (de == "") {
        encrypt(en, key)
        document.getElementById("en").value = `${enFinal}`;
    }
}
