<?php 

$logo = get_field('footer_logo', 'option');
$description = get_field('footer_description', 'option');
$social_medias = get_field('footer_social_medias', 'option');
$navigation_list = get_field('navigation_list', 'option');
$copyright_text = get_field('footer_copyright_text', 'option');

?>


<footer class="footer">
    <hr>
    <div class="footer__wrapper">
        <div class="footer__wrapper-left">
        <?php if(!empty($logo)):?>
            <img class="footer__wrapper-left-image" src="<?php echo $logo['url']?>" alt="<?php echo $logo['name']?>">
        <?php endif?>

        <?php if(!empty($description)):?>
            <p class="footer__wrapper-left-description"><?php echo $description?></p>
        <?php endif?>

        <?php if(!empty($social_medias)):?>
            <div class="footer__wrapper-left-socials">
                <?php foreach($social_medias as $media):?>
                    <?php if(!empty($media['social_media_link']['url'])):?>
                        <a href="<?php echo $media['social_media_link']['url'] ?>">
                            <img class="footer__wrapper-left-socials-media" src="<?php echo $media['social_media_icon']['url']?>" alt="<?php echo $media['social_media_icon']['name']?>"/>
                        </a>
                        <?php else:?>
                            <img class="footer__wrapper-left-socials-media" src="<?php echo $media['social_media_icon']['url']?>" alt="<?php echo $media['social_media_icon']['name']?>"/>
                    <?php endif?>
                <?php endforeach?>
            </div>
        <?php endif?>
        </div>

        <div class="footer__wrapper-right">
            <?php if(!empty($navigation_list)):?>
                <?php foreach($navigation_list as $list):?>
                    <div class="footer__wrapper-right-list">
                        <h3 class="footer__wrapper-right-list-title"><?php echo $list['navigation_title']?></h3>

                        <?php if(!empty($list['navigation_items'])):?>
                            <div class="footer__wrapper-right-list-wrapper">
                                <ul>
                                    <?php foreach($list['navigation_items'] as $item):?>
                                        <li><a href="<?php echo $item['item']['url']?>"><?php echo $item['item']['title']?></a></li>
                                    <?php endforeach?>
                                </ul>
                            </div>
                        <?php endif?>
                    </div>
                <?php endforeach?>
            <?php endif?>
        </div>
    </div>

    <?php if(!empty($copyright_text)):?>
        <span class="footer__copyright"><?php echo $copyright_text?></span>
    <?php endif?>
</footer>

<?php wp_footer(); ?>

</body>
</html>
