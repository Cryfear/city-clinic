<?php get_header(); ?>

<main class="site-main">

    <!-- Hero-блок -->
    <section class="hero">
        <div class="container hero__inner">

            <!-- Левая колонка: Oral-B -->
            <div class="hero__promo hero__promo--oral">
                <div class="hero__promo-text">
                    <h2 class="hero__title">Oral-b vitality</h2>
                    <p class="hero__subtitle">электрическая зубная щетка</p>
                    <p class="hero__desc">Клинически доказано, что электрическая зубная щетка более эффективно очищает полость рта по сравнению с обычной мануальной зубной щеткой.</p>
                    <a href="#" class="btn btn--primary btn--large">Перейти в каталог</a>
                </div>
                <div class="hero__promo-image">
                    <span class="hero__emoji">🪥</span>
                </div>
            </div>

            <!-- Центральная колонка: Nivea -->
            <div class="hero__promo hero__promo--nivea">
                <div class="hero__promo-image">
                    <span class="hero__emoji">🧴</span>
                </div>
                <div class="hero__promo-text">
                    <p class="hero__subtitle">Увлажняющий крем для лица</p>
                    <h2 class="hero__title">Nivea Care</h2>
                    <a href="#" class="btn btn--primary">Перейти в каталог</a>
                </div>
            </div>

            <!-- Правая колонка: Товары дня -->
            <div class="hero__products">
                <h3 class="hero__products-title">Товары дня</h3>

                <a href="#" class="product-mini">
                    <div class="product-mini__image">💊</div>
                    <div class="product-mini__info">
                        <p class="product-mini__name">Нэйчес Баунти Кожа, волосы, ногти, капсулы 60 шт</p>
                        <p class="product-mini__price">244 руб.</p>
                    </div>
                </a>

                <a href="#" class="product-mini">
                    <div class="product-mini__image">💊</div>
                    <div class="product-mini__info">
                        <p class="product-mini__name">Арбидол® - препарат от ОРВИ и гриппа, 10 таблеток</p>
                        <p class="product-mini__price">145 руб.</p>
                    </div>
                </a>

                <a href="#" class="product-mini">
                    <div class="product-mini__image">💊</div>
                    <div class="product-mini__info">
                        <p class="product-mini__name">Desmoxan - лечение, при бросании курения, 100 таблеток</p>
                        <p class="product-mini__price">444 руб.</p>
                    </div>
                </a>
            </div>

        </div>
    </section>
    <!-- Преимущества -->
    <section class="features">
        <div class="container features__inner">

            <div class="feature">
                <div class="feature__icon">📦</div>
                <div class="feature__text">
                    <h3 class="feature__title">Ассортимент</h3>
                    <p class="feature__desc">Оборудование, мебель, посуда и инвентарь</p>
                </div>
            </div>

            <div class="feature">
                <div class="feature__icon">🚚</div>
                <div class="feature__text">
                    <h3 class="feature__title">Быстрая доставка</h3>
                    <p class="feature__desc">В любую точку России быстро</p>
                </div>
            </div>

            <div class="feature">
                <div class="feature__icon">✅</div>
                <div class="feature__text">
                    <h3 class="feature__title">Гарантия</h3>
                    <p class="feature__desc">Вся продукция сертифицирована</p>
                </div>
            </div>

            <div class="feature">
                <div class="feature__icon">💰</div>
                <div class="feature__text">
                    <h3 class="feature__title">Низкие цены</h3>
                    <p class="feature__desc">Мы стараемся держать самые низкие цены</p>
                </div>
            </div>

            <div class="feature">
                <div class="feature__icon">⭐</div>
                <div class="feature__text">
                    <h3 class="feature__title">4349 отзывов</h3>
                    <p class="feature__desc">Общий рейтинг на основе отзывов покупателей</p>
                </div>
            </div>

        </div>
    </section>
    <!-- Акция месяца -->
        <!-- Акция месяца -->
    <section class="promo-section">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title">Акция месяца</h2>
                <div class="section-arrows">
                    <button class="arrow-btn" type="button">‹</button>
                    <button class="arrow-btn" type="button">›</button>
                </div>
            </div>

            <div class="products-grid">

                <?php
                $products = new WP_Query([
                    'post_type'      => 'product',
                    'posts_per_page' => 5,
                ]);

                if ($products->have_posts()) :
                    while ($products->have_posts()) : $products->the_post();
                        $price     = get_post_meta(get_the_ID(), '_product_price', true);
                        $old_price = get_post_meta(get_the_ID(), '_product_old_price', true);
                        $brand     = get_post_meta(get_the_ID(), '_product_brand', true);
                        $quantity  = get_post_meta(get_the_ID(), '_product_quantity', true);
                        $code      = get_post_meta(get_the_ID(), '_product_code', true);
                        $badge     = get_post_meta(get_the_ID(), '_product_badge', true);
                ?>

                    <div class="product-card">
                        <?php if ($badge) : ?>
                            <span class="product-card__badge"><?php echo esc_html($badge); ?></span>
                        <?php endif; ?>

                        <div class="product-card__image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                💊
                            <?php endif; ?>
                        </div>

                        <h3 class="product-card__name"><?php the_title(); ?></h3>

                        <ul class="product-card__specs">
                            <?php if ($brand) : ?><li>Бренд: <?php echo esc_html($brand); ?></li><?php endif; ?>
                            <?php if ($quantity) : ?><li>Количество в упаковке: <?php echo esc_html($quantity); ?></li><?php endif; ?>
                            <?php if ($code) : ?><li>Код товара: <?php echo esc_html($code); ?></li><?php endif; ?>
                        </ul>

                        <div class="product-card__footer">
                            <div class="product-card__prices">
                                <?php if ($price) : ?><span class="product-card__price"><?php echo esc_html($price); ?></span><?php endif; ?>
                                <?php if ($old_price) : ?><span class="product-card__old-price"><?php echo esc_html($old_price); ?></span><?php endif; ?>
                            </div>
                            <button class="product-card__cart" type="button">🛒</button>
                        </div>
                    </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Товаров пока нет.</p>';
                endif;
                ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>