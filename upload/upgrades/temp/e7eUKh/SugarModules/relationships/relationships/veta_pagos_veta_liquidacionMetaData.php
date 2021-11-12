<?php
// created: 2019-11-02 20:13:02
$dictionary["veta_pagos_veta_liquidacion"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_pagos_veta_liquidacion' => 
    array (
      'lhs_module' => 'Veta_Liquidacion',
      'lhs_table' => 'veta_liquidacion',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_Pagos',
      'rhs_table' => 'veta_pagos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_pagos_veta_liquidacion_c',
      'join_key_lhs' => 'veta_pagos_veta_liquidacionveta_liquidacion_ida',
      'join_key_rhs' => 'veta_pagos_veta_liquidacionveta_pagos_idb',
    ),
  ),
  'table' => 'veta_pagos_veta_liquidacion_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'veta_pagos_veta_liquidacionveta_liquidacion_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_pagos_veta_liquidacionveta_pagos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_pagos_veta_liquidacionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_pagos_veta_liquidacion_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_pagos_veta_liquidacionveta_liquidacion_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_pagos_veta_liquidacion_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_pagos_veta_liquidacionveta_pagos_idb',
      ),
    ),
  ),
);