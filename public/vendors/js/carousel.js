const slide = document.querySelector(".slider");
const btn1 = document.querySelector(".btn1");
const btn2 = document.querySelector(".btn2");
const btn3 = document.querySelector(".btn3");
btn1.onclick = function () {
  slide.style.transform = "translateX(0px)";
};
btn2.onclick = function () {
  slide.style.transform = "translateX(-100%)";
};
btn3.onclick = function () {
  slide.style.transform = "translateX(-200%)";
};
