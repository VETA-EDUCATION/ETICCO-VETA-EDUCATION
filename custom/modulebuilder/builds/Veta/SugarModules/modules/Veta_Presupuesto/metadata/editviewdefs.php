<?php
$module_name               = 'Veta_Presupuesto';
$viewdefs [ $module_name ] =
    array(
        'EditView' =>
            array(
                'templateMeta' =>
                    [
                        'form'       =>
                            [
                                'hidden' =>
                                    [
                                        0 => '<input type="hidden" id="asegurador" name="asegurador" value="{$fields.asegurador.value}">',

                                    ],
                            ],
                        'includes'   =>
                            [
                                0 =>
                                    [
                                        'file' => 'modules/Veta_Presupuesto/javascript/seguro_soel.js',
                                    ],
                            ],
                        'maxColumns' => '2',
                        'widths'     =>
                            [
                                0 =>
                                    [
                                        'label' => '10',
                                        'field' => '30',
                                    ],
                                1 =>
                                    [
                                        'label' => '10',
                                        'field' => '30',
                                    ],
                            ],
                        'useTabs'    => false,
                        'tabDefs'    =>
                            [
                                'DEFAULT'             =>
                                    [
                                        'newTab'       => false,
                                        'panelDefault' => 'expanded',
                                    ],
                                'LBL_EDITVIEW_PANEL1' =>
                                    [
                                        'newTab'       => false,
                                        'panelDefault' => 'expanded',
                                    ],
                            ],
                    ],
                'panels'       =>
                    array(
                        'default'             =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name'   => 'pais',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_PAIS',
                                            ),
                                        1 =>
                                            array(
                                                'name'   => 'departamento',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_DEPARTAMENTO',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name'   => 'ciudad',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_CIUDAD',
                                            ),
                                        1 =>
                                            array(
                                                'name'   => 'tipo_visa',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_TIPO_VISA',
                                            ),
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name'  => 'assigned_user_name',
                                                'label' => 'LBL_ASSIGNED_TO_NAME',
                                            ),
                                        1 =>
                                            array(
                                                'name'  => 'descuento',
                                                'label' => 'LBL_DESCUENTO',
                                            ),
                                    ),
                                3 =>
                                    array(
                                        0 => 'description',
                                    ),
                            ),
                        'lbl_editview_panel1' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name'     => 'soel_asegurador',
                                                'label'    => 'LBL_SOEL_ASEGURADOR',
                                                'type'     => 'enum',
                                                'function' => array(
                                                    'name' => 'getAseguradores'
                                                ),
                                            ),
                                        1 =>
                                            array(
                                                'name'  => 'seguro',
                                                'label' => 'LBL_SEGURO',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name'  => 'duracion',
                                                'label' => 'LBL_DURACION',
                                            ),
                                        1 =>
                                            array(
                                                'name'   => 'tipo_seguro',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_TIPO_SEGURO',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );;
?>
