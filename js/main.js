$(".header__btn").on("click", function () {
  $(".menu, .header__btn").toggleClass("active");
  $("body").toggleClass("lock");
});
$(".menu__list-link").on("click", function () {
  $(".menu, .header__btn").removeClass("active");
  $("body").removeClass("lock");
});
