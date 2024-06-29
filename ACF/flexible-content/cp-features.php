<?php 
$features = $cp->features;
?>

<section class="features">

    <?php if(!empty($features)):?>
        <div class="features__wrapper">
            <?php foreach($features as $feature):?>
                <?php $icon = get_field('article_icon', $feature->ID);
                ?>
                <div class="features__wrapper-item">
                    <?php if(!empty($icon['url'])):?>
                        <div class="features__wrapper-item-icon">
                            <img src="<?php echo $icon['url']?>" alt="<?php echo $icon['name']?>">
                        </div>
                    <?php endif?>

                    <?php if(!empty($feature->post_title)):?>
                        <h2 class="features__wrapper-item-title"><?php echo $feature->post_title; ?></h2>
                    <?php endif?>

                    <?php if(!empty($feature->post_excerpt)):?>
                        <p class="features__wrapper-item-description"><?php echo $feature->post_excerpt; ?></p>
                    <?php endif?>

                    <a class="features__wrapper-item-cta" href="<?php echo get_permalink($feature->ID); ?>">Read Article</a>
                </div>
            <?php endforeach?>
        </div>
    <?php endif?>
</section>
