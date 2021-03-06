<?php
$module_name = 'Veta_Requerimiento';
$viewdefs [$module_name] =
    array(
        'update' =>
            array(
                'templateMeta' =>
                    array(
                        'form' => array(
                                            'headerTpl' => 'modules/Veta_Requerimiento/templates/header.tpl',
                                            'footerTpl' => 'include/EditView/footer.tpl'
                        ),
                        'maxColumns' => '2',
                        'widths' =>
                            array(
                                0 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'DEFAULT' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                    ),
                'panels' =>
                    array(
                        'default' =>
                            array(
                                0 =>
                                    array(
                                        0 => 'assigned_user_name',
                                        1 =>
                                            array(
                                                'name' => 'MIREFERIDO',
                                                'label' => 'LBL_REFERIDO',
                                                'customCode' => '{$REFERIDO}',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'veta_requerimiento_contacts_name',
                                                'label' => 'LBL_VETA_REQUERIMIENTO_CONTACTS_FROM_CONTACTS_TITLE',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'veta_requerimiento_leads_name',
                                                'label' => 'LBL_VETA_REQUERIMIENTO_LEADS_FROM_LEADS_TITLE',
                                            ),
                                    ),


                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'MICAMPANA',
                                                'label' => 'LBL_CAMPANA',
                                                'customCode' => '{$CAMPANA}',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'MIFUENTE',
                                                'label' => 'LBL_FUENTE',
                                                'customCode' => '{$FUENTE}',
                                            ),
                                    ),

                                3 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'fecha_proximo_contacto',
                                                'label' => 'LBL_FECHA_PROXIMO_CONTACTO',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'fecha_ultimo_contacto',
                                                'label' => 'LBL_FECHA_ULTIMO_CONTACTO',
                                            ),
                                    ),
                                4 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'fecha_viaje_txt',
                                                'label' => 'LBL_FECHA_VIAJE_TXT',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'fecha_viaje',
                                                'label' => 'LBL_FECHA_VIAJE',
                                            ),
                                    ),
                                5 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'estado',
                                                'studio' => 'visible',
                                                'label' => 'LBL_ESTADO',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'presupuesto',
                                                'label' => 'LBL_PRESUPUESTO',
                                            ),
                                    ),
                                6 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'visto_bueno_comercial',
                                                'label' => 'LBL_VISTO_BUENO_COMERCIAL',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'visto_bueno_visas',
                                                'label' => 'LBL_VISTO_BUENO_VISAS',
                                            ),
                                    ),
                                7 =>
                                    array(
                                        0 => 'description',
                                    ),
                                8 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'TEL_CASA',
                                                'label' => 'LBL_TEL_CASA',
                                                'customCode' => '{$TELCASA}',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'CELULAR',
                                                'label' => 'LBL_CELULAR',
                                                'customCode' => '{$CELULAR}',
                                            ),
                                    ),
                                9 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'FECHA_EXPIRACION_VISA',
                                                'label' => 'LBL_FECHA_EXPIRACION_VISA',
                                                'customCode' => '{$FECHA_EXPIRACION_VISA}',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'EMAIL',
                                                'label' => 'LBL_EMAIL',
                                                'customCode' => '{$EMAIL}',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );;
?>
