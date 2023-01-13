const naviButton = document.querySelectorAll(".intro--map-button")
const navi = document.querySelectorAll(".intro--map-exp")
naviButton.forEach(function(el, i){
    el.addEventListener("click",function(){
        let parent = el.parentNode;
        if(parent.classList.contains("off")){
            parent.classList.remove("off")
            for(item of navi){
                item.classList.remove("off")
            }
        }else if(!parent.classList.contains("off")){
            parent.classList.add("off")
        }
    })
})