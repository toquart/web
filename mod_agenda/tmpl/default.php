<?php
/**
 * @package     Joomla.Module
 * @subpackage  mod_agenda
 * 
 * @copyright   Copyright (C) 2022 Adrien Beaugendre. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

use Joomla\Module\Agenda\Site\Helper\AgendaHelper;
use Joomla\CMS\Language\Text;


?>
<div class="agendaContainer">
    <h3>AGENDA</h3>
    <hr class="redBar" style="width: 8%; border-top: 3px solid #CC000C; opacity: 1;">
    
        <?php
            $table = array(2,5,1,6,3); 
            $tab = sort($table, SORT_NATURAL);
            $dat = array();
            for($i = 1; $i <= 5; $i++){
               $dat += [ $i => $params->get('date_Event_'.$i) ];
            }
            asort($dat, SORT_NATURAL);
            //for($i = 1; $i <= 5; $i++){
            foreach($dat as $key => $value){
            //for($j=0; $j <= (5-1-$i); $j++){
            //    if(strtotime($params->get('date_Event'.$j+1)) > strtotime($params->get('date_Event_'.$j+2))){
            //        $temp = $params->get('date_Event_'.$j+2);
            //        $table[$j+1] = $params->get('date_Event'.$j+1);
            //        $table[$j] = $temp;
            //    }
            //} 
            $listIt = (strtotime($value) >= strtotime('today') ? 1 : 0); //Check if the event has already done
            //$id = array_keys($dat);
            $evt = $params->get('title_Event_'.$key);
            $space = $params->get('location_Event_'.$key);
            if(strlen($evt) > 1 && $listIt == 1){
        ?>
            <div class="bloque">    
                <div class="fstBloc">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
                
                    <div>
                        
                        <p class="dateDisplay"><?php echo ucwords(JHtml::_('date', $value, JText::_('l j F Y')));                                                       
                                                        /*print_r($dat);*/
                                                        ?></p>
                        <p><?php echo ucwords($evt);?></p>
                        <div class="bloque">
                            <div class="fstBloc">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div><p><?php echo $space;?></p></div>
                    </div>
            </div>
            <hr class="redBar" style="width: 90%; border-top: 1px solid #F3F3F3; opacity: 1;">
        <?php } } ?>
        
</div>
