<?php
/*
Template Name: home
*/
?>

<?php get_header();?>
  <main>
    <section id="services" class="offer">
      <div class="container">
        <div class="offer_heading">
          <p class="offer-title title">What we Offer</p>
          <h2 class="offer__head">We offer full service auto repair & maintenance</h2>
        </div>
        <ul class="offer__list">
          <li class="offer__item">
            <img class="offer__item-img" src="<?php bloginfo('template_url');?>/assets/img/diagnostics.svg" alt="">
            <span class="offer__item-title title">Diagnostics</span>
          </li>
          <li class="offer__item">
            <img class="offer__item-img" src="<?php bloginfo('template_url');?>/assets/img/EngineRepair.svg" alt="">
            <span class="offer__item-title title">Engine Repair</span>
          </li>
          <li class="offer__item">
            <img class="offer__item-img" src="<?php bloginfo('template_url');?>/assets/img/WheelRepair.svg" alt="">
            <span class="offer__list-title title">Wheel Repair</span>
          </li>
          <li class="offer__item">
            <img class="offer__item-img" src="<?php bloginfo('template_url');?>/assets/img/OilFilter.svg" alt="">
            <span class="offer__item-title title">Oil Filter</span>
          </li>
          <li class="offer__item">
            <img class="offer__item-img" src="<?php bloginfo('template_url');?>/assets/img/BodyWork.svg" alt="">
            <span class="offer__item-title title">Body Work</span>
          </li>
          <li class="offer__item">
            <img class="offer__item-img" src="<?php bloginfo('template_url');?>/assets/img/Batteries.svg" alt="">
            <span class="offer__item-title title">Batteries</span>
          </li>
          <li class="offer__item">
            <img class="offer__item-img" src="<?php bloginfo('template_url');?>/assets/img/InsuranceClaim.svg" alt="">
            <span class="offer__item-title title">Insurance Claim</span>
          </li>
          <li class="offer__item">
            <img class="offer__item-img" src="<?php bloginfo('template_url');?>/assets/img/CustomService.svg" alt="">
            <span class="offer__item-title title">Custom Service</span>
          </li>
        </ul>
        <div class="offer__learn">
          <a class="offer__service" href="<?php echo get_permalink(94); ?>">
            <span class="offer__body body">Learn about services</span>
            <svg class="offer__service-arrow" width="53.003906" height="13.321777" viewBox="0 0 53.0039 13.3218"
              fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path id="Icon"
                d="M49.58 5.66L45.63 1.71C45.24 1.31 45.24 0.69 45.63 0.29C46.03 -0.1 46.65 -0.1 47.05 0.29L52.7 5.95C53.1 6.34 53.1 6.97 52.7 7.36L47.05 13.02C46.65 13.42 46.03 13.42 45.63 13.02C45.24 12.62 45.24 12 45.63 11.61L49.58 7.66L0 7.66L0 5.66L49.58 5.66Z"
                fill="#1E1B1B" fill-opacity="1.000000" fill-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </section>
    <section class="help">
      <div class="container">
        <div class="help__inner">
          <div class="help__left">
            <h2 class="help__heading">We follow a clear process to help you out.</h2>
            <p class="help__title">Through True Rich Attended does no end it his mother since real had half every him
              case in packages enquire</p>
            <button type="button" class="help_button button">Learn more</button>
          </div>
          <div class="help__right">
            <ul class="help__list">
              <li class="help__item">
                <h4 class="help__item-title first">Get a Quote</h4>
                <p class="help__item-body line">Through True Rich Attended does no end it his mother since real had half
                  every.</p>
              </li>
              <li class="help__item">
                <h4 class="help__item-title second">Book an Appointment</h4>
                <p class="help__item-body line">Through True Rich Attended does no end it his mother since real had half
                  every.</p>
              </li>
              <li class="help__item">
                <h4 class="help__item-title third">Get your Service Done</h4>
                <p class="help__item-body">Through True Rich Attended does no end it his mother since real had half
                  every.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="contact__left">
        <img class="contact__img" src="<?php bloginfo('template_url');?>/assets/img/car.jpeg" alt="">
      </div>
      <div class="contact__right">
        <img class="contact__img" src="<?php bloginfo('template_url');?>/assets/img/repair.jpeg" alt="">
      </div>
      <div class="contact__overlay">
        <h3>Get in touch with us for your service related query</h3>
        <button type="button" class="contact__button button">Contact Us</button>
      </div>
    </section>
    <section class="history">
      <div class="container">
        <ul class="history__list">
          <li class="history_item">
            <h2 class="history__heading">20+</h2>
            <span class="history__title title">Proffesional</span>
          </li>
          <li class="history_item">
            <h2 class="history__heading">10+</h2>
            <span class="history__title title">Years Experience</span>
          </li>
          <li class="history_item">
            <h2 class="history__heading">12K+</h2>
            <span class="history__title title">Service Closed</span>
          </li>
          <li class="history_item">
            <h2 class="history__heading">100%</h2>
            <span class="history__title title">Customer Satisfaction</span>
          </li>
        </ul>
      </div>
    </section>
    <section class="brands">
      <div class="container">
        <h2 class="brands__heading">Brands we Serve</h2>
        <ul class="brands__list">
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-1.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-2.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-3.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-4.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-5.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-1.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-2.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-3.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-4.svg" alt=""></div>
          </li>
          <li class="brands__item">
            <div class="brands__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/logo-5.svg" alt=""></div>
          </li>
        </ul>
      </div>
    </section>
    <section id="blog" class="blog">
      <div class="container">
        <h2 class="blog__heading">Our blog</h2>
        <ul class="blog__nav">
          <li><button data-filter="all" class="blog__nav-button blog__nav-button--active" type="button">Latest</button>
          </li>
          <li><button data-filter=".popular" class="blog__nav-button" type="button">Popular</button></li>
          <li><button data-filter=".favorites" class="blog__nav-button" type="button">Favorites</button></li>
        </ul>
        <ul class="blog__list">
        <?php
global $post;

$myposts = get_posts([
	'numberposts' => -1,
  'post_type' => 'blog',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
    
          <li class="mix blog__item <?php echo esc_html(get_post_meta(get_the_ID(), 'blog_category', true)); ?>">
            <a class="blog__item-link" href="#">
              <div class="blog__img-box"><?php the_post_thumbnail(array(404,266)); ?></div>
              <span class="blog__body body"><?php switch_to_locale('en_US');
echo 'Posted on ' . get_the_date('F jS Y');
restore_previous_locale(); ?></span>
              <h4 class="blog__item-heading"><?php echo get_post_meta(get_the_ID(), 'blog_title', true); ?></h4>
              <p class="blog__item-body body"><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_body', true)); ?></p>
            </a>
          </li>

<?php } } wp_reset_postdata(); ?>
          
          <!-- <li class="mix blog__item favorites">
            <a href="">
              <div class="blog__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/img2.jpeg" alt="" class="blog__img"></div>
              <span class="blog__body body">Posted on October 6th 2021</span>
              <h4 class="blog__item-heading">5 Genius Car Accessories You Should Never Drive Without</h4>
              <p class="body">We provide a full range of front end mechanical repairs for all makes and models We provide
                a full range of front end mechanical repairs for all makes and models</p>
            </a>
          </li>
          <li class="mix blog__item favorites">
            <a href="">
              <div class="blog__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/img3.jpeg" alt="" class="blog__img"></div>
              <span class="blog__body body">Posted on October 6th 2021</span>
              <h4 class="blog__item-heading">We provide blow straight past it with the wheels skidding</h4>
              <p class="body">We provide a full range of front end mechanical repairs for all makes and models We provide
                a full range of front end mechanical repairs for all makes and models</p>
            </a>
          </li>
          <li class="mix blog__item popular">
            <a href="">
              <div class="blog__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/img4.jpeg" alt="" class="blog__img"></div>
              <span class="blog__body body">Posted on October 6th 2021</span>
              <h4 class="blog__item-heading">We provide blow straight past it with the wheels skidding</h4>
              <p class="body">We provide a full range of front end mechanical repairs for all makes and models We provide
                a full range of front end mechanical repairs for all makes and models</p>
            </a>
          </li>
          <li class="mix blog__item favorites">
            <a href="">
              <div class="blog__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/img5.jpeg" alt="" class="blog__img"></div>
              <span class="blog__body body">Posted on October 6th 2021</span>
              <h4 class="blog__item-heading">5 Genius Car Accessories You Should Never Drive Without</h4>
              <p class="body">We provide a full range of front end mechanical repairs for all makes and models We provide
                a full range of front end mechanical repairs for all makes and models</p>
            </a>
          </li>
          <p><li class="mix blog__item favorites"></p>
            <a href="">
              <div class="blog__img-box"><img src="<?php bloginfo('template_url');?>/assets/img/img6.jpeg" alt="" class="blog__img"></div>
              <span class="blog__body body">Posted on October 6th 2021</span>
              <h4 class="blog__item-heading">5 Genius Car Accessories You Should Never Drive Without</h4>
              <p class="body">We provide a full range of front end mechanical repairs for all makes and models We provide
                a full range of front end mechanical repairs for all makes and models</p>
            </a>
          </li> -->
        </ul>
      </div>
    </section>
    <section class="review">
      <div class="container">
        <h2 class="review__heading">Our customers say the nicest things about our service</h2>
        <ul class="review__list">
        <?php
global $post;

$myposts = get_posts([
	'numberposts' => -1,
  'post_type' => 'review',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
    
          <div class="review__item-inner">
            <li class="review__item">
              <div class="review__item-top">
                <?php the_post_thumbnail()?>
                <div class="review__item-info">
                  <span class="review__item-name title"><?php the_field('reviewer_name'); ?></span>
                  <span class="review__item-body body"><?php the_field('reviewer_city'); ?></span>
                </div>
              </div>
              <p class="review__item-title title"><?php the_field('reviewer_comment'); ?></p>
            </li>
          </div>

<?php } } wp_reset_postdata(); ?>
          
        </ul>
        <div class="review__bottom">
          <ul class="review__sliders">
            <li class="review__slider"></li>
          </ul>
          <div class="review__arrows">
            <button class="review__arrow-left" type="button">
            </button>
            <button class="review__arrow-right" type="button">
            </button>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class="questions">
      <div class="container">
        <h2 class="questions__heading">Frequently Asked Questions</h2>
        <ul class="questions__list">
          <li class="questions__item">
            <a class="questions__link" href="">
              <div class="questions__item-top">
                <span class="title">How long should a car repair take?</span>
                <span class="questions__item-switch"></span>
              </div>
            </a>
            <p style="display: none" class="questions__item-title">I have got my car repaired at
              Finsweet I have got my car repaired at Finsweet</p>
          </li>
          <li class="questions__item">
            <a class="questions__link" href="">
              <div class="questions__item-top">
                <span class="title">How do I schedule my car's appointment ?</span>
                <span class="questions__item-switch"></span>
              </div>
            </a>
            <p style="display: none" class="questions__item-title">I have got my car repaired at Finsweet many times
              before, they are good at what they do. Not only did they repair my car I have got my car repaired at
              Finsweet I have got my car repaired at Finsweet</p>
          </li>
          <li class="questions__item">
            <a class="questions__link" href="">
              <div class="questions__item-top">
                <span class="title">What are the repair services provided?</span>
                <span class="questions__item-switch"></span>
              </div>
            </a>
            <p style="display: none" class="questions__item-title">I have got my car repaired at Finsweet many times
              before, they are good at what they do. Not only did they repair my car I have got my car repaired at
              Finsweet I have got my car repaired at Finsweet</p>
          </li>
          <li class="questions__item">
            <a class="questions__link" href="">
              <div class="questions__item-top">
                <span class="title">What are the repair services provided?</span>
                <span class="questions__item-switch"></span>
              </div>
            </a>
            <p style="display: none" class="questions__item-title">I have got my car repaired at Finsweet many times
              before, they are good at what they do. Not only did they repair my car I have got my car repaired at
              Finsweet I have got my car repaired at Finsweet</p>
          </li>
          <li class="questions__item">
            <a class="questions__link" href="">
              <div class="questions__item-top">
                <span class="title">Genuine spare parts during car repair?</span>
                <span class="questions__item-switch"></span>
              </div>
            </a>
            <p style="display: none" class="questions__item-title">I have got my car repaired at Finsweet many times
              before, they are good at what they do. Not only did they repair my car I have got my car repaired at
              Finsweet I have got my car repaired at Finsweet</p>
          </li>
        </ul>
      </div>
    </section>
    <section id="contact" class="message">
      <div class="container">
        <div class="message__inner">
          <div class="message__content">
            <div class="message__form">
              <h2 class="message__heading">Get in touch with our experts</h2>
                <?php echo do_shortcode('[contact-form-7 id="05a4f77" title="Контактная форма"]')?>
              </form>
            </div>
            <div>
              <div class="message__contact">
                <span class="message__body body">Address</span>
                <span class="message__title title">NH 234 Public Square San Francisco 65368</span>
                <span class="message__body body">Contact Details</span>
                <?php 
$phone = get_field('phone'); // Получаем значение поля
$phone_number = intval(preg_replace('/\D/', '', $phone)); // Удаляем все символы, кроме цифр
?>
                <span class="message__title title"><a href="tel: <?php echo $phone_number ?>"><?php the_field('phone') ?></a></span>
                <span class="message__title title"><a href="email: Finsweet@gmail.com">Finsweet@gmail.com</a></span>
                <span class="message__body body">Opening Hours</span>
                <span class="message__title title">Monday to Friday 9:00 AM to 10:00 AM</span>
              </div>
            </div>
          </div>
          <div class="message__map"><iframe
              src="https://yandex.ru/map-widget/v1/?um=constructor%3A88e8fefac5a9fc54f69c1212e141cacf01f6d5d49d55f81fb5786a5508f6eda7&amp;source=constructor"
              width="100%" height="100%" frameborder="0"></iframe></div>
        </div>
      </div>
    </section>
    <section class="img">
      <img src="<?php bloginfo('template_url');?>/assets/img/last.jpeg" alt="">
    </section>
  </main>
<?php get_footer();?>