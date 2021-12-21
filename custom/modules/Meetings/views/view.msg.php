<?php

//require_once('include/MVC/View/views/view.edit.php');
//require_once('include/database/PearDatabase.php');
//require_once('modules/Pie_factura/Pie_factura_sugar.php');

class MeetingsViewMsg extends ViewEdit
{
    var $msg = array(

        '1' => 'La cita no se pudo salvar porque no se ha adjuntado el archivo cotizacion.pdf o acta.pdf',
        '2' => 'La cita no se pudo salvar porque ya fue realizada',
        '3' => 'La cita no se pudo salvar porque el prospecto no tiene email'
    );

    function display()
    {
        $number = $_REQUEST['number'];
        echo $this->msg[$number];
    }


}
?>
