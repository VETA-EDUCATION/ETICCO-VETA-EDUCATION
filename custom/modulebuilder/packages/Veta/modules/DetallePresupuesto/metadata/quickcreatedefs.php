<?php
$module_name = 'Veta_DetallePresupuesto';
$viewdefs [$module_name] =
    array (
        'QuickCreate' =>
            array (
                'templateMeta' =>
                    array (
                        'includes' => array(  0 => array( 'file' => 'modules/Veta_DetallePresupuesto/javascript/soel_sqs.js' , ) , ) ,
                        'maxColumns' => '2',
                        'widths' =>
                            array (
                                0 =>
                                    array (
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array (
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'useTabs' => false,
                        'tabDefs' =>
                            array (
                                'DEFAULT' =>
                                    array (
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                    ),
                'panels' =>
                    array (
                        'default' =>
                            array (
                                0 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'curso',
                                                'studio' => 'visible',
                                                'label' => 'LBL_CURSO',
                                                'displayParams' => array ('initial_filter' => '&activo_advanced=1', ),
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'bono',
                                                'label' => 'LBL_BONO',
                                            ),
                                    ),
                                1 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'descripcion_bono',
                                                'label' => 'LBL_DESCRIPCION_BONO',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
;
?>
