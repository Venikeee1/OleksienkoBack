<?php include('./_header.php'); // include header markup ?>

<?php /* echo $page->title; ?></h1>
<?php if ($page->editable()) echo "<p><a href='$page->editURL'>Edit</a></p>"; */ ?>

<div class="homepage">
    <div class="red-squares">
        <div class="red-square"></div>
    </div>
    <?php include('./nivigationLetters.inc'); ?>
    <div class="homepage__slides">
        <!-- <section class="homepage__item">
             <div class="first-screen-slider">
                 {{#each homepage.firstScreen.slides}}
                 <div class="first-screen-slider__item" style="background-image: url('{{this}}')"></div>
                 {{/each}}
             </div>
             <div class="slide__number">
                 <span class="slide__value">{{homepage.firstScreen.number}}</span>
             </div>
         </section>-->
        <!--{{#each homepage.items}}-->
        <?php foreach ($page->homepage_section as $key=>$section) { ?>
            <section class="homepage__item" style="background-image: url('<?php echo $section->section_image->url; ?>')">
                <div class="main__text">
                    <?php if($section->section_name_first) { ?>
                        <a href="{{link}}" class="main-title main-title--light"><?php echo $section->section_name_first; ?></a>
                    <?php } ?>
                    <?php if($section->section_name_second) { ?>
                        <a href="{{link}}" class="homepage__subtitle main-title main-title--semibold"><?php echo $section->section_name_second; ?></a>
                    <?php } ?>
                    <!--{{#if subtitle}}
                    <h3 class="homepage__position main-subtitle animation-title">{{subtitle}}</h3>
                    {{/if}}-->
                    <p class="slide__description animation-title">
                        {{#if description}}
                        {{{description}}}
                        {{/if}}
                    </p>
                </div>
                <div class="slide__number">
                    <span class="slide__value"><?php echo $key; ?></span>
                </div>
            </section>

        <?php } ?>
        <!--{{/each}}-->
        <!--<section class="homepage__item" style="background-image: url('{{homepage.achievement.background}}')" data-section="achievement">
            <div class="main__text">
                <a href="{{link}}" class="main-title main-title--light">{{homepage.achievement.title}}</a>
                <a href="{{link}}" class="homepage__subtitle main-title main-title--semibold">{{homepage.achievement.titleBold}}</a>
                <p class="slide__description"></p>
            </div>
            <div class="slide__number">
                <span class="slide__value">{{homepage.achievement.number}}</span>
            </div>
            <div class="achievement__wrapper">
                <ul class="achievement__list">
                    {{#each homepage.achievement.list}}
                    <li class="achievement__item">
                        <span class="achievement__quantity"><span class="exo--light">{{zeroAmount}}</span>{{value}}</span>
                        <span class="achievement__description">{{description}}</span></li>
                    {{/each}}
                </ul>
            </div>
        </section>
        <section class="homepage__item" style="background-image: url('{{homepage.video.background}}')" data-section="video">
            <div class="main__text">
                <a href="{{link}}" class="main-title main-title--light homepage__animation-title">{{homepage.video.title}}</a>
                <a href="{{link}}" class="homepage__subtitle main-title main-title--semibold homepage__animation-title">{{homepage.video.titleBold}}</a>
                <p class="slide__description"></p>
            </div>
            <div class="slide__number">
                <span class="slide__value">{{homepage.video.number}}</span>
            </div>
            <a href="#" class="homepage__play-btn" data-iframe="https://www.youtube.com/embed/KQxxzMh7bto?autoplay=1&amp;auotplay=1&amp;showinfo=0&amp;rel=0">
                <span class="homepage__play-triangle"></span>
            </a>
            <div class="video__lines">
                <div class="video__line video__line--1"></div>
                <div class="video__line video__line--2"></div>
                <div class="video__line video__line--3"></div>
            </div>
        </section>-->
    </div>
    <!--{{>component/scroll-more/scroll-more}}-->
</div>


<?php include('./_footer.php'); ?>
	
