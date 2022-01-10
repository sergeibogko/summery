$(".header__btn").on("click", function () {
  $(".menu, .header__btn").toggleClass("active");
  $("body").toggleClass("lock");
});
$(".menu__list-link").on("click", function () {
  $(".menu, .header__btn").removeClass("active");
  $("body").removeClass("lock");
});

var $page = $("html, body");
$('a[href*="#"]').click(function () {
  $page.animate(
    {
      scrollTop: $($.attr(this, "href")).offset().top,
    },
    1500
  );
  return false;
});

var mixer = mixitup(".portfolio__gallery");
