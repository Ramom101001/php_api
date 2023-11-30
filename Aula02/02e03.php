<?php
// // explode() quebra uma string em um array
// $data = explode( '/', '17/08/2023' ); // separador, string
// var_dump( $data );
// // implode() junta um array em uma string
// $s = implode( '/', $data );
// var_dump( $s );

function mudarSeparadorData( $data, $separador ) {
    $pedacos = explode( '/', $data );
    return implode( $separador, $pedacos );
}

// echo mudarSeparadorData( '17/08/2023', '-' );

function dataPorExtenso( $data ) {   // '17/08/2023'
    $pedacos = explode( '/', $data ); // [ '17', '08', '2023' ]
    $dia = $pedacos[ 0 ];
    $mes = (int) $pedacos[ 1 ]; // 8
    $ano = $pedacos[ 2 ];
    $meses = [
        1 => 'Janeiro',
        'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
        'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
    ];
    $extenso = $meses[ $mes ];
    return "$dia de $extenso de $ano";
}
echo dataPorExtenso( '17/08/2023' );

?>