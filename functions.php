
<?php

if ( ! class_exists( 'Redux' ) ) {
    return;
}

$opt_name = 'nias_redux_settings'; // نام گزینه برای ذخیره تنظیمات

Redux::setArgs($opt_name, [
    'opt_name'             => $opt_name,
    'display_name'         => 'تنظیمات پروژه‌ها',
    'menu_title'           => 'تنظیمات پروژه‌ها',
    'page_title'           => 'تنظیمات پروژه‌ها',
    'menu_type'            => 'menu',
    'allow_sub_menu'       => false,
    'menu_slug'            => 'nias-project-settings',
    'page_priority'        => 61,
    'save_defaults'        => true,
    'show_import_export'   => true,
    'admin_bar'            => true,
    'admin_bar_priority'   => 50,
    'dev_mode'             => false,
    'update_notice'        => false,
    'customizer'           => false,
    'page_permissions'     => 'edit_pages', // دسترسی برای نقش ویرایشگر
]);

// تابع ایجاد ریپیتر
function nias_create_repeater( $tab_id, $side, $title ) {
    $repeater_id = $tab_id . '_' . $side . '_repeater';
    return [
        'id'          => $repeater_id,
        'type'        => 'repeater',
        'title'       => $title,
        'fields'      => [
            [
                'id'       => $repeater_id . '_info',
                'type'     => 'raw',
                'title'    => 'شناسه ریپیتر',
                'content'  => '<strong>' . $repeater_id . '</strong>',
            ],
            [
                'id'       => $repeater_id . '_image',
                'type'     => 'media',
                'title'    => 'تصویر',
                'subtitle' => 'آپلود یا انتخاب تصویر.',
            ],
            [
                'id'       => $repeater_id . '_link',
                'type'     => 'text',
                'title'    => 'لینک',
                'subtitle' => 'لینک مرتبط با آیتم.',
            ],
            [
                'id'       => $repeater_id . '_title',
                'type'     => 'text',
                'title'    => 'عنوان',
                'subtitle' => 'عنوان آیتم را وارد کنید.',
            ],
        ],
    ];
}



// تابع برای ایجاد تب‌های پروژه مسکونی
function nias_create_residential_projects_tab( $opt_name ) {
    // تب اصلی
    Redux::setSection( $opt_name, [
        'title' => 'پروژه‌های مسکونی',
        'id'    => 'residential_projects',
        'icon'  => 'dashicons-admin-home',
        'fields' => [],
    ]);

    // زیرتب‌ها: اسلاید سمت چپ
    Redux::setSection( $opt_name, [
        'title'      => 'اسلاید سمت چپ',
        'id'         => 'residential_projects_left_slide',
        'subsection' => true,
        'fields'     => [
            nias_create_repeater( 'residential_projects', 'left', 'لیست آیتم‌های اسلاید سمت چپ' ),
        ],
    ]);

    // زیرتب‌ها: اسلاید سمت راست
    Redux::setSection( $opt_name, [
        'title'      => 'اسلاید سمت راست',
        'id'         => 'residential_projects_right_slide',
        'subsection' => true,
        'fields'     => [
            nias_create_repeater( 'residential_projects', 'right', 'لیست آیتم‌های اسلاید سمت راست' ),
        ],
    ]);
}

// تابع برای ایجاد تب‌های پروژه تجاری
function nias_create_commercial_projects_tab( $opt_name ) {
    // تب اصلی
    Redux::setSection( $opt_name, [
        'title' => 'پروژه‌های تجاری',
        'id'    => 'commercial_projects',
        'icon'  => 'dashicons-store',
        'fields' => [],
    ]);

    // زیرتب‌ها: اسلاید سمت چپ
    Redux::setSection( $opt_name, [
        'title'      => 'اسلاید سمت چپ',
        'id'         => 'commercial_projects_left_slide',
        'subsection' => true,
        'fields'     => [
            nias_create_repeater( 'commercial_projects', 'left', 'لیست آیتم‌های اسلاید سمت چپ' ),
        ],
    ]);

    // زیرتب‌ها: اسلاید سمت راست
    Redux::setSection( $opt_name, [
        'title'      => 'اسلاید سمت راست',
        'id'         => 'commercial_projects_right_slide',
        'subsection' => true,
        'fields'     => [
            nias_create_repeater( 'commercial_projects', 'right', 'لیست آیتم‌های اسلاید سمت راست' ),
        ],
    ]);
}

// تابع برای ایجاد تب‌های پروژه مسابقاتی
function nias_create_competition_projects_tab( $opt_name ) {
    // تب اصلی
    Redux::setSection( $opt_name, [
        'title' => 'پروژه‌های مسابقاتی',
        'id'    => 'competition_projects',
        'icon'  => 'dashicons-awards',
        'fields' => [],
    ]);

    // زیرتب‌ها: اسلاید سمت چپ
    Redux::setSection( $opt_name, [
        'title'      => 'اسلاید سمت چپ',
        'id'         => 'competition_projects_left_slide',
        'subsection' => true,
        'fields'     => [
            nias_create_repeater( 'competition_projects', 'left', 'لیست آیتم‌های اسلاید سمت چپ' ),
        ],
    ]);

    // زیرتب‌ها: اسلاید سمت راست
    Redux::setSection( $opt_name, [
        'title'      => 'اسلاید سمت راست',
        'id'         => 'competition_projects_right_slide',
        'subsection' => true,
        'fields'     => [
            nias_create_repeater( 'competition_projects', 'right', 'لیست آیتم‌های اسلاید سمت راست' ),
        ],
    ]);
}

// تابع برای ایجاد تب‌های پروژه ویلایی
function nias_create_villa_projects_tab( $opt_name ) {
    // تب اصلی
    Redux::setSection( $opt_name, [
        'title' => 'پروژه‌های ویلایی',
        'id'    => 'villa_projects',
        'icon'  => 'dashicons-palmtree',
        'fields' => [],
    ]);

    // زیرتب‌ها: اسلاید سمت چپ
    Redux::setSection( $opt_name, [
        'title'      => 'اسلاید سمت چپ',
        'id'         => 'villa_projects_left_slide',
        'subsection' => true,
        'fields'     => [
            nias_create_repeater( 'villa_projects', 'left', 'لیست آیتم‌های اسلاید سمت چپ' ),
        ],
    ]);

    // زیرتب‌ها: اسلاید سمت راست
    Redux::setSection( $opt_name, [
        'title'      => 'اسلاید سمت راست',
        'id'         => 'villa_projects_right_slide',
        'subsection' => true,
        'fields'     => [
            nias_create_repeater( 'villa_projects', 'right', 'لیست آیتم‌های اسلاید سمت راست' ),
        ],
    ]);
}

// اجرای تمامی توابع برای ایجاد تب‌ها
function nias_create_all_tabs( $opt_name ) {
    nias_create_residential_projects_tab( $opt_name );
    nias_create_commercial_projects_tab( $opt_name );
    nias_create_competition_projects_tab( $opt_name );
    nias_create_villa_projects_tab( $opt_name );
}

// فراخوانی تابع اصلی
nias_create_all_tabs( $opt_name );







// Custom function to register portfolio post type (unchanged)
function nias_register_each_portfolio_post_type() {
    $labels = array(
        'name'               => __('Each Portfolio', 'textdomain'),
        'singular_name'      => __('Portfolio Item', 'textdomain'),
        'menu_name'          => __('Each Portfolio', 'textdomain'),
        'add_new'            => __('Add New', 'textdomain'),
        'add_new_item'       => __('Add New Portfolio Item', 'textdomain'),
        'edit_item'          => __('Edit Portfolio Item', 'textdomain'),
        'new_item'           => __('New Portfolio Item', 'textdomain'),
        'view_item'          => __('View Portfolio Item', 'textdomain'),
        'search_items'       => __('Search Portfolio Items', 'textdomain'),
        'not_found'          => __('No Portfolio Items Found', 'textdomain'),
        'not_found_in_trash' => __('No Portfolio Items Found in Trash', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title'),
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'rewrite'            => array('slug' => 'each-portfolio'),
    );

    register_post_type('each_portfolio', $args);
}
add_action('init', 'nias_register_each_portfolio_post_type');

// Enqueue media upload scripts
function nias_enqueue_media_upload_scripts() {
    wp_enqueue_media();
    wp_enqueue_script('jquery');
}
add_action('admin_enqueue_scripts', 'nias_enqueue_media_upload_scripts');

// Add meta box for portfolio images
add_action('add_meta_boxes', function() {
    add_meta_box(
        'nias_images_meta',
        'تصاویر پروژه',
        'nias_images_meta_callback',
        'each_portfolio',
        'normal',
        'high'
    );
});

// Meta box callback function
function nias_images_meta_callback($post) {
    $images = get_post_meta($post->ID, 'nias_images', true);
    $images = !empty($images) ? $images : [];

    wp_nonce_field('nias_images_nonce', 'nias_images_nonce_field');

    ?>
    <div id="nias-images-container">
        <?php foreach ($images as $index => $image): ?>
            <div class="nias-image-row" style="margin-bottom:10px;">
                <input type="url" name="nias_images[<?php echo $index; ?>][url]" 
                       value="<?php echo esc_url($image['url']); ?>" 
                       placeholder="لینک تصویر" 
                       style="width:70%;margin-right:10px;" 
                       class="nias-image-url"/>
                <button type="button" class="button nias-upload-image">آپلود تصویر</button>
                <button type="button" class="button remove-image">حذف</button>
            </div>
        <?php endforeach; ?>
    </div>

    <button type="button" class="button add-image">افزودن تصویر جدید</button>

    <script>
    jQuery(document).ready(function($) {
        // Media uploader
        $(document).on('click', '.nias-upload-image', function(e) {
            e.preventDefault();
            var button = $(this);
            var imageUrlInput = button.siblings('.nias-image-url');
            
            // Create/open the media library frame
            var frame = wp.media({
                title: 'انتخاب یا آپلود تصویر',
                button: {
                    text: 'انتخاب'
                },
                multiple: false
            });

            // When an image is selected
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                imageUrlInput.val(attachment.url);
            });

            // Open the media library frame
            frame.open();
        });

        // Add new image row
        $(document).on('click', '.add-image', function(e) {
            e.preventDefault();
            var container = $('#nias-images-container');
            var index = container.children('.nias-image-row').length;
            
            var newRow = $(`
                <div class="nias-image-row" style="margin-bottom:10px;">
                    <input type="url" name="nias_images[${index}][url]" 
                           placeholder="لینک تصویر" 
                           style="width:70%;margin-right:10px;" 
                           class="nias-image-url"/>
                    <button type="button" class="button nias-upload-image">آپلود تصویر</button>
                    <button type="button" class="button remove-image">حذف</button>
                </div>
            `);
            
            container.append(newRow);
        });

        // Remove image row
        $(document).on('click', '.remove-image', function(e) {
            e.preventDefault();
            $(this).closest('.nias-image-row').remove();
        });
    });
    </script>
    <?php
}

// Save post meta
add_action('save_post', function($post_id) {
    // Verify nonce
    if (!isset($_POST['nias_images_nonce_field']) || 
        !wp_verify_nonce($_POST['nias_images_nonce_field'], 'nias_images_nonce')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Sanitize and save images
    $images = isset($_POST['nias_images']) ? array_map(function($image) {
        return [
            'url' => esc_url_raw($image['url'])
        ];
    }, $_POST['nias_images']) : [];

    // Remove empty entries
    $images = array_filter($images, function($image) {
        return !empty($image['url']);
    });

    // Update post meta
    update_post_meta($post_id, 'nias_images', $images);
});

function nias_generate_pinned_gallery($post_id = null) {
    // If no post ID is provided, use the current post
    if ($post_id === null) {
        $post_id = get_the_ID();
    }

    // Get the images
    $images = get_post_meta($post_id, 'nias_images', true);

    // If no images, return empty string
    if (empty($images)) {
        return '';
    }

    // Start the gallery HTML
    $gallery_html = '<div class="pinned-gallery">';

    // Total number of images
    $total_images = count($images);

    // Generate HTML for each image
    foreach ($images as $index => $image) {
        // Validate image URL
        if (empty($image['url'])) continue;

        // Check if this is the last image
        $is_last_image = ($index === $total_images - 1);

        // Build the image row
        if (!$is_last_image) {
            // Add pinned image inside a pin-spacer
            $gallery_html .= sprintf(
                '<div class="pinned-image" style="padding: 0px 0px 300px;"><img decoding="async" src="%s" alt=""></div>',
                esc_url($image['url'])
            );
        } else {
            // Last image without pin-spacer
            $gallery_html .= sprintf(
                '<div class="pinned-image"><img decoding="async" src="%s" alt=""></div>',
                esc_url($image['url'])
            );
        }
    }

    $gallery_html .= '</div>';

    return $gallery_html;
}

function nias_pinned_gallery_shortcode($atts) {
    $atts = shortcode_atts([
        'id' => get_the_ID(),
    ], $atts, 'nias_pinned_gallery');

    return nias_generate_pinned_gallery($atts['id']);
}
add_shortcode('nias_pinned_gallery', 'nias_pinned_gallery_shortcode');

function the_nias_pinned_gallery($post_id = null) {
    echo nias_generate_pinned_gallery($post_id);
}

function nias_single_portfolio_template($content) {
    if (is_singular('each_portfolio')) {
        $gallery = nias_generate_pinned_gallery();
        $content = $gallery . $content;
    }
    return $content;
}
add_filter('the_content', 'nias_single_portfolio_template');





// ثبت شورتکد برای نمایش اسلایدهای پروژه مسکونی
function nias_residential_projects_slider() {
    ob_start();
?>
    <div id="itemsWrapperLinks">
        <div id="itemsWrapper" class="webgl-fitthumbs fx-one">
            <div class="clapat-slider-wrapper showcase-reverse fw" style="opacity: 1;">
                <div class="clapat-slider">
                    <!-- Main Slider -->
                    <div class="clapat-slider-viewport">
                    <?php
                    $nias_option_data = get_option('nias_redux_settings');
                    
                    if (isset($nias_option_data['residential_projects_left_repeater_image']) && 
                        is_array($nias_option_data['residential_projects_left_repeater_image'])) {
                        
                        $images = $nias_option_data['residential_projects_left_repeater_image'];
                        $links = $nias_option_data['residential_projects_left_repeater_link'] ?? [];
                        $titles = $nias_option_data['residential_projects_left_repeater_title'] ?? [];
                        
                        // Original slides
                        foreach ($images as $index => $item) {
                            if (isset($item['url'])) {
                                $image_url = $item['url'];
                                $link_url = isset($links[$index]) ? $links[$index] : '#';
                                $title = isset($titles[$index]) ? $titles[$index] : '';
                                
                                $slide_class = $index === 0 ? 'clapat-slide clapat-slide-visible clapat-slide-active' : 
                                             ($index === 1 ? 'clapat-slide clapat-slide-next' :
                                             ($index === 2 ? 'clapat-slide clapat-slide-next-two' : 
                                              'clapat-slide clapat-slide-next-three'));
                                
                                $transform = "top: " . ($index * 100) . "%; transform: translate(0px, 0px);";
                                
                                echo render_slide($slide_class, $transform, $image_url, $link_url, $title);
                            }
                        }
                        
                        // Clone slides
                        foreach ($images as $index => $item) {
                            if (isset($item['url'])) {
                                $image_url = $item['url'];
                                $link_url = isset($links[$index]) ? $links[$index] : '#';
                                $title = isset($titles[$index]) ? $titles[$index] : '';
                                
                                $slide_class = $index === 0 ? 'clapat-slide clapat-slide-clone clapat-slide-prev' :
                                             ($index === 1 ? 'clapat-slide clapat-slide-clone clapat-slide-prev-two' :
                                              'clapat-slide clapat-slide-clone clapat-slide-prev-three');
                                
                                $transform = "top: " . (-($index + 1) * 100) . "%; transform: translate(0px, 0px);";
                                
                                echo render_slide($slide_class, $transform, $image_url, $link_url, $title);
                            }
                        }
                    }
                    ?>
                    </div>
                    
                    <!-- Sync Slider -->
                    <div class="clapat-sync-slider">
                        <div class="clapat-sync-slider-wrapper" style="translate: none; rotate: none; scale: none; transform: translate(0%, -50%);">
                            <div class="clapat-sync-slider-viewport">
                            <?php
                            if (isset($nias_option_data['residential_projects_right_repeater_image']) && 
                                is_array($nias_option_data['residential_projects_right_repeater_image'])) {
                                
                                $sync_images = $nias_option_data['residential_projects_right_repeater_image'];
                                $sync_links = $nias_option_data['residential_projects_right_repeater_link'] ?? [];
                                $sync_titles = $nias_option_data['residential_projects_right_repeater_title'] ?? [];
                                
                                foreach ($sync_images as $index => $item) {
                                    if (isset($item['url'])) {
                                        $image_url = $item['url'];
                                        $link_url = isset($sync_links[$index]) ? $sync_links[$index] : '#';
                                        $title = isset($sync_titles[$index]) ? $sync_titles[$index] : '';
                                        
                                        echo render_sync_slide($image_url, $link_url, $title);
                                    }
                                }
                            }
                            ?>
                            </div>
                            <!-- Duplicate viewport for continuous scrolling -->
                            <div class="clapat-sync-slider-viewport">
                            <?php
                            if (isset($sync_images)) {
                                foreach ($sync_images as $index => $item) {
                                    if (isset($item['url'])) {
                                        $image_url = $item['url'];
                                        $link_url = isset($sync_links[$index]) ? $sync_links[$index] : '#';
                                        $title = isset($sync_titles[$index]) ? $sync_titles[$index] : '';
                                        
                                        echo render_sync_slide($image_url, $link_url, $title);
                                    }
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

// Helper function to render main slides
function render_slide($slide_class, $transform, $image_url, $link_url, $title) {
    ob_start();
?>
    <div class="<?php echo esc_attr($slide_class); ?>" style="<?php echo esc_attr($transform); ?>">
        <div class="slide-inner small-size align-top photo" data-color="#00423b">
            <div class="trigger-item change-header">
                <div class="img-mask">
                    <a class="slide-link" data-type="page-transition" href="<?php echo esc_url($link_url); ?>"></a>
                    <div class="section-image trigger-item-link">
                        <img src="<?php echo esc_url($image_url); ?>" class="item-image grid__item-img" alt="">
                    </div>
                </div>
                <img src="<?php echo esc_url($image_url); ?>" class="grid__item-img grid__item-img--large" alt="">
                <div class="slide-caption fadeout-element">
                    <?php if (!empty($title)) : ?>
                        <div class="slide-title"><span><?php echo esc_html($title); ?></span></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

// Helper function to render sync slides
function render_sync_slide($image_url, $link_url, $title) {
    ob_start();
?>
    <div class="clapat-sync-slide">
        <div class="slide-inner small-size align-top photo" data-color="#00423b">
            <div class="trigger-item change-header">
                <div class="img-mask">
                    <a class="slide-link" data-type="page-transition" href="<?php echo esc_url($link_url); ?>"></a>
                    <div class="section-image trigger-item-link">
                        <img src="<?php echo esc_url($image_url); ?>" class="item-image grid__item-img" alt="">
                    </div>
                </div>
                <img src="<?php echo esc_url($image_url); ?>" class="grid__item-img grid__item-img--large" alt="">
                <div class="slide-caption fadeout-element">
                    <?php if (!empty($title)) : ?>
                        <div class="slide-title"><span><?php echo esc_html($title); ?></span></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

add_shortcode('nias_residential_projects_slider', 'nias_residential_projects_slider');











// ثبت شورتکد برای نمایش اسلایدهای پروژه تجاری
function nias_commercial_projects_slider() {
    ob_start();
?>
    <div id="itemsWrapperLinks">
        <div id="itemsWrapper" class="webgl-fitthumbs fx-one">
            <div class="clapat-slider-wrapper showcase-reverse fw" style="opacity: 1;">
                <div class="clapat-slider">
                    <!-- Main Slider -->
                    <div class="clapat-slider-viewport">
                    <?php
                    $nias_option_data = get_option('nias_redux_settings');
                    
                    if (isset($nias_option_data['commercial_projects_left_repeater_image']) && 
                        is_array($nias_option_data['commercial_projects_left_repeater_image'])) {
                        
                        $images = $nias_option_data['commercial_projects_left_repeater_image'];
                        $links = $nias_option_data['commercial_projects_left_repeater_link'] ?? [];
                        $titles = $nias_option_data['commercial_projects_left_repeater_title'] ?? [];
                        
                        // Original slides
                        foreach ($images as $index => $item) {
                            if (isset($item['url'])) {
                                $image_url = $item['url'];
                                $link_url = isset($links[$index]) ? $links[$index] : '#';
                                $title = isset($titles[$index]) ? $titles[$index] : '';
                                
                                $slide_class = $index === 0 ? 'clapat-slide clapat-slide-visible clapat-slide-active' : 
                                             ($index === 1 ? 'clapat-slide clapat-slide-next' :
                                             ($index === 2 ? 'clapat-slide clapat-slide-next-two' : 
                                              'clapat-slide clapat-slide-next-three'));
                                
                                $transform = "top: " . ($index * 100) . "%; transform: translate(0px, 0px);";
                                
                                echo render_slide($slide_class, $transform, $image_url, $link_url, $title);
                            }
                        }
                        
                        // Clone slides
                        foreach ($images as $index => $item) {
                            if (isset($item['url'])) {
                                $image_url = $item['url'];
                                $link_url = isset($links[$index]) ? $links[$index] : '#';
                                $title = isset($titles[$index]) ? $titles[$index] : '';
                                
                                $slide_class = $index === 0 ? 'clapat-slide clapat-slide-clone clapat-slide-prev' :
                                             ($index === 1 ? 'clapat-slide clapat-slide-clone clapat-slide-prev-two' :
                                              'clapat-slide clapat-slide-clone clapat-slide-prev-three');
                                
                                $transform = "top: " . (-($index + 1) * 100) . "%; transform: translate(0px, 0px);";
                                
                                echo render_slide($slide_class, $transform, $image_url, $link_url, $title);
                            }
                        }
                    }
                    ?>
                    </div>
                    
                    <!-- Sync Slider -->
                    <div class="clapat-sync-slider">
                        <div class="clapat-sync-slider-wrapper" style="translate: none; rotate: none; scale: none; transform: translate(0%, -50%);">
                            <div class="clapat-sync-slider-viewport">
                            <?php
                            if (isset($nias_option_data['commercial_projects_right_repeater_image']) && 
                                is_array($nias_option_data['commercial_projects_right_repeater_image'])) {
                                
                                $sync_images = $nias_option_data['commercial_projects_right_repeater_image'];
                                $sync_links = $nias_option_data['commercial_projects_right_repeater_link'] ?? [];
                                $sync_titles = $nias_option_data['commercial_projects_right_repeater_title'] ?? [];
                                
                                foreach ($sync_images as $index => $item) {
                                    if (isset($item['url'])) {
                                        $image_url = $item['url'];
                                        $link_url = isset($sync_links[$index]) ? $sync_links[$index] : '#';
                                        $title = isset($sync_titles[$index]) ? $sync_titles[$index] : '';
                                        
                                        echo render_sync_slide($image_url, $link_url, $title);
                                    }
                                }
                            }
                            ?>
                            </div>
                            <!-- Duplicate viewport for continuous scrolling -->
                            <div class="clapat-sync-slider-viewport">
                            <?php
                            if (isset($sync_images)) {
                                foreach ($sync_images as $index => $item) {
                                    if (isset($item['url'])) {
                                        $image_url = $item['url'];
                                        $link_url = isset($sync_links[$index]) ? $sync_links[$index] : '#';
                                        $title = isset($sync_titles[$index]) ? $sync_titles[$index] : '';
                                        
                                        echo render_sync_slide($image_url, $link_url, $title);
                                    }
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}



add_shortcode('nias_commercial_projects_slider', 'nias_commercial_projects_slider');





// ثبت شورتکد برای نمایش اسلایدهای پروژه مسابقاتی
function nias_competition_projects_slider() {
    ob_start();
?>
    <div id="itemsWrapperLinks">
        <div id="itemsWrapper" class="webgl-fitthumbs fx-one">
            <div class="clapat-slider-wrapper showcase-reverse fw" style="opacity: 1;">
                <div class="clapat-slider">
                    <!-- Main Slider -->
                    <div class="clapat-slider-viewport">
                    <?php
                    $nias_option_data = get_option('nias_redux_settings');
                    
                    if (isset($nias_option_data['competition_projects_left_repeater_image']) && 
                        is_array($nias_option_data['competition_projects_left_repeater_image'])) {
                        
                        $images = $nias_option_data['competition_projects_left_repeater_image'];
                        $links = $nias_option_data['competition_projects_left_repeater_link'] ?? [];
                        $titles = $nias_option_data['competition_projects_left_repeater_title'] ?? [];
                        
                        // Original slides
                        foreach ($images as $index => $item) {
                            if (isset($item['url'])) {
                                $image_url = $item['url'];
                                $link_url = isset($links[$index]) ? $links[$index] : '#';
                                $title = isset($titles[$index]) ? $titles[$index] : '';
                                
                                $slide_class = $index === 0 ? 'clapat-slide clapat-slide-visible clapat-slide-active' : 
                                             ($index === 1 ? 'clapat-slide clapat-slide-next' :
                                             ($index === 2 ? 'clapat-slide clapat-slide-next-two' : 
                                              'clapat-slide clapat-slide-next-three'));
                                
                                $transform = "top: " . ($index * 100) . "%; transform: translate(0px, 0px);";
                                
                                echo render_slide($slide_class, $transform, $image_url, $link_url, $title);
                            }
                        }
                        
                        // Clone slides
                        foreach ($images as $index => $item) {
                            if (isset($item['url'])) {
                                $image_url = $item['url'];
                                $link_url = isset($links[$index]) ? $links[$index] : '#';
                                $title = isset($titles[$index]) ? $titles[$index] : '';
                                
                                $slide_class = $index === 0 ? 'clapat-slide clapat-slide-clone clapat-slide-prev' :
                                             ($index === 1 ? 'clapat-slide clapat-slide-clone clapat-slide-prev-two' :
                                              'clapat-slide clapat-slide-clone clapat-slide-prev-three');
                                
                                $transform = "top: " . (-($index + 1) * 100) . "%; transform: translate(0px, 0px);";
                                
                                echo render_slide($slide_class, $transform, $image_url, $link_url, $title);
                            }
                        }
                    }
                    ?>
                    </div>
                    
                    <!-- Sync Slider -->
                    <div class="clapat-sync-slider">
                        <div class="clapat-sync-slider-wrapper" style="translate: none; rotate: none; scale: none; transform: translate(0%, -50%);">
                            <div class="clapat-sync-slider-viewport">
                            <?php
                            if (isset($nias_option_data['competition_projects_right_repeater_image']) && 
                                is_array($nias_option_data['competition_projects_right_repeater_image'])) {
                                
                                $sync_images = $nias_option_data['competition_projects_right_repeater_image'];
                                $sync_links = $nias_option_data['competition_projects_right_repeater_link'] ?? [];
                                $sync_titles = $nias_option_data['competition_projects_right_repeater_title'] ?? [];
                                
                                foreach ($sync_images as $index => $item) {
                                    if (isset($item['url'])) {
                                        $image_url = $item['url'];
                                        $link_url = isset($sync_links[$index]) ? $sync_links[$index] : '#';
                                        $title = isset($sync_titles[$index]) ? $sync_titles[$index] : '';
                                        
                                        echo render_sync_slide($image_url, $link_url, $title);
                                    }
                                }
                            }
                            ?>
                            </div>
                            <!-- Duplicate viewport for continuous scrolling -->
                            <div class="clapat-sync-slider-viewport">
                            <?php
                            if (isset($sync_images)) {
                                foreach ($sync_images as $index => $item) {
                                    if (isset($item['url'])) {
                                        $image_url = $item['url'];
                                        $link_url = isset($sync_links[$index]) ? $sync_links[$index] : '#';
                                        $title = isset($sync_titles[$index]) ? $sync_titles[$index] : '';
                                        
                                        echo render_sync_slide($image_url, $link_url, $title);
                                    }
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

add_shortcode('nias_competition_projects_slider', 'nias_competition_projects_slider');







// ثبت شورتکد برای نمایش اسلایدهای پروژه ویلا
function nias_villa_projects_slider() {
    ob_start();
?>
    <div id="itemsWrapperLinks">
        <div id="itemsWrapper" class="webgl-fitthumbs fx-one">
            <div class="clapat-slider-wrapper showcase-reverse fw" style="opacity: 1;">
                <div class="clapat-slider">
                    <!-- Main Slider -->
                    <div class="clapat-slider-viewport">
                    <?php
                    $nias_option_data = get_option('nias_redux_settings');
                    
                    if (isset($nias_option_data['villa_projects_left_repeater_image']) && 
                        is_array($nias_option_data['villa_projects_left_repeater_image'])) {
                        
                        $images = $nias_option_data['villa_projects_left_repeater_image'];
                        $links = $nias_option_data['villa_projects_left_repeater_link'] ?? [];
                        $titles = $nias_option_data['villa_projects_left_repeater_title'] ?? [];
                        
                        // Original slides
                        foreach ($images as $index => $item) {
                            if (isset($item['url'])) {
                                $image_url = $item['url'];
                                $link_url = isset($links[$index]) ? $links[$index] : '#';
                                $title = isset($titles[$index]) ? $titles[$index] : '';
                                
                                $slide_class = $index === 0 ? 'clapat-slide clapat-slide-visible clapat-slide-active' : 
                                             ($index === 1 ? 'clapat-slide clapat-slide-next' :
                                             ($index === 2 ? 'clapat-slide clapat-slide-next-two' : 
                                              'clapat-slide clapat-slide-next-three'));
                                
                                $transform = "top: " . ($index * 100) . "%; transform: translate(0px, 0px);";
                                
                                echo render_slide($slide_class, $transform, $image_url, $link_url, $title);
                            }
                        }
                        
                        // Clone slides
                        foreach ($images as $index => $item) {
                            if (isset($item['url'])) {
                                $image_url = $item['url'];
                                $link_url = isset($links[$index]) ? $links[$index] : '#';
                                $title = isset($titles[$index]) ? $titles[$index] : '';
                                
                                $slide_class = $index === 0 ? 'clapat-slide clapat-slide-clone clapat-slide-prev' :
                                             ($index === 1 ? 'clapat-slide clapat-slide-clone clapat-slide-prev-two' :
                                              'clapat-slide clapat-slide-clone clapat-slide-prev-three');
                                
                                $transform = "top: " . (-($index + 1) * 100) . "%; transform: translate(0px, 0px);";
                                
                                echo render_slide($slide_class, $transform, $image_url, $link_url, $title);
                            }
                        }
                    }
                    ?>
                    </div>
                    
                    <!-- Sync Slider -->
                    <div class="clapat-sync-slider">
                        <div class="clapat-sync-slider-wrapper" style="translate: none; rotate: none; scale: none; transform: translate(0%, -50%);">
                            <div class="clapat-sync-slider-viewport">
                            <?php
                            if (isset($nias_option_data['villa_projects_right_repeater_image']) && 
                                is_array($nias_option_data['villa_projects_right_repeater_image'])) {
                                
                                $sync_images = $nias_option_data['villa_projects_right_repeater_image'];
                                $sync_links = $nias_option_data['villa_projects_right_repeater_link'] ?? [];
                                $sync_titles = $nias_option_data['villa_projects_right_repeater_title'] ?? [];
                                
                                foreach ($sync_images as $index => $item) {
                                    if (isset($item['url'])) {
                                        $image_url = $item['url'];
                                        $link_url = isset($sync_links[$index]) ? $sync_links[$index] : '#';
                                        $title = isset($sync_titles[$index]) ? $sync_titles[$index] : '';
                                        
                                        echo render_sync_slide($image_url, $link_url, $title);
                                    }
                                }
                            }
                            ?>
                            </div>
                            <!-- Duplicate viewport for continuous scrolling -->
                            <div class="clapat-sync-slider-viewport">
                            <?php
                            if (isset($sync_images)) {
                                foreach ($sync_images as $index => $item) {
                                    if (isset($item['url'])) {
                                        $image_url = $item['url'];
                                        $link_url = isset($sync_links[$index]) ? $sync_links[$index] : '#';
                                        $title = isset($sync_titles[$index]) ? $sync_titles[$index] : '';
                                        
                                        echo render_sync_slide($image_url, $link_url, $title);
                                    }
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    return ob_get_clean();
}

add_shortcode('nias_villa_projects_slider', 'nias_villa_projects_slider');
