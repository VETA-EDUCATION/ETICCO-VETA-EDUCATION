<?php

require_once( 'modules/Veta_College/Veta_College.php' );
require_once( 'modules/Veta_Presupuesto/clases/fpdf16/fpdf.php' );

class ReciboPDF extends FPDF
{
    var $margen = 10;
    var $r = null;
    var $total_depositos = 0;
    var $descuento = 0;

    public function generate_pdf( Veta_Recibo $r ) {

        $this->r = $r;

        $this->SetMargins( $this->margen , $this->margen , $this->margen );
        $this->AddPage();

        $this->print_details();
        $this->print_abonos();
        $this->print_devoluciones();
        $this->print_pendientes();
        $this->print_notas();

        $this->Output( $this->r->id . '.pdf' );
    }
    
    private function print_pendientes(){
        $this->Ln( 7 );

        $this->SetFillColor( 23 , 44 , 255 );
        $this->SetTextColor( 255 , 255 , 255 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 100 , 6 , utf8_decode( "TOTAL PAGADO" ) , 0 , 0 , 'L' , true );
        $this->Cell( 0 , 6 , utf8_decode( number_format( $this->r->pagado * 1 , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' , true );

        $this->Ln( 7 );

        $this->Cell( 100 , 6 , utf8_decode( "PENDIENTE POR PAGAR DEL TOTAL GENERAL " ) , 0 , 0 , 'L' , true );
        $this->Cell( 0 , 6 , ' ' . utf8_decode( number_format( $this->r->pendiente_por_pagar * 1 , 0 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' , true );

        $this->Ln( 7 );

        $this->Cell( 100 , 6 , utf8_decode( "PENDIENTE POR PAGAR DEL PRIMER PAGO " ) , 0 , 0 , 'L' , true );
        $pendiente_primer_pago = ($this->r->pagado * 1) > ($this->r->primer_pago * 1) ? 0 : ($this->r->primer_pago * 1) - ($this->r->pagado * 1);
        $this->Cell( 0 , 6 , ' ' . utf8_decode( number_format( $pendiente_primer_pago * 1 , 0 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' , true );
    }

    public function header() {

        $this->SetDrawColor( 23 , 44 , 255 );
        $this->SetLineWidth( 10 );
        $this->Line( 0 , 0 , $this->w , 0 );

        $this->Image( 'company_logo.jpg' , 12 , 10 , 50 );

        //Comenzamos a escribir el PDF:
        $this->SetFont( 'Arial' , 'B' , 10 );
        $this->SetTextColor( 45 , 45 , 45 );
        $this->SetLineWidth( 0.2 );
        $this->Ln( 5 );

        $nombre = empty( $this->r->veta_recibo_leads_name ) ? $this->r->veta_recibo_contacts_name : $this->r->veta_recibo_leads_name;
        $this->Cell( 0 , 3 , utf8_decode( strtoupper( substr( $nombre , 0 , 26 ) ) ) , 0 , 0 , 'R' );

        $this->Ln( 6 );
        $this->SetFont( 'Arial' , '' , 7 );
        $this->Cell( 0 , 3 , utf8_decode( "Cuenta de cobro realizada el " . substr( $this->r->date_modified , 0 , 10 ) ) , 0 , 0 , 'R' );
        /*$this->Ln( 4 );
        $this->SetTextColor( 255 , 49 , 38 );
        $this->Cell( 0 , 3 , utf8_decode( "Vigencia :  1 semana" ) , 0 , 0 , 'R' );  */
        $this->Ln( 4 );
        $this->SetTextColor( 45 , 45 , 45 );
        $this->Cell( 0 , 3 , utf8_decode( "ID 1.603" ) , 0 , 0 , 'R' );

        $this->Ln( 10 );
        //$this->print_line( $this->GetY() );

    }

    private function print_line( $y ) {

        $this->SetDrawColor( 192 , 192 , 192 );
        $this->SetLineWidth( 0.35 );
        $this->Line( $this->margen , $y , $this->w - $this->margen , $y );
    }

    private function print_separator( $y ) {

        $this->SetDrawColor( 192 , 192 , 192 );
        $this->SetLineWidth( 1 );
        $this->Line( $this->margen , $y , $this->w - $this->margen , $y );
    }

    private function print_curso( Veta_DetalleRecibo $d ) {

        global $app_list_strings;
        // ---------------------------------------------------- COLLEGE Y CURSO ----------------------------------------

        $this->SetTextColor( 45 , 45 , 45 );
        $c = new Veta_College();
        $c->retrieve( $d->veta_college_id_c );

        $curso = new Veta_Curso();
        $curso->retrieve($d->veta_curso_id_c);

        $this->Ln( 7 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        //$this->Cell( 50 , 3 , utf8_decode( strtoupper( $c->name ) . ucwords( ' ' . $app_list_strings[ 'ciudades_list' ][ $c->ciudad ] ) . ', ' . ucwords( $app_list_strings[ 'pais_list' ][ $c->pais ] ) ) , 0 , 0 , 'L' );
        //$this->Cell( 0 , 3 , utf8_decode( 'CURSO: ' . strtoupper( $d->name ) ) , 0 , 0 , 'R' );

        $this->MultiCell( 0 , 3 , utf8_decode( 'COLLEGE:' . strtoupper( $c->name ) . ucwords( ' ' . $app_list_strings[ 'ciudades_list' ][ $c->ciudad ] ) . ', ' . ucwords( $app_list_strings[ 'pais_list' ][ $c->pais ] ) ), 0 , 'L' );
        $this->Ln( 3 );
        $this->MultiCell(0,3,utf8_decode( 'CURSO: ' . strtoupper( $d->name )  ) , 0 , 'L' );

        $this->Ln( 4 );

        $this->print_line( $this->getY() );


        // ---------------------------------------------------- FECHA DE INICIO ----------------------------------------

        /* $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 50 , 3 , utf8_decode( 'Fecha de Inicio: ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , substr( $d->intake , 0 , 10 ) , 0 , 0 , 'R' );  */

        // ---------------------------------------------------- DURACION ----------------------------------------

        $this->Ln( 5 );
        $this->SetFont( 'Arial' , '' , 8 );
        $this->Cell( 5 );
        $this->Cell( 50 , 3 , utf8_decode( $curso->tipo_curso == 'Vet' ? 'Término' :'Duración: ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( ucwords( $d->duracion ) . " semanas " ) , 0 , 0 , 'R' );

        // ---------------------------------------------------- PRECIO X SEMANA ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'Precio por Semana ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->precio_por_semana * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );

        // ---------------------------------------------------- BONO DE DESCUENTO ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'Descuento ' . substr($d->descripcion_bono,0, 110) ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( '-' . number_format( ( $d->bono * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );
        //$this->MultiCell(100,3,utf8_decode( 'Descuento ' . $d->descripcion_bono ) , 1 , 'L' );
        //$this->MultiCell(20,3, utf8_decode( '-' . number_format( ( $d->bono * 1 ) ))  , 1 , 'L' );


        // ---------------------------------------------------- VALOR DEL CURSO ----------------------------------------

        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 50 , 3 , utf8_decode( "Valor del Curso " ) , 0 , 0 , 'L' );
        //$this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->total_curso * 1 ) - ( $d->inscripcion * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->precio_curso * 1 )  , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );


        // ---------------------------------------------------- OTROS ----------------------------------------
        $detalles = $d->get_linked_beans( 'veta_detallereciboitem_veta_detallerecibo' , 'Veta_DetalleReciboItem' );

        foreach( $detalles as $detalle ) {

            $this->Ln( 5 );
            $this->Cell( 5 );
            $this->Cell( 50 , 3 , utf8_decode( $detalle->name ) , 0 , 0 , 'L' );
            $this->Cell( 0 , 3 , utf8_decode( number_format( ( $detalle->monto * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );
        }

        // ---------------------------------------------------- INSCRIPCION ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( "Valor de la Inscripción " ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( $d->inscripcion * 1 , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );

        // ---------------------------------------------------- COSTO MATERIALES ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'Costo Materiales ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->costo_materiales * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );

        // ---------------------------------------------------- COSTO EXTRA ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'Costo Extra '  ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode(  number_format( ( $d->costo_extra * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );


        // ---------------------------------------------------- TOTAL ----------------------------------------

        $this->Ln( 5 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'TOTAL: ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->total_curso * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );

        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'DEPOSITO: ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->deposito * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );
        $this->total_depositos += ( $d->deposito * 1 );
        $this->descuento += ($d->bono * 1);

        $this->Ln( 7 );
    }

    private function print_servicios( Veta_Recibo $r ) {

        if( ( ! empty( $r->examen_medico ) and $r->examen_medico > 0 ) or ( ! empty( $r->seguro ) and $r->seguro > 0 ) or ( ! empty( $r->total_visa ) and $r->total_visa > 0 ) ) {

            $this->Ln( 7 );
            $this->SetFont( 'Arial' , 'B' , 9 );
            $this->Cell( 0 , 3 , utf8_decode( "SERVICIOS " ) , 0 , 0 , 'L' );
            $this->Ln( 4 );
            $this->print_line( $this->getY() );

            $this->SetFont( 'Arial' , '' , 8 );

            if( ! empty( $r->examen_medico ) and ( $r->examen_medico * 1 ) > 0 ) {

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Examen Médico " ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $r->examen_medico * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );
            }

            if( ! empty( $r->seguro ) and $r->seguro > 0 ) {
                $this->Ln( 5 );
                $this->Cell( 5 );

                $my_seguro = '';
                if( ! empty( $r->duracion ) )
                    $my_seguro = "( " . $r->asegurador . " " . $r->duracion . " meses " . $r->tipo_seguro . " )";

                $this->Cell( 100 , 3 , utf8_decode( "Valor del Seguro " . $my_seguro . " " ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $r->seguro * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );
            }

            if( ! empty( $r->total_visa ) and $r->total_visa > 0 ) {

                $visa = new Veta_TiposVisa();
                $visa->retrieve($r->veta_tiposvisa_id_c);

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Valor de la visa  ( " . $visa->name . " )" ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $r->total_visa * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );
            }

            $this->Ln( 7 );
        }
    }

    private function print_total( Veta_DetalleRecibo $d ) {

        $this->Ln( 5 );
        $this->SetFillColor( 234 , 234 , 234 );
        $this->SetTextColor( 27 , 27 , 27 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 0 , 8 , utf8_decode( "TOTAL" ) , 0 , 0 , 'L' , true );
        $this->Ln();
        $this->SetFont( 'Arial' , '' , 8 );
        $this->Cell( 150 , 8 , utf8_decode( $d->descripcion_bono ) , 0 , 0 , 'L' , true );
        $this->SetTextColor( 23 , 44 , 255 );
        $this->Cell( 0 , 8 , utf8_decode( number_format( ( $d->bono * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' , true );
        $this->print_line( $this->GetY() );
        $this->Ln( 15 );
        $this->print_separator( $this->GetY() );
        $this->Ln( 5 );
    }

    private function print_details() {

        global $app_list_strings;
        $dets                  = $this->r->get_linked_beans( 'veta_detallerecibo_veta_recibo' , 'Veta_DetalleRecibo' );
        $this->total_depositos = 0;
        $this->descuento = 0;

        foreach( $dets as $d ) {

            $this->print_curso( $d );
        }

        $this->print_servicios( $this->r );

        $this->SetFillColor( 23 , 44 , 255 );
        $this->SetTextColor( 255 , 255 , 255 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 100 , 6 , utf8_decode( "TOTAL GENERAL " ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , 'B' , 10 );
        $this->Cell( 0 , 6 , utf8_decode( number_format( $this->r->gran_total * 1 , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' , true );

        /* $this->Ln( 7 );

         $this->Cell( 100 , 6 , utf8_decode( "TOTAL PESOS " ) , 0 , 0 , 'L' , true );
         $this->SetFont( 'Arial' , 'B' , 10 );
         $this->Cell( 0 , 6 , '$ ' . utf8_decode( number_format( $this->r->pesos * 1 , 0 , ',' , '.' ) ) , 0 , 0 , 'R' , true );    */

        $this->Ln( 7 );
        
        $this->Cell( 100 , 6 , utf8_decode( "DESCUENTO " ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , 'B' , 10 );
        $descuento = ( $this->r->descuento * 1 );
        $this->Cell( 0 , 6 , utf8_decode( number_format( $descuento * 1 , 0 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' , true );

        $this->Ln( 7 );

        $this->Cell( 100 , 6 , utf8_decode( "TOTAL PRIMER PAGO " ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , 'B' , 10 );
        $this->r->primer_pago = ( $this->total_depositos * 1 ) + ( $this->r->examen_medico * 1 ) + ( $this->r->seguro * 1 ) + ( $this->r->total_visa * 1 ) - ($this->descuento * 1);
        $this->Cell( 0 , 6 ,  utf8_decode( number_format( $this->r->primer_pago * 1 , 0 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' , true );

        $this->Ln( 8 );

        $this->SetFillColor( 255 , 255 , 255 );
        $this->SetTextColor( 27 , 27 , 27 );
        $this->SetFont( 'Arial' , '' , 8 );
        // $this->Cell( 130 , 3 , utf8_decode( "Total con tipo de cambio actual: " ) , 0 , 0 , 'R' , true );
        $this->SetFont( 'Arial' , 'B' , 8 );
        // $this->Cell( 20 , 3 , utf8_decode( number_format( ( $this->r->usd * 1 ) , 2 , ',' , '.' ) . ' USD' ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , '' , 8 );
        // $this->Cell( 0 , 3 , utf8_decode( "Tipo de Cambio: ( " . number_format( ( $this->r->aud_usd * 1 ) , 5 , ',' , '.' ) . ' AUD )' ) , 0 , 0 , 'R' , true );
    }

    private function print_abonos() {

        $abonos = $this->r->get_linked_beans( 'veta_abono_veta_recibo' , 'Veta_Abono' );

        //if( count( $abonos ) > 0 ) {

        $this->AddPage();

        $this->Ln( 7 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 0 , 3 , utf8_decode( "ABONOS " ) , 0 , 0 , 'L' );
        $this->Ln( 4 );
        $this->print_line( $this->getY() );

        $this->Ln( 4 );

        $this->SetFillColor( 23 , 44 , 255 );
        $this->SetTextColor( 255 , 255 , 255 );

        $this->Cell( 30 , 6 , utf8_decode( 'FECHA' ) , 0 , 0 , 'L' , true );
        $this->Cell( 140 , 6 , utf8_decode( 'DESCRIPCION' ) , 0 , 0 , 'L' , true );
        $this->Cell( 0 , 6 , utf8_decode( 'MONTO' ) , 0 , 0 , 'R' , true );

        $this->Ln( 4 );

        $this->SetFont( 'Arial' , '' , 9 );
        $this->SetFillColor( 234 , 234 , 234 );
        $this->SetTextColor( 27 , 27 , 27 );

        foreach( $abonos as $a ) {
            $this->print_abono( $a );
        }

        // }
    }

    private function print_abono( Veta_Abono $a ) {

        $this->Ln( 4 );
        $this->Cell( 30 , 3 , utf8_decode( substr( $a->date_entered , 0 , 10 ) ) , 0 , 0 , 'L' );
        $this->MultiCell( 140 , 3 , utf8_decode( $a->description ) , 0 , 'J' , false );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $a->monto ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );

    }



    private function print_devoluciones() {

        $devoluciones = $this->r->get_linked_beans( 'veta_devolucion_veta_recibo' , 'Veta_Devolucion' );

        $this->Ln( 7 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 0 , 3 , utf8_decode( "DEVOLUCIONES " ) , 0 , 0 , 'L' );
        $this->Ln( 4 );
        $this->print_line( $this->getY() );

        $this->Ln( 4 );

        $this->SetFillColor( 23 , 44 , 255 );
        $this->SetTextColor( 255 , 255 , 255 );

        $this->Cell( 30 , 6 , utf8_decode( 'FECHA' ) , 0 , 0 , 'L' , true );
        $this->Cell( 140 , 6 , utf8_decode( 'DESCRIPCION' ) , 0 , 0 , 'L' , true );
        $this->Cell( 0 , 6 , utf8_decode( 'MONTO' ) , 0 , 0 , 'R' , true );

        $this->Ln( 4 );

        $this->SetFont( 'Arial' , '' , 9 );
        $this->SetFillColor( 234 , 234 , 234 );
        $this->SetTextColor( 27 , 27 , 27 );

        foreach( $devoluciones as $dev ) {
            $this->print_devolucion( $dev );
        }

        $this->Ln( 7 );
    }

    private function print_devolucion( Veta_Devolucion $d ) {

        $this->Ln( 4 );
        $this->Cell( 30 , 3 , utf8_decode( substr( $d->date_entered , 0 , 10 ) ) , 0 , 0 , 'L' );
        $this->MultiCell( 140 , 3 , utf8_decode( $d->description ) , 0 , 'J' , false );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->monto ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );

    }


    function Footer() {

        $u = new User();
        $u->retrieve( $this->r->created_by );

        $this->SetY( -25 );

        // Dibujamos una linea para pintar todo el footer de gris
        $this->SetDrawColor( 153 , 153 , 153 );
        $this->SetLineWidth( 25 );
        $this->Line( 0 , $this->GetY() + 15 , $this->w , $this->GetY() + 15 );

        $this->SetFillColor( 153 , 153 , 153 );
        $this->SetTextColor( 0 , 0 , 0 );
        $this->SetFont( 'Arial' , 'B' , 9 );

        $this->Ln( 5 );

        $this->Cell( 150 , 5 , utf8_decode( ucwords( $u->name ) ) , 0 , 0 , 'L' , true );
        $this->Cell( 0 , 5 , utf8_decode( $u->address_street ) , 0 , 0 , 'R' , true );

        $this->Ln( 5 );

        $this->Cell( 150 , 5 , utf8_decode( $u->email1 ) , 0 , 0 , 'L' , true );
        $this->Cell( 0 , 5 , utf8_decode( $u->address_city . ' - ' . $u->address_country ) , 0 , 0 , 'R' , true );

        $this->Ln( 5 );

        $this->Cell( 150 , 5 , utf8_decode( 'Tel: ' . $u->phone_mobile ) , 0 , 0 , 'L' , true );
        $this->Cell( 0 , 5 , utf8_decode( 'Tel: ' . $u->phone_work ) , 0 , 0 , 'R' , true );
    }

    private function print_notas() {

        $this->Ln( 5 );

        $this->SetFont( 'Arial' , '' , 8 );
        $this->MultiCell( 0 , 5 , utf8_decode( $this->r->description ) );

        $this->AddPage();

        $this->SetFont('Arial','',0);
        $this->SetDrawColor(0,0,0);
        $this->SetLineWidth(0.35);
        $this->SetTextColor( 0 , 0 , 0 );
        $this->MultiCell( 0 , 5 , utf8_decode( "COLOMBIA \r\n Banco: Bancolombia \r\n Beneficiario: Macfarlane Cruz & Asociados S.A.S. \r\n Cuenta de Ahorros No. : 869945231-06 \r\n \r\n  CHILE \r\n Banco: Estado \r\n Beneficiario: VETA EDUCACIÓN SPA \r\n Nº Cuenta: 33670420715 \r\n RUT: 77.098.367-3 \r\n  Tipo de Cuenta: Chequera Electrónica \r\n \r\n AUSTRALIA: Banco: ANZ Bank \r\n Nombre de la cuenta: VETA education Consultancy \r\n BSB Number: 012172 \r\n Nº Cuenta: 205041092 \r\n Swift code: ANZBAU3M  \r\n \r\n  MEXICO: Banco: Bancomer \r\n Beneficiario: VETA EDUCATION MEXICO S.A. de C.V.\r\n Nº Cuenta: 0113402258\r\n Nº Cuenta clabe: 0121 8000 1134 0225 86\r\n Sucursal Banco: 0017" ) ,1,'C');
        $this->Ln( 5 );
        //$this->MultiCell( 0 , 5 , $this->WriteHTML(utf8_decode( "COLOMBIA \r\n Banco: Bancolombia \r\n " )) ,1,'C');

    }

    private function MultiCellBlt( $w , $h , $blt , $txt , $border = 0 , $align = 'J' , $fill = false ) {

        //Get bullet width including margins
        $blt_width = $this->GetStringWidth( $blt ) + $this->cMargin * 2;

        //Save x
        $bak_x = $this->x;

        //Output bullet
        $this->Cell( $blt_width , $h , $blt , 0 , '' , $fill );

        //Output text
        $this->MultiCell( $w - $blt_width , $h , $txt , $border , $align , $fill );

        //Restore x
        $this->x = $bak_x;
    }

}