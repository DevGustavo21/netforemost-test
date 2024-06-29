<?php 
$header_title = $cp->hero_header_title;
$title = $cp->hero_title;
$subtitle = $cp->hero_subtitle;
$feature_image = $cp->hero_feature_image;
?>


<section class="hero">
    <div class="hero__wrapper">
        <div class="hero__wrapper-info">
            <?php if(!empty($header_title)):?>
                <span class="hero__wrapper-info-header_title"><?php echo $header_title?></span>
            <?php endif?>

            <?php if(!empty($title)):?>
                <h1 class="hero__wrapper-info-title"><?php echo $title?></h1>
            <?php endif?>

            <?php if(!empty($subtitle)):?>
                <p class="hero__wrapper-info-subtitle"><?php echo $subtitle?></p>
            <?php endif?>
        </div>

        <div class="hero__wrapper-image">
            <?php if(!empty($feature_image)):?>
                <img src="<?php echo $feature_image['url']?>" alt="<?php echo $feature_image['name']?>">
            <?php endif?>
        </div>
    </div>
</section>