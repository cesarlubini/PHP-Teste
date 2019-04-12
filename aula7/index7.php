<?php 
  $nomeArquivo = "texto.txt";
  // verificar se o arquivo não existe
  if (!file_exists($nomeArquivo)) {
    // Abre o arquivo já existente
    $arquivoAberto = fopen($nomeArquivo, "w+");
    // Escrevendo no arquivo
    for($i = 1; $i <= 100; $i++) {
    fwrite($arquivoAberto, " Olá mundo! ($i)\n");  //PHP_EOL quebra a linha do arquivo
    //Fechando o arquivo
    }
    fclose($arquivoAberto);
  } else {
    //Abrindo o arquivo que já existe
    $arquivoAberto = fopen ($nomeArquivo, "r");
    //Pega o tamanho do arquivo
    $tamanho = filesize($nomeArquivo);
    //Pegando o conteúdo do arquivo
    $conteudo = fread($arquivoAberto, $tamanho);

    echo $conteudo;
  }
?>