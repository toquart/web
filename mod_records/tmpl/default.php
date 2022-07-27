<?php
/**
 * @package     Joomla.Module
 * @subpackage  mod_records
 * 
 * @copyright   Copyright (C) 2022 Adrien Beaugendre. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\Module\Records\Site\Helper\RecordsHelper;
use Joomla\CMS\Language\Text;
?>

<div class="recordsContainer">
    <table>
        <tr>
            <th>Epreuves</th>
            <th>Performance</th>
            <th>Vent</th>
            <th>Athlète</th>
            <th>Lieux</th>
            <th>Date</th>
        </tr>
        <tr>
            <td>50 m</td>
            <td><?php $params->get('W50');?></td>
            <td>Test</td>
            <td>TEst</td>
            <td>Test</td>
            <td>Test</td>
        </tr>
        <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
        </tr>
        <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
        </tr>
        <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
        </tr>
        <tr>
            <td>Laughing Bacchus Winecellars</td>
            <td>Yoshi Tannamuri</td>
            <td>Canada</td>
        </tr>
        <tr>
            <td>Magazzini Alimentari Riuniti</td>
            <td>Giovanni Rovelli</td>
            <td>Italy</td>
        </tr>
    </table>
</div>
