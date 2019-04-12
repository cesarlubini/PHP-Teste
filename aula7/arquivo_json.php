<?php 
  $nomeArquivo = "usuarios.json";
  //Criando o array associativo
  $arrayAssoc = [
    "nome" => "Cesar",
    "email" => "cesar.lubini@gmail.com",
    "senha" => "123456"
  ];
  //transformando o array em json
  $json = json_encode($arrayAssoc);
  // colocando o json dentro do arquivo usuarios.json
  file_put_contents ($nomeArquivo, $json);

  // echo $json;
  // echo "<br>";
  // // Transformando o json em array associativo
  // $arrayNovoAssoc = json_decode($json, true);
  // var_dump($arrayNovoAssoc);
?>