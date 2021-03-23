function decrypt() {
    var key = document.getElementById('keyvalue').value;
    var encrypt = document.getElementById('encrypttext').value;
    if(key==1){
        let result1 = CryptoJS.AES.decrypt();
        document.getElementById('decrypt-box').value = result1;
    }
    else if (key==2){
        let result2 = CryptoJS.MD5.decrypt(encrypt);
        document.getElementById('decrypt-box').value = result2;
    }


}