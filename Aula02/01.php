<?php
$segundoSemestre = [
    7 => 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ];

// var_dump( $segundoSemestre );

$mes = (int) readline( 'Mês: ' );
if ( $mes <= 6 ) {
    echo 'O mês não está no segundo semestre';
} else if ( $mes <= 12 ) {
    echo $segundoSemestre[ $mes ];
} else {
    echo 'Mês inválido.';
}
?>