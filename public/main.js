const chooseColor = document.querySelectorAll(".choose__color-btn");
const contentItem = document.querySelectorAll(".content-item");
const headerContentImges = document.querySelector(".header__content-imges");

let currentTarget;

function open(evt) {
  const target = evt.currentTarget;

  const getAttribute = target.getAttribute("data-button");
  currentTarget = getAttribute;

  contentItem.forEach(function (item) {
    if (item.classList.contains(currentTarget)) {
      item.classList.add("content-item__active");
    } else {
      item.classList.remove("content-item__active");
    }
  });
}

chooseColor.forEach(function (element) {
  element.addEventListener("click", open);
});
