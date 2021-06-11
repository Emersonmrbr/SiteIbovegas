const $mobileMenu = document.querySelectorAll(".js-open-menu");
var mobileMneuOpenClose;

function openMobileMenu() {
  if (mobileMneuOpenClose == "opened") {
    $mobileMenu.forEach(($item) => {
      $item.classList.remove("is-open");
    });
    mobileMneuOpenClose = "closed";
  } else {
    $mobileMenu.forEach(($item) => {
      $item.classList.add("is-open");
    });
    mobileMneuOpenClose = "opened";
  }
}
