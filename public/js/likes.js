document.getElementById("heart-color").onclick = function () {
  this.classList.toggle("red");
};

$(function(){
  deSVG('heart-color', true);
});