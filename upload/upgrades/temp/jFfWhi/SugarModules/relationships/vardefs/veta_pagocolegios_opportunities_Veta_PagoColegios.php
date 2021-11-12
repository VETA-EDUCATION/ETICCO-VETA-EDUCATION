<?php
// created: 2019-11-28 15:02:13
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_opportunities"] = array (
  'name' => 'veta_pagocolegios_opportunities',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'veta_pagocolegios_opportunitiesopportunities_ida',
);
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_opportunities_name"] = array (
  'name' => 'veta_pagocolegios_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'veta_pagocolegios_opportunitiesopportunities_ida',
  'link' => 'veta_pagocolegios_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Veta_PagoColegios"]["fields"]["veta_pagocolegios_opportunitiesopportunities_ida"] = array (
  'name' => 'veta_pagocolegios_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'veta_pagocolegios_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VETA_PAGOCOLEGIOS_OPPORTUNITIES_FROM_VETA_PAGOCOLEGIOS_TITLE',
);
