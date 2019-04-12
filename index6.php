<?php 
  $estaLogado = true;

  if ($estaLogado) {
    header('location: https://facebook.com');
  } else {
    header('Location: index5.php');
  }


?>