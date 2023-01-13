const buttons = document.querySelectorAll(".pcd-button")

buttons.forEach(function(el,i){
    el.addEventListener("click",function(){
        let number = this.getAttribute('data-button-number')
        let slide = document.getElementById(`slide${number}`)
        if(!this.classList.contains("off")){
            this.classList.add("off")
            slide.classList.add("off")
            thisSW = false;
        }else if(this.classList.contains("off")){
            this.classList.remove("off")
            slide.classList.remove("off")
            thisSW = true;
        }
        console.log(number)
    })
})

const scrollList = document.querySelectorAll(".subPacade--main-text-link-row")
const scrollTarget = document.querySelectorAll(".scroll-target")
scrollList.forEach(function(el,i){
    el.addEventListener("click",function(){
        let scrollTo = scrollTarget[i - 1].offsetTop - 140;
        window.scrollTo({left:0,top:scrollTo,behavior:"smooth"})
    })
})

const copyLinkButton = document.getElementById("copyLinkButton")
const url = window.document.location.href;
if(copyLinkButton){
  copyLinkButton.addEventListener("click",function(){
      var url = '';
  	var textarea = document.createElement("textarea");
  	document.body.appendChild(textarea);
  	url = window.document.location.href;
  	textarea.value = url;
  	textarea.select();
  	document.execCommand("copy");
  	document.body.removeChild(textarea);
  	console.log("URL이 복사되었습니다.")
  })
}

const newsTitle = document.querySelectorAll(".subPacade--news-item-text1")
newsTitle.forEach(function(el,i){
    let text = el.innerHTML;
    let length = text.length;
    let textCut = 18;
    if(length>textCut){
        el.innerHTML = text.substring(0,textCut) + "..."
    }
})
const slideImg = document.querySelectorAll(".pcdSwiperMain img")

const slidePopup = document.createElement("div")
slidePopup.classList.add("subPacade--slide-popup")

const slidePopupBg = document.createElement("div")
slidePopupBg.classList.add("subPacade--slide-popup-bg")
slidePopup.appendChild(slidePopupBg)

const slidePopupImg = document.createElement("div")
slidePopupImg.classList.add("subPacade--slide-popup-img")
slidePopup.appendChild(slidePopupImg)

const slidePopupImgEl = document.createElement("img")
slidePopupImgEl.setAttribute("src","/")
slidePopupImg.appendChild(slidePopupImgEl)

const slidePopupClose = document.createElement("div")
const slidePopupCloseSpan1 = document.createElement("span")
const slidePopupCloseSpan2 = document.createElement("span")
slidePopupClose.classList.add("subPacade--slide-popup-close")
slidePopupClose.appendChild(slidePopupCloseSpan1)
slidePopupClose.appendChild(slidePopupCloseSpan2)
slidePopupBg.appendChild(slidePopupClose)

document.body.appendChild(slidePopup)

var winW = window.innerWidth
var winH = window.innerHeight
var slideH = slidePopupImgEl.clientHeight
var slideW = slidePopupImgEl.clientWidth
// window.addEventListener("resize",function(){
//     winW = window.innerWidth
//     winH = window.innerHeight
// })
slideImg.forEach(function(el,i){
    el.addEventListener('click',function(){
        slidePopupImgEl.style.width = "unset"
        slidePopupImgEl.style.maxWidth = "unset"
        let src = el.getAttribute("src")
        slidePopupImgEl.setAttribute("src",src)
        slidePopup.classList.add("on")
        let imgW = slidePopupImgEl.clientWidth
        slidePopupImgEl.style.maxWidth = imgW + "px"
        slidePopupImgEl.style.width = "100%"
    })
})

// 리플렛
const leafletImg = document.querySelectorAll(".intro-leaflet img")
leafletImg.forEach(function(el,i){
  console.log(el)
    el.addEventListener('click',function(){
        slidePopupImgEl.style.width = "unset"
        slidePopupImgEl.style.maxWidth = "unset"
        let src = el.getAttribute("src")
        slidePopupImgEl.setAttribute("src",src)
        slidePopup.classList.add("on")
        let imgW = slidePopupImgEl.clientWidth
        slidePopupImgEl.style.maxWidth = imgW + "px"
        slidePopupImgEl.style.width = "100%"
    })
})

slidePopupBg.addEventListener('click',function(){
    slidePopup.classList.remove("on")
})
