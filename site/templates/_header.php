<?php include('./_head.php'); // include header markup ?>
<header class="header  <?php echo $pages->get('/')->url == $page->url('/') ? 'homepage__header' : '' ?>">
    <div class="header__logo">
        <?php include('./logo.inc'); // include logo ?>
    </div>
    <div class="container header__inner">
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item">
                    <a href="/video-gallery/" class="header__link">Video</a>
                </li>
                <li class="header__item">
                    <a href="#" class="header__link">Blog</a>
                </li>
            </ul>
        </nav>
        <div class="header__lang">
            <a class="header__lang-btn"><span class="header__active-item">En</span></a>
            <div class="header__lang-list">
                <a href=""><span class="header__lang-item">Рус</span></a>
                <a href=""><span class="header__lang-item">Укр</span></a>
            </div>
        </div>
        <div class="header__menu">
            <span class="header__menu-text">{{header.menu}}</span>
            <div class="burger">
                <span class="burger__line burger__line--top"></span>
                <span class="burger__line burger__line--center"></span>
                <span class="burger__line burger__line--bottom"></span>
            </div>
            <button class="header__menu-button"></button>
        </div>
    </div>
</header>
<?php include('./_menu.inc'); // include header markup ?>
