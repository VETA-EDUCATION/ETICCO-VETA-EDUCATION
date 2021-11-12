<?php
$popupMeta = array (
    'moduleMain' => 'Veta_NotificacionPagoColegio',
    'varName' => 'Veta_NotificacionPagoColegio',
    'orderBy' => 'veta_notificacionpagocolegio.name',
    'whereClauses' => array (
  'name' => 'veta_notificacionpagocolegio.name',
  'estado' => 'veta_notificacionpagocolegio.estado',
  'veta_notificacionpagocolegio_veta_pagocolegios_name' => 'veta_notificacionpagocolegio.veta_notificacionpagocolegio_veta_pagocolegios_name',
  'date_entered' => 'veta_notificacionpagocolegio.date_entered',
  'estudiante' => 'veta_notificacionpagocolegio.estudiante',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'estado',
  5 => 'veta_notificacionpagocolegio_veta_pagocolegios_name',
  6 => 'date_entered',
  7 => 'estudiante',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'estado' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ESTADO',
    'width' => '10%',
    'name' => 'estado',
  ),
  'estudiante' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ESTUDIANTE',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'estudiante',
  ),
  'veta_notificacionpagocolegio_veta_pagocolegios_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_VETA_NOTIFICACIONPAGOCOLEGIO_VETA_PAGOCOLEGIOS_FROM_VETA_PAGOCOLEGIOS_TITLE',
    'id' => 'VETA_NOTIF37D5OLEGIOS_IDA',
    'width' => '10%',
    'name' => 'veta_notificacionpagocolegio_veta_pagocolegios_name',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
),
);
