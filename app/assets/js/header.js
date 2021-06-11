// const $header = document.querySelector(".js-header");
// const $stickers = document.querySelectorAll(".js-sticky");
// const $stickerLag = document.querySelector(".js-sticky__lag");
const $mobileMenu = document.querySelectorAll(".js-open-menu");
// const $idMobileMenu = document.getElementById("id-menu-mobile");
// var varCollapseExpand;
var mobileMneuOpenClose;
// window.onscroll = function () {
//   headerSticky();
// };

// function headerSticky() {
//   if (
//     window.pageYOffset > $header.offsetTop &&
//     varCollapseExpand != "collapsed"
//   ) {
//     collapse();
//   } else if (
//     window.pageYOffset <= $header.offsetTop &&
//     varCollapseExpand != "expanded"
//   ) {
//     expand();
//   }
// }

// function collapse() {
//   $stickers.forEach(($sticky) => {
//     $sticky.classList.add("has-sticker");
//   });
//   $stickerLag.style.transition = "350ms ease-in 0ms";
//   varCollapseExpand = "collapsed";
// }

// function expand() {
//   $stickers.forEach(($sticky) => {
//     $sticky.classList.remove("has-sticker");
//   });
//   $stickerLag.style.transition = "450ms ease-in 350ms";
//   varCollapseExpand = "expanded";
// }

function openMobileMenu() {
  if (mobileMneuOpenClose == "opened") {
    $mobileMenu.forEach(($item) => {
      $item.classList.remove("is-open");
      // if ($item.classList.contains("c-mobile-menu")) {
      //   $item.style.height = 0;
      // }
    });
    // headerSticky();
    mobileMneuOpenClose = "closed";
  } else {
    $mobileMenu.forEach(($item) => {
      $item.classList.add("is-open");
      // if ($item.classList.contains("c-mobile-menu")) {
      //   $item.style.height = 270 + "px";
      // }
      // console.log($item.children[0].children.length);
    });
    // collapse();
    mobileMneuOpenClose = "opened";
  }
}
