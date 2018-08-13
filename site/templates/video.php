<?php include('./_header.php'); // include header markup ?>

<div class="video-gallery" style="background-image: url('<?php echo $page->section_image->url; ?>')">
    <div class="video-gallery__list swiper-container">
        <div class="navigation-arrows__nav">
            <a href="#" class="navigation-arrows__nav-arrow navigation-arrows__nav-arrow--left">
                <span class="navigation-arrows__nav-text">Prev</span>
                <img src="/site/templates/images/arrow-left.png" alt="">
            </a>
            <a href="#" class="navigation-arrows__nav-arrow navigation-arrows__nav-arrow--right">
                <span class="navigation-arrows__nav-text">Next</span>
                <img src="/site/templates/images/arrow-right.png" alt="">
            </a>
        </div>
        <div class="swiper-wrapper">
            <?php

            

            foreach ($page->video_list as $video_item) {
                if( $video_item->image->url ) {
                    $img_url = $video_item->image->url;
                } else {
                    $img_url = '/site/templates/images/homepage/slide-6.jpg';
                }
            ?>
                <div class="swiper-slide video-gallery__item">
                    <div class="video-gallery__item-wrap"  style="background-image: url('/site/templates/images/video-gallery/video-bg.jpg')">
                        <div class="video-gallery__item-inner" style="background-image: url('<?php echo $img_url; ?>')">
                            <div class="video-gallery__play-btn">  

                            </div>
                            <a href="#" class="video-gallery__link" data-frame="<?php echo $video_item->link; ?>"></a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
</div>

<?php include('./_footer.php'); ?>
