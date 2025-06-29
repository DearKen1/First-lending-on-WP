$(function () {

  $(".rateYo").rateYo ({
    rating: 4.5,
    starWidth: "36px",
  });

  Fancybox.bind('[data-fancybox="gallery"]', {}); 

  var mixer = mixitup('.blog__list')
    $('.blog__nav-button').on('click', function(){
      $('.blog__nav-button').removeClass('blog__nav-button--active')
      $(this).addClass('blog__nav-button--active')
    });

    $('.review__list').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      draggable: false,
      dots: true,
      speed: 400,
      prevArrow: $('.review__arrow-left'),
      nextArrow: $('.review__arrow-right'),
      appendDots: $('.review__sliders'),
      responsive: [
        {
          breakpoint: 840,
          settings: {
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 600,
          settings: {
            prevArrow: false,
            nextArrow: false,
            slidesToShow: 1,
          }
        }
      ]
    });

    $('.questions__item-top').on('click', function(e) {
      e.preventDefault();
      if ($(this).hasClass('questions__item-top--active')) {
        $(this).removeClass('questions__item-top--active')
        $(this).closest('.questions__item').find('.questions__item-title').slideUp();
      } else {
        $('.questions__item-top').removeClass('questions__item-top--active')
        $('.questions__item-title').slideUp()
        $(this).closest('.questions__item').find('.questions__item-title').slideDown()
        $(this).addClass('questions__item-top--active');
      }
    });

    $('.burger').on('click', function(e) {
      e.preventDefault();
      $('.header__box').toggleClass('header__box--open');
      $('.header__nav').toggleClass('header__nav--open');
      $('.overlay__window').toggleClass('overlay__window--active'); // добавляем/убираем затемнение
    });
    
    // При клике на оверлей — закрываем меню и убираем затемнение
    $('.overlay__window').on('click', function() {
      $(this).removeClass('overlay__window--active');
      $('.header__box').removeClass('header__box--open');
      $('.header__nav').removeClass('header__nav--open');
    });
    
    // Обработчик для ссылок в .header__top (без e.preventDefault(), чтобы ссылки работали)
    $('.header__nav a').on('click', function() {
      $('.header__box').toggleClass('header__box--open');
      $('.header__nav').toggleClass('header__nav--open');
      $('.overlay__window').toggleClass('overlay__window--active');
    });

    $('.header__logo').on('click', function() {
      $('.header__box').removeClass('header__box--open');
      $('.header__nav').removeClass('header__nav--open');
      $('.overlay__window').removeClass('overlay__window--active');
    })
});