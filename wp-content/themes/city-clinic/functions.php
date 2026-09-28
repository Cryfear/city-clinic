<?php
function city_clinic_scripts() {
    wp_enqueue_style('city-clinic-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'city_clinic_scripts');

function city_clinic_menus() {
    register_nav_menus([
        'primary' => 'Главное меню',
        'top'     => 'Верхнее меню',
    ]);
}
add_action('after_setup_theme', 'city_clinic_menus');

// Регистрируем кастомный тип записи "Товары"
function city_clinic_register_products() {
    register_post_type('product', [
        'labels' => [
            'name'               => 'Товары',
            'singular_name'      => 'Товар',
            'add_new'            => 'Добавить товар',
            'add_new_item'       => 'Добавить новый товар',
            'edit_item'          => 'Редактировать товар',
            'all_items'          => 'Все товары',
            'menu_name'          => 'Товары',
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-cart',
        'supports'     => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true, // для Gutenberg
    ]);
}
add_action('init', 'city_clinic_register_products');

// Метаполя для товара
function city_clinic_product_meta() {
    add_meta_box(
        'product_details',
        'Детали товара',
        'city_clinic_product_meta_html',
        'product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'city_clinic_product_meta');

function city_clinic_product_meta_html($post) {
    $price     = get_post_meta($post->ID, '_product_price', true);
    $old_price = get_post_meta($post->ID, '_product_old_price', true);
    $brand     = get_post_meta($post->ID, '_product_brand', true);
    $quantity  = get_post_meta($post->ID, '_product_quantity', true);
    $code      = get_post_meta($post->ID, '_product_code', true);
    $badge     = get_post_meta($post->ID, '_product_badge', true);

    wp_nonce_field('product_meta_save', 'product_meta_nonce');
    ?>
    <style>
        .product-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .product-meta-grid label { display: block; font-weight: 600; margin-bottom: 5px; }
        .product-meta-grid input { width: 100%; padding: 8px; }
    </style>
    <div class="product-meta-grid">
        <div>
            <label>Цена (например, 41 108 руб.)</label>
            <input type="text" name="product_price" value="<?php echo esc_attr($price); ?>">
        </div>
        <div>
            <label>Старая цена (зачёркнутая)</label>
            <input type="text" name="product_old_price" value="<?php echo esc_attr($old_price); ?>">
        </div>
        <div>
            <label>Бренд</label>
            <input type="text" name="product_brand" value="<?php echo esc_attr($brand); ?>">
        </div>
        <div>
            <label>Количество в упаковке</label>
            <input type="text" name="product_quantity" value="<?php echo esc_attr($quantity); ?>">
        </div>
        <div>
            <label>Код товара</label>
            <input type="text" name="product_code" value="<?php echo esc_attr($code); ?>">
        </div>
        <div>
            <label>Бейдж (например, "Товар дня")</label>
            <input type="text" name="product_badge" value="<?php echo esc_attr($badge); ?>">
        </div>
    </div>
    <?php
}

// Сохраняем метаполя
function city_clinic_product_meta_save($post_id) {
    if (!isset($_POST['product_meta_nonce'])) return;
    if (!wp_verify_nonce($_POST['product_meta_nonce'], 'product_meta_save')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $fields = [
        'product_price'     => '_product_price',
        'product_old_price' => '_product_old_price',
        'product_brand'     => '_product_brand',
        'product_quantity'  => '_product_quantity',
        'product_code'      => '_product_code',
        'product_badge'     => '_product_badge',
    ];

    foreach ($fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post_product', 'city_clinic_product_meta_save');