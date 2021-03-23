function encrypt()
{
    var cipher=document.getElementById('encrypttext').value;
    document.getElementById('shr-btn').style.display="block";

if(cipher=="")
{
    document.getElementById('err').innerHTML='Text is missing';
    return false;
}
else
{
    
    
    
    
    let hash = [hash1,hash2,hash3,hash4,hash5];
    function hash1(){
      let result1 = CryptoJS.AES.encrypt("cipher","Secret Passphrase");
       document.getElementById('encrypt-box').value=result1;
       document.getElementById('msg').innerText="AES Algorithm Called!,Key 1";
    }
    function hash2(){
      let result2 = CryptoJS.MD5(cipher);
      document.getElementById('encrypt-box').value=result2;
      document.getElementById('msg').innerText="MD5 Algorithm Called!,Key 2";
    }
   function hash3(){
    let result3 = CryptoJS.SHA3(cipher);
    document.getElementById('encrypt-box').value=result3;
    document.getElementById('msg').innerText="SHA3 Algorithm Called!,key 3";
    }
    function hash4(){
      let result4 = CryptoJS.HmacSHA256(cipher, "secret");
      document.getElementById('encrypt-box').value=result4;
      document.getElementById('msg').innerText="HmacSHA256 Algorithm Called!,Key 4"
    }
    function hash5(){
      let result5 = CryptoJS.TripleDES(cipher);
        document.getElementById('encrypt-box').value=result5;
        document.getElementById('msg').innerText="TripleDES Algorithm Called!,Key 5"
     }
 function randomNumber(n) { 
	return Math.floor( Math.random() * n ); 
  }
  hash[ randomNumber( hash.length ) ](); 
      
      
      
    
    
    
    return true;
}
}
document.getElementById("encrypt-box").onclick = function() {
    this.select();
    document.execCommand('copy');
    document.getElementById('alert').style.display="block";
    $('#alert').delay(1000).hide(0); 
  }
  

const shareButton = document.querySelector('.share-button');
const shareDialog = document.querySelector('.share-dialog');
const closeButton = document.querySelector('.close-button');

shareButton.addEventListener('click', event => {
  shareDialog.classList.add('is-open');
});

closeButton.addEventListener('click', event => {
  shareDialog.classList.remove('is-open');
});

