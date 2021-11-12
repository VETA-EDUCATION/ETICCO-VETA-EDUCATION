<?php
// created: 2019-11-28 13:58:28
$dictionary["Veta_Pagos"]["fields"]["veta_pagos_veta_liquidacion"] = array (
  'name' => 'veta_pagos_veta_liquidacion',
  'type' => 'link',
  'relationship' => 'veta_pagos_veta_liquidacion',
  'source' => 'non-db',
  'module' => 'Veta_Liquidacion',
  'bean_name' => 'Veta_Liquidacion',
  'vname' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
  'id_name' => 'veta_pagos_veta_liquidacionveta_liquidacion_ida',
);
$dictionary["Veta_Pagos"]["fields"]["veta_pagos_veta_liquidacion_name"] = array (
  'name' => 'veta_pagos_veta_liquidacion_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_LIQUIDACION_TITLE',
  'save' => true,
  'id_name' => 'veta_pagos_veta_liquidacionveta_liquidacion_ida',
  'link' => 'veta_pagos_veta_liquidacion',
  'table' => 'veta_liquidacion',
  'module' => 'Veta_Liquidacion',
  'rname' => 'name',
);
$dictionary["Veta_Pagos"]["fields"]["veta_pagos_veta_liquidacionveta_liquidacion_ida"] = array (
  'name' => 'veta_pagos_veta_liquidacionveta_liquidacion_ida',
  'type' => 'link',
  'relationship' => 'veta_pagos_veta_liquidacion',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PAGOS_VETA_LIQUIDACION_FROM_VETA_PAGOS_TITLE',
);
