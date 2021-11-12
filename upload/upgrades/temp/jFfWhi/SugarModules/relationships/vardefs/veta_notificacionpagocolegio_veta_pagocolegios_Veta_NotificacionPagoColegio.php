<?php
// created: 2019-11-28 15:02:15
$dictionary["Veta_NotificacionPagoColegio"]["fields"]["veta_notificacionpagocolegio_veta_pagocolegios"] = array (
  'name' => 'veta_notificacionpagocolegio_veta_pagocolegios',
  'type' => 'link',
  'relationship' => 'veta_notificacionpagocolegio_veta_pagocolegios',
  'source' => 'non-db',
  'module' => 'Veta_PagoColegios',
  'bean_name' => 'Veta_PagoColegios',
  'vname' => 'LBL_VETA_NOTIFICACIONPAGOCOLEGIO_VETA_PAGOCOLEGIOS_FROM_VETA_PAGOCOLEGIOS_TITLE',
  'id_name' => 'veta_notif37d5olegios_ida',
);
$dictionary["Veta_NotificacionPagoColegio"]["fields"]["veta_notificacionpagocolegio_veta_pagocolegios_name"] = array (
  'name' => 'veta_notificacionpagocolegio_veta_pagocolegios_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_NOTIFICACIONPAGOCOLEGIO_VETA_PAGOCOLEGIOS_FROM_VETA_PAGOCOLEGIOS_TITLE',
  'save' => true,
  'id_name' => 'veta_notif37d5olegios_ida',
  'link' => 'veta_notificacionpagocolegio_veta_pagocolegios',
  'table' => 'veta_pagocolegios',
  'module' => 'Veta_PagoColegios',
  'rname' => 'name',
);
$dictionary["Veta_NotificacionPagoColegio"]["fields"]["veta_notif37d5olegios_ida"] = array (
  'name' => 'veta_notif37d5olegios_ida',
  'type' => 'link',
  'relationship' => 'veta_notificacionpagocolegio_veta_pagocolegios',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_NOTIFICACIONPAGOCOLEGIO_VETA_PAGOCOLEGIOS_FROM_VETA_NOTIFICACIONPAGOCOLEGIO_TITLE',
);
