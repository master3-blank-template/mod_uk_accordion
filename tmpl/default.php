<?php defined('_JEXEC') or die;
/*
 * @package     mod_uk_accordion
 * @copyright   Copyright (C) Aleksey A. Morozov (AlekVolsk). All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

use Joomla\CMS\Filter\OutputFilter;
?>

<ul class="mod_uk_accordion<?php echo $accordeon_class; ?>" data-uk-accordion<?php echo $accordion_params; ?>>
    <?php
    foreach ($items as $item)
    {
        $item_id = 'slide-' . OutputFilter::stringURLSafe($item->title);
        $item_title_class = trim($item->title_class) ? ' ' . trim($item->title_class) : '';
        $item_content_class = trim($item->content_class) ? ' ' . trim($item->content_class) : '';
    ?>
    <li id="<?php echo $item_id; ?>">
        <a class="uk-accordion-title<?php echo $title_class, $item_title_class; ?>"><?php echo $item->title; ?></a>
        <div class="uk-accordion-content<?php echo $content_class, $item_content_class; ?>"><?php echo $item->content; ?></div>
    </li>
    <?php } ?>
</ul>
