<?php defined('_JEXEC') or die;
/*
 * @package     mod_uk_accordion
 * @copyright   Copyright (C) 2018 Aleksey A. Morozov (AlekVolsk). All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

$vars = [
    'accordeon_class', 'title_class', 'content_class',
    'active', 'multiple', 'collapsible', 'animation', 'duration', 'transition',
    'items'
];

foreach ($vars as $var)
{
    $$var = $params->get($var);
}

$accordeon_class = trim($accordeon_class) ? ' ' . trim($accordeon_class) : '';
$title_class = trim($title_class) ? ' ' . trim($title_class) : '';
$content_class = trim($content_class) ? ' ' . trim($content_class) : '';

$accordion_params = [];
if ((int)$active > 0) $accordion_params[] = 'active:' . $active;
if ($multiple) $accordion_params[] = 'multiple:true';
if (!$collapsible && !$multiple) $accordion_params[] = 'collapsible:false';
if (!$animation)
{
    $accordion_params[] = 'animation:false';
} else {
    if ($duration > 0 && (int)$duration != 200) $accordion_params[] = 'duration:' . $duration;
    if ($transition != 'ease') $accordion_params[] = 'transition:' . $transition;
}
$accordion_params = $accordion_params ? '="' . implode(';', $accordion_params) . '"' : '';

require(JModuleHelper::getLayoutPath('mod_uk_accordion', $params->get('layout', 'default')));