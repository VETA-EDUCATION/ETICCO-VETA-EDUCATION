<?php


class Veta_COEViewMsg extends ViewEdit
{
    var $msg = array(

        '1' => 'El COE no puede ser salvado porque no se ha pagado el 100% de la oportunidad',
        '2' => 'El COE no puede ser salvado porque la carta de oferta no se ha enviado',
        '3' => 'El COE no puede ser salvado porque no se ha pagado el 100% de la oportunidad y la carta de oferta no se ha enviado',
        '4' => 'El COE no admite el estado enviado porque existen correcciones sin corregir',
        '5' => 'El COE no admite el estado enviado porque existen casos abiertos',
        '6' => 'El COE no admite el estado enviado porque existen correcciones sin corregir y casos abiertos',
        '7' => 'No se puede crear el caso porque el COE ya fue enviado',
        '8' => 'No se puede crear la correccion porque el COE ya fue enviado'
        
    );
    

    function display()
    {
        $number = $_REQUEST['number'];
        echo $this->msg[$number];
        //soel
    }
    
}


?>