<?php

require_once( 'modules/Veta_Presupuesto/clases/PresupuestoPDF.php' );

class Veta_PresupuestoController extends SugarController
{
    function action_pdf() {
        $this->view = 'pdf';
        $this->generar_pdf();

    }

    function action_send() {
        $this->view = 'send';

        //if( ! file_exists( $_REQUEST[ 'pid' ] . '.pdf' ) )
            $this->generar_pdf();

    }

    function generar_pdf() {
        $p = new Veta_Presupuesto();
        $p->retrieve( $_REQUEST[ 'pid' ] );

        $pdf = new PresupuestoPDF( 'P' , 'mm' , 'Letter' );
        $pdf->generate_pdf( $p );
    }


}
