<?php include('./_head.php'); // include header markup ?>

<?php 
    $video_page = wire('pages')->get("/")->children('template=video')[0];
?>

<header class="header  <?php echo $pages->get('/')->url == $page->url('/') ? 'homepage__header' : '' ?>">
    <div class="header__logo">
        <?php include('./logo.inc'); // include logo ?>
    </div>
    <div class="container header__inner">
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item">
                    <a href="<?php echo $video_page->url; ?>" class="header__link">Video</a>
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
        <a href="#" class="messenger__link">
            <svg class="messenger" x="0" y="0" width="40" height="40" viewBox="0 0 40 40">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g>
                        <g>
                            <g  fill="#FFFFFF">
                                <path d="M0,18.7150914 C0,8.37723141 8.956743,0 20,0 C31.043257,0 40,8.37723141 40,18.7150914 C40,29.0529515 31.043257,37.4301829 20,37.4301829 C18,37.4301829 16.0763359,37.1551856 14.2544529,36.6459314 L6.95652174,40 L6.95652174,33.0434783 C2.44929143,29.6044708 0,24.5969773 0,18.7150914 Z M16.9276495,19.6993886 L22.109375,25.0798234 L33.0434783,13.4782609 L23.0672554,18.9962636 L17.890625,13.6158288 L6.95652174,25.2173913 L16.9276495,19.6993886 Z"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </a>
        <div class="header__menu">
            <span class="header__menu-text">menu</span>
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
