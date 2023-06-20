//strat js landing.php

const caraosel = document.querySelector(".caraosel");
const arrowIcon = document.querySelectorAll(".wrapper i");
const firstImg = caraosel.querySelectorAll("img")[0];
let isDragStart=false, prevPageX,prevScrollLeft;
let firstImgWid=firstImg.clientWidth+14;


const showHideIcon=()=>{
    let scrollWidth=caraosel.scrollWidth-caraosel.clientWidth;
    arrowIcon[0].style.display=caraosel.scrollLeft == 0? "none":"block";
    arrowIcon[1].style.display=caraosel.scrollLeft == scrollWidth? "none":"block";
}
arrowIcon.forEach(icon =>{
 
    icon.addEventListener("click",()=>{
        let firstImgWid=firstImg.clientWidth+14;
       caraosel.scrollLeft += icon.id == "left" ? -firstImgWid:firstImgWid;
       setTimeout(() => showHideIcon(), 60);
    });
});

const dragStart =(e) =>{
    isDragStart=true;
    prevPageX=e.pageX;
    prevScrollLeft=caraosel.scrollLeft;
}

const dragging =(e) =>{
    if(!isDragStart) return;
    e.preventDefault();
    let posstionDiff=e.pageX-prevPageX;
    caraosel.classList.add("dragging");
    caraosel.scrollLeft=prevScrollLeft-posstionDiff;
    showHideIcon();
}

const dragStop =() =>{
    isDragStart=false;
    
    caraosel.classList.remove("dragging");
}

caraosel.addEventListener("mousedown", dragStart);
caraosel.addEventListener("mousemove", dragging);
caraosel.addEventListener("mouseup", dragStop);
caraosel.addEventListener("mouseleave", dragStop);

// end landing php

// start login.php
