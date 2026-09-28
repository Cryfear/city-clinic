<footer class="site-footer">
    <div class="container">

        <!-- Верхняя часть: колонки со ссылками -->
        <div class="footer__top">

            <div class="footer__col">
                <h4 class="footer__title">Интернет-заказ</h4>
                <ul class="footer__list">
                    <li><a href="#">Как сделать заказ</a></li>
                    <li><a href="#">Вопросы и ответы</a></li>
                    <li><a href="#">Корзина</a></li>
                    <li><a href="#">Бонусные карты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Покупателям</h4>
                <ul class="footer__list">
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Аптеки</a></li>
                    <li><a href="#">Партнерам</a></li>
                    <li><a href="#">Проекты и акции</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">О компании</h4>
                <ul class="footer__list">
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Статьи</a></li>
                    <li><a href="#">Вакансии</a></li>
                    <li><a href="#">Журнал</a></li>
                </ul>
            </div>

            <div class="footer__col footer__col--contacts">
                <h4 class="footer__title">Контакты</h4>
                <a href="tel:88007772233" class="footer__phone">8-800-777-22-33</a>
                <a href="tel:84952233403" class="footer__phone">8 (495) 223-34-03</a>
                <a href="mailto:info@restoll.ru" class="footer__email">info@restoll.ru</a>
                <p class="footer__schedule">Круглосуточно, без выходных</p>
                <div class="footer__socials">
                    <a href="#" class="footer__social">VK</a>
                    <a href="#" class="footer__social">TG</a>
                    <a href="#" class="footer__social">OK</a>
                </div>
            </div>

        </div>

        <!-- Нижняя часть: копирайт -->
        <div class="footer__bottom">
            <p class="footer__copyright">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Все права защищены.</p>
            <div class="footer__legal">
                <a href="#">Политика конфиденциальности</a>
                <a href="#">Пользовательское соглашение</a>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>