<?php /* Template Name: QuizPage */

get_header();

if ($_POST) {
    $to = 'milo@avoshnikov.ru';
    $subject = 'Новый квиз';

    $message = "
Стиль кухни - ".$_POST["kuhnya-style"]."
Фартук - ".$_POST["kuhnya-fartuk"]."
Форма кухни - ".$_POST["kuhnya-form"];
    if ($_POST["whats-app"]) $message .= "\nЕсть Whatsapp";
    if ($_POST["viber"]) $message .= "\nЕсть viber";
    $message .= "\nТелефон ".$_POST["phone"];

    define( 'WP_USE_THEMES', false );
    require( 'wp-load.php' );

    $sent_message = wp_mail( $to, $subject, $message );

    if ( $sent_message ) {
        echo 'Спасибо!';
    }
}
?>
    <header class="page-header alignwide">
        <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header><!-- .page-header -->

    <form action="" method="post">
    <div class="container quiz">
        <div id="first-slide" class="quiz-slide">
            <h2>Калькулятор цен на кухни</h2>
            <h3>Выберите стиль вашей кухни</h3>
            <div class="flex-blocks">
                <div class="item-flex">
                    <p class="name">Классика</p>
                    <div><img src="<?=get_template_directory_uri()?>/assets/images/klassik.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">Модерн</p>
                    <div><img src="<?=get_template_directory_uri()?>/assets/images/modern.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">Лофт</p>
                    <div><img src="<?=get_template_directory_uri()?>/assets/images/loft.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">Хайтек</p>
                    <div><img src="<?=get_template_directory_uri()?>/assets/images/hightech.png" alt=""><span class="check-mark"></span></div>
                </div>
                <input type="hidden" name="kuhnya-style" class="result" value="">
                <p style="width: 100%;"><span class="button-prev">Назад</span><span class="button-next">Далее</span></p>
            </div>
            <p class="step">Шаг 1 из 5</p>
        </div>
        <div id="second-slide" class="quiz-slide hidden">
            <h2>Калькулятор цен на кухни</h2>
            <h3>Какой тип фартука вы хотите на своей кухне?</h3>
            <div class="flex-blocks">
                <div class="item-flex">
                    <p class="name">Стекло с фотопечатью</p>
                    <div><img src="<?=get_template_directory_uri()?>/assets/images/steklo-s-fotopechatiyu.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">Стеновая панель</p>
                    <div><img src="<?=get_template_directory_uri()?>/assets/images/stenovaya-panel.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">Плитка</p>
                    <div><img src="<?=get_template_directory_uri()?>/assets/images/plitka.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">Не знаю</p>
                    <div><img src="<?=get_template_directory_uri()?>/assets/images/ne-znayu.png" alt=""><span class="check-mark"></span></div>
                </div>
                <input type="hidden" name="kuhnya-fartuk" class="result" value="">
                <p style="width: 100%;"><span class="button-prev active">Назад</span><span class="button-next">Далее</span></p>
            </div>
            <p class="step">Шаг 2 из 5</p>
        </div>
        <div id="third-slide" class="quiz-slide hidden">
            <h2>Калькулятор цен на кухни</h2>
            <h3>Выберите форму вашей кухни</h3>
            <div class="flex-blocks">
                <div class="item-flex">
                    <p class="name">Угловая</p>
                    <div style="padding-top: 18px;"><img src="<?=get_template_directory_uri()?>/assets/images/uglovaya.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">Прямая</p>
                    <div style="padding-top: 18px;"><img src="<?=get_template_directory_uri()?>/assets/images/pryamaya.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">С островком</p>
                    <div style="padding-top: 18px;"><img src="<?=get_template_directory_uri()?>/assets/images/s-ostrovkom.png" alt=""><span class="check-mark"></span></div>
                </div>
                <div class="item-flex">
                    <p class="name">П - образная</p>
                    <div style="padding-top: 18px;"><img src="<?=get_template_directory_uri()?>/assets/images/p-obraznaya.png" alt=""><span class="check-mark"></span></div>
                </div>
                <input type="hidden" name="kuhnya-form" class="result" value="">
                <p style="width: 100%;"><span class="button-prev active">Назад</span><span class="button-next">Далее</span></p>
            </div>
            <p class="step">Шаг 3 из 5</p>
        </div>
        <div id="fourth-slide" class="quiz-slide hidden">
            <h2>идет предварительный расчет...</h2>
            <div class="progress-bar"></div>
        </div>
        <div id="fifth-slide" class="quiz-slide hidden">
            <h2>ПОЛУЧИТЕ РАСЧЕТ СТОИМОСТИ И КУПОН<br>НА СКИДКУ <?=the_field('sale')?> ₽ ЗА ЗАПОЛНЕНИЕ ОПРОСА</h2>
            <div style="text-align: center;">
                <span style="margin-right: 40px;">Прислать расчет так же в:</span>
                <span style="margin-right: 40px;"><span class="share-mark whats-app" onclick="check_share('whats-app'); return false;"></span><img src="<?=get_template_directory_uri()?>/assets/images/whats-app.png" alt=""><span class="share">WhatsApp</span></span>
                <span><span class="share-mark viber" onclick="check_share('viber'); return false;"></span><img src="<?=get_template_directory_uri()?>/assets/images/viber.png" alt=""><span class="share">Viber</span></span>
                <input type="hidden" name="whats-app" id="whats-app" value="">
                <input type="hidden" name="viber" id="viber" value="">
            </div>
            <div class="phone-div"><input type="text" name="phone" class="phone"></div>
            <button class="button-result" name="button-result">Получить расчет и скидку</button>
        </div>
    </div>
    </form>

    <script>
        function check_div() {
            let blocks = this.parentElement.querySelectorAll('.item-flex');
            for (let i = 0; i < blocks.length; i++) {
                if (blocks[i].classList.contains("active")) {
                    blocks[i].classList.remove("active");
                }
            }
            if (!this.classList.contains("active")) this.classList.add("active");
            this.parentElement.querySelector('.result').value = this.querySelector('p.name').textContent;
            if (this.parentElement.querySelector('.button-next') && !this.parentElement.querySelector('.button-next').classList.contains("active")) this.parentElement.querySelector('.button-next').classList.add("active");
        }

        function next_step() {
            let this_block = $(this.parentElement.parentElement.parentElement),
                next_button = this_block.find('.button-next');
            if (next_button.hasClass("active")) {
                if (this_block.next('.quiz-slide').hasClass("hidden")) this_block.next('.quiz-slide').removeClass("hidden");
                if (!this_block.hasClass("hidden")) this_block.addClass("hidden");

                if (this_block.attr("id") == 'third-slide') setTimeout(function () {
                    if ($("#fifth-slide").hasClass("hidden")) $("#fifth-slide").removeClass("hidden");
                    if (!$("#fourth-slide").hasClass("hidden")) $("#fourth-slide").addClass("hidden");
                }, 2000);
            }
        }

        function prev_step() {
            let this_block = $(this.parentElement.parentElement.parentElement);
            if (this_block.prev('.quiz-slide').hasClass("hidden")) this_block.prev('.quiz-slide').removeClass("hidden");
            if (!this_block.hasClass("hidden")) this_block.addClass("hidden");
        }

        function check_share(share) {
            if (document.getElementById(share) && document.getElementById(share).value == 0) document.getElementById(share).value = 1;
            else document.getElementById(share).value = 0;
            let mark = document.querySelector(".share-mark."+share);
            if (mark.classList.contains("active")) mark.classList.remove("active");
            else mark.classList.add("active");
        }

        window.onload = function() {
            let button_next = document.querySelectorAll('.quiz div.quiz-slide span.button-next');
            for (let i = 0; i < button_next.length; i++) {
                button_next[i].addEventListener("click", next_step, false);
            }

            let button_prev = document.querySelectorAll('.quiz div.quiz-slide span.button-prev');
            for (let i = 0; i < button_prev.length; i++) {
                button_prev[i].addEventListener("click", prev_step, false);
            }

            let blocks = document.querySelectorAll('.item-flex');
            if (blocks) {
                for (let i = 0; i < blocks.length; i++) blocks[i].addEventListener("click", check_div, false);
            }
        };
    </script>
<?php

get_footer();
