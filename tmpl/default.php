<?php defined('_JEXEC') or die;
/*
 * @package     mod_uk_accordion
 * @copyright   Copyright (C) 2018 Aleksey A. Morozov (AlekVolsk). All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

?>

<ul class="mod_uk_accordion<?php echo $accordeon_class; ?>" data-uk-accordion<?php echo $accordion_params; ?>>
    <?php
    foreach ($items as $item)
    {
        $item_title_class = trim($item->title_class) ? ' ' . trim($item->title_class) : '';
        $item_content_class = trim($item->content_class) ? ' ' . trim($item->content_class) : '';
    ?>
    <li>
        <a class="uk-accordion-title<?php echo $title_class, $item_title_class; ?>"><?php echo $item->title; ?></a>
        <div class="uk-accordion-content<?php echo $content_class, $item_content_class; ?>"><?php echo $item->content; ?></div>
    </li>
    <?php } ?>
</ul>
