document.querySelectorAll(".button-nav").forEach(
    link=>{
        if(link.href===window.location.hre){
            link.setAttribute("btn", "page")
        }
    }
)

function show(shown, ...hidden) {
    console.log(shown)
    document.getElementById(shown).style.display='block';
    document.getElementById(hidden).style.display='none';
    return false;
}