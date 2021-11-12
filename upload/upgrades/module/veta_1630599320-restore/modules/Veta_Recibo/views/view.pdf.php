<?php


require_once( 'include/MVC/View/views/view.edit.php' );
require_once( 'modules/Veta_Recibo/clases/ReciboPDF.php' );


class Veta_ReciboViewPdf extends ViewEdit
{

    function preDisplay()
    {

        header( "Location:" . $_REQUEST[ 'rid' ] . ".pdf" );

    }
}