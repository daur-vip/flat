<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="mobile-menu">
        <div class="container">
            <div class="header__body">
                <a href="#" class="header__logo"><img src="img/logo.svg" alt="Logo"></a>
                <div class="mobile-socials">
                    <a href="#"><img src="img/footer-socials-1.svg" alt="Whatsapp"></a>
                </div>
                <div class="mobile-socials">
                    <a href="#"><img src="img/footer-socials-2.svg" alt="Whatsapp"></a>
                </div>
                <div class="mobile-socials">
                    <a href="#"><img src="img/footer-socials-3.svg" alt="Whatsapp"></a>
                </div>
                <div class="header__burger">
                    <span></span>
                </div>

                <nav class="header__menu">
                    <div class="header-languages-mobile">
                        <a class="header-language" href="#">
                            <img class="header-flag-mobile header-flag--ru" src="img/flag-ru.svg" alt="RU">
                        </a>
                        <a class="header-language" href="#">
                            <img class="header-flag-mobile" src="img/flag-uk.svg" alt="ENG">
                        </a>
                    </div>
                    <ul class="header__list">
                        <li><a href="#" class="header__link">О нас</a></li>
                        <li><a href="#" class="header__link">Комплексы</a></li>
                        <li><a href="#flats" class="header__link">Каталог</a></li>
                        <li><a href="#services" class="header__link">Услуги</a></li>
                        <li><a href="#" class="header__link">СМИ о нас</a></li>
                        <li><a href="#footer" class="header__link">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="wrap header-wrap">
            <div class="header-left">
                <div class="header-contact">
                    <img class="header-flag" src="img/flag-turkey.svg" alt="Turkey phone">
                    <span class="header-coutry">Турция</span><br>
                    <a class="header-phone" href="tel:+905348268407">+905348268407</a>
                </div>
                <div class="header-contact">
                    <img class="header-flag" src="img/flag-kz.svg" alt="KZ phone">
                    <span class="header-coutry">Казахстан</span><br>
                    <a class="header-phone" href="tel:+77777071234">+77777071234</a>
                </div>
            </div>
            <div class="header-right">
                <div class="header-languages">
                    <a class="header-language" href="#">
                        <img class="header-flag header-flag--ru" src="img/flag-ru.svg" alt="RU"> рус
                    </a>
                    <a class="header-language" href="#">
                        <img class="header-flag" src="img/flag-uk.svg" alt="ENG"> en
                    </a>
                </div>
                <div class="header-socials">
                    <a class="header-language" href="#">
                        <img class="header-flag" src="img/socials-whatsapp.svg" alt="Whatsapp"></a>
                    <a class="header-language" href="#">
                        <img class="header-flag" src="img/socials-tiktok.svg" alt="TikTok"></a>
                    <a class="header-language" href="#">
                        <img class="header-flag" src="img/socials-instagram.svg" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </header>
    <nav class="nav">
        <div class="wrap nav-wrap">
            <div class="nav-center">
                <ul class="nav-list">
                    <li>
                        <a class="nav-item" href="#">О нас</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#">Комплексы</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#flats">Каталог</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#"><img src="img/logo.svg" alt="Logo"></a>
                    </li>
                    <li>
                        <a class="nav-item" href="#services">Услуги</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#">СМИ о нас</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#footer">Контакты</a>
                    </li>

                </ul>
            </div>
            <div class="nav-right"><a href="#"><img src="img/header-button.png" alt="Оставить заявку"></a></div>
        </div>
    </nav>


    <section class="slider">
        <div class="slider-content">
            <h1 class="slider-title">
                МY FLAT -<br />
                недвижимость в Турции
            </h1>
            <hr class="slider-hr">
            <p class="slider-text">Отличное решение для комфортной жизни и выгодного инвестирования!</p>
            <img src="img/slider-button.png" alt="Оставить заявку">
        </div>
    </section>


    <section id="services" class="services smt">
        <div class="services-header">
            <h2 class="services-header-text">
                Наши услуги
            </h2>
        </div>
        <div class="services-content">
            <div class="max-wrap services-wrap">
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        Онлайн покупка недвижимости
                    </h3>
                    <div class="services-item services-item--1">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        Консультация и подбор
                        недвижимости
                    </h3>
                    <div class="services-item services-item--2">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        Организация тура
                        для клиентов
                    </h3>
                    <div class="services-item services-item--3">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        Безопасный перевод
                        денег
                    </h3>
                    <div class="services-item services-item--4">
                    </div>
                </div>

            </div>
        </div>
        <div class="services-triangles">
            <div class="services-triangles-left"></div>
            <div class="services-triangles-right"></div>
        </div>
    </section>


    <main id="flats" class="main smt">
        <form action="#">
            <div class="search">
                <div class="search-params">
                    <select class="search-param">
                        <option>Выберите район
                        </option>
                        <option>234</option>
                    </select>
                    <select class="search-param">
                        <option>Количество комнат</option>
                        <option>234</option>
                    </select>
                    <select class="search-param">
                        <option>Отображаемая валюта</option>
                        <option>234</option>
                    </select>
                    <select class="search-param">
                        <option>Сортировать по</option>
                        <option>234</option>
                    </select>
                </div>
                <div class="search-button-div">
                    <button class="search-button" type="submit"><img src="img/search-button.png" alt="Search"></button>
                </div>
            </div>
        </form>

        <div class="results">
            <div class="max-wrap">
                <div class="result-items">
                    <div class="result-item">
                        <img src="img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>

                </div>
                <a class="results-more" href="#">Показать еще...</a>
            </div>
        </div>

    </main>


    <section class="post-services">
        <div class="max-wrap">
            <h2 class="post-services-title">
                Постпродажный сервис
            </h2>
            <div class="post-services-wrap">
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="img/postservices-1.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            Услуги юриста
                        </h4>
                        <p class="post-services-item__text">
                            Наши юристы полностью сопровождают Вас на всех этапах сделки. Помогают со сбором и
                            оформлением
                            необходимых документов. С
                            нами процедура оформления будет полностью прозрачной и не потребует много времени.
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="img/postservices-2.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            Услуги дизайнера
                        </h4>
                        <p class="post-services-item__text">
                            Наши дизайнеры готовы создать для Вас квартиру мечты. Креативные идеи с тонким ощущением
                            вкуса и
                            цвета, а также
                            возможность создавать новое и не бояться экспериментировать. Поможем сделать ваш интерьер
                            лучше.
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="img/postservices-3.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            Клининг
                        </h4>
                        <p class="post-services-item__text">
                            Когда Ваша квартира вот вот будет готова, сразу закрадываются мысли о генеральной уборке.
                            Наши
                            специалисты готовы
                            сделать это за Вас. Профессиональный клининг с использованием современного оборудования для
                            Вашего
                            комфорта и экономии
                            времени.
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="img/postservices-4.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            Оборудование бытовой техникой, закуп мебели и текстиля
                        </h4>
                        <p class="post-services-item__text">
                            После покупки недвижимости, встаёт закономерный вопрос о покупке мебели и бытовой техники. И
                            здесь
                            мы
                            готовы Вам помочь.
                            Мы сотрудничаем с лучшими производителями мебели и бытовой техники, которую Вы сможете
                            приобрести
                            по
                            очень выгодным
                            ценам.
                        </p>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>

    <section class="media">
        <div class="max-wrap">
            <div class="media-wrap">
                <h2 class="media-title">
                    СМИ о нас
                </h2>
                <p class="media-desc">
                    Lorem Ipsum является текст-заполнитель обычно используется в графических, печать и издательской
                    индустрии
                    для
                    предварительного просмотра макета и визуальных макетах
                </p>
                <div class="media-items">
                    <div class="media-item-container">
                        <div class="media-item">
                            <img src="img/media-quote.png" alt="quote" class="media-quote">
                            <div class="media-content">
                                <p class="media-text">
                                    Lorem Ipsum является текст-заполнитель обычно используется в графических, печать</p>
                                <p class="media-unit">
                                    - Портал "ИМЯ"
                                </p>
                                <a href="#" class="media-link">Перейти</a>
                            </div>

                            <div class="media-image">
                                <img src="img/media-1.jpg" alt="Media 1">
                            </div>
                        </div>
                    </div>
                    <div class="media-item-container">
                        <div class="media-item">
                            <img src="img/media-quote.png" alt="quote" class="media-quote">
                            <div class="media-content">
                                <p class="media-text">
                                    Lorem Ipsum является текст-заполнитель обычно используется в графических, печать</p>
                                <p class="media-unit">
                                    - Портал "ИМЯ"
                                </p>
                                <a href="#" class="media-link">Перейти</a>
                            </div>

                            <div class="media-image">
                                <img src="img/media-2.jpg" alt="Media 2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="questions">
        <h2 class="questions-title">
            Вопрос - ответ
        </h2>

        <div class="max-wrap">
            <div class="questions-items">
                <div class="questions-item">

                    <input class="questions-checkbox" type="checkbox" id="title1" />
                    <label class="questions-label" for="title1">Accordion One<div class="questions-plus">+</div>

                    </label>
                    <div class="questions-content">
                        <p> Your content goes here inside this division with the class "content".Your content goes here
                            inside
                            this division with the class "content".Your content goes here inside this division with the
                            class
                            "content".Your content goes here inside this division with the class "content".</p>
                    </div>
                </div>
                <div class="questions-item">
                    <input class="questions-checkbox" type="checkbox" id="title2" />
                    <label class="questions-label" for="title2">Accordion One<div class="questions-plus">+</div>
                    </label>

                    <div class="questions-content">
                        <p>Your content goes here inside this division with the class "content".</p>
                    </div>
                </div>

                <div class="questions-item">
                    <input class="questions-checkbox" type="checkbox" id="title3" />
                    <label class="questions-label" for="title3">Accordion One<div class="questions-plus">+</div>
                    </label>

                    <div class="questions-content">
                        <p>Your content goes here inside this division with the class "content".</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer id="footer" class="footer smt">
        <div class="footer-waves">
        </div>
        <div class="max-wrap">
            <div class="footer-content">
                <div class="footer-contact">
                    <h3 class="footer-title">Связаться с нами</h3>
                    <div class="footer-contact-items">
                        <div class="footer-contact-item">
                            <img class="footer-contact-item__image" src="img/flag-kz.svg" alt="KZ">Казахстан
                        </div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="img/flag-turkey.svg" alt="Turkey">Турция
                        </div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="img/contacts-house.svg" alt="KZ">Borgo Penelope 1 Appartamento 84</div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="img/contacts-house.svg" alt="KZ">Borgo Penelope 1 Appartamento 84</div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="img/contacts-phone.svg" alt="KZ">+7 777 777 77 77</div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="img/contacts-phone.svg" alt="KZ">+7 777 777 77 77</div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="img/contacts-mail.svg" alt="KZ">inbox@gmail.com</div>
                        <div class="footer-contact-item"><img class="footer-contact-item__image"
                                src="img/contacts-mail.svg" alt="KZ">inbox@gmail.com</div>
                    </div>

                </div>
                <div class="footer-nav">
                    <h3 class="footer-title">Навигация</h3>
                    <div class="footer-nav-items">
                        <div class="footer-nav-item">
                            О нас
                        </div>
                        <div class="footer-nav-item">
                            Каталог
                        </div>
                        <div class="footer-nav-item">
                            Услуги
                        </div>
                        <div class="footer-nav-item">
                            СМИ
                        </div>
                    </div>
                </div>
                <div class="footer-socials">
                    <h3 class="footer-title">Мы в соц. сетях</h3>
                    <div class="footer-socials-icons">
                        <div class="footer-socials-icon">
                            <img src="img/footer-socials-1.svg" alt="Whatsapp">
                        </div>
                        <div class="footer-socials-icon">
                            <img src="img/footer-socials-2.svg" alt="TikTok">
                        </div>
                        <div class="footer-socials-icon">
                            <img src="img/footer-socials-3.svg" alt="Instagram">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
