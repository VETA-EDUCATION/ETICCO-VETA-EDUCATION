<?php
class ViewOnCalHook{
    function addButton($focus, $event, $args){
        /*global $timedate;
        $date = $timedate->fromUser($focus->date_start);
        $year = $date->format('Y');
        $month = $date->format('m');
        $day = $date->format('d');
        $loc = "index.php?action=index&module=Calendar&view=week&&year={$year}&month={$month}&day={$day}&hour=0";
        $focus->view_on_cal_button = "<button onclick='document.location = \"{$loc}\"' type='button'>View on calendar</button>";      */

        $focus->view_on_cal_button = "<button  type='button'>Observaciones</button>";
    }
}