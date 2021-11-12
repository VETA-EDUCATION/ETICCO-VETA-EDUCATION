<?php
$dictionary['Opportunity']['fields']['soel_visto_bueno_visas'] = array(
    'name' => 'soel_visto_bueno_visas',
    'vname' => 'LBL_SOEL_VISTO_BUENO_VISAS',
    'type' => 'bool',
    'source' => 'non-db',
    'default' => '0',
    'no_default' => false,
);

$dictionary['Opportunity']['fields']['soel_docs_solicitados'] = array(
    'name' => 'soel_docs_solicitados',
    'vname' => 'LBL_SOEL_DOCS_SOLICITADOS',
    'type' => 'varchar',
    'source' => 'non-db',
    
    
);


$dictionary['Opportunity']['fields']['soel_docs_pendientes'] = array(
    'name' => 'soel_docs_pendientes',
    'vname' => 'LBL_SOEL_DOCS_PENDIENTES',
    'type' => 'varchar',
    'source' => 'non-db',
    
    
);

$dictionary['Opportunity']['fields']['soel_docs_cargados'] = array(
    'name' => 'soel_docs_cargados',
    'vname' => 'LBL_SOEL_DOCS_CARGADOS',
    'type' => 'varchar',
    'source' => 'non-db',
    
    
);


$dictionary['Opportunity']['fields']['soel_date_estudiante'] = array(
    'name' => 'soel_date_estudiante',
    'vname' => 'LBL_SOEL_DATE_ESTUDIANTE',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);


$dictionary['Opportunity']['fields']['soel_date_asesor'] = array(
    'name' => 'soel_date_asesor',
    'vname' => 'LBL_SOEL_DATE_ASESOR',
    'type' => 'datetime',
    'source' => 'non-db',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);