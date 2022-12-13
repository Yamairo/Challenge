function isNietLeeg() {
  console.log("test");
  let fname = document.forms["login"]["fname"].value;
  let emailadres = document.forms["login"]["email"].value;
  let password = document.forms["login"]["pword"].value;
  if (fname == "") {
    alert("Je hebt geen naam ingevuld");
    return false;
  }
  if(emailadres == "") {
      alert("Je hebt geen email ingevuld");
      return false;
    }
    if(password == "") {
      alert("Je hebt geen wachtwoord ingevuld");
      return false;
    }
}

function saveData(){
  let fname = document.forms["login"]["fname"].value;
  let emailadres = document.forms["login"]["email"].value;
  let password = document.forms["login"]["pword"].value;
  let test = {
      firstName : fname,
      email : emailadres,
      pword : password
    }
    console.log(test)
  if(isNietLeeg()){
  }
}
