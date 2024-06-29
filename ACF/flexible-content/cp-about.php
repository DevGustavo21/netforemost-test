<?php 
$feature_image = $cp->about_feature_image;
$header_title = $cp->about_header_title;
$title = $cp->about_title;
$description = $cp->about_description;
$cta = $cp->about_cta;
?>

<section class="about">
    <div class="about__wrapper">
        <?php if(!empty($feature_image)):?>
            <img src="<?php echo $feature_image['url']?>" alt="<?php echo $feature_image['name']?>" class="about__wrapper-image">
        <?php endif?>

        <div class="about__wrapper-info">
            <?php if(!empty($header_title)):?>
                <span class="about__wrapper-info-header">
                    <?php echo $header_title?>
                </span>
            <?php endif?>

            <?php if(!empty($title)):?>
                <h2 class="about__wrapper-info-title">
                    <?php echo $title ?>
                </h2>
            <?php endif?>

            <?php if(!empty($description)):?>  
                <p class="about__wrapper-info-description">
                    <?php echo $description?>
                </p>
            <?php endif?>  

            <?php if(!empty($cta)):?>
                <a href="<?php echo $cta['url']?>" class="about__wrapper-info-cta"><?php echo $cta['title']?></a>
            <?php endif?>
        </div>
    </div>
</section>