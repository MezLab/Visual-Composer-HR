<?php

  header('Content-type: application/zip');  
  header('Content-Disposition: attachment; filename="'.$_GET['name'].'"');

  readfile($_GET['filename']); // Scarica Automaticamente
  unlink($_GET['filename']); //Cancella lo zip creato

?>