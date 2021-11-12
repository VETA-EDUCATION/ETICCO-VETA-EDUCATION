<?php

define( 'sugarEntry', true );
require_once( 'tests/unit/entryPoint.php' );
global $current_user;
$current_user = BeanFactory::getBean( 'Users', 1 );
//_ppl( "sugar magic !!" );

require_once( 'modules/Leads/Lead.php' );
require_once( 'modules/Contacts/Contact.php' );
require_once( 'modules/Campaigns/Campaign.php' );

require_once( 'modules/Veta_Abono/Veta_Abono.php' );
require_once( 'modules/Veta_Curso/Veta_Curso.php' );
require_once( 'modules/Veta_Recibo/Veta_Recibo.php' );
require_once( 'modules/Veta_Seguro/Veta_Seguro.php' );
require_once( 'modules/Veta_College/Veta_College.php' );
require_once( 'modules/Opportunities/Opportunity.php' );
require_once( 'modules/ProspectLists/ProspectList.php' );
require_once( 'custom/modules/Leads/SOELHooksLeads.php' );
require_once( 'custom/modules/Opportunities/SOELHooks.php' );
require_once( 'modules/Veta_Presupuesto/Veta_Presupuesto.php' );
require_once( 'modules/Veta_Requerimiento/Veta_Requerimiento.php' );
require_once( 'modules/Veta_DetalleRecibo/Veta_DetalleRecibo.php' );
require_once( 'modules/Veta_DetallePresupuesto/Veta_DetallePresupuesto.php' );

