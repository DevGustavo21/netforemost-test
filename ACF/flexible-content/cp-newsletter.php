<?php 
$title = $cp->newsletter_title;
$subtitle = $cp->newsletter_subtitle;
$enable_fields = $cp->enable_email_fields;
$enable_fields_condition = ($enable_fields === "Yes") ? '' : 'hidden';
$placeholder =  $cp->newsletter_input_placeholder;
$cta = $cp->newsletter_cta_text;
?>

<div class="newsletter">
    <div class="newsletter__wrapper">
        <?php if(!empty($title)):?>
            <h2 class="newsletter__wrapper-title">
                <?php echo $title?>
            </h2>
        <?php endif?>

        <?php if(!empty($subtitle)):?>
            <p class="newsletter__wrapper-subtitle">
                <?php echo $subtitle?>
            </p>
        <?php endif?>

        <div class="newsletter__wrapper-input_wrapper <?php echo $enable_fields_condition?>">
            <input type="email" required placeholder="<?php echo $placeholder?>" class="newsletter__wrapper-input_wrapper-input">
            <a class="newsletter__wrapper-input_wrapper-button" href="<?php echo $cta['url']?>">
                <?php echo $cta['title']?>
            </a>
        </div>
    </div>
</div>