<?php 


function absolute(){
  $absolute = explode('wp-content/plugins', pathinfo(dirname(__DIR__))["dirname"]);
  return $absolute[0];
}

/**
 * Path del Plugin
 * Corrente
 */

function url_my_plugin(){
  $path = pathinfo(dirname(__DIR__))["dirname"];
  $url = explode($_SERVER['HOME'], $path);
  return "https:/" . $url[1];
}

/**
 * Percorso assoluto
 * del sito web
 */

function url_my_path(){

  $path = pathinfo(dirname(__DIR__))["dirname"];
  $url = explode('/', explode($_SERVER['HOME'], $path)[1]);

  $myPath = ''; 

  foreach ($url as $key => $value) {
    if($value != 'wp-content'){
        $myPath = $myPath . "/" . $value;
    }else{
        return "https:" . $myPath . "/";
    } 
  }
}


function isNull($a, string $w){
  if($a){
    echo "<p class='msg'>" . $w . " Correttamente</p>";
  }else{
    echo "<p class='msg'>Ops! Qualcosa è andato storto</p>";
  }
}

function accessZTL(){
  echo '<div class="ztl">
        <h1>Zona traffico limitato</h1>
        <div class="cartello">
          <span></span>
        </div>
      </div>';
}


function date_comparison($date){
  if(strtotime($date) > strtotime("now")){
    return true;
  }else{
    return false;
  }
}


?>