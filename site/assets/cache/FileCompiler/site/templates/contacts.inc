<?php 
    $contact_data = \ProcessWire\wire('pages')->get("/")->children('template=contacts')[0];
?>

<footer class="footer">
    <div class="footer__inner">
        <div class="footer__title">
            <img src="/site/templates/images/footer.png" alt="">
        </div>
        <div class="footer__text">
            <p class="footer__about-us"><?php echo $contact_data->contacts_title; ?></p>
            <div class="footer__phone">
           
                <span class="footer__phone-text">phone:</span>
                <ul class="footer__phone-numbers">
                <?php foreach( $contact_data->contacts_phone_list as $phone) { ?>
                    <li class="footer__phone-number">
                        <a href="tel:+380674647074" class="footer__phone-link"><?php echo $phone->description_value ?></a>
                    </li>
                <?php } ?>
                </ul>
            </div>
            <a href="mailto:ai_on@ukr.net" class="footer__mail">@: <?php echo $contact_data->contacts_email; ?></a>
            <div class="footer__media">
                <?php foreach( $contact_data->contacts_social_media_list as $social_item) { ?>
                    <a href="<?php echo $social_item->link; ?>" class="menu__ico">
                        <?php echo $social_item->svg_inline; ?>
                    </a>
                <?php } ?>
                
            </div>
        </div>
    </div>
</footer>


