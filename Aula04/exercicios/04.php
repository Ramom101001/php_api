<?php
function emailValido( $email ) {
    $tamanhoEmail = mb_strlen( $email );
    $indiceArroba = mb_strpos( $email, '@' );
    $ultimoIndice = $tamanhoEmail - 1;
    if ( $indiceArroba === 0 ||
        $indiceArroba === $ultimoIndice ) {
        return false;
    }
    $indicePonto = mb_strpos( $email, '.', $indiceArroba );
    if ( $indicePonto === $indiceArroba + 1 ||
        $indicePonto === $ultimoIndice ) {
        return false;
    }
    return $tamanhoEmail <= 100;
}

echo emailValido( '@teste' ) ? 'S' : 'N', PHP_EOL;
echo emailValido( 'ateste@' ) ? 'S' : 'N', PHP_EOL;
echo emailValido( 'teste@.oi' ) ? 'S' : 'N', PHP_EOL;
echo emailValido( 'teste@oi.' ) ? 'S' : 'N', PHP_EOL;
echo emailValido( 'abcd@aa.aa' . str_repeat( 'a', 91 )  ) ? 'S' : 'N', PHP_EOL;
echo emailValido( 'abcd@aa.aa' ) ? 'S' : 'N', PHP_EOL;