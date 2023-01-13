const head = document.getElementById("head")
const aside = document.getElementById("aside")
const headOpenList = document.querySelectorAll(".head--open-list")
const headSubMenu = document.getElementById("headSub")
const headSubMenuList = document.querySelectorAll(".head--sub-menu-list")
aside.classList.remove("on")
headOpenList.forEach(function(el,i){
    el.addEventListener("mouseenter",function(){
        headSubMenu.classList.add("on")
        for(list of headSubMenuList){
            list.classList.remove("on")
        }
        headSubMenuList[i].classList.add("on")
    })
})
const headSubCloseList = document.querySelector(".head--close-list")
headSubMenu.addEventListener("mouseleave",function(){
    console.log("leaved")
    headSubMenu.classList.remove("on")
})

const asideRow = document.querySelectorAll(".aside--row2")
const asideRowButton = document.querySelectorAll(".aside--row2-button")
const asideRowSlide = document.querySelectorAll(".aside--row2-slide")
asideRowButton.forEach(function(el,i){
    let parent = el.parentNode;
    let thisSlide = parent.querySelector(".aside--row2-slide")
    console.log(thisSlide)
    el.addEventListener("click",function(){
        if(parent.classList.contains("on")){
            parent.classList.remove("on")
        }else{
            for(el of asideRow){
                el.classList.remove("on")
            }
            parent.classList.add("on")
        }
    })
})

const asideClose = document.getElementById("asideClose")
asideClose.addEventListener("click",function(){
    aside.classList.remove("on")
})

const headHam = document.getElementById("headHam")
headHam.addEventListener("click",function(){
    aside.classList.add("on")

})

const footTopButton = document.getElementById("footTopButton")
footTopButton.addEventListener("click",function(){
    window.scrollTo(0,0)
})

var lastScrollTop = 0;

document.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
   var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
   if (st > lastScrollTop){
      // downscroll code
      head.classList.add("scroll-down")
   } else {
      // upscroll code
      aside.classList.remove("on")
      head.classList.remove("scroll-down")
   }
   lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);