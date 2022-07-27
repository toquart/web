<?php
/**
 * @package     Joomla.Module
 * @subpackage  mod_records
 * 
 * @copyright   Copyright (C) 2022 Adrien Beaugendre. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

$document = JFactory::getDocument();

$options = array("version" => "auto");
$document->addStyleSheet(JURI::root() . "modules/mod_records/tmpl/default/style.css", $options);

require ModuleHelper::getLayoutPath('mod_records', $params->get('layout', 'default'));