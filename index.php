<?php
if(!isset($_SESSION))
{
    session_start();
}
$_SESSION['token'] = md5(uniqid(mt_rand(), true));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <title>Бетон насос</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="css/blocks/header_1.css">
    <link rel="stylesheet" href="./css/blocks/home.css">
    <link rel="stylesheet" href="./css/blocks/benefits.css">
    <link rel="stylesheet" href="css/blocks/delivery_1.css">
    <link rel="stylesheet" href="./css/blocks/price_table.css">
    <link rel="stylesheet" href="./css/blocks/calculator.css">
    <link rel="stylesheet" href="./css/blocks/how_we_work.css">
    <link rel="stylesheet" href="./css/blocks/consultation.css">
    <link rel="stylesheet" href="./css/blocks/footer.css">
    <link rel="stylesheet" href="./css/blocks/base.css">
    <link rel="stylesheet" href="./css/fonts/Roboto/stylesheet.css">
</head>

<body>
<input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
<header class="header">
    <div class="container">
        <div class="header-row">
            <div class="header-logo"><img src="./img/Logo_new.svg" alt="Logo"></div>
            <div class="header-nav">
                <li><a href="#delivery">Доставка</a></li>
                <li><a href="#how_we_work">Этапы работы</a></li>
                <li><a href="#price_table-info">Стоимость бетона</a></li>
                <li><a href="#consultation">Контакты</a></li>
                <li><a target="_blank" rel="noopener noreferrer"
                       href="https://www.instagram.com/gibrid.mogilev/">
                        Наши Фото</a></li>
            </div>
            <div class="header-action">
                <a href="#calculator" class="action-header-calc-btn">Рассчитать стоимость</a>
            </div>
            <div class="header-row">
                <a href="#consultation">
                    <div class="header-mobile-contacts">
                        <img src="./img/phone.svg" alt="phone"> Позвонить
                    </div>
                </a>
                <input type="checkbox" id="checkbox_toggle"/>

                <label for="checkbox_toggle" class="hamburger"><span class="hamburger-line"></span></label>
            </div>
        </div>
        <div class="header-mobile-menu" id="header-mobile-menu">
            <a href="#calculator" class="action-header-calc-btn">Рассчитать стоимость</a>
            <div class="header-nav-mobile">
                <li><a href="#delivery">Доставка</a></li>
                <li><a href="#how_we_work">Этапы работы</a></li>
                <li><a href="#price_table-info">Стоимость бетона</a></li>
                <li><a href="#consultation">Контакты</a></li>
                <li><a target="_blank" rel="noopener noreferrer"
                       href="https://www.instagram.com/gibrid.mogilev/">
                        Наши Фото</a></li>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="home" id="home">
        <div class="container">
            <div class="home-content">
                <div class="home-info">
                    <h1 class="home-heading">Аренда стрелового насоса (гибрид) и доставка бетона в Могилеве и области</h1>
                    <div class="home-text">
                        <p>У нас всегда можно заказать доставку бетона популярных марок высокого качества М
                            100-М
                            550 по доступной цене</p>
                    </div>
                    <div class="home-actions">
                        <input class="home-action home-action-input" id="home-name" type="text"
                               placeholder="Введите имя">
                        <input class="home-action home-action-input" id="home-phone" type="text"
                               placeholder="+375 (XX) XXX-XX-XX">
                        <div class="home-action home-action-btn" id="home-action-btn">Заказать доставку</div>
                    </div>
                </div>
                <!--<div class="home-slider">
                    <div class="slide fade">
                        <img src="./img/slider/slider1.jpg" class="slider-content" alt="Слайдер 1">
                    </div>
                    <div class="slide fade">
                        <img src="./img/slider/slider2.jpg" class="slider-content" alt="Слайдер 1">
                    </div>
                     <div class="slider-buttons">
                        <span class="slider-button-active"></span>
                        <span class="slider-button"></span>
                        <span class="slider-button"></span>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="benefits" id="benefits">
        <div class="container">
            <h1 class="benefits-header">Наши преимущества</h1>
            <div class="benefits-content">
                <div class="benefits-content-element">
                    <div class="benefits-content-element-img"><img src="./img/benefits/punctuality.svg"
                                                                   alt="Пунктуальность"></div>
                    <div class="benefits-content-element-header">Пунктуальность</div>
                    <div class="benefits-content-element-description">Всегда соблюдаем график оговоренный с
                        клиентом
                    </div>
                </div>
                <div class="benefits-content-element">
                    <div class="benefits-content-element-img"><img src="./img/benefits/experience.svg" alt="Опыт">
                    </div>
                    <div class="benefits-content-element-header">Опыт</div>
                    <div class="benefits-content-element-description">Более 10 лет на рынке</div>
                </div>
                <div class="benefits-content-element">
                    <div class="benefits-content-element-img"><img src="./img/benefits/quality.svg" alt="Качество">
                    </div>
                    <div class="benefits-content-element-header">Качество</div>
                    <div class="benefits-content-element-description">Строгий контроль сырья</div>
                </div>
                <div class="benefits-content-element">
                    <div class="benefits-content-element-img"><img src="./img/benefits/good_price.svg"
                                                                   alt="Доступная цена"></div>
                    <div class="benefits-content-element-header">Доступная цена</div>
                    <div class="benefits-content-element-description">Честная цена без скрытых затрат. Все виды
                        оплаты (наличный и безналичный расчет)
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="delivery" id="delivery">
        <div class="container">
            <div class="delivery-wrapper">
                <h1 class="delivery-header">
                    Доставка бетона
                </h1>
                <div class="delivery-content">
                    <div class="delivery-content-item">
                        <div class="delivery-content-header">Автобетоносмеситель</div>
                        <div class="delivery-content-description">
                            <p>Доставка бетона и растворов от 0,3 м³ - 9 м³</p>
                        </div>
                        <img class="delivery-content-image" src="./img/delivery/delivery2_123.png" alt="Доставка 1">
                        <span class="delivery-content-separator"></span>
                        <div class="delivery-content-price">от 250 BYN</div>
                        <div class="delivery-content-price-description">&#8203;</div>
                        <div class="delivery-content-action-btn neworder">Заказать доставку</div>
                    </div>
                    <div class="delivery-content-item">
                        <div class="delivery-content-header">Гибридный Автобетононасос</div>
                        <div class="delivery-content-description">
                            <p>Cтреловой, для устройства: фундаментов, перекрытий, армопояса</p>
                        </div>
<!--                        <iframe class="delivery-content-image" src="https://www.youtube.com/embed/sJr3kChGsKw?si=tczm_zXDOrKugOva" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>-->

                        <img class="delivery-content-image" src="./img/delivery/delivery2.png" alt="Доставка 1">
                        <span class="delivery-content-separator"></span>
                        <div class="delivery-content-price">от 1000 BYN</div>
                        <div class="delivery-content-price-description">смена 4 часа</div>
                        <div class="delivery-content-action-btn neworder">Заказать доставку</div>
                    </div>
                    <div class="delivery-content-item">
                        <div class="delivery-content-header">Бетононасос</div>
                        <div class="delivery-content-description">
                            <p>Трасса из резиновых шлангов ф85 мм. Подача бетона
                                на 150 м вертикально и горизонтально. Мощность 95 м³/час</p>
                        </div>
                        <img class="delivery-content-image" src="./img/delivery/delivery1.jpg" alt="Доставка 2">

                        <div class="delivery-content-separator"></div>
                        <div class="delivery-content-price">от 600 BYN</div>
                        <div class="delivery-content-price-description">смена 4 часа</div>
                        <div class="delivery-content-action-btn neworder">Заказать доставку</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="price_table-info" id="price_table-info">
        <div class="container">
            <h1 class="price_table-header">
                Цены на товарный бетон
            </h1>
            <div class="price_table-desc">Цены бетона на щебне указаны без учета доставки</div>
            <table class="price_table">
                <thead>
                <th class="price_table-th">
                    Наименование продукции
                </th>
                <th class="price_table-th">
                    Цена с НДС, BYN/м3
                </th>
                </thead>
                <tbody>
                <tr>
                    <td class="price_table-td">
                        Бетон М-125 (С8/10)
                    </td>
                    <td class="price_table-td">
                        117,00
                    </td>
                </tr>
                <tr>
                    <td class="price_table-td">
                        Бетон М-150 (С10/12.5)
                    </td>
                    <td class="price_table-td">
                        121,00
                    </td>
                </tr>
                <tr>
                    <td class="price_table-td">
                        Бетон М-200 (С12/15)
                    </td>
                    <td class="price_table-td">
                        129,00
                    </td>
                </tr>
                <tr>
                    <td class="price_table-td">
                        Бетон М-250 (С16/20)
                    </td>
                    <td class="price_table-td">
                        143,00
                    </td>
                </tr>
                <tr>
                    <td class="price_table-td">
                        Бетон М-300 (С18/22.5)
                    </td>
                    <td class="price_table-td">
                        149,00
                    </td>
                </tr>
                <tr>
                    <td class="price_table-td">
                        Бетон М-350 (С20/25)
                    </td>
                    <td class="price_table-td">
                        169,00
                    </td>
                </tr>
                </tbody>
            </table>

            <div style="display: flex; justify-content: center; padding-top: 56px;">
                <div class="home-action home-action-btn neworder">Заказать доставку</div>
            </div>
        </div>
    </section>

    <section class="calculator" id="calculator">
        <div class="container">
            <div class="calculator-content">
                <div class="calculator-header">
                    <p>Рассчитайте стоимость бетона с доставкой</p>
                </div>
                <div class="calculator-header-description">
                    <p>Ответьте на несколько вопросов и мы рассчитаем примерную стоимость бетона вместе с
                        доставкой
                    </p>
                </div>
                <div class="calculator-params">
                    <div class="calculator-select-params">
                        <div class="calculator-beton-mark-param">
                            <p class="calculator-param-select-header">Выберите марку бетона</p>
                            <select id="select-beton-mark">
                                <option value="117">Бетон С 8/10 (М150) П2</option>
                                <option value="121">Бетон С 8/10 (М150) П3</option>
                                <option value="129">Бетон С 12/15 (М200) П2</option>
                                <option value="143">Бетон С 12/15 (М200) П3</option>
                                <option value="149">Бетон С 16/20 (М250) П2</option>
                                <option value="169">Бетон С 16/20 (М250) П3</option>
                            </select>
                        </div>
                        <div class="calculator-volume-param">
                            <p class="calculator-param-select-header">Введите необходимый объем (м³) </p>
                            <input class="home-action home-action-input" style="width: 100%" id="select-volume"
                                   type="number"
                                   placeholder="10">
                            <!-- <select id="select-volume">
                                <option value="3">3 м³</option>
                                <option value="4">4 м³</option>
                                <option value="5">5 м³</option>
                                <option value="6">6 м³</option>
                                <option value="7">7 м³</option>
                                <option value="8">8 м³</option>
                            </select> -->
                        </div>
                    </div>
                    <div class="calculator-delivery-variant-param">
                        <p class="calculator-param-select-header" style="padding-bottom: 0px !important;">
                            Вариант доставки бетона </p>
                        <label>
                            <input type="radio" name="radio" checked id="incity-radio"/>
                            <span>по городу</span>
                        </label>
                        <div class="outcity-delivery">
                            <label>
                                <input type="radio" name="radio" id="outcity-radio"/>
                                <span>за городом</span>
                            </label>
                            <div id="outcity" class="outcity">
                                <div>
                                    <input class="delivery-params-input" type="number" id="outcity-range"
                                           placeholder="в цифрах">
                                </div>
                                <div>
                                    <p style="padding-top: 5px; padding-left: 5px;">Расстояние от города (км)</p>
                                </div>
                            </div>
                        </div>

                        <div
                                style="display: flex; justify-content: center; padding-top: 40px; padding-bottom: 40px;">
                            <div class="calculate-action-btn" id="calculate-btn">Рассчитать</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="how_we_work" id="how_we_work">
        <div class="container">
            <h1 class="how_we_work-header">
                Как мы работаем
            </h1>
            <div class="how_we_work-content">
                <div class="how_we_work-element">
                    <div class="how_we_work-element-header">01</div>
                    <div class="how_we_work-element-title">Заявка на поставку</div>
                    <div class="how_we_work-element-description">Оставляете заявку на сайте или звоните нам.
                        Стоимость заранее можно узнать с помощью калькулятора
                    </div>
                </div>
                <div class="arrow">
                    <img src="./img/arrow.svg" alt="arrow">
                </div>
                <div class="how_we_work-element">
                    <div class="how_we_work-element-header">02</div>
                    <div class="how_we_work-element-title">Расчет стоимости</div>
                    <div class="how_we_work-element-description">Рассчитываем и согласовываем стоимость</div>
                </div>
                <div class="arrow">
                    <img src="./img/arrow.svg" alt="arrow">
                </div>
                <div class="how_we_work-element">
                    <div class="how_we_work-element-header">03</div>
                    <div class="how_we_work-element-title">Договор и оплата</div>
                    <div class="how_we_work-element-description">Подписываем договор на доставку. Оплата
                        происходит
                        удобным для вас способом
                    </div>
                </div>
                <div class="arrow">
                    <img src="./img/arrow.svg" alt="arrow">
                </div>
                <div class="how_we_work-element">
                    <div class="how_we_work-element-header">04</div>
                    <div class="how_we_work-element-title">Поставка</div>
                    <div class="how_we_work-element-description">Получаете материалы в установленный срок</div>
                </div>
            </div>
        </div>
    </section>
    <section class="consultation" id="consultation">
        <div class="container">
            <div class="consultation-content">
                <div class="consultation-contancts-wrapper">
                    <div class="consultation-contancts">
                        <div class="consultation-contancts-header">
                            Наши контакты
                        </div>
                        <div class="consultation-contancts-description">
                            По любым вопросам вы можете связаться с нами
                        </div>
                        <div class="consultation-contancts-email" style="display: none">
                            <img src="./img/mail.svg" alt="email" style="padding-right: 12px;">
                            <a href="mailto:betonnasos@website.com">betonnasos@website.com</a>
                        </div>
                        <div class="consultation-contancts-phones">
                            <div class="consultation-contancts-phone-symbol">
                                <img src="./img/phone.svg" alt="phone">
                            </div>
                            <div class="consultation-contancts-phone-numbers">
                                <div class="consultation-contancts-phone">
                                    <a href="tel:+375339951333">
                                        +375 (33) 995 13 33 (МТС)
                                    </a>
                                </div>
                                <div class="consultation-contancts-phone">
                                    <a href="tel:+375295051157">
                                        +375 (25) 505 11 57 (life)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="consultation-contancts-insta">
                            <a target="_blank" rel="noopener noreferrer"
                               href="https://www.instagram.com/gibrid.mogilev/">
                                <img src="./img/insta.svg" alt="insta" style="cursor: pointer;">&nbsp;&nbsp;&nbsp;@gibrid.mogilev
                            </a>
                        </div>
                    </div>
                </div>
                <div class="consulation-ask-wrapper">
                    <div class="consulation-ask">
                        <div class="consulation-ask-header">Нужна консультация?</div>
                        <div class="consulation-ask-description">Оставьте свои контакты, и мы свяжемся с вами в
                            ближайшее время
                        </div>
                        <div class="consulation-ask-inputs">
                            <input class="home-action home-action-input" style="margin-right: 6px;" type="text"
                                   placeholder="Введите имя" id="consultation-name">
                            <input class="home-action home-action-input" type="text"
                                   placeholder="+375 (XX) XXX-XX-XX" id="consultation-phone">
                        </div>
                        <div class="consulation-ask-action-btn" id="consultation-action-btn">Получить консультацию
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container" style="justify-content: center;display: flex">
        <div class="footer-content">
            <div class="footer-content-row">
                <div class="footer-logo" style="cursor: pointer;">
                    <a href="#home"><img src="./img/Logo_new.svg" alt="Logo"></a>
                </div>
                <div class="footer-legal-info">
                    <div class="footer-legal-info-row">ИП «Казаков Д.И.»</div>
                    <div class="footer-legal-info-row">УНП 791332919</div>
                </div>
            </div>
            <div class="delivery-content-separator" style="margin-top: 0"></div>

            <div class="footer-content-row">
                <div class="footer-links">
                    <span class="footer-link">
                        <a href="#benefits">Преимущества</a>
                    </span>
                    <span class="footer-link">
                        <a href="#delivery">Доставка</a>
                    </span>
                    <span class="footer-link">
                        <a href="#how_we_work">Этапы работы</a>
                    </span>
                    <span class="footer-link" style="padding-right: 0px !important">
                        <a href="#price_table-info">Стоимость бетона</a>
                    </span>
                    <span class="footer-link" style="padding-right: 0px !important">
                        <a target="_blank" rel="noopener noreferrer"
                           href="https://www.instagram.com/gibrid.mogilev/">
                        Наши Фото</a>
                    </span>
                </div>
                <div class="footer-author" style="cursor: pointer;">
                    <a target="_blank" rel="noopener noreferrer" href="https://www.behance.net/arinasubach">
                        © <?= date("Y") ?> Design by Aryna Subach
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>


<div id="calculationModal" class="modal">
    <div class="calculation-modal-content-wrapper">
        <span class="closeCalc">&times;</span>
        <div class="calculation-modal-content">
            <div class="calculation-modal-content-header">
                Результат
            </div>
            <div class="calculation-modal-content-description">
                Здесь будет указана примерная стоимость бетона с доставкой
            </div>
            <div class="calculation-modal-content-type">
                    <span class="modal-label">
                        Вид:
                    </span>
                <span id="beton-type" class="modal-label-value">

                    </span>
            </div>
            <div class="calculation-modal-content-volume">

                    <span class="modal-label">
                        Объем:
                    </span>
                <span id="beton-volume" class="modal-label-value">

                    </span>
            </div>
            <div class="calculation-modal-content-range" id="modal-range-div">

                    <span class="modal-label">
                        Расстояние:
                    </span>
                <span id="beton-range" class="modal-label-value">

                    </span>
            </div>
            <div class="calculation-modal-content-price">
                    <span class="modal-label-price">
                        Стоимость:
                    </span>
                <span id="beton-price" class="modal-label-price-value">

                    </span>
            </div>
            <div class="calculation-modal-content-description">
                Информация справочная, все расчеты индивидуальные. Чтобы узнать точную стоимость можете оставить
                номер телефона и мы позже свяжемся с вами
            </div>
            <div class="calculation-modal-content-input">
                <div class="calculation-modal-content-input-label">
                    Укажите ваше имя *
                </div>
                <input class="home-action home-action-input" id="calculation-modal-name"
                       style="width: 100%; margin-top: 4px;" type="text" placeholder="Введите имя">
            </div>
            <div class="calculation-modal-content-input">
                <div class="calculation-modal-content-input-label">
                    Укажите номер телефона для связи *
                </div>
                <input class="home-action home-action-input" id="calculation-modal-phone"
                       style="width: 100%; margin-top: 4px;" type="text" placeholder="+375 (XX) XXX-XX-XX">
            </div>
            <div class="consulation-ask-action-btn" style="width: 100%; margin-top: 24px;" id="send-calc">Отправить
            </div>
        </div>
    </div>
</div>

<div id="orderSend" class="modal">
    <div class="order-send-content-wrapper">
        <span class="closeCalc">&times;</span>
        <div class="order-send-content">
            <div class="order-send-content-header">Заявка отправлена</div>
            <div class="order-send-content-descripion">С вами свяжется оператор и более подробно обсудит детали
                доставки и стоимость.
            </div>
            <div class="consulation-ask-action-btn" style="width: 100%; margin-top: 46px;"
                 id="go-to-main-order-send-btn">Перейти на главную
            </div>

        </div>
    </div>
</div>


<div id="newOrder" class="modal">
    <div class="new-order-content-wrapper">
        <span class="closeCalc">&times;</span>
        <div class="new-order-content">
            <div class="order-send-content-header">
                Заказать доставку
            </div>
            <div class="order-send-content-descripion">
                Укажите как с вами связаться. Оператор позвонит и сориентирует по цене и времени доставки
            </div>
            <div class="calculation-modal-content-input">
                <div class="calculation-modal-content-input-label">
                    Укажите ваше имя *
                </div>
                <input class="home-action home-action-input" id="new-order-name"
                       style="width: 100%; margin-top: 4px;" type="text" placeholder="Имя">
            </div>
            <div class="calculation-modal-content-input">
                <div class="calculation-modal-content-input-label">
                    Укажите номер телефона для связи *
                </div>
                <input class="home-action home-action-input" id="new-order-phone"
                       style="width: 100%; margin-top: 4px;" type="text" placeholder="+375 (XX) XXX-XX-XX">
            </div>
            <div class="consulation-ask-action-btn" style="width: 100%; margin-top: 24px;" id="send-new-order">
                Отправить
            </div>
        </div>
    </div>
</div>
</body>

</html>

<script>

    var modal = document.getElementById("calculationModal");
    var orderSendModal = document.getElementById("orderSend");
    var newOrderModal = document.getElementById("newOrder");
    var outcityDiv = document.getElementById("outcity");
    var outcityRadio = document.getElementById("outcity-radio");
    var incityRadio = document.getElementById("incity-radio");
    var calculateBtn = document.getElementById("calculate-btn");
    var sendCalcBtn = document.getElementById("send-calc");
    var orderSendBtn = document.getElementById("go-to-main-order-send-btn");
    var newOrderBtn = document.getElementById("send-new-order");
    var homeActionBtn = document.getElementById("home-action-btn");
    var consultationActionBtn = document.getElementById("consultation-action-btn");
    var token = document.getElementById("token");
    const PRICE_PER_KM = 2;

    let calculationResult = "";

    calculateBtn.addEventListener('click', function () {
        calculate();
    })

    sendCalcBtn.addEventListener('click', function () {
        sendCalc();
    })

    const sendCallback = async function (name, phone) {
        let request = {
            "name": name,
            "phone": phone,
            "calc": calculationResult
        }
        const response = await fetch('/controller.php', {
            method: 'POST',
            headers: {
                'token': token.value
            },
            body: JSON.stringify(request)
        })
        calculationResult = "";
        response.json().then(data => {
            console.log(data);
        })
    }

    homeActionBtn.addEventListener('click', async function () {
        let name = document.getElementById("home-name");
        let phone = document.getElementById("home-phone");
        if (checkFieldValid(name) && checkFieldValid(phone)) {
            orderSendModal.style.display = "block";
            await sendCallback(name.value, phone.value);
        }
    })

    consultationActionBtn.addEventListener('click', async function () {
        let name = document.getElementById("consultation-name");
        let phone = document.getElementById("consultation-phone");
        if (checkFieldValid(name) && checkFieldValid(phone)) {
            orderSendModal.style.display = "block";
            await sendCallback(name.value, phone.value);
        }
    })

    newOrderBtn.addEventListener('click', async function () {
        let name = document.getElementById("new-order-name");
        let phone = document.getElementById("new-order-phone");
        if (checkFieldValid(name) && checkFieldValid(phone)) {
            newOrderModal.style.display = "none";
            orderSendModal.style.display = "block";
            await sendCallback(name.value, phone.value);
        }
    })

    orderSendBtn.onclick = function () {
        orderSendModal.style.display = "none";
    }

    outcityRadio.addEventListener('change', function () {
        outcityDiv.classList.remove('outcity');
        outcityDiv.classList.add('outcity-enabled');
    })
    incityRadio.addEventListener('change', function () {
        outcityDiv.classList.add('outcity');
        outcityDiv.classList.remove('outcity-enabled');
    })

    function checkFieldValid(field) {
        if (field && field.value !== "") {
            field.style.borderColor = "#CBD5E1";
            return true;
        } else {
            field.style.borderColor = "red";
            return false;
        }
    }

    function calculate() {
        var selectBetonMark = document.getElementById("select-beton-mark");
        var selectVolume = document.getElementById("select-volume");
        var spanType = document.getElementById("beton-type");
        var spanVolume = document.getElementById("beton-volume");
        var spanRange = document.getElementById("beton-range");
        var spanPrice = document.getElementById("beton-price");
        var rangeDiv = document.getElementById("modal-range-div");
        rangeDiv.style.display = "none";
        if (selectVolume.value) {
            selectVolume.style.borderColor = "#CBD5E1";
        } else {
            selectVolume.style.borderColor = "red";
            return
        }
        var cost = selectBetonMark.value * selectVolume.value;
        if (outcityRadio.checked) {
            var outcityRange = document.getElementById("outcity-range");
            if (outcityRange && outcityRange.value !== "") {
                cost += outcityRange.value * PRICE_PER_KM;
                rangeDiv.style.display = "block";
                spanRange.innerHTML = outcityRange.value + " км";
            }
        }
        spanType.innerHTML = selectBetonMark.options[selectBetonMark.selectedIndex].text;
        spanVolume.innerHTML = selectVolume.value + " м³";
        spanPrice.innerHTML = cost + " BYN";
        calculationResult = "Марка: " + selectBetonMark.options[selectBetonMark.selectedIndex].text + ", Объем: " + selectVolume.value + ", Цена: " + cost;
        if (outcityRange && outcityRange.value !== "") {
            calculationResult += ", Растояние: " + outcityRange.value;
        }
        modal.style.display = "block";
    }

    async function sendCalc() {
        var name = document.getElementById("calculation-modal-name");
        var phone = document.getElementById("calculation-modal-phone");
        console.log(name.value);
        console.log(phone.value);
        //TODO SEND REQ
        if (checkFieldValid(name) && checkFieldValid(phone)) {
            modal.style.display = "none";
            orderSendModal.style.display = "block";
            await sendCallback(name.value, phone.value);
        }
    }

    var newOrders = document.getElementsByClassName("neworder");
    Array.prototype.slice.call(newOrders).forEach(span => {
        span.addEventListener('click', function () {
            newOrderModal.style.display = "block";
        })
    });

    var spans = document.getElementsByClassName("closeCalc");
    Array.prototype.slice.call(spans).forEach(span => {
        span.addEventListener('click', function () {
            modal.style.display = "none";
            orderSendModal.style.display = "none";
            newOrderModal.style.display = "none";
        })
    });

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        if (event.target == orderSendModal) {
            orderSendModal.style.display = "none";
        }
        if (event.target == newOrderModal) {
            newOrderModal.style.display = "none";
        }
    }

    var hamuberger = document.getElementById("checkbox_toggle");
    var mobileMenu = document.getElementById("header-mobile-menu");
    hamuberger.addEventListener('change', function () {
        if (hamuberger.checked) {
            mobileMenu.style.display = "block";
        } else {
            mobileMenu.style.display = "none";
        }
    })

    // let slideIndex = 0;
    // showSlides();
    //
    // function showSlides() {
    //     let i;
    //     let slides = document.getElementsByClassName("slide");
    //     for (i = 0; i < slides.length; i++) {
    //         slides[i].style.display = "none";
    //     }
    //     slideIndex++;
    //     if (slideIndex > slides.length) {
    //         slideIndex = 1
    //     }
    //     slides[slideIndex - 1].style.display = "block";
    //     setTimeout(showSlides, 4000); // Change image every 2 seconds
    // }
</script>