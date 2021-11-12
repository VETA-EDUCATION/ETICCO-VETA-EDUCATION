<?php
$module_name               = 'Veta_Presupuesto';
$viewdefs [ $module_name ] =
    array(
        'QuickCreate' =>
            [
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
                    [
                        'default'             =>
                            [
                                0 =>
                                    [
                                        0 =>
                                            [
                                                'name'   => 'pais',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_PAIS',
                                            ],
                                        1 =>
                                            [
                                                'name'   => 'departamento',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_DEPARTAMENTO',
                                            ],
                                    ],
                                1 =>
                                    [
                                        0 =>
                                            [
                                                'name'   => 'ciudad',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_CIUDAD',
                                            ],
                                        1 =>
                                            [
                                                'name'   => 'tipo_visa',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_TIPO_VISA',
                                            ],
                                    ],
                                2 =>
                                    [
                                        0 =>
                                            [
                                                'name'  => 'assigned_user_name',
                                                'label' => 'LBL_ASSIGNED_TO_NAME',
                                            ],
                                        1 =>
                                            [
                                                'name'  => 'descuento',
                                                'label' => 'LBL_DESCUENTO',
                                            ],
                                    ],
                                3 =>
                                    [
                                        0 =>
                                            [
                                                'name'    => 'description',
                                                'comment' => 'Full text of the note',
                                                'label'   => 'LBL_DESCRIPTION',
                                            ],
                                    ],
                            ],
                        'lbl_editview_panel1' =>
                            [
                                0 =>
                                    [
                                        0 =>
                                            [
                                                'name'     => 'soel_asegurador',
                                                'label'    => 'LBL_SOEL_ASEGURADOR',
                                                'type'     => 'enum',
                                                'function' => [
                                                    'name' => 'getAseguradores'
                                                ],
                                            ],
                                        1 =>
                                            [
                                                'name'  => 'seguro',
                                                'label' => 'LBL_SEGURO',
                                            ],
                                    ],
                                1 =>
                                    [
                                        0 =>
                                            [
                                                'name'  => 'duracion',
                                                'label' => 'LBL_DURACION',
                                            ],
                                        1 =>
                                            [
                                                'name'   => 'tipo_seguro',
                                                'studio' => 'visible',
                                                'label'  => 'LBL_TIPO_SEGURO',
                                            ],
                                    ],
                            ],
                    ],
            ],
    );;
?>
