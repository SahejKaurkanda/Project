const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}





//FOR IMAGE REPLACING EFFECT

const imageContainers = document.querySelectorAll(".image-container");

imageContainers.forEach((container) => {
  const image = container.querySelector("img");

  const oldImage=image.getAttribute("src");

  container.addEventListener("mouseover", () => {
    const newImage=oldImage+"-new.jpg"
    console.log(oldImage)
    console.log(newImage)
    image.setAttribute("src",newImage);
  });

  container.addEventListener("mouseout", () => {
    image.src =oldImage;
  });
});


//for sliding effect

const slides=document.querySelectorAll(".slide");

const btnLeft=document.querySelector(".Button-left");

const btnRight=document.querySelector(".Button-right");

const slider=document.querySelector(".slider");

let curSlide=0;

let maxSlide=slides.length;

slides.forEach((s,i)=>(s.style.transform=`translateX(${100*i}%)`));



btnRight.addEventListener('click',function(){
  if(curSlide===maxSlide-1){
    curSlide=0;
  }
  else{
    curSlide++;
  }

  slides.forEach((s,i)=>(s.style.transform=`translateX(${100*(i-curSlide)}%)`))
})


btnLeft.addEventListener('click',function(){
  if(curSlide===0){
    curSlide=1;
  }
  else{
    curSlide--;
  }

  slides.forEach((s,i)=>(s.style.transform=`translateX(${100*(i-curSlide)}%)`))
})


