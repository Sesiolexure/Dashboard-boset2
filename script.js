const sidebartoggle = document.querySelector("#sidebar--toggle");
sidebartoggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});