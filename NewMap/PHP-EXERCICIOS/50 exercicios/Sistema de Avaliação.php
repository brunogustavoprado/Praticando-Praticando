<?php
//Sistema de Avaliação de filmes

function avaliable($nomedofilme, $nomedeusuario, $nota, $crititaFalada)
{

    $avaliacao = "O Filme: $nomedofilme foi avaliado por $nomedeusuario com a nota: $nota\n
     Critica Falada: $crititaFalada";



  $arquivoss =  fopen("Nota_do_$nomedofilme.$nomedeusuario.txt", "w");

    fwrite($arquivoss, $avaliacao);

    fclose($arquivoss);

}

avaliable("Carros", "Bruno", "9", "Um otimo filme de imensa qualidade e que assistiria novamente com toda certeza");
avaliable("Avatar", "Bruno", "8", "Um otimo filme de imensa qualidade e que assistiria novamente com toda certeza");
avaliable("Minios", "Bruno", "7", "Um otimo filme de imensa qualidade e que assistiria novamente com toda certeza");