<?php defined('_JEXEC') or die; ?>

<ul class="mod_uk_accordion<?php echo $moduleclass_sfx; ?>" data-uk-accordion<?php echo $accordion_params; ?>>
    <?php foreach ($items as $item) { ?>
    <li>
        <a class="uk-accordion-title<?php echo ($title_class ? ' ' . $title_class : ''), ($item->title_class ? ' ' . $item->title_class : ''); ?>"><?php echo $item->title; ?></a>
        <div class="uk-accordion-content<?php echo ($content_class ? ' ' . $content_class : ''), ($item->content_class ? ' ' . $item->content_class : ''); ?>"><?php echo $item->content; ?></div>
    </li>
    <?php } ?>
</ul>
