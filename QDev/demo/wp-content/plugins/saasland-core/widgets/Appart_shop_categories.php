<?php
namespace SaaslandCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use WP_Query;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Shop Categories
 */
class Appart_shop_categories extends Widget_Base {

    public function get_name() {
        return 'Saasland_appart_shop_categories';
    }

    public function get_title() {
        return __( 'Shop Categories', 'saasland-core' );
    }

    public function get_icon() {
        return ' eicon-cart-medium';
    }

    public function get_categories() {
        return [ 'saasland-elements' ];
    }

    public function get_style_depends() {
        return [ 'appart-style', 'appart-responsive' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'filter', [
                'label' => __( 'Filter', 'saasland-core' ),
            ]
        );
        $this->add_control(
            'show_count', [
                'label' => esc_html__( 'Show category count', 'saasland-core' ),
                'type' => Controls_Manager::NUMBER,
                'label_block' => true,
                'default' => 4
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings();
        ?>
        <section class="popular_category_area">
            <div class="container custom_container">
                <div class="row p_category_info">
                    <?php
                    $cats = get_terms(array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        'number' => $settings['show_count']
                    ));
                    if ( is_array($cats) ) {
                        $i = 0;
                        foreach ($cats as $cat) {
                            $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
                            $image_url = wp_get_attachment_url( $thumbnail_id );
                            if (!empty($image_url)) { ?>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p_category_item">
                                        <?php echo wp_get_attachment_image($thumbnail_id, 'saasland_350x400', '', array('class'=>'img-fluid') ) ?>
                                        <div class="content">
                                            <a href="<?php echo get_term_link($cat); ?>"> <h3> <?php echo $cat->name ?> </h3></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php
    }

}