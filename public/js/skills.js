const skillsElement = [...document.querySelectorAll(".blog .card")]
const skillsBlock = document.querySelector(".blog")
let timeOutSecond = 1000
skillsElement.forEach((item)=>{
    setTimeout(()=>{
        item.classList.add("active")
    }, timeOutSecond)
    timeOutSecond += 500
})
window.addEventListener("scroll", ()=>{
    console.log(window.scrollY)
    console.log(skillsElement[0].scrollHeight)
})
