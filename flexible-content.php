<?php
// header
get_header();
// end_header
?>


<?php
while (have_rows('layouts_flxe')) : the_row();

    if (get_row_layout() == 'welcome_section') : ?>

        <section class="welcom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wel-hed" data-aos="fade-up">
                            <h4><?php the_sub_field('welcome_heading'); ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wel-cont" data-aos="fade-up" data-aos-delay="300">
                            <p><?php the_sub_field('content_wel'); ?></p>
                            <a href="<?php the_sub_field('link_we'); ?>">Come inside</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'top_banner') :  ?>

        <section class="banner parallax-window" data-parallax="scroll" data-image-src="<?php echo get_sub_field('banner'); ?>">
            <?php if (is_home() && is_front_page()) { ?>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bih-wineawards.svg"></a>
            <?php }; ?>
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ban-sec">
                            <h1><?php echo the_sub_field('banner_heading'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'image_inside_heading_left_side_col-6') :  ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hom-sec" data-aos="fade-up" data-aos-delay="300">
                            <div class="image-holder">
                                <?php if (get_sub_field('link')) { ?>
                                    <a href="<?php the_sub_field('link'); ?>">
                                    <?php }; ?>
                                    <img src="<?php the_sub_field('image'); ?>" />
                                    <?php if (get_sub_field('link')) { ?>
                                    </a>
                                <?php }; ?>
                                <span class="imgovertext"><?php the_sub_field('heading_mid'); ?></span>
                            </div>
                            <div>
                                <p><?php the_sub_field('discription'); ?></p>
                                <?php if (get_sub_field('link')) { ?>
                                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sid-img" data-aos="fade-up">
                            <?php if (get_sub_field('next_side_image')) { ?>
                                <?php if (get_sub_field('link')) { ?>
                                    <a href="<?php the_sub_field('link'); ?>">
                                    <?php }; ?>
                                    <img src="<?php the_sub_field('next_side_image'); ?>" />
                                    <?php if (get_sub_field('link')) { ?>
                                    </a>
                                <?php }; ?>
                            <?php }; ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'image_inside_heading_right_side_col-6') :  ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sid-img" data-aos="fade-up">
                            <?php if (get_sub_field('next_side_image')) { ?>
                                <?php if (get_sub_field('link')) { ?>
                                    <a href="<?php the_sub_field('link'); ?>">
                                    <?php }; ?>
                                    <img src="<?php the_sub_field('next_side_image'); ?>" />
                                    <?php if (get_sub_field('link')) { ?>
                                    </a>
                                <?php }; ?>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hom-sec" data-aos="fade-up" data-aos-delay="300">
                            <div class="image-holder">
                                <?php if (get_sub_field('link')) { ?>
                                    <a href="<?php the_sub_field('link'); ?>">
                                    <?php }; ?>
                                    <img src="<?php the_sub_field('image'); ?>" />
                                    <?php if (get_sub_field('link')) { ?>
                                    </a>
                                <?php }; ?>
                                <span class="imgovertext"><?php the_sub_field('heading_mid'); ?></span>
                            </div>
                            <div>
                                <p><?php the_sub_field('discription'); ?></p>
                                <?php if (get_sub_field('link')) { ?>
                                    <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'see_more_products_link') :  ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="seemor">
                            <a href="<?php echo get_field('products_link'); ?>">See more products</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'content_under_the_image_right_side_col-9') :  ?>

        <section class="abou-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <div class="sec-img" data-aos="fade-up">
                            <?php if (get_sub_field('image')) { ?>
                                <?php if (get_sub_field('link')) { ?>
                                    <a href="<?php the_sub_field('link'); ?>">
                                    <?php }; ?>
                                    <img src="<?php the_sub_field('image'); ?>" />
                                    <?php if (get_sub_field('link')) { ?>
                                    </a>
                                <?php }; ?>
                            <?php }; ?>
                        </div>
                        <div class="sec-abou" data-aos="fade-up" data-aos-delay="300">
                            <?php the_sub_field('discription'); ?>
                            <?php if (get_sub_field('link')) { ?>
                                <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'image_slider') :  ?>

        <section class="abou-section">
            <div class="owl-carousel owl-theme" id="owl-about">
                <?php $images = get_sub_field('gallery');
                foreach ($images as $image) : ?>
                    <div class="item">
                        <img src="<?php echo $image['url']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'founder_message') :  ?>

        <section class="abou-section">
            <div class="container">
                <?php if (get_sub_field('swich_sides')[0] == '0') { ?>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="abo-mid" data-aos="fade-up" data-aos-delay="300">
                                <div class="foun-abou">
                                    <p><?php the_sub_field('content'); ?></p>
                                    <span><?php the_sub_field('name'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="foun-img" data-aos="fade-up">
                                <img src="<?php the_sub_field('image'); ?>" />
                            </div>
                        </div>

                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="foun-img" data-aos="fade-up">
                                <img src="<?php the_sub_field('image'); ?>" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="abo-mid" data-aos="fade-up" data-aos-delay="300">
                                <div class="foun-abou">
                                    <p><?php the_sub_field('content'); ?></p>
                                    <span><?php the_sub_field('name'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'full_width_content') :  ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-abou" data-aos="fade-up">
                            <?php the_sub_field('content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'left_image_and_right_content_col-6') :  ?>

        <section class="abou-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="foun-img" data-aos="fade-up">
                            <?php if (get_sub_field('image_a')) { ?>
                                <img src="<?php the_sub_field('image_a'); ?>">
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="abo-mid abou-cont" data-aos="fade-up" data-aos-delay="300">
                            <?php the_sub_field('content_a'); ?>
                            <?php if (get_sub_field('link')) { ?>
                                <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_lable'); ?></a>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'left_content_and_right_image_col-6') :  ?>

        <section class="abou-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-abou" data-aos="fade-up" data-aos-delay="300">
                            <?php the_sub_field('content_a'); ?>
                            <?php if (get_sub_field('link')) { ?>
                                <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_lable'); ?></a>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="foun-img" data-aos="fade-up">
                            <?php if (get_sub_field('image_a')) { ?>
                                <img src="<?php the_sub_field('image_a'); ?>">
                            <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'year_slider') :  ?>

        <section class="carousel-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="sync1" class="owl-carousel owl-theme">
                            <?php while (have_rows('slider_ar')) : the_row(); ?>
                                <div class="item">
                                    <div class="flex-holder">
                                        <div class="text-box">
                                            <h4><?php the_sub_field('year_sl'); ?></h4>
                                            <p><?php the_sub_field('content_sl'); ?></p>
                                        </div>
                                        <div class="image-holder"><img src="<?php the_sub_field('image_sl'); ?>"></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        </div>

                        <div id="sync2" class="owl-carousel owl-theme">
                            <?php while (have_rows('slider_ar')) : the_row(); ?>
                                <div class="item">
                                    <div class="flex-holder">
                                        <p><?php the_sub_field('year_sl'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php elseif (get_row_layout() == 'image_block') :  ?>

        <section style="background-color:<?php the_sub_field('background_color_img_block'); ?>;
padding:<?php the_sub_field('space_top_bottom_padd'); ?>;
">
            <div class="container">
                <div class="row">
                    <?php while (have_rows('images')) : the_row(); ?>
                        <div class="<?php echo get_sub_field('col-md'); ?>">
                            <div class="win-img1" data-aos="fade-up">
                                <img style="margin: <?php echo get_sub_field('margin'); ?>;display: <?php echo get_sub_field('image_center'); ?>; width:<?php echo get_sub_field('width'); ?>" src="<?php the_sub_field('image'); ?>">
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>


<?php endif;

endwhile;
?>

<?php
// footer
get_footer();
// end_footer
?>