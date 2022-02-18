<?php
declare( strict_types = 1 );

require_once( 'modules/OutboundEmailAccounts/OutboundEmailAccounts.php' );
require_once( 'modules/Administration/Administration.php' );
require_once( 'include/phpmailer/class.phpmailer.php' );
require_once( 'modules/Emails/Email.php' );

class Media
{
    /**
     * Este metodo obtiene un objeto PHPMailer configurado para se usado
     *
     * @return PHPMailer
     */
    public function prepare_mail() : PHPMailer {

        $admin = new Administration();
        $admin->retrieveSettings();
        $mail = new PHPMailer();

        if( $admin->settings[ 'mail_sendtype' ] == 'SMTP' ) {

            $mail->isSMTP();

            $mail->Host = $admin->settings[ 'mail_smtpserver' ];
            $mail->Port = $admin->settings[ 'mail_smtpport' ];

            if( $admin->settings[ 'mail_smtpauth_req' ] ) {
                $mail->SMTPAuth = TRUE;
                $mail->Username = $admin->settings[ 'mail_smtpuser' ];
                $mail->Password = $admin->settings[ 'mail_smtppass' ];
            }

            $mail->Mailer        = "smtp";
            $mail->SMTPKeepAlive = true;
            $mail->From          = $admin->settings[ 'notify_fromaddress' ];
            $mail->FromName      = $admin->settings[ 'notify_fromname' ];
            $mail->ContentType   = "text/plain"; //"text/html"

            $mail->IsHTML( true );

            if( $admin->settings[ 'mail_smtpssl' ] == 1 )
                $mail->SMTPSecure = "ssl"; //  Used instead of TLS when only POP mail is selected

            if( $admin->settings[ 'mail_smtpssl' ] == 2 )
                $mail->SMTPSecure = "tls"; //  Used instead of TLS when only POP mail is selected
        }
        else {
            $mail->mailer = "sendmail";
        }

        return $mail;
    }

    /**
     * Este metodo obtiene un objeto PHPMailer que usa la configuracion del usuario
     * @return PHPMailer
     */
    public function prepare_user_mail() {

        global $current_user;

        $oe  = new OutboundEmail();
        $oes = $oe->getUserMailers( $current_user );

        foreach( $oes as $o ) {

            $oe = null;
            if( $o[ 'type' ] == "user" ){

                $oe  = new OutboundEmail();
                $oe->retrieve( $o[ 'id' ] );
            }

        }

        $mail = new PHPMailer();

        if( isset( $oe ) and $oe->mail_sendtype == 'SMTP' ) {

            $mail->isSMTP();

            $mail->Host = $oe->mail_smtpserver;
            $mail->Port = $oe->mail_smtpport;

            if( $oe->mail_smtpauth_req ) {
                $mail->SMTPAuth = TRUE;
                $mail->Username = $oe->mail_smtpuser;
                $mail->Password = $oe->mail_smtppass;
            }

            $mail->Mailer        = "smtp";
            $mail->SMTPKeepAlive = true;
            $mail->From          = $oe->smtp_from_addr;;
            $mail->FromName    = $current_user->name;
            $mail->ContentType = "text/plain"; //"text/html"

            $mail->IsHTML( true );

            if( $oe->mail_smtpssl == 1 )
                $mail->SMTPSecure = "ssl"; //  Used instead of TLS when only POP mail is selected

            if( $oe->mail_smtpssl == 2 )
                $mail->SMTPSecure = "tls"; //  Used instead of TLS when only POP mail is selected
        }
        else {
            $mail = null;
        }

        return $mail;
    }

    /**
     * Este metodo envia una alerta por EMAIL y retorna true si el envio fue exitoso
     * @param string $email : El correo de destino
     * @param string $msg : El mensaje
     * @param string $subject : El asunto
     * @return bool : Indica si fue exitoso ono
     * @throws phpmailerException
     */
    public function send_email( string $email , string $msg , string $subject , string $attachment = null ) {

        $mail = $this->prepare_user_mail();
        $mail = isset( $mail ) ? $mail : $this->prepare_mail();

        $mail->addAddress( $email );
        $mail->Subject = utf8_decode( $subject );
        $mail->Body    = utf8_decode( html_entity_decode( $msg ) );

        if( $attachment != null )
            $mail->AddAttachment( $attachment );

        return $mail->Send();
        //return true;
    }

    /**
     * Genera un log para seguimiento
     * @param $msg Mensaje a escribir
     */
    private function log( $msg ) {

        $msg      = '[' . date( "Y-m-d H:i:s" ) . '] ' . $msg . PHP_EOL;
        $fHandler = fopen( 'soel.log' , 'a+' );
        fwrite( $fHandler , $msg );
        fclose( $fHandler );
    }

}