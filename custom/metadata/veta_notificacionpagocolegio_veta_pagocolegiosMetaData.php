<?php
// created: 2021-09-02 13:15:20
$dictionary["veta_notificacionpagocolegio_veta_pagocolegios"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'veta_notificacionpagocolegio_veta_pagocolegios' => 
    array (
      'lhs_module' => 'Veta_PagoColegios',
      'lhs_table' => 'veta_pagocolegios',
      'lhs_key' => 'id',
      'rhs_module' => 'Veta_NotificacionPagoColegio',
      'rhs_table' => 'veta_notificacionpagocolegio',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'veta_notificacionpagocolegio_veta_pagocolegios_c',
      'join_key_lhs' => 'veta_notif37d5olegios_ida',
      'join_key_rhs' => 'veta_notifd154colegio_idb',
    ),
  ),
  'table' => 'veta_notificacionpagocolegio_veta_pagocolegios_c',
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
      'name' => 'veta_notif37d5olegios_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'veta_notifd154colegio_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'veta_notificacionpagocolegio_veta_pagocolegiosspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'veta_notificacionpagocolegio_veta_pagocolegios_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'veta_notif37d5olegios_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'veta_notificacionpagocolegio_veta_pagocolegios_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'veta_notifd154colegio_idb',
      ),
    ),
  ),
);