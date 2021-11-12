<?php

if ( ! defined( 'sugarEntry' ) || ! sugarEntry ) {
    die( 'Not A Valid Entry Point' );
}
// /scripts/post_install.php

function post_install()
{
    /*require_once('modules/Configurator/Configurator.php');
    $cfg = new Configurator();

    // Your setting to save in config_override.php 
    $cfg->config['myaddon_setting'] = true;
    $cfg->handleOverride();*/

   /* $autoexecute = false; //execute the SQL
    $show_output = true; //output to the screen
    require_once( "modules/Administration/QuickRepairAndRebuild.php" );
    $randc = new RepairAndClear();
    $randc->repairAndClearAll( array( 'clearAll' ), array( translate( 'LBL_ALL_MODULES' ) ), $autoexecute, $show_output ); */

    $fichero = 'layoutdefs/veta_recibo_veta_presupuesto_Veta_Presupuesto.php';
    $nuevo_fichero = 'layoutdefs/veta_recibo_veta_presupuesto_Veta_Presupuesto.php';

    if (!copy($fichero, $nuevo_fichero)) {
        error_log("¡Lo echaste a perder!", 3, "my-errors.log");

    }
}