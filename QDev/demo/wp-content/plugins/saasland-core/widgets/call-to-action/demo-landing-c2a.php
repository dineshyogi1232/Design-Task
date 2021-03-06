<footer class="footer_part">
    <div class="container">
        <a href="#" class="f_logo">
            <?php echo wp_get_attachment_image($settings['featured_image']['id'], 'full') ?>
        </a>
        <h2 class="wow fadeInUp" data-wow-delay="0.2s"> <?php echo wp_kses_post(nl2br($settings['title'])) ?> </h2>
        <?php if ( !empty($settings['btn_label']) ) : ?>
            <a class="wow fadeInUp" data-wow-delay="0.4s" href="<?php saasland_el_btn($settings['btn_url']) ?>">
                <i class="icon_cart_alt"></i><?php echo esc_html($settings['btn_label']) ?>
            </a>
        <?php endif; ?>
    </div>
    <div class="one_img wow slideInnew footer_shap_1" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: slideInnew;">
        <div class="layer layer2" data-depth="0.30">
            <img src="<?php echo plugins_url('images/footer_shap_1.png', __FILE__) ?>" alt="Shape">
        </div>
    </div>
    <div class="one_img wow slideInnew footer_shap_2" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInnew;">
        <div class="layer layer2" data-depth="0.10"><img src="<?php echo plugins_url('images/footer_shap_2.png', __FILE__) ?>" alt="Shape"></div>
    </div>
    <img src="<?php echo plugins_url('images/footer_shap_3.png', __FILE__) ?>" alt="Shape" class="footer_shap_3">
    <div class="circle_shape_1"></div>
</footer>