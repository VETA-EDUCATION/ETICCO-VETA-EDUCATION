<?php

require_once( 'include/MVC/View/views/view.edit.php' );
require_once( 'modules/Veta_Presupuesto/clases/Media.php' );
require_once( 'modules/EmailTemplates/EmailTemplate.php' );
require_once( 'modules/Veta_Presupuesto/clases/PresupuestoPDF.php' );

class Veta_PresupuestoViewSend extends ViewEdit
{

    /**
     * @param Veta_Presupuesto $p
     * @param Email $email
     * @return Note
     */
    private function crear_nota( Veta_Presupuesto $p, Email $email ) {

        global $sugar_config;

        $emailObj = new Email();
        $path_pdf = $p->id . ".pdf";

        $note = new Note();
        $note->id = create_guid();
        $note->new_with_id = true;

        $note->parent_id = $email->id;
        $note->parent_type = $email->module_dir;
        $note->name = "Presupuesto.pdf";
        $note->filename = "Presupuesto.pdf";
        $note->file_mime_type = $emailObj->email2GetMime($path_pdf);
        $noteFile = "{$sugar_config['upload_dir']}{$note->id}";

        if(!copy($path_pdf, $noteFile))
        {
            $GLOBALS['log']->debug("EMAIL 2.0: could not copy attachment file to cache/upload [ {$noteFile} ]");
        }

        $note->save();
        return $note;
    }

    /**
     * @param Veta_Presupuesto $p
     * @param EmailTemplate $tEmail
     * @return Email
     */
    private function crear_email( string $to, Veta_Presupuesto $p, EmailTemplate $tEmail ) {

        $admin = new Administration();
        $admin->retrieveSettings();

        $emailObj = new Email();
        $emailObj->to_addrs = $to;
        $emailObj->type = 'archived';
        $emailObj->deleted = '0';
        $emailObj->name = $tEmail->subject;
        $emailObj->description = null;
        $emailObj->description_html = $tEmail->body_html;
        $emailObj->from_addr = $admin->settings[ 'notify_fromaddress' ];

        if( $p instanceOf SugarBean && ! empty( $p->id ) ) {
            $emailObj->parent_type = $p->module_dir;
            $emailObj->parent_id = $p->id;
        }

        $emailObj->date_sent = TimeDate::getInstance()->nowDb();
        $emailObj->modified_user_id = '1';
        $emailObj->created_by = '1';
        $emailObj->status = 'sent';

        $emailObj->save();

        return $emailObj;
    }


    function preDisplay() {

        $o = null;

        $p = new Veta_Presupuesto();
        $p->retrieve( $_REQUEST[ 'pid' ] );

        if( ! empty( $p->veta_presupuesto_contactscontacts_ida ) ) {

            $o = new Contact();
            $o->retrieve( $p->veta_presupuesto_contactscontacts_ida );
        }

        if( ! empty( $p->veta_presupuesto_leadsleads_ida ) ) {

            $o = new Lead();
            $o->retrieve( $p->veta_presupuesto_leadsleads_ida );
        }

        if( $o != null ) {

            $u = new User();
            $u->retrieve($o->assigned_user_id);

            $tEmail = new EmailTemplate();
            $tEmail->retrieve( 'presupuesto' );

            $tEmail->body_html = html_entity_decode( $tEmail->body_html , ENT_COMPAT | ENT_HTML401 , "UTF-8" );
            $tEmail->body_html = str_replace( "$" . "cliente" , $o->name , $tEmail->body_html );
            $tEmail->body_html = str_replace( "$" . "assigned_user_name" , $u->name , $tEmail->body_html );

            $media = new Media();

            if( $media->send_email( $o->email1 , $tEmail->body_html , $tEmail->subject, $p->id . '.pdf' ) ) {

                $emailObj = $this->crear_email($o->email1, $p, $tEmail);
                $nota = $this->crear_nota($p, $emailObj);

                $p->load_relationship(veta_presupuesto_emails);
                $p->veta_presupuesto_emails->add($emailObj->id);
            }
            else{
                $this->redireccionar('No fue posible enviar el email por favor revisa la configuración de correo de tu cuenta', $p->id);
            }
        }

        header("Location: index.php?module=Veta_Presupuesto&action=DetailView&record=" . $p->id);
    }

    private function redireccionar( $msg , $registro ) {
        if( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_Presupuesto&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }
}