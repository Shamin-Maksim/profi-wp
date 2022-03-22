<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон обычной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header(); // Подключаем хедер?>
<main class="main">
   <section class="main-section">
      <div class="main-section__container _container">
         <div class="main-section__slider swiper-slider main-slider">
            <div class="swiper-wrapper main-section__wrapper">
               <div class="main-slider__item swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg1.jpg);">
                  <h2 class="main-slider__title">Трубопроводная
                     арматура</h2>
                  <div class="main-slider__subtitle section-subtitle">
                     Поставка, изготовление по чертежам заказчика деталей трубопровода и запорной арматуры
                  </div>
                  <div data-bs-toggle="modal" data-bs-target="#callback" class="main-slider__button main-btn">
                     Заказать
                  </div>
                  <div class="main-slider__answer">
                     Ответим в течение 10 минут
                  </div>
               </div>
               <div class="main-slider__item swiper-slide">
                  <h2 class="main-slider__title">Трубопроводная
                     арматура</h2>
                  <div class="main-slider__subtitle section-subtitle">
                     Поставка, изготовление по чертежам заказчика деталей трубопровода и запорной арматуры
                  </div>
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="main-slider__button main-btn">
                     Заказать
                  </button>
                  <div class="main-slider__answer">
                     Ответим в течение 10 минут
                  </div>
               </div>
               <div class="main-slider__item swiper-slide">
                  <h2 class="main-slider__title">Трубопроводная
                     арматура</h2>
                  <div class="main-slider__subtitle section-subtitle">
                     Поставка, изготовление по чертежам заказчика деталей трубопровода и запорной арматуры
                  </div>
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="main-slider__button main-btn">
                     Заказать
                  </button>
                  <div class="main-slider__answer">
                     Ответим в течение 10 минут
                  </div>
               </div>
               <div class="main-slider__item swiper-slide">
                  <h2 class="main-slider__title">Трубопроводная
                     арматура</h2>
                  <div class="main-slider__subtitle section-subtitle">
                     Поставка, изготовление по чертежам заказчика деталей трубопровода и запорной арматуры
                  </div>
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="main-slider__button main-btn">
                     Заказать
                  </button>
                  <div class="main-slider__answer">
                     Ответим в течение 10 минут
                  </div>
               </div>
               <div class="main-slider__item swiper-slide">
                  <h2 class="main-slider__title">Трубопроводная
                     арматура</h2>
                  <div class="main-slider__subtitle section-subtitle">
                     Поставка, изготовление по чертежам заказчика деталей трубопровода и запорной арматуры
                  </div>
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="main-slider__button main-btn">
                     Заказать
                  </button>
                  <div class="main-slider__answer">
                     Ответим в течение 10 минут
                  </div>
               </div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
      </div>
   </section>
   <section class="sell-section">
      <div class="sell-section__container _container">
         <h2 class="sell-section__title section-title">Продажа запорной арматуры </h2>
         <div class="sell-section__subtitle section-subtitle">Мы поможем подобрать и доставить товар в срок.
            Широкий ассортимент, быстрые поставки </div>
         <div class="coursor visible-hand">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 320 300" height="42" width="42">
               <rect class="tooltip-horizontal-scroll-icon_card" x="480" width="200" height="200" rx="5" fill="rgba(190,190,190,0.3)"></rect>
               <rect class="tooltip-horizontal-scroll-icon_card" y="0" width="200" height="200" rx="5" fill="rgba(190,190,190,0.3)"></rect>
               <rect class="tooltip-horizontal-scroll-icon_card" x="240" width="200" height="200" rx="5" fill="rgba(190,190,190,0.3)"></rect>
               <path class="tooltip-horizontal-scroll-icon_hand"
                  d="M78.9579 285.7C78.9579 285.7 37.8579 212.5 20.5579 180.8C-2.44209 138.6 -6.2422 120.8 9.6579 112C19.5579 106.5 33.2579 108.8 41.6579 123.4L61.2579 154.6V32.3C61.2579 32.3 60.0579 0 83.0579 0C107.558 0 105.458 32.3 105.458 32.3V91.7C105.458 91.7 118.358 82.4 133.458 86.6C141.158 88.7 150.158 92.4 154.958 104.6C154.958 104.6 185.658 89.7 200.958 121.4C200.958 121.4 236.358 114.4 236.358 151.1C236.358 187.8 192.158 285.7 192.158 285.7H78.9579Z"
                  fill="rgba(190,190,190,1)"></path>
               <style>
               .tooltip-horizontal-scroll-icon_hand {
                  animation: tooltip-horizontal-scroll-icon_anim-scroll-hand 2s infinite
               }

               .tooltip-horizontal-scroll-icon_card {
                  animation: tooltip-horizontal-scroll-icon_anim-scroll-card 2s infinite
               }

               @keyframes tooltip-horizontal-scroll-icon_anim-scroll-hand {
                  0% {
                     transform: translateX(80px) scale(1);
                     opacity: 0
                  }

                  10% {
                     transform: translateX(80px) scale(1);
                     opacity: 1
                  }

                  20%,
                  60% {
                     transform: translateX(175px) scale(.6);
                     opacity: 1
                  }

                  80% {
                     transform: translateX(5px) scale(.6);
                     opacity: 1
                  }

                  to {
                     transform: translateX(5px) scale(.6);
                     opacity: 0
                  }
               }

               @keyframes tooltip-horizontal-scroll-icon_anim-scroll-card {

                  0%,
                  60% {
                     transform: translateX(0)
                  }

                  80%,
                  to {
                     transform: translateX(-240px)
                  }
               }
               </style>
            </svg>
         </div>
         <div class="sell-section__items sell-items">
            <div class="sell-items__column">
               <a href="tovar.html" class="sell-items__block">
                  <div class="sell-items__warehouse">на складе</div>
                  <div class="sell-items__img">
                     <picture>
                        <source srcset="img/1.webp" type="image/webp">
                        <img src="img/1.png" alt="">
                     </picture>
                  </div>
                  <div class="sell-items__text">
                     <h3 class="sell-items__title">Краны шаровые</h3>
                     <p class="sell-items__subtitle">Широкий ассортимент шаровых кранов КШЦМ, КШЦП, КШЦФ различных типоразмеров.
                     </p>
                  </div>
               </a>
               <div class="button-block">
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="sell-items__button main-btn main-btn_100">Заказать</button>
                  <a href="tovar.html" class="sell-items__more"><span>Подробнее</span></a>
               </div>
            </div>
            <div class="sell-items__column">
               <a href="tovar.html" class="sell-items__block">
                  <div class="sell-items__warehouse">на складе</div>
                  <div class="sell-items__img">
                     <picture>
                        <source srcset="img/2.webp" type="image/webp">
                        <img src="img/2.png" alt="">
                     </picture>
                  </div>
                  <div class="sell-items__text">
                     <h3 class="sell-items__title">Заглушки</h3>
                     <p class="sell-items__subtitle">Различные варианты фланцевых заглушек для стальных труб, широко
                        используемых
                        в
                        различных отрослях
                     </p>
                  </div>
               </a>
               <div class="button-block">
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="sell-items__button main-btn main-btn_100">Заказать</button>
                  <a href="tovar.html" class="sell-items__more"><span>Подробнее</span></a>
               </div>
            </div>
            <div class="sell-items__column">
               <a href="tovar.html" class="sell-items__block">
                  <div class="sell-items__warehouse">на складе</div>
                  <div class="sell-items__img">
                     <picture>
                        <source srcset="img/3.webp" type="image/webp">
                        <img src="img/3.png" alt="">
                     </picture>
                  </div>
                  <div class="sell-items__text">
                     <h3 class="sell-items__title">Отводы</h3>
                     <p class="sell-items__subtitle">Стальные отводы ГОСТ 30753-2001, ГОСТ 17375-2001, ГОСТ 22793-83,
                     </p>
                  </div>
               </a>
               <div class="button-block">
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="sell-items__button main-btn main-btn_100">Заказать</button>
                  <a href="tovar.html" class="sell-items__more"><span>Подробнее</span></a>
               </div>
            </div>
            <div class="sell-items__column">
               <a href="tovar.html" class="sell-items__block">
                  <div class="sell-items__warehouse">на складе</div>
                  <div class="sell-items__img">
                     <picture>
                        <source srcset="img/4.webp" type="image/webp">
                        <img src="img/4.png" alt="">
                     </picture>
                  </div>
                  <div class="sell-items__text">
                     <h3 class="sell-items__title">Фланец</h3>
                     <p class="sell-items__subtitle">Воротниковые и плоские приварные фланцы по ГОСТ 33259-2015
                     </p>
                  </div>
               </a>
               <div class="button-block">
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="sell-items__button main-btn main-btn_100">Заказать</button>
                  <a href="tovar.html" class="sell-items__more"><span>Подробнее</span></a>
               </div>
            </div>
            <div class="sell-items__column">
               <a href="tovar.html" class="sell-items__block">
                  <div class="sell-items__warehouse">на складе</div>
                  <div class="sell-items__img">
                     <picture>
                        <source srcset="img/5.webp" type="image/webp">
                        <img src="img/5.png" alt="">
                     </picture>
                  </div>
                  <div class="sell-items__text">
                     <h3 class="sell-items__title">Опоры ОСТ</h3>
                     <p class="sell-items__subtitle">Различные варианты фланцевых заглушек для стальных труб, широко
                        используемых
                        в
                        различных отрослях
                     </p>
                  </div>
               </a>
               <div class="button-block">
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="sell-items__button main-btn main-btn_100">Заказать</button>
                  <a href="tovar.html" class="sell-items__more"><span>Подробнее</span></a>
               </div>
            </div>
            <div class="sell-items__column">
               <a href="tovar.html" class="sell-items__block">
                  <div class="sell-items__warehouse">на складе</div>
                  <div class="sell-items__img">
                     <picture>
                        <source srcset="img/6.webp" type="image/webp">
                        <img src="img/6.png" alt="">
                     </picture>
                  </div>
                  <div class="sell-items__text">
                     <h3 class="sell-items__title">Хомуты</h3>
                     <p class="sell-items__subtitle">Стальные отводы ГОСТ 30753-2001, ГОСТ 17375-2001, ГОСТ 22793-83,
                  </div>
               </a>
               <div class="button-block">
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="sell-items__button main-btn main-btn_100">Заказать</button>
                  <a href="tovar.html" class="sell-items__more"><span>Подробнее</span></a>
               </div>
            </div>
            <div class="sell-items__column">
               <a href="tovar.html" class="sell-items__block">
                  <div class="sell-items__warehouse">на складе</div>
                  <div class="sell-items__img">
                     <picture>
                        <source srcset="img/7.webp" type="image/webp">
                        <img src="img/7.png" alt="">
                     </picture>
                  </div>
                  <div class="sell-items__text">
                     <h3 class="sell-items__title">Переходы ПК ГОСТ 17378-2001</h3>
                     <p class="sell-items__subtitle">Стальные приварные переходы Ост 34 10.753-97, ПК ГОСТ 17378-2001, ПЭ ГОСТ
                        17378-2001.
                     </p>
                  </div>

               </a>
               <div class="button-block">
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="sell-items__button main-btn main-btn_100">Заказать</button>
                  <a href="tovar.html" class="sell-items__more"><span>Подробнее</span></a>
               </div>
            </div>
            <div class="sell-items__column">
               <a href="tovar.html" class="sell-items__block">
                  <div class="sell-items__warehouse">на складе</div>
                  <div class="sell-items__img">
                     <picture>
                        <source srcset="img/8.webp" type="image/webp">
                        <img src="img/8.png" alt="">
                     </picture>
                  </div>
                  <div class="sell-items__text">
                     <h3 class="sell-items__title">Затворы</h3>
                     <p class="sell-items__subtitle">Стальные отводы ГОСТ 30753-2001, ГОСТ 17375-2001, ГОСТ 22793-83,
                     </p>
                  </div>

               </a>
               <div class="button-block">
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="sell-items__button main-btn main-btn_100">Заказать</button>
                  <a href="tovar.html" class="sell-items__more"><span>Подробнее</span></a>
               </div>
            </div>

         </div>
      </div>
   </section>
   <section class="services">
      <div class="services__container _container">
         <h2 class="services__title section-title">
            Услуги
         </h2>
         <div class="services__block">
            <div class="services__left">
               <div class="services__text block-text">
                  <div class="block-text__title">Подбираем краны</div>
                  <div class="block-text__subtitle">Особенности и преимущества кранов. Шаровые краны, цилиндрические краны,
                     запорные и распределительные</div>
               </div>

               <div class="services__img">
                  <picture>
                     <source srcset="img/img1.webp" type="image/webp">
                     <img src="img/img1.jpg" width="493px" alt="">
                  </picture>
               </div>
            </div>
            <div class="services__right">
               <div class="services__text block-text">
                  <div class="block-text__title">Переходы ПК И хомуты </div>
                  <div class="block-text__subtitle">Основные особенности при подборе хомутов и переходов </div>
               </div>
               <div class="services__img">
                  <picture>
                     <source srcset="img/img22.jpg" media="(max-width:1228px)">
                     <source srcset="img/img2.webp" type="image/webp">
                     <img src="img/img2.jpg" width="698px" alt="">
                  </picture>
               </div>
            </div>
         </div>
         <div class="services__form services-form">
            <div class="services-form__text">
               <div class="services-form__title">Соберём заказ <span>онлайн</span> и поставим в любой регион </div>
               <div class="services-form__subtitle block-text__subtitle block-text__subtitle_gray">Наши менеджеры помогут
                  подобрать нужную вам
                  арматуру и договориться о
                  ближайших поставках </div>
            </div>
            <div class="services-form__block">
               <form class="needs-validation form" novalidate="" method="POST" action="#" enctype="multipart/form-data" name="addcom1" id="addcom1"
                  onsubmit="return false">
                  <div class="form__container">
                     <h4 class="form__title">Оставьте ваши данные </h4>
                     <div class="form-block form__in">
                        <input type="hidden" name="from" value="Перезвоните мне. Консультация">
                        <div class="err" id="cerror"></div>
                        <div class="form-block__input">
                           <input type="tel" class="form-control" name="phone" placeholder="+7 (___)___-__-__" required="">
                        </div>
                        <div class="form-block__input">
                           <input type="text" class="form-control" name="name" placeholder="Ваше имя" required="">
                        </div>
                        <button onclick="doLoad1(document.getElementById('addcom1'))" class="main-btn">
                           Познакомиться
                        </button>
                        <!--<div class="form-check">
				<input type="checkbox" class="check" checked="" id="check1">
				<label class="form-check-label" for="check1">Я принимаю условия <a data-bs-toggle="modal"
						data-bs-target="#security-politics">политики конфеденциальности</a></label>
			</div>-->
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <section class="reviews">
      <div class="reviews__container _container">
         <h2 class="reviews__title section-title">Отзывы </h2>
         <div class="reviews__subtitle section-subtitle">Наше молодое предприятие за небольшой, но эффективный период своей
            деятельности заслужило уважение у крупнейших предприятий отрасли в области технических изысканий, производства и
            поставки трубопроводной арматуры.</div>
         <div class="reviews__block block-review">

            <a href="#" class="block-review__video video-block">
               <div class="block-review__pic">
                  <picture>
                     <source srcset="img/video.webp" type="image/webp">
                     <img src="img/video.jpg" alt="">
                  </picture>
               </div>

               <div class="video-block__text">
                  <div class="video-block__img">
                     <img src="img/play.svg" alt="">
                  </div>
                  <div class="video-block__about">
                     <div class="video-block__title reviews__name">Сергей</div>
                     <div class="video-block__subtitle">Завод “Профитрейл”</div>
                  </div>
               </div>
            </a>
            <div class="block-review__vertical">
               <div class="block-review__row">
                  <div class="block-review__img">
                     <picture>
                        <source srcset="img/avatar1.webp" type="image/webp">
                        <img src="img/avatar1.png" alt="">
                     </picture>
                  </div>
                  <div class="block-review__title reviews__name">Аркадий</div>
                  <div class="block-review__subtitle block-review__subtitle_note">Выражаем Вам нашу искреннюю благодарность и
                     глубокую
                     признательность за плодотворное сотрудничество в 2020 г. в рамках поставки запорной арматуры для нужд нашего
                     предприятия.</div>
               </div>
               <div class="block-review__row">
                  <div class="block-review__img">
                     <picture>
                        <source srcset="img/avatar2.webp" type="image/webp">
                        <img src="img/avatar2.png" alt="">
                     </picture>
                  </div>
                  <div class="block-review__title reviews__name">Валентин</div>
                  <div class="block-review__subtitle block-review__subtitle_note">
                     Продукция соответствует требованиям нормативно-технической документации.... замечаний не обнаружено.
                  </div>
               </div>
            </div>
         </div>
         <div class="reviews__open open-block">
            <div class="open-block__title section-title">
               Открытость во всём
            </div>
            <div class="open-block__subtitle section-subtitle">
               Знаете о нас? Напишите отзыв, это поможет другим людям узнать о нас больше
            </div>
            <button data-bs-toggle="modal" data-bs-target="#callback" class="open-block__button main-btn">
               Оставить отзыв
            </button>
         </div>
         <div class="map">
            <div class="map__block">
               <div class="map__top map_border">
                  <div class="map__title">
                     Производство
                  </div>
                  <div class="map__text">
                     <div class="map__disc">
                        Адрес нахождения
                     </div>
                     <div class="map__subtitle">Город Майком республика Адыгея, Воздушная 54 </div>
                  </div>
               </div>
               <div class="map__bottom map_border">
                  <div class="map__title">
                     Офис
                  </div>
                  <div class="map__text map__text_2">
                     <div class="map__disc">
                        Адрес нахождения
                     </div>
                     <div class="map__subtitle">Город Майком республика Адыгея, Воздушная 54 </div>
                  </div>
                  <div class="map__text">
                     <div class="map__disc">
                        Контактный телефон
                     </div>
                     <a href="tel:+79034650809" class="map__subtitle">
                        +7(903) 465 08 09
                     </a>
                  </div>
                  <button data-bs-toggle="modal" data-bs-target="#callback" class="map__bnt main-btn">Заказать звонок</button>
               </div>

            </div>
            <div id="map"></div>
         </div>
      </div>
   </section>
   <section class="faq">
      <div class="faq__container _container">
         <h2 class="faq__title section-title">Ответы на частые вопросы</h2>
         <div class="faq__subtitle section-subtitle">Не нашли ответа на свой вопрос — напишите нам</div>
         <div class="faq__accordion">
            <div class="accordion accordion-flush" id="accordionFlushExample">
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                        aria-expanded="false" aria-controls="flush-collapseOne">
                        Как подобрать арматуру ?
                     </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                        aria-expanded="false" aria-controls="flush-collapseTwo">
                        Сколько по времени идёт доставка?
                     </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                        filled with some actual content.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                        aria-expanded="false" aria-controls="flush-collapseThree">
                        Как выбрать фланец?
                     </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                     data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                        happening here in terms of content, but just filling up the space to make it look, at least at first
                        glance, a bit more representative of how this would look in a real-world application.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                        aria-expanded="false" aria-controls="flush-collapseFour">
                        Какая гарантия на продукцию?
                     </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                        happening here in terms of content, but just filling up the space to make it look, at least at first
                        glance, a bit more representative of how this would look in a real-world application.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFive">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                        aria-expanded="false" aria-controls="flush-collapseFive">
                        Как взять в кредит?
                     </button>
                  </h2>
                  <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                        happening here in terms of content, but just filling up the space to make it look, at least at first
                        glance, a bit more representative of how this would look in a real-world application.
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSix">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                        aria-expanded="false" aria-controls="flush-collapseSix">
                        Какие сроки монтажа?
                        <div class="warning">Важно</div>
                     </button>
                  </h2>
                  <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                     <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                        happening here in terms of content, but just filling up the space to make it look, at least at first
                        glance, a bit more representative of how this would look in a real-world application.
                     </div>
                  </div>
               </div>
            </div>
            <div class="faq__question quetsion-ask border">
               <div class="quetsion-ask__title reviews__name">Остались вопросы?</div>
               <div class="quetsion-ask__subtitle block-review__subtitle_note">Вы можете задать свой вопрос
                  мы ответить вам в течение 24 часов </div>
               <button data-bs-toggle="modal" data-bs-target="#callback" class="quetsion-ask__button main-btn">Задать
                  вопрос</button>
            </div>

         </div>
         <div class="faq__director tnx-director">
            <div class="tnx-director__img">
               <picture>
                  <source srcset="img/bigavatar.webp" type="image/webp">
                  <img src="img/bigavatar.png" alt="">
               </picture>
            </div>
            <div class="tnx-director__text">
               <div class="tnx-director__title reviews__name">Виктор Котельников</div>
               <div class="tnx-director__note block-review__subtitle_note">Директор</div>
               <div class="tnx-director__subtitle block-review__subtitle_note">Выражаем Вам нашу искреннюю благодарность и
                  глубокую признательность за
                  плодотворное сотрудничество в 2020 г. в рамках поставки запорной арматуры для нужд нашего предприятия.</div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php get_footer(); // Подключаем футер ?>