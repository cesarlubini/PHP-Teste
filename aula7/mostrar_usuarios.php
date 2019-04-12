<?php 
  $nomeArquivo = "usuarios.json";
  if(file_exists($nomeArquivo)) {
    // pegando o conteudo do json
    $conteudoJson = file_get_contents($nomeArquivo);
    // transformando o json em array associativo
    $arrayAssoc = json_decode($conteudoJson, true);
  }
?>

<ul>
  <?php foreach ($arrayAssoc as $chave => $valor) : ?>
    <li><?= $chave . " : " . $valor; ?></li>
  <?php endforeach; ?>
</ul>