<?php
namespace SaaslandCore\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}



/**
 * Text Typing Effect
 *
 * Elementor widget for text typing effect.
 *
 * @since 1.7.0
 */
class Countdown extends Widget_Base {

    public function get_name() {
        return 'saasland_countdown';
    }

    public function get_title() {
        return __( 'Date Countdown', 'saasland-core' );
    }

    public function get_icon() {
        return ' eicon-countdown';
    }

    public function get_categories() {
        return [ 'saasland-elements' ];
    }

    public function get_style_depends() {
        return [ 'date-countdown' ];
    }

    public function get_script_depends() {
        return [ 'knob', 'throttle', 'moment', 'redcountdown', 'red-countdown-settings' ];
    }


    protected function _register_controls() {


        // ------------------------------------------------- Count Down -------------------------------------------//
        $this->start_controls_section(
            'date_count_down_sec', [
                'label' => __( 'Contents', 'saasland-core' ),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'saasland-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
            'date_count_down',
            [
                'label' => __( 'Date Time Picker', 'saasland-core' ),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'picker_options' => array(
                    'enableTime' => false,
                    'dateFormat' => "d/m/Y"
                )
            ]
        );


        $this->end_controls_section();


        //----------------------------------------- Title Style ----------------------------------------------------//
        $this->start_controls_section(
            'title_style_sec', [
                'label' => __( 'Title', 'saasland-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'color_title', [
                'label' => __( 'Text Color', 'saasland-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_text h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_title',
                'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '
                    {{WRAPPER}} .event_text h3',
            ]
        );

        $this->end_controls_section();


        //----------------------------------------- Section Background Style ----------------------------------------------------//
        $this->start_controls_section(
            'sec_bg_style', [
                'label' => __( 'Section Background', 'saasland-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sec_bg_color', [
                'label' => __( 'Background Color', 'saasland-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_counter_area' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sec_padding', [
                'label' => esc_html__( 'Padding', 'saasland-core' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .event_counter_area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'default' => [
                    'unit' => 'px', // The selected CSS Unit. 'px', '%', 'em',

                ],
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {

        wp_enqueue_style( 'date-countdown' );
        wp_enqueue_script( 'knob' );
        wp_enqueue_script( 'throttle' );
        wp_enqueue_script( 'moment' );
        wp_enqueue_script( 'redcountdown' );
        wp_enqueue_script( 'red-countdown-settings' );
        $settings = $this->get_settings_for_display();

        $date_count_down = !empty( $settings['date_count_down'] ) ? $settings['date_count_down'] : '';
        $title = !empty( $settings['title'] ) ? $settings['title'] : '';
        ?>
        <section class="event_counter_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="event_text wow fadeInLeft">
                            <?php
                            if ( $title ) {
                                echo '<h3>' . wp_kses_post( $title ) . '</h3>';
                            } ?>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="event_countdown wow fadeInRight">
                            <div class="event_counter red-time-counter">
                                <?php if ( $date_count_down ) { ?>
                                    <div class="red-countdown red-countdown-one" data-countdown="<?php echo esc_attr( $date_count_down ); ?>"></div>
                                    <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}