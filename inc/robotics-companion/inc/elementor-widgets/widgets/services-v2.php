<?php
namespace Roboticselementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Robotics elementor Team Member section widget.
 *
 * @since 1.0
 */
class Robotics_Services_V2 extends Widget_Base {

	public function get_name() {
		return 'robotics-services-v2';
	}

	public function get_title() {
		return __( 'Services V2', 'robotics' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'robotics-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  training Section Heading ------------------------------
        $this->start_controls_section(
            'services_heading',
            [
                'label' => __( 'Services Section Heading', 'robotics' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Title', 'robotics' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Sub Title', 'robotics' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'robotics' ),
			]
		);
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Training', 'robotics' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'robotics' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name'  => 'url',
                        'label' => __( 'Title Url', 'robotics' ),
                        'type'  => Controls_Manager::URL,
                        'show_external' => false,
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'robotics' ),
                        'type'  => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'robotics' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End Services content


        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'robotics' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#333333',
                'selectors' => [
                    '{{WRAPPER}} .title h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        //------------------------------ Style services Box ------------------------------
        $this->start_controls_section(
            'style_trainingbox', [
                'label' => __( 'Style Services Content', 'robotics' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_servicestitle', [
                'label' => __( 'Title Color', 'robotics' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-offered-service h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_serviceshovertitle', [
                'label' => __( 'Title Hover Color', 'robotics' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-offered-service:hover h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_servicesdescription', [
                'label' => __( 'Description Color', 'robotics' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-offered-service p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <section class="offered-service-area section-gap">
        <div class="container">
            <?php 
            // Section Heading
            robotics_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>
            <div class="row">
                <?php 
                if( is_array( $settings['services_content'] ) && count( $settings['services_content'] ) > 0 ):
                    foreach( $settings['services_content'] as $training ):
 
                // Member Picture
                $bgUrl = '';
                if( ! empty( $training['img']['url'] ) ) {
                    $bgUrl = $training['img']['url'];
                }
                
                ?>
                <div class="col-lg-4">
                    <div class="single-offered-service">
                        <?php 
                        // Image
                        echo robotics_img_tag(
                            array(
                                'url'   => esc_url( $bgUrl ),
                                'class'   => 'img-fluid'
                            )
                        );
                        
                        // Title
                        if( ! empty( $training['label'] ) ) {

                            $atagstart  = '';
                            $atagend    = '';

                            if( ! empty( $training['url']['url'] ) ) {

                                $atagstart  = '<a href="'.esc_url( $training['url']['url'] ).'">';
                                $atagend    = '</a>';

                            }
                            echo wp_kses_post( $atagstart );
                            echo robotics_heading_tag(
                                array(
                                    'tag'  => 'h4',
                                    'text' => esc_html( $training['label'] )
                                )
                            );
                            echo wp_kses_post( $atagend );
                        }

                        // Description
                        if( ! empty( $training['desc'] ) ) {
                            echo robotics_paragraph_tag(
                                array(
                                    'text'  => esc_html( $training['desc'] ),
                                )
                            );
                        }
                        ?>
                        
                    </div>
                </div>
                <?php
                    endforeach;
                endif;
                ?>

            </div>
        </div>  
    </section>

    <?php

    }

}
