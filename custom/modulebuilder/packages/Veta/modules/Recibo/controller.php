<?php

require_once( 'modules/Veta_Recibo/clases/ReciboPDF.php' );

class Veta_ReciboController extends SugarController
{
    function action_observaciones()
    {
        $this->view = 'observaciones';
    }

    function action_recibo()
    {
        $this->view = 'recibo';
    }

    function action_pdf()
    {
        $this->view = 'pdf';
        $this->generar_pdf();
    }

    function action_send()
    {
        $this->view = 'send';

        //if( ! file_exists( $_REQUEST[ 'rid' ] . '.pdf' ) )
        $this->generar_pdf();
    }

    function generar_pdf()
    {

        $r = new Veta_Recibo();
        $r->retrieve( $_REQUEST[ 'rid' ] );

        $pdf = new ReciboPDF( 'P', 'mm', 'Letter' );
        $pdf->generate_pdf( $r );
    }

    function action_SubPanelViewer()
    {
        require_once 'include/SubPanel/SubPanelViewer.php';

        $js = <<<EOQ
<script>
window.location.reload();
</script>
EOQ;
        echo $js;
    }

}
