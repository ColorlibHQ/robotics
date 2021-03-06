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
 * Robotics elementor section widget.
 *
 * @since 1.0
 */
class Robotics_About_Video extends Widget_Base {

	public function get_name() {
		return 'robotics-about-video';
	}

	public function get_title() {
		return __( 'About Video', 'robotics' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'robotics-elements' ];
	}

	protected function _register_controls() {

    
        // ----------------------------------------  About content ------------------------------
        $this->start_controls_section(
            'about_content',
            [
                'label' => __( 'About Us', 'robotics' ),
            ]
        );
        $this->add_control(
            'subtitletop',
            [
                'label' => esc_html__( 'Sub Title Top', 'robotics' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'BRAND NEW APP TO BLOW YOUR MIND', 'robotics' )
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'robotics' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'We have made a life that will change you', 'robotics' )
            ]
        );

        $this->add_control(
            'subtitlebottom',
            [
                'label' => esc_html__( 'Sub Title Bottom', 'robotics' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'We are here to listen from you deliver exellence', 'robotics' )
            ]
        );
        $this->add_control(
            'btnlabel',
            [
                'label' => esc_html__( 'Button Label', 'robotics' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Get Details', 'robotics' )
            ]
        );
        $this->add_control(
            'btnurl',
            [
                'label' => esc_html__( 'Button Url', 'robotics' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => ''
            ]
        );
        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'Contact', 'robotics' ),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => esc_html__( 'inappropriate behaviour is often laughed off as boys will be boys, women face higher conduct standards especially in the workplace. That is why it is crucial that, as women.', 'robotics' )
            ]
        );

        $this->end_controls_section(); // End about content
        // ----------------------------------------  Video Content ------------------------------
        $this->start_controls_section(
            'customersreview_videocontent',
            [
                'label' => __( 'Video Content', 'robotics' ),
            ]
        );
        $this->add_control(
            'youtubeurl',
            [
                'label' => esc_html__( 'Youtube Video Url', 'robotics' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => ''
            ]
        );
        $this->add_control(
            'featured_img',
            [
                'label'         => esc_html__( 'Featured Image', 'robotics' ),
                'type'          => Controls_Manager::MEDIA,
                'label_block'   => true,
            ]
        );
        $this->end_controls_section(); // End exibition content


        //------------------------------ Style Content ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'robotics' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_top_subtitle', [
                'label'     => __( 'Top Sub Title', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#8a90ff',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left h6' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bottom_subtitle', [
                'label'     => __( 'Bottom Sub Title Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left p span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Button Style ------------------------------
         *
         */

        $this->start_controls_section(
            'buttonstyle', [
                'label' => __( 'Style Button', 'robotics' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_label', [
                'label'     => __( 'Label Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(15,0,1,0)',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'robotics' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fab700',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'robotics' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sect_video_ooverlay_bgcolor',
            [
                'label'     => __( 'About Video Overlay Color', 'robotics' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'videooverlaybg',
                'label' => __( 'Section Overlay', 'robotics' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .about-video-right .overlay-bg',
            ]
        );
        $this->add_control(
            'sect_ooverlay_bgcolor',
            [
                'label'     => __( 'Section Overlay Color', 'robotics' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'bg_overlay',
            [
                'label' => __( 'Overlay', 'robotics' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'robotics' ),
                'label_off' => __( 'Hide', 'robotics' ),
                'return_value' => 'yes',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionoverlaybg',
                'label' => __( 'Overlay', 'robotics' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .about-video-area .overlay-bg',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'robotics' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'robotics' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .about-video-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
 
    $videoUrl = $imgUrl = '';
    // Video url
    
    if( ! empty( $settings['youtubeurl'] ) ) {
        $videoUrl = $settings['youtubeurl'];
    }
    // Feature image

    if( ! empty( $settings['featured_img']['url'] ) ) {
        $imgUrl = $settings['featured_img']['url'];
    }

    ?>
    <section class="about-video-area section-gap">
        <?php
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 about-video-left">
                    <?php 
                    // Sub Title 2
                    if( ! empty( $settings['subtitletop'] ) ) {
                        echo robotics_heading_tag(
                            array(
                                'tag'   => 'h6',
                                'text'  => esc_html( $settings['subtitletop'] ),
                                'class' => esc_attr( 'text-uppercase' )
                            )
                        );
                    }
                    // Title
                    if( ! empty( $settings['title'] ) ) {
                        echo robotics_heading_tag(
                            array(
                                'tag'   => 'h1',
                                'text'  => esc_html( $settings['title'] )
                            )
                        );
                    }
                    // Sub Title 2
                    if( ! empty( $settings['subtitlebottom'] ) ) {
                        echo robotics_other_tag(
                            array(
                                'tag'   => 'span',
                                'text'  => esc_html( $settings['subtitlebottom'] ),
                                'wrap_before' => '<p>',
                                'wrap_after'  => '</p>',
                            )
                        );
                    }
                    // Content
                    if( ! empty( $settings['content'] ) ) {

                        echo robotics_get_textareahtml_output( $settings['content'] );
                    }
                    //
                    if( !empty( $settings['btnlabel'] ) && ! empty( $settings['btnurl'] ) ) {
                        echo robotics_anchor_tag(
                            array(
                                'text'   => esc_html( $settings['btnlabel'] ),
                                'url'    => esc_url( $settings['btnurl'] ),
                                'class'  => 'primary-btn text-uppercase',
                            )
                        );
                    }

                    ?>
                </div>
                <?php 
                if( $videoUrl ) :
                ?>
                <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex relative" style="background-image: url( <?php echo esc_url( $imgUrl ); ?> )">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="<?php echo esc_url( $videoUrl ); ?>"><img class="img-fluid mx-auto" src="<?php echo ROBOTICS_COMPANION_EL_ASS_DIR_URL ?>img/play-btn.png" alt="play button"></a>
                </div>
                <?php 
                endif;
                ?>
            </div>
        </div>  
    </section>

    <?php

    }
	
}
