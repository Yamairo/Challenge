document.querySelectorAll(".button-nav").forEach(
    link=>{
        console.log(link.href)
        console.log(window.location.href)
        if(link.href===window.location.hre){
            link.setAttribute("btn", "page")
        }
    }
)