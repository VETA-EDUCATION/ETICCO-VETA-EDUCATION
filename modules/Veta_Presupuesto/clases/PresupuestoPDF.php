<?php

require_once( 'modules/Veta_College/Veta_College.php' );
require_once( 'modules/Veta_Presupuesto/clases/fpdf16/fpdf.php' );

class PresupuestoPDF extends FPDF
{
    var $margen = 10;
    var $p = null;
    var $total_depositos = 0;
    var $descuento = 0;

    public function generate_pdf( Veta_Presupuesto $p ) {

        global $sugar_config;
        $this->p = $p;
        //$this = new PresupuestoPDF( 'P' , 'mm' , 'Letter' );

        $this->SetMargins( $this->margen , $this->margen , $this->margen );
        $this->AddPage();

        $this->print_details();
        $this->print_notas();

        //$this->Output( $this->p->id . '.pdf' );
        $this->Output( $sugar_config[ 'upload_dir' ]  .  $this->p->id . '.pdf' , 'F');
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
        $nombre = empty( $this->p->veta_presupuesto_leads_name ) ? $this->p->veta_presupuesto_contacts_name : $this->p->veta_presupuesto_leads_name;
        $this->Cell( 0 , 3 , utf8_decode( strtoupper( substr( $nombre , 0 , 26 ) ) ) , 0 , 0 , 'R' );
        $this->Ln( 6 );
        $this->SetFont( 'Arial' , '' , 7 );
        $this->Cell( 0 , 3 , utf8_decode( "Presupuesto realizado el " . substr( $this->p->date_modified , 0 , 10 ) ) , 0 , 0 , 'R' );
        /*$this->Ln( 4 );
        $this->SetTextColor( 255 , 49 , 38 );
        $this->Cell( 0 , 3 , utf8_decode( "Vigencia :  1 semana" ) , 0 , 0 , 'R' ); */
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

    private function print_curso( Veta_DetallePresupuesto $d ) {

        global $app_list_strings;
        // ---------------------------------------------------- COLLEGE Y CURSO ----------------------------------------

        $this->SetTextColor( 45 , 45 , 45 );
        $c = new Veta_College();
        $c->retrieve( $d->veta_college_id1_c );

        $curso = new Veta_Curso();
        $curso->retrieve($d->veta_curso_id_c);
	$this->moneda = $c-> moneda_c;	

        $this->Ln( 7 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        //$this->Cell( 50 , 3 , utf8_decode( strtoupper( $c->name ) . ucwords( ' ' . $app_list_strings[ 'ciudades_list' ][ $c->ciudad ] ) . ', ' . ucwords( $app_list_strings[ 'pais_list' ][ $c->pais ] ) ) , 0 , 0 , 'L' );
        //$this->Cell( 0 , 3 , utf8_decode( 'CURSO: ' . strtoupper( $d->name ) ) , 0 , 0 , 'R' );
        $this->MultiCell( 0 , 3 , utf8_decode( 'COLLEGE:' . strtoupper( $c->name ) . ucwords( ' ' . $app_list_strings[ 'ciudades_list' ][ $c->ciudad ] ) . ', ' . ucwords( $app_list_strings[ 'pais_list' ][ $c->pais ] ) ) , 0 , 'L' );
        $this->Ln( 3 );
        $this->MultiCell( 0 , 3 , utf8_decode( 'CURSO: ' . strtoupper( $d->name ) ) , 0 , 'L' );
        $this->Ln( 4 );

        $this->print_line( $this->getY() );

        $this->Ln( 5 );

        $this->SetFont( 'Arial' , '' , 8 );

        // ---------------------------------------------------- FECHA DE INICIO ----------------------------------------


        /*$this->Cell( 5 );
        $this->Cell( 50 , 3 , utf8_decode( 'Fecha de Inicio: ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , substr( $d->intake , 0 , 10 ) , 0 , 0 , 'R' );   */

        // ---------------------------------------------------- DURACION ----------------------------------------

        // $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 50 , 3 , utf8_decode( $curso->tipo_curso == 'Vet' ? 'Término' :'Duración: ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( ucwords( $d->duracion ) . " semanas " ) , 0 , 0 , 'R' );

        // ---------------------------------------------------- PRECIO X SEMANA ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'Precio por Semana ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->precio_por_semana * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );

        // ---------------------------------------------------- BONO DE DESCUENTO ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'Descuento ' . substr( $d->descripcion_bono , 0 , 110 ) ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( '-' . number_format( ( $d->bono * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );

        // ---------------------------------------------------- VALOR DEL CURSO ----------------------------------------

        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 50 , 3 , utf8_decode( "Valor del Curso " ) , 0 , 0 , 'L' );
        //$this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->total_curso * 1 ) - ( $d->inscripcion * 1 ) , 2 , ',' , '.' ) ) . ' AUD' , 0 , 0 , 'R' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->precio_curso * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );


        // ---------------------------------------------------- INSCRIPCION ----------------------------------------

        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( "Valor de la Inscripción " ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( $d->inscripcion * 1 , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );


        // ---------------------------------------------------- COSTO MATERIALES ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'Costo Materiales ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->costo_materiales * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );

        // ---------------------------------------------------- COSTO EXTRA ----------------------------------------
        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'Costo Extra ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->costo_extra * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );


        // ---------------------------------------------------- TOTAL ----------------------------------------

        $this->Ln( 5 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'TOTAL: ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->total_curso * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );

        $this->Ln( 5 );
        $this->Cell( 5 );
        $this->Cell( 100 , 3 , utf8_decode( 'DEPOSITO: ' ) , 0 , 0 , 'L' );
        $this->Cell( 0 , 3 , utf8_decode( number_format( ( $d->deposito * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );
        $this->total_depositos += ( $d->deposito * 1 );
        $this->descuento += ($d->bono * 1);

        $this->Ln( 7 );
    }

    private function print_servicios( Veta_Presupuesto $p ) {

        if( ( ! empty( $p->examen_medico ) and $p->examen_medico > 0 ) or ( ! empty( $p->seguro ) and $p->seguro > 0 ) or ( ! empty( $p->total_visa ) and $p->total_visa > 0 ) ) {
            //$this->Ln( 8 );

            $this->Ln( 7 );
            $this->SetFont( 'Arial' , 'B' , 9 );
            $this->Cell( 0 , 3 , utf8_decode( "SERVICIOS " ) , 0 , 0 , 'L' );
            $this->Ln( 4 );
            $this->print_line( $this->getY() );

            $this->SetFont( 'Arial' , '' , 8 );

            if( ! empty( $p->examen_medico ) and ( $p->examen_medico * 1 ) > 0 ) {

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Examen Médico " ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $p->examen_medico * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );
            }

            if( ! empty( $p->seguro ) and $p->seguro > 0 ) {
                $this->Ln( 5 );
                $this->Cell( 5 );

                $my_seguro = '';
                if( ! empty( $p->duracion ) )
                    $my_seguro = "( " . $p->asegurador . " " . $p->duracion . " meses " . $p->tipo_seguro . " )";

                $this->Cell( 100 , 3 , utf8_decode( "Valor del Seguro  " . $my_seguro . " " ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $p->seguro * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );
            }

            if( ! empty( $p->total_visa ) and $p->total_visa > 0 ) {

                $visa = new Veta_TiposVisa();
                $visa->retrieve($p->veta_tiposvisa_id_c);

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Valor de la visa ( " . $visa->name . " )" ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $p->total_visa * 1 ) , 2 , ',' , '.' ) ) .' '. $this->moneda , 0 , 0 , 'R' );
            }

            $this->Ln( 7 );
        }

//OTROS SERVICIOS
          if( ( ! empty( $p->tiquete_c ) and $p->tiquete_c > 0 ) or ( ! empty( $p->aeropuerto_c ) and $p->aeropuerto_c > 0 ) or ( ! empty( $p->tour_c ) and $p->tour_c > 0 ) or ( ! empty( $p->hospedaje_c ) and $p->hospedaje_c > 0 ) or ( ! empty( $p->mmm_c ) and $p->mmm_c > 0 )) 
        {
              $this->Ln( 7 );
            $this->SetFont( 'Arial' , 'B' , 9 );
            $this->Cell( 0 , 3 , utf8_decode( "OTROS SERVICIOS " ) , 0 , 0 , 'L' );
            $this->Ln( 4 );
            $this->print_line( $this->getY() );

            $this->SetFont( 'Arial' , '' , 8 );
            
            if( ! empty( $p->tiquete_c ) and ( $p->tiquete_c * 1 ) > 0 ) {

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Veta Travel Tiquete" ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $p->tiquete_c * 1 ) , 2 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' );
            }
            
            if( ! empty( $p->aeropuerto_c ) and ( $p->aeropuerto_c * 1 ) > 0 ) {

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Veta Travel Aeropuerto" ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $p->aeropuerto_c * 1 ) , 2 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' );
            }
            
            if( ! empty( $p->tour_c ) and ( $p->tour_c * 1 ) > 0 ) {

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Veta Travel Tour" ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $p->tour_c * 1 ) , 2 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' );
            }
            
            if( ! empty( $p->hospedaje_c ) and ( $p->hospedaje_c * 1 ) > 0 ) {

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Hospedaje" ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $p->hospedaje_c * 1 ) , 2 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' );
            }
            
            if( ! empty( $p->mmm_c ) and ( $p->mmm_c * 1 ) > 0 ) {

                $this->Ln( 5 );
                $this->Cell( 5 );
                $this->Cell( 100 , 3 , utf8_decode( "Migration" ) , 0 , 0 , 'L' );
                $this->Cell( 0 , 3 , utf8_decode( number_format( ( $p->mmm_c * 1 ) , 2 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' );
            }
            
            $this->Ln( 4 );
        }
    }

    private function print_total( Veta_DetallePresupuesto $d ) {

        $this->Ln( 5 );
        $this->SetFillColor( 234 , 234 , 234 );
        $this->SetTextColor( 27 , 27 , 27 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 0 , 8 , utf8_decode( "TOTAL" ) , 0 , 0 , 'L' , true );
        $this->Ln();
        $this->SetFont( 'Arial' , '' , 8 );
        $this->Cell( 150 , 8 , utf8_decode( $d->descripcion_bono ) , 0 , 0 , 'L' , true );
        $this->SetTextColor( 23 , 44 , 255 );
        $this->Cell( 0 , 8 , utf8_decode( number_format( ( $d->bono * 1 ) , 2 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' , true );
        $this->print_line( $this->GetY() );
        $this->Ln( 15 );
        $this->print_separator( $this->GetY() );
        $this->Ln( 5 );
    }

    private function print_details() {

        global $app_list_strings;
	$trm = new Veta_TRM();
        $dets                  = $this->p->get_linked_beans( 'veta_detallepresupuesto_veta_presupuesto' , 'Veta_DetallePresupuesto' );
        $this->total_depositos = 0;
        $this->descuento = 0;

        foreach( $dets as $d ) {

            $this->print_curso( $d );
        }

        $this->print_servicios( $this->p );

        $this->SetFillColor( 23 , 44 , 255 );
        $this->SetTextColor( 255 , 255 , 255 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->Cell( 100 , 6 , utf8_decode( "TOTAL GENERAL" ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , 'B' , 10 );
	$this->Cell( 20 , 6 , utf8_decode( number_format( $this->p->getGranTotalMoneda($this->moneda), 2 , ',' , '.' ) ) .' '.$this->p->moneda_c , 0 , 0 , 'R' , true );
        $this->Cell( 0 , 6 , utf8_decode( number_format( $this->p->gran_total * 1 , 2 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' , true );

        $this->Ln( 7 );

        /*$this->Cell( 100 , 6 , utf8_decode( "TOTAL PESOS " ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , 'B' , 10 );
        $this->Cell( 0 , 6 , '$ ' . utf8_decode( number_format( $this->p->pesos * 1 , 0 , ',' , '.' ) )  , 0 , 0 , 'R' , true );   */

        $this->Cell( 100 , 6 , utf8_decode( "DESCUENTO " ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , 'B' , 10 );
        $descuento = ( $this->p->descuento * 1 );
        $this->Cell( 0 , 6 , utf8_decode( number_format( $descuento * 1 , 0 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' , true );

        $this->Ln( 7 );

        $this->Cell( 100 , 6 , utf8_decode( "TOTAL PRIMER PAGO " ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , 'B' , 10 );
        $primer_pago = ( $this->total_depositos * 1 ) + ( $this->p->examen_medico * 1 ) + ( $this->p->seguro * 1 ) + ( $this->p->total_visa * 1 ) - ($this->p->descuento * 1) + ( $this->p->tiquete_c * 1 )+ ( $this->p->aeropuerto_c * 1 )+ ( $this->p->tour_c * 1 )+ ( $this->p->hospedaje_c * 1 )+ ( $this->p->mmm_c * 1 );
        $this->Cell( 20 , 6 , utf8_decode( number_format( $primer_pago * 1 * $trm->get_trm($this->moneda,$this->p->moneda_c) , 2 , ',' , '.' ) ) .' '.$this->p->moneda_c , 0 , 0 , 'R' , true );
        $this->Cell( 0 , 6 , utf8_decode( number_format( $primer_pago * 1 , 0 , ',' , '.' ) ) . ' '. $this->moneda , 0 , 0 , 'R' , true );

        $this->Ln( 8 );

        $this->SetFillColor( 255 , 255 , 255 );
        $this->SetTextColor( 27 , 27 , 27 );
        $this->SetFont( 'Arial' , '' , 8 );
        // $this->Cell( 130 , 3 , utf8_decode( "Total con tipo de cambio actual: " ) , 0 , 0 , 'R' , true );
        $this->SetFont( 'Arial' , 'B' , 8 );
        // $this->Cell( 20 , 3 , utf8_decode( number_format( ( $this->p->usd * 1 ) , 2 , ',' , '.' ) . ' USD' ) , 0 , 0 , 'L' , true );
        $this->SetFont( 'Arial' , '' , 8 );
        // $this->Cell( 0 , 3 , utf8_decode( "Tipo de Cambio: ( " . number_format( ( $this->p->aud_usd * 1 ) , 5 , ',' , '.' ) . ' AUD )' ) , 0 , 0 , 'R' , true );
    }

    private function print_notas() {

        $this->Ln( 8 );

        $this->SetFont( 'Arial' , '' , 8 );
        $this->MultiCell( 0 , 5 , utf8_decode( $this->p->description ) );

        /*$this->Ln( 8 );
        $this->SetFont( 'Arial' , 'B' , 9 );
        $this->SetTextColor( 45 , 45 , 45 );
        $this->Cell( 0 , 3 , utf8_decode( "NOTAS" ) , 0 , 0 , 'L' );


        $this->Ln( 4 );
        $this->print_line( $this->GetY() );

        $this->Ln( 4 );

        $this->SetFont( 'Arial' , '' , 7 );

        $column_width = ( $this->w - 30 );

        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'For courses dates in 2020, prices could increase. School can change prices without notice. Final prices will be reflected in the school\'s invoice.' );
        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'ACCOMMODATION NOTES: Twin Room Option, must be booked by students travelling together.' );
        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'Minimum age 16 years (Students under 18 must book homestay half-board for the duration of their course, return airport transfers and require a parental/guardian consent form)' );
        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'Cambridge Exam fees and dates subject to change (refer to http://cambridgeesol-centres.org) // IELTS EXAM to be booked by students directly. Current price is $330 (GST free only for academic purposes) - for up-to-date fees and dates check ielts.org / Promotion IELTS FREE EXAM only Programs LSA the promotion is valid from July 1 to September 30.' );
        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'Public holidays on a weekday (School Closure): 01 Jan, 28 Jan, 19 Apr, 22 Apr, 25 Apr, 10 Jun, 07 Oct and 23 - 27 Dec 2019.' );
        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'Student Insurance: Only available to student visa holders, price subject to change.' );
        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'Cambridge Exam fees and dates subject to change (refer to http://cambridgeesol-centres.org) // IELTS EXAM to be booked by students directly. Current price is $330 (GST free only for academic purposes) - for up-to-date fees and dates check ielts.org' );
        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'In case the student is a minor, it is COMPULSORY add the additional service "1257 Welfare Undertaking Fee" when quoting. Textbooks and course materials (text books and course materials are available for use during studies but will be recycled for other students to use once a student has finished their course. Should students wish to purchase their own books they are able to do so at a cost of AUS $25 per level)' );
        $this->MultiCellBlt( $column_width , 4 , chr( 149 ) , 'Prices are estimates and are subject to change without notice due to course and housing availability and exchange rate fluctuations. Prices do not include flight cost Additional charges may apply.' );    */
    }

    function Footer() {

        $u = new User();
        $u->retrieve( $this->p->created_by );

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