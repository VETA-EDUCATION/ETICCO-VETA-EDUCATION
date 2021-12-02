<?php


require_once( 'include/MVC/View/views/view.edit.php' );
require_once ('modules/Veta_Presupuesto/clases/PresupuestoPDF.php');


class Veta_PresupuestoViewPdf extends ViewEdit
{

    function preDisplay() {

        //header("Location:" . $_REQUEST['pid'] . ".pdf");

        global $sugar_config;
        $file = $sugar_config[ 'upload_dir' ] . $_REQUEST['pid'] . ".pdf";


        header("Content-type: application/pdf");

        header("Content-Length: " . filesize($file));
        header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 2592000));
        set_time_limit(0);

        // When output_buffering = On, ob_get_level() may return 1 even if ob_end_clean() returns false
        // This happens on some QA stacks. See Bug#64860
        while (ob_get_level() && @ob_end_clean()) {
            ;
        }

        readfile($file);


    }
}