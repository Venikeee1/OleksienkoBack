<?php 
    $contact_data = \ProcessWire\wire('pages')->get("/")->children('template=contacts')[0];
?>
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
            <img src="/site/templates/images/menu/menu.png" alt="">
        </div>
        <ul class="menu__info">
            <li class="menu__info-item">
                <a href="/projects.html" class="menu__info-link">All  project</a>
            </li>
            <?php /*?>
            <li class="menu__info-item">
                <a href="/contact.html" class="menu__info-link">Contact</a>
            </li>
            <?php */;?>
        </ul>
        <div class="menu__tel">
            <?php foreach( $contact_data->contacts_phone_list as $phone) { ?>
                <a href="tel:+380674647074" class="menu__tel-item"><?php echo $phone->description_value ?></a>
            <?php }; ?>
        </div>
        <div class="menu__media">
            <?php foreach( $contact_data->contacts_social_media_list as $social_item) { ?>
                <a href="<?php echo $social_item->link; ?>" class="menu__ico">
                    <?php echo $social_item->svg_inline; ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
