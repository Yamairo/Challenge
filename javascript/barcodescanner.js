// Deze code werkt nog niet

var data = "0=%3C&1=s&2=t&3=r&4=i&5=n&6=g&7=%3E";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
     if(this.readyState === 4) {
          console.log(this.responseText);
     }
});

xhr.open("POST", "https://api.cloudmersive.com/barcode/lookup/ean");
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.setRequestHeader("Apikey", "YOUR-API-KEY-HERE");

xhr.send(data);