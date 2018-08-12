<?php include('./_header.php'); // include header markup ?>
<div class="inner-page" >
    <?php echo $page->slides->first()->description; ?>
    <div class="navigation-arrows__nav">
        <a href="{{prev.link}}" class="navigation-arrows__nav-arrow navigation-arrows__nav-arrow--left">
            <span class="navigation-arrows__nav-text">{{prev.text}}</span>
            <img src="./source/images/arrow-left.png" alt="">
        </a>
        <a href="{{next.link}}" class="navigation-arrows__nav-arrow navigation-arrows__nav-arrow--right">
            <span class="navigation-arrows__nav-text">{{next.text}}</span>
            <img src="./source/images/arrow-right.png" alt="">
        </a>
    </div>
    <div class="main__text">
        {{#if title}}
        <a href="" class="main-title main-title--light animation-title">{{title}}</a>
        {{/if}}
        {{#if subtitle}}
        <a href="" class="homepage__subtitle main-title main-title--semibold animation-title">{{subtitle}}</a>
        {{/if}}
        <p class="slide__description animation-title">
            {{#if description}}
            {{{description}}}
            {{/if}}
        </p>
    </div>
    <section class="inner-page__slides">
        {{#each slides}}
        <div class="inner-page__slide" style="background-image: url('{{this}}')"></div>
        {{/each}}
    </section>
    <div class="red-squares">
        <div class="red-square"></div>
        <div class="red-square"></div>
    </div>
    <div class="slide__number">
        <span class="slide__value">01/<span class="slide__number-index">01</span></span>
    </div>
    <div class="scroll-more">
    <span class="scroll-more__text exo--thin">
        <span class="scroll-more__desktop">Scroll</span>
        <span class="scroll-more__mobile">Swipe</span>
        <span class="scroll-more--bold exo--bold">Down</span>
    </span>
    </div>
    <div class="inner-page-info__wrapper">
        <div class="inner-page-info__bg"></div>
        <div class="inner-page-info">
            <div class="inner-page-info__text-bg">
                <img src="./source/images/text.png" alt="" class="">
            </div>
            <div class="inner-page-info__inner">
                <div  class="inner-page-info__text">
                    <ul class="inner-page-info__head">
                        {{#each list}}
                        <li class="inner-page-info__head-item">
                            <span class="inner-page-info__head-title">{{title}}:</span> <span>{{description}}</span>
                        </li>
                        {{/each}}
                    </ul>
                    <div class="inner-page-info__description inner-page-info--animation">
                        {{#each description}}
                        <p>{{this}}</p>
                        {{/each}}
                    </div>
                </div>
                <div class="inner-page-info__attribute">
                    {{#each attributes}}
                    <div class="inner-page-info__attribute-item inner-page-info--animation">
                        <span class="inner-page-info__head-title">{{title}}:</span>
                        <ul class="inner-page-info__attribute-list">
                            {{#each list}}
                            <li><a href="">{{this}}</a></li>
                            {{/each}}
                        </ul>
                    </div>
                    {{/each}}
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
<?php include('./_footer.php'); // include header markup ?>