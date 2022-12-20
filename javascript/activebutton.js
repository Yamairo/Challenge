document.querySelectorAll(".nav-link").forEach(
    link=>{
      console.log(link.href)
      console.log(window.location.href)
        if(link.href===window.location.href){
            link.setAttribute("id", "page")
        }
    }
)

function updatemenu() {
    if (document.getElementById('responsive-menu').checked == true) {
      document.getElementById('menu').style.borderBottomRightRadius = '0';
      document.getElementById('menu').style.borderBottomLeftRadius = '0';
    }else{
      document.getElementById('menu').style.borderRadius = '10px';
    }
}