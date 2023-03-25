const title_hover = document.querySelectorAll(".title_hover");
title_hover.forEach((item_hover)=>{
    const old_text = item_hover.innerHTML.split("");
    let new_text = "";
    // console.log(item_hover.innerHTML)
    old_text.forEach((item)=>{
        new_text += "<em>"+item+"</em>"
    })
    item_hover.innerHTML = new_text
})

