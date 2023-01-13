const board01button = document.getElementById("board01button")
const board02button = document.getElementById("board02button")
const board01list = document.getElementById("board01list")
const board02list = document.getElementById("board02list")

board01button.addEventListener("click",function(){
    board02button.classList.remove("on")
    board02list.classList.remove("on")
    board01button.classList.add("on")
    board01list.classList.add("on")
})
board02button.addEventListener("click",function(){
    board01button.classList.remove("on")
    board01list.classList.remove("on")
    board02button.classList.add("on")
    board02list.classList.add("on")
})