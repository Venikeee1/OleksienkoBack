<div class="menu">
    <div class="menu__wrapper">
        <ul class="menu__list">

            <li class="menu__item">
                <a href="<?php echo \ProcessWire\wire('pages')->get("/")->url; ?>" class="menu__link"><?php echo \ProcessWire\wire('pages')->get("/")->title;?></a>
                <span class="menu__number">01</span>
            </li>

            <?php

            $out = '';

            // cycle through all the items
            foreach (\ProcessWire\wire('pages')->get("/")->children('template=category') as $key => $category) {
                if (count($category) > 0) {
                    $index = $key + 2;

                    if ($category->id == \ProcessWire\wire('page')->parent->id) {
                        $current = " current";
                    }

                    $out .= '<li class="menu__item"><a href="' . $category->children->first->url . '" class="menu__link">' . $category->title . '</a>' . '<span class="menu__number">' . 0 . $index . '</span></li>';

                }
            }


            echo $out;

            ?>

        </ul>
        <div class="menu__title">
            <img src="source/images/menu/menu.png" alt="">
        </div>
        <div class="menu__media">
            {{#each menu.socialNetwork}}
            <a href="{{link}}" class="menu__ico">{{{ico}}}</a>
            {{/each}}
        </div>
        <ul class="menu__info">
            {{#each menu.projects}}
            <li class="menu__info-item">
                <a href="{{link}}" class="menu__info-link">{{name}}</a>
            </li>
            {{/each}}
        </ul>
        <div class="menu__tel">
            <a href="tel:+380674647074" class="menu__tel-item">+38 067 464 70 74</a>
            <a href="tel:+380444675010" class="menu__tel-item">+38 044 467 50 10</a>
        </div>
    </div>
</div>
