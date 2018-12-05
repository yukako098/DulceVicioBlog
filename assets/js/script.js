addEventListener("scroll", getInfo);

function getInfo() {
  var leftTop = document.getElementById("flower_lefttop");
  var rightTop = document.getElementById("flower_righttop");
  var leftBottom = document.getElementById("flower_leftbottom");
  var rightBottom = document.getElementById("flower_rightbottom");

  if (pageYOffset >= 200) {
    leftTop.style.transition = "1s";
    leftTop.style.transform = "translate(-150px, -150px)";

    rightTop.style.transition = "1s";
    rightTop.style.transform = "translate(150px, -150px)";

    leftBottom.style.transition = "1s";
    leftBottom.style.transform = "translate(-150px, 150px)";

    rightBottom.style.transition = "1s";
    rightBottom.style.transform = "translate(150px, 150px)";
  } else if (pageXOffset < 200) {
    leftTop.style.transition = "1s";
    leftTop.style.transform = "";

    rightTop.style.transition = "1s";
    rightTop.style.transform = "";

    leftBottom.style.transition = "1s";
    leftBottom.style.transform = "";

    rightBottom.style.transition = "1s";
    rightBottom.style.transform = "";
  }
}
