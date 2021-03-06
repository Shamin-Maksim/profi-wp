<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон футера
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */

	wp_footer(); // Необходимо для нормальной работы плагинов
?>
<footer class="footer">
   <div class="footer__container _container">
      <div class="footer__top footer-href">
         <div class="footer-href__item">
            <div class="footer-href__title footer-title">Товары </div>
            <nav class="footer-href__nav">
               <ul class="footer-href__column">
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Заглушки </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Запорная арматура</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Компенсаторы</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Комплекты ответных фланцев</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Краны шаровые </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Отводы</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Переходы</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Заглушки </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Запорная арматура</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Компенсаторы</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Комплекты ответных фланцев</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Краны шаровые </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Отводы</a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Переходы</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="footer-href__item">
            <div class="footer-href__title footer-title">Услуги</div>
            <nav class="footer-href__nav">
               <ul class="footer-href__column">
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Изготовление по чертежам </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source">Монтаж конструкций </a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="footer-href__item footer-soc">
            <div class="footer-soc__logo">
               <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.svg" alt="" width="127px">
            </div>
            <div class="footer-href__soc">
               <div class="footer-soc__phone">
                  <a href="tel:+88004650809" class="footer-soc__href">+8(800) 465 08 09</a>
                  <div class="footer-soc__text">
                     По России <span>бесплатно</span>
                  </div>
               </div>
               <div class="footer-soc__social">
                  <a href="#" class="footer-soc__icon">
                     <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M20 9.34354C23.47 9.34354 23.88 9.35354 25.25 9.42354C26.52 9.48354 27.21 9.69354 27.66 9.87354C28.27 10.1135 28.7 10.3935 29.15 10.8435C29.61 11.3035 29.89 11.7335 30.12 12.3335C30.3 12.7935 30.51 13.4835 30.57 14.7435C30.63 16.1135 30.65 16.5235 30.65 19.9935C30.65 23.4635 30.64 23.8735 30.57 25.2435C30.51 26.5135 30.3 27.2035 30.12 27.6535C29.88 28.2635 29.6 28.6935 29.15 29.1535C28.7 29.6035 28.26 29.8935 27.66 30.1235C27.2 30.3035 26.51 30.5135 25.25 30.5735C23.88 30.6335 23.47 30.6535 20 30.6535C16.53 30.6535 16.12 30.6435 14.75 30.5735C13.48 30.5135 12.79 30.3035 12.34 30.1235C11.73 29.8835 11.3 29.6035 10.84 29.1535C10.39 28.6935 10.1 28.2635 9.87 27.6535C9.69 27.1935 9.48 26.5035 9.42 25.2435C9.36 23.8935 9.34 23.4735 9.34 20.0035C9.34 16.5335 9.35 16.1235 9.42 14.7535C9.48 13.4835 9.69 12.7935 9.87 12.3435C10.1 11.7335 10.38 11.2935 10.84 10.8435C11.3 10.3835 11.73 10.1035 12.34 9.87354C12.8 9.69354 13.49 9.48354 14.75 9.42354C16.12 9.36354 16.53 9.34354 20 9.34354ZM20 7.00354C16.47 7.00354 16.03 7.02354 14.64 7.08354C13.26 7.14354 12.31 7.36354 11.48 7.68354C10.62 8.01354 9.9 8.46354 9.18 9.18354C8.46 9.90354 8.01 10.6335 7.68 11.4835C7.36 12.3135 7.14 13.2535 7.08 14.6435C7.01 16.0335 7 16.4735 7 20.0035C7 23.5335 7.01 23.9735 7.08 25.3635C7.14 26.7435 7.36 27.6935 7.68 28.5235C8.01 29.3735 8.46 30.1035 9.18 30.8235C9.9 31.5435 10.63 31.9935 11.48 32.3235C12.31 32.6435 13.25 32.8635 14.64 32.9235C16.03 32.9935 16.47 33.0035 20 33.0035C23.53 33.0035 23.97 32.9935 25.36 32.9235C26.74 32.8635 27.69 32.6435 28.52 32.3235C29.38 31.9935 30.1 31.5435 30.82 30.8235C31.54 30.1035 31.99 29.3735 32.32 28.5235C32.64 27.6935 32.86 26.7535 32.92 25.3635C32.99 23.9835 33 23.5335 33 20.0035C33 16.4735 32.99 16.0335 32.92 14.6435C32.86 13.2635 32.64 12.3135 32.32 11.4835C31.99 10.6335 31.54 9.90354 30.82 9.18354C30.1 8.46354 29.37 8.01354 28.52 7.68354C27.69 7.36354 26.75 7.14354 25.36 7.08354C23.98 7.02354 23.53 7.00354 20 7.00354Z"
                           fill="#F2F2F2" />
                        <path
                           d="M20.0003 13.3311C16.3103 13.3311 13.3203 16.3211 13.3203 20.0111C13.3203 23.7011 16.3103 26.6911 20.0003 26.6911C23.6903 26.6911 26.6803 23.7011 26.6803 20.0111C26.6803 16.3211 23.6903 13.3311 20.0003 13.3311ZM20.0003 24.3411C17.6103 24.3411 15.6703 22.4011 15.6703 20.0111C15.6703 17.6211 17.6103 15.6811 20.0003 15.6811C22.3903 15.6811 24.3303 17.6211 24.3303 20.0111C24.3403 22.4011 22.4003 24.3411 20.0003 24.3411Z"
                           fill="#F2F2F2" />
                     </svg>
                  </a>
                  <a href="#" class="footer-soc__icon">
                     <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M20.2527 5.80127C27.7536 5.80127 33.8447 11.809 34.0309 19.2873C34.0398 19.4039 34.0398 19.5204 34.0398 19.628C34.0398 27.2677 27.8688 33.4637 20.2527 33.4637C17.8411 33.4637 15.5713 32.8361 13.5941 31.7421L5.96021 34.199L8.45164 26.7835C7.19262 24.6942 6.47445 22.2553 6.47445 19.637C6.47445 19.4308 6.47445 19.2335 6.48332 19.0272C6.8025 11.6655 12.8493 5.80127 20.2527 5.80127ZM13.8778 29.339C15.7131 30.5585 17.8943 31.2669 20.2527 31.2669C26.6453 31.2669 31.841 26.0482 31.841 19.637C31.841 19.3321 31.8321 19.0362 31.8055 18.7313C31.3356 12.7415 26.335 8.00709 20.2527 8.00709C14.2502 8.00709 9.29394 12.625 8.72649 18.4982C8.68216 18.8748 8.66443 19.2514 8.66443 19.628C8.66443 22.1746 9.48899 24.5328 10.8721 26.4517L9.42693 30.7737L13.8778 29.339ZM26.4299 22.3545C26.4897 22.384 26.5387 22.4082 26.5739 22.4256C26.6504 22.4653 26.7215 22.5006 26.7868 22.533C27.0017 22.6397 27.1532 22.7149 27.2212 22.8112C27.301 22.9547 27.301 23.6361 27.0173 24.4252C26.7424 25.2233 25.3593 25.9854 24.7386 26.0392C24.6311 26.0485 24.5423 26.07 24.4509 26.092C24.0148 26.1971 23.5222 26.3158 20.6779 25.1964C17.504 23.9389 15.4168 20.8343 14.9805 20.1853C14.9439 20.1308 14.9189 20.0937 14.9059 20.0763C14.9025 20.0717 14.8986 20.0664 14.8943 20.0605C14.7417 19.8517 14.0364 18.8869 13.7001 17.727C13.5937 17.3504 13.5227 16.9649 13.5227 16.5703C13.5227 15.0049 14.2882 14.1821 14.6388 13.8052C14.6617 13.7805 14.6829 13.7578 14.702 13.7368C15.0123 13.3961 15.3847 13.3154 15.6063 13.3154C15.7264 13.3154 15.8441 13.3251 15.9568 13.3344C16.0605 13.343 16.1601 13.3513 16.2536 13.3513C16.2785 13.3513 16.3047 13.3495 16.3319 13.3477C16.5268 13.3347 16.7749 13.3181 17.0161 13.9162C17.1145 14.1527 17.2611 14.508 17.4138 14.8783C17.701 15.5749 18.0102 16.3246 18.0623 16.4358C18.151 16.6062 18.2042 16.8035 18.0889 17.0276C18.0751 17.0556 18.062 17.0822 18.0495 17.1078C17.9899 17.2297 17.9421 17.3274 17.8761 17.4311C17.8318 17.4849 17.7963 17.5298 17.752 17.5925C17.6958 17.6583 17.6377 17.729 17.5796 17.7998C17.4633 17.9412 17.3471 18.0827 17.2466 18.1843C17.0781 18.3547 16.9008 18.534 17.0959 18.8748C17.2909 19.2155 17.9736 20.3184 18.9755 21.2151C20.0462 22.1859 20.9816 22.5908 21.4591 22.7974C21.5549 22.8389 21.6323 22.8724 21.6886 22.9009C22.0344 23.0712 22.2206 23.0443 22.4245 22.8202C22.6196 22.596 23.2757 21.8338 23.4973 21.4931C23.7279 21.1523 23.9495 21.2061 24.2598 21.3227C24.5385 21.4193 25.9037 22.0943 26.4299 22.3545Z"
                           fill="#ffffff" />
                     </svg>
                  </a>
                  <a href="#" class="footer-soc__icon">
                     <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M31.9071 9.95709C31.8155 9.95709 31.7239 9.97071 31.6323 10.0048L7.82026 18.7503C7.15079 18.9955 7.16489 19.9218 7.84845 20.1466L13.3663 21.9515L16.6925 28.3949V28.4017L16.6995 28.4221C16.763 28.5379 16.8828 28.6196 17.0167 28.6196C17.0942 28.6196 17.1788 28.5924 17.2422 28.5379L20.364 25.9837L16.8828 23.4295L17.1576 26.7874L14.6559 21.7744L27.9748 14.037L16.8969 23.4159L25.5154 29.7367C25.8043 29.9478 26.1356 30.0432 26.4597 30.0432C27.1433 30.0432 27.7987 29.6072 27.9889 28.8921L32.647 10.8698C32.7809 10.393 32.3792 9.95709 31.9071 9.95709Z"
                           fill="#F2F2F2" />
                     </svg>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="footer__bottom footer-href">
         <div class="footer-href__item">
            <div class="footer-href__title footer-title">Сертификаты </div>
            <nav class="footer-href__nav">
               <ul class="footer-href__column footer-href__column_sert">
                  <li class="footer-href__list footer-href__list_sert">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
                  <li class="footer-href__list">
                     <a href="" class="footer-href__source footer-href__source_sert">Сертификат качества продукции </a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="footer__text">
         <p>Отправляя данные, вы соглашаетесь с Политикой конфиденциальности сайта. Предложения и вопросы, в том числе и по
            настоящей Политике конфиденциальности, а также комментарии, благодарность и критику присылайте на e-mail
            help@diamed.ru.</p>
         <p>© 2022 НЕРЖПРОФИ</p>
      </div>
   </div>
</footer>
</div>
<div class="modal fade callback-form" id="callback" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-label="Close">
         </button>
         <div class="modal-body callback-form__body">
            <div class="callback-form__title">
               Оставьте заявку
            </div>
            <div class="callback-form__subtitle">Оставьте ваши данные </div>

            <form class="needs-validation form" novalidate="" method="POST" action="#" enctype="multipart/form-data" name="addcom2" id="addcom2"
               onsubmit="return false">
               <div class="form__container">
                  <div class="form-block form__in">
                     <input type="hidden" name="from" value="Перезвоните мне. Консультация">
                     <div class="err" id="cerror2"></div>
                     <div class="form-block__input">
                        <input type="tel" class="form-control" name="phone" placeholder="+7 (___)___-__-__" required="">
                     </div>
                     <div class="form-block__input">
                        <input type="email" class="form-control" name="mail" placeholder="Электронная почта" autocomplete="off" required="">
                     </div>
                     <div class="form-block__input">
                        <textarea name="text" placeholder="Информация о заказе" class="form-block__textarea"></textarea>
                     </div>
                     <button onclick="doLoad2(document.getElementById('addcom2'))" class="main-btn">
                        Отправить
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="security-politics" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
               <img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="">
            </button>
            <h3 class="text-center mt-5"><strong>Политика конфиденциальности</strong></h3>
            <div class="text p-5">
               Администрация данного Сайта не&nbsp;может передать или раскрыть информацию предоставленную пользователем
               (далее Пользователь) при регистрации и&nbsp;использовании функций сайта третьим лицам, кроме случаев,
               описанных законодательством страны, на&nbsp;территории которой пользователь ведет свою деятельность.
               <br><br>
               Для регистрации на&nbsp;сайте, пользователь обязан внести некоторую персональную информацию. Для проверки
               предоставленных данных, сайт оставляет за&nbsp;собой право потребовать доказательства идентичности
               в&nbsp;онлайн или офлайн режимах.
               <br><br>
               Сайт использует личную информацию Пользователя для обслуживания и&nbsp;для улучшения качества
               предоставляемых услуг. Часть персональной информации может быть предоставлена банку или платежной системе,
               в&nbsp;случае, если предоставление этой информации обусловлено процедурой перевода средств платежной
               системе, услугами которой Пользователь желает воспользоваться.
               <br><br>
               Сайт прилагает все усилия для сбережения в&nbsp;сохранности личных данных Пользователя.
               Личная информация может быть раскрыта в&nbsp;случаях, описанных законодательством, либо
               когда администрация сочтет подобные действия необходимыми для соблюдения юридической процедуры, судебного
               распоряжения или легального процесса необходимого для работы Пользователя с&nbsp;Сайтом.
               <br><br>
               В&nbsp;других случаях, ни&nbsp;при каких условиях, информация, которую Пользователь передает Сайту,
               не&nbsp;будет раскрыта третьим лицам.
            </div>
         </div>
      </div>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=0c91d51f-5e5b-49a2-b5e5-5ca80b31e8ce"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modules.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/mailer/JsHttpRequest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/mailer/comm.js"></script>
</body>

</html>