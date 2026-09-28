<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">

    <!-- Верхняя полоска -->
    <div class="top-bar">
        <div class="container top-bar__inner">
            <div class="top-bar__left">
                <span class="top-bar__city">Москва и область</span>
                <a href="#" class="top-bar__link">Служебные страницы</a>
            </div>
            <div class="top-bar__right">
                <a href="#" class="top-bar__link">Избранное</a>
                <a href="#" class="top-bar__link">Личный кабинет</a>
            </div>
        </div>
    </div>

    <!-- Основная строка -->
    <div class="main-bar">
        <div class="container main-bar__inner">

            <!-- Логотип -->
            <a href="<?php echo home_url('/'); ?>" class="logo">
                <span class="logo__icon">💊</span>
                <span class="logo__text">
                    <strong>Аптека.онлайн</strong>
                    <small>ваша онлайн аптека</small>
                </span>
            </a>

            <!-- Поиск (пока визуальный) -->
            <div class="search">
                <input type="text" class="search__input" placeholder="Начинайте писать или введите название товара...">
                <button class="search__button" type="button">🔍</button>
            </div>

            <!-- Контакты -->
            <div class="contacts">
                <a href="tel:88007772233" class="contacts__phone">8-800-777-22-33</a>
                <a href="tel:84952233403" class="contacts__phone">8 (495) 223-34-03</a>
            </div>

            <!-- Кнопки -->
            <div class="actions">
                <a href="#" class="btn btn--primary">Заказать звонок</a>
                <a href="#" class="cart-icon">🛒</a>
            </div>

        </div>
    </div>

    <!-- Меню категорий -->
    <nav class="main-nav">
        <div class="container">
            <ul class="main-nav__list">
                <li><a href="#">Лекарства</a></li>
                <li><a href="#">Витамины и БАД</a></li>
                <li><a href="#">Красота</a></li>
                <li><a href="#">Гигиена</a></li>
                <li><a href="#">Линзы</a></li>
                <li><a href="#">Мать и дитя</a></li>
                <li><a href="#">Медтовары</a></li>
                <li><a href="#">Зоотовары</a></li>
                <li><a href="#">Медтехника</a></li>
            </ul>
        </div>
    </nav>

</header>