<?php

require_once( 'include/MVC/View/views/view.edit.php' );
require_once( 'modules/Veta_Presupuesto/clases/Media.php' );
require_once( 'modules/EmailTemplates/EmailTemplate.php' );
require_once( 'modules/Veta_Recibo/clases/ReciboPDF.php' );

class Veta_ReciboViewSend extends ViewEdit
{

    /**
     * @param Veta_Recibo $r
     * @param Email $email
     * @return Note
     */
    private function crear_nota( Veta_Recibo $r, Email $email ) {

        global $sugar_config;

        $emailObj = new Email();
        $path_pdf = $r->id . ".pdf";

        $note = new Note();
        $note->id = create_guid();
        $note->new_with_id = true;

        $note->parent_id = $email->id;
        $note->parent_type = $email->module_dir;
        $note->name = "Recibo.pdf";
        $note->filename = "Recibo.pdf";
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
     * @param string $to
     * @param Veta_Recibo $r
     * @param EmailTemplate $tEmail
     * @return Email
     */
    private function crear_email( string $to, Veta_Recibo $r, EmailTemplate $tEmail ) {

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

        if( $r instanceOf SugarBean && ! empty( $r->id ) ) {
            $emailObj->parent_type = $r->module_dir;
            $emailObj->parent_id = $r->id;
        }

        $emailObj->date_sent = TimeDate::getInstance()->nowDb();
        $emailObj->modified_user_id = '1';
        $emailObj->created_by = '1';
        $emailObj->status = 'sent';

        $emailObj->save();

        return $emailObj;
    }

    //Original
    /*function preDisplay() {

        $o = null;

        $r = new Veta_Recibo();
        $r->retrieve( $_REQUEST[ 'rid' ] );

        if( ! empty( $r->veta_recibo_contactscontacts_ida ) ) {

            $o = new Contact();
            $o->retrieve( $r->veta_recibo_contactscontacts_ida );
        }

        if( ! empty( $r->veta_recibo_leadsleads_ida ) ) {

            $o = new Lead();
            $o->retrieve( $r->veta_recibo_leadsleads_ida );
        }

        if( $o != null ) {

            $tEmail = new EmailTemplate();
            $tEmail->retrieve( 'recibo' );

            $u = new User();
            $u->retrieve($o->assigned_user_id);

            $tEmail->body_html = html_entity_decode( $tEmail->body_html , ENT_COMPAT | ENT_HTML401 , "UTF-8" );
            $tEmail->body_html = str_replace( "$" . "cliente" , $o->name , $tEmail->body_html );
            $tEmail->body_html = str_replace( "$" . "assigned_user_name" , $u->name , $tEmail->body_html );

            $media = new Media();

            if( $media->send_email( $o->email1 , $tEmail->body_html , $tEmail->subject, $r->id . '.pdf' ) ) {

                $emailObj = $this->crear_email($o->email1, $r, $tEmail);
                $nota = $this->crear_nota($r, $emailObj);

                $r->load_relationship(veta_recibo_emails);
                $r->veta_recibo_emails->add($emailObj->id);
                $r->new_opportunity();

            }
            else{
                $this->redireccionar('No fue posible enviar el email por favor revisa la configuración de correo de tu cuenta', $r->id);
            }
        }

        header("Location: index.php?module=Veta_Recibo&action=DetailView&record=" . $r->id);
    }*/

    function preDisplay() {

        $o = null;

        $r = new Veta_Recibo();
        $r->retrieve( $_REQUEST[ 'rid' ] );

        if( ! empty( $r->veta_recibo_contactscontacts_ida ) ) {

            $o = new Contact();
            $o->retrieve( $r->veta_recibo_contactscontacts_ida );
        }

        if( ! empty( $r->veta_recibo_leadsleads_ida ) ) {

            $o = new Lead();
            $o->retrieve( $r->veta_recibo_leadsleads_ida );
        }

        if( $o != null ) {

            $tEmail = new EmailTemplate();
            $tEmail->retrieve( 'recibo' );

            $u = new User();
            $u->retrieve($o->assigned_user_id);

            $tEmail->body_html = html_entity_decode( $tEmail->body_html , ENT_COMPAT | ENT_HTML401 , "UTF-8" );
            $tEmail->body_html = str_replace( "$" . "cliente" , $o->name , $tEmail->body_html );
            $tEmail->body_html = str_replace( "$" . "assigned_user_name" , $u->name , $tEmail->body_html );

            $media = new Media();
            if(empty($tEmail->id))
                $this->redireccionar('No fue posible enviar el email porque no existe la plantilla de correo con id recibo', $r->id);

            if( $media->send_email( $o->email1 , $tEmail->body_html , $tEmail->subject, $r->id . '.pdf' ) ) {

                $emailObj = $this->crear_email($o->email1, $r, $tEmail);
                $nota = $this->crear_nota($r, $emailObj);

                $r->load_relationship(veta_recibo_emails);
                $r->veta_recibo_emails->add($emailObj->id);
                $r->new_opportunity();

            }
            else{
                $this->redireccionar('No fue posible enviar el email por favor revisa la configuración de correo de tu cuenta', $r->id);
            }
        }

        header("Location: index.php?module=Veta_Recibo&action=DetailView&record=" . $r->id);
    }

    private function redireccionar( $msg , $registro ) {

        if( ! empty( $registro ) ) {
            $aux = "<script>
                      var registro='" . $registro . "';";

            $aux .= "alert('" . $msg . "');
                    window.location = 'index.php?module=Veta_Recibo&action=DetailView&record=' + registro;
                 </script>";

            echo $aux;
        }
        else {
            echo "<script>alert('" . $msg . "')</script>";
        }

        exit;
    }
}