function goToSearch() {
  var main = document.getElementById("main-page");
  var search = document.getElementById("search-page");
  main.style.display = "none";
  main.style.visibility = "hidden";
  search.style.display = "block";
  search.style.visibility = "visible";
}

function goToMain() {
  var main = document.getElementById("main-page");
  var search = document.getElementById("search-page");

  main.style.display = "block";
  main.style.visibility = "visible";
  search.style.display = "none";
  search.style.visibility = "hidden";
}

function getUserInput() {
  target = document.getElementById("keyword-input");
  target.innerText = document.getElementById("keyword-input");
  console.log(target);
}
