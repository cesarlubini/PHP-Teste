<?php 
  $nomeArquivo = "dados.txt";
  // if(file_exists($nomeArquivo)) {
  //   $conteudo = file_get_contents($nomeArquivo);
  //   $conteudo = $conteudo . "Editei o arquivo" . PHP_EOL;
  //   file_put_contents($nomeArquivo, $conteudo);

  //   echo $conteudo;
  // } else {
  //   file_put_contents($nomeArquivo, "Criei o arquivo" . PHP_EOL);
  // }

    $arquivoAberto = fopen($nomeArquivo, "r");

    if($arquivoAberto) {
      $contador = 1;
      while (($linha = fgets($arquivoAberto)) && $contador <= 10) {
        $linha = $linha . "Oi";
        
        ++$contador;
      }
    }
?>