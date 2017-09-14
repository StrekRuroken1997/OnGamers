<?php

function NombreReal($nombre) 
    {
        $nombre_sin = str_replace("_", " ", $nombre);
        return $nombre_sin;
    }

function ObtenerFecha() {
        $mes = date("n");
        $mesArray = array(
            1 => "Enero",
            2 => "Febrero",
            3 => "Marzo",
            4 => "Abril",
            5 => "Mayo",
            6 => "Junio",
            7 => "Julio",
            8 => "Agosto",
            9 => "Septiembre",
            10 => "Octubre",
            11 => "Noviembre",
            12 => "Diciembre"
        );
        $semana = date("D");
        $semanaArray = array(
            "Mon" => "Lunes",
            "Tue" => "Martes",
            "Wed" => "Miercoles",
            "Thu" => "Jueves",
            "Fri" => "Viernes",
            "Sat" => "Sábado",
            "Sun" => "Domingo"
        );
        $mesReturn = $mesArray[$mes];
        $semanaReturn = $semanaArray[$semana];
        $dia = date("d");
        $año = date("Y");
        return $semanaReturn . ", " . $dia . " de " . $mesReturn . " de " . $año;
    }

function ObtenerRespeto($nivel) 
{
    if($nivel == 1) $RespetoMinimo = 8;
    else if($nivel == 2) $RespetoMinimo = 12;
    else if($nivel == 3) $RespetoMinimo = 20;
    else if($nivel == 4) $RespetoMinimo = 35;
    else if($nivel == 5) $RespetoMinimo = 90;
    else if($nivel == 6) $RespetoMinimo = 120;
    else if($nivel == 7) $RespetoMinimo = 150;
    else if($nivel == 8) $RespetoMinimo = 180;
    else if($nivel == 9) $RespetoMinimo = 210;
    else if($nivel == 10) $RespetoMinimo = 270;
    else if($nivel == 11) $RespetoMinimo = 330;
    else if($nivel == 12) $RespetoMinimo = 390;
    else if($nivel == 13) $RespetoMinimo = 450;
    else if($nivel == 14) $RespetoMinimo = 510;
    else if($nivel == 15) $RespetoMinimo = 630;
    else if($nivel == 16) $RespetoMinimo = 750;
    else if($nivel == 17) $RespetoMinimo = 870;
    else if($nivel == 18) $RespetoMinimo = 990;
    else if($nivel == 19) $RespetoMinimo = 1110;
    else if($nivel >= 20) $RespetoMinimo = 1110;

    return $RespetoMinimo;
}

function SacarSexo($sexo){
    if($sexo == 0) $genero = 'Hombre';
    else if($sexo == 1) $genero = 'Mujer';

    return $genero;
}

function SacarTrabajo($trabajo) {
switch ($trabajo) {
                                        case 1: 
                                            echo 'Camionero';
                                            break;
                                        case 2: 
                                            echo 'Taxista';
                                            break;
                                        
                                        case 3: 
                                            echo 'Carguero';
                                            break;
                                        
                                        case 4: 
                                            echo 'Minero';
                                            break;
                                        
                                        case 5: 
                                            echo 'Vendedor de comida';
                                            break;
                                        
                                        case 6: 
                                            echo 'Basurero';
                                            break;
                                        case 7: 
                                            echo 'Frutero';
                                            break;
                                        
                                        case 8: 
                                            echo 'Ladrón';
                                            break;
                                        
                                        case 9: 
                                            echo 'Contrabandista';
                                            break;
                                        
                                        default: 
                                            echo 'Desempleado';
                                            break;
                                    }
}




function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
{
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);
    
    $interval = date_diff($datetime1, $datetime2);
    
    return $interval->format($differenceFormat);
    
}

?>