<?php include('./_header.php'); // include header markup ?>
<?php 
    if ($page->prev instanceof NullPage) {
        $prevPage = null;
    } else {
        $prevPage = $page->prev;
    }


    if ($page->next instanceof NullPage) {
        $nextPage = null;
    } else {
        $nextPage = $page->next;
    }
?>
<div class="inner-page" >

    
    <div class="navigation-arrows__nav">
        <a href="<?php if(!$prevPage) {
            echo '/';
            } else {
                echo $prevPage->url;
            }?>" class="navigation-arrows__nav-arrow navigation-arrows__nav-arrow--left">
            <span class="navigation-arrows__nav-text">
            <?php if(!$prevPage) {
                echo 'Back';
            } else {
                echo 'Previous project';
            }
            ?>
            </span>
            <img src="/site/templates/images/arrow-left.png" alt="">
        </a>
        <?php if($nextPage) { ?>
        <a href="<?php echo $nextPage->url;?>" class="navigation-arrows__nav-arrow navigation-arrows__nav-arrow--right">
            <span class="navigation-arrows__nav-text">Next project</span>
            <img src="/site/templates/images/arrow-right.png" alt="">
        </a>
        <?php } else { ?>
            <a class="navigation-arrows__nav-arrow navigation-arrows__nav-arrow--right" style="visibility:hidden;">
                <span class="navigation-arrows__nav-text">Next project</span>
                <img src="/site/templates/images/arrow-right.png" alt="">
            </a>
        <?php }; ?>
    </div>
    <div class="main__text">
        <?php if($page->section_name_first) { ?>
            <a href="" class="main-title main-title--light animation-title"><?php echo $page->section_name_first; ?></a>
        <?php } ?>

        <?php if($page->section_name_second) { ?>
            <a href="" class="homepage__subtitle main-title main-title--semibold animation-title"><?php echo $page->section_name_second; ?></a>
        <?php } ?>
        
        <p class="slide__description animation-title">
            <?php if($page->item_description) echo $page->item_description ?>
            
            <a href="" class="more-btn">more...</a>   
        </p>
    </div>
    <section class="inner-page__slides">
        <?php if($page->slides) { ?>
            <?php foreach ($page->slides as $slide) { ?>
                <div class="inner-page__slide" style="background-image: url('<?php echo $slide->url ?>')"></div>
            <?php } ?>
        <?php } ?>
        <div class="inner-page__slide" data-section="footer"><?php include('./contacts.inc'); ?></div>
    </section>
    <div class="red-squares">
        <div class="red-square"></div>
        <div class="red-square"></div>
    </div>
    <div class="slide__number">
        <div class="slide__number-inner">
            <span class="slide__value">01/<span class="slide__number-index">01</span></span>
        </div>
    </div>
    <div class="scroll-more">
        <span class="scroll-more__text exo--thin">
            <span class="scroll-more__desktop">Scroll</span>
            <span class="scroll-more__mobile">Swipe</span>
            <span class="scroll-more__direction scroll-more--bold scroll-more--down active exo--bold">Down</span>
            <span class="scroll-more__direction scroll-more--bold scroll-more--up exo--bold">Up</span>
        </span>
    </div>
    <div class="inner-page-info__wrapper">
    <div class="inner-page-info__bg"></div>
    <div class="inner-page-info">
        <div class="inner-page-info__text-bg">
            <img src="/site/templates/images/text.png" alt="" class="">
        </div>
        <div class="inner-page-info__inner">
            <div  class="inner-page-info__text">
                <ul class="inner-page-info__head">
                <?php if($page->inner_page_info_title) { ?>
                    <li class="inner-page-info__head-item">
                        <span class="inner-page-info__head-title">Title:</span> <span> <?php echo $page->inner_page_info_title?></span>
                    </li>
                <?php } ?>
                <?php if($page->inner_page_info_author) { ?>
                    <li class="inner-page-info__head-item">
                        <span class="inner-page-info__head-title">Author:</span> <span> <?php echo $page->inner_page_info_author?></span></span>
                    </li>
                <?php } ?>
                <?php if($page->inner_page_info_studio) { ?>
                    <li class="inner-page-info__head-item">
                        <span class="inner-page-info__head-title">Studio:</span> <span> <?php echo $page->inner_page_info_studio?></span></span>
                    </li>
                <?php } ?>
                <?php if($page->inner_page_info_function) { ?>
                    <li class="inner-page-info__head-item">
                        <span class="inner-page-info__head-title">Function:</span> <span> <?php echo $page->inner_page_info_function?></span></span>
                    </li>
                <?php } ?>
                <?php if($page->inner_page_info_status) { ?>
                    <li class="inner-page-info__head-item">
                        <span class="inner-page-info__head-title">Status:</span> <span> <?php echo $page->inner_page_info_status?></span></span>
                    </li>
                <?php } ?>
                <?php if($page->inner_page_info_area) { ?>
                    <li class="inner-page-info__head-item">
                        <span class="inner-page-info__head-title">Land area:</span> <span> <?php echo $page->inner_page_info_area?></span></span>
                    </li>
                <?php } ?>
                <?php if($page->inner_page_info_topography) { ?>
                    <li class="inner-page-info__head-item">
                        <span class="inner-page-info__head-title">Topography delta:</span> <span> <?php echo $page->inner_page_info_topography?></span></span>
                    </li>
                <?php } ?>
                <?php if($page->inner_page_info_location) { ?>
                    <li class="inner-page-info__head-item">
                        <span class="inner-page-info__head-title">Location:</span> <span> <?php echo $page->inner_page_info_location?></span></span>
                    </li>
                <?php } ?>
                    
                </ul>
                <div class="inner-page-info__description inner-page-info--animation">
                    <?php if($page->inner_page_info_text) { ?>
                        <p><?php echo $page->inner_page_info_text?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="inner-page-info__attribute">
                <?php if( count($page->inner_page_info_awards) > 0) { ?>
                    <div class="inner-page-info__attribute-item inner-page-info--animation">
                        <span class="inner-page-info__head-title">Awards:</span>
                        <ul class="inner-page-info__attribute-list">
                            <?php foreach($page->inner_page_info_awards as $award) { ?>
                                <li>
                                    <a href="<?php echo $award->link; ?>"><?php echo $award->link_text; ?></a>
                                </li>
                            <?php }; ?>
                        </ul>
                    </div>
                <?php } ?>
                <?php if( count($page->inner_page_info_tag) > 0) { ?>
                    <div class="inner-page-info__attribute-item inner-page-info--animation">
                        <span class="inner-page-info__head-title">Tags:</span>
                        <ul class="inner-page-info__attribute-list">

                            <?php foreach($page->inner_page_info_tag as $tag) { ?>
                                <li>
                                    <a href="<?php echo $tag->link; ?>"><?php echo $tag->link_text; ?></a>
                                </li>
                            <?php }; ?>

                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="inner-page-info__close">
            <button class="inner-page-info__close-btn"></button>
            <span class="inner-page-info__close-text">Close</span>
            <div class="x-btn">
                <div class="x-btn__line x-btn__line--top"></div>
                <div class="x-btn__line x-btn__line--bottom"></div>
            </div>
        </div>
    </div>
</div>

</div>
<?php include('./_footer.php'); ?>