<?php
$type= $_GET['type'];

if ($type=="monedas"){
    $json = file_get_contents(env('PARACHUTE_ENDING_API')."/api/arg/dolarHoy");
    $obj = json_decode($json, true);

    echo '<ul class="list-unstyled transaction-list m-r-5 nicescroll" id=indices-list>';
    foreach ( $obj as $value){
        echo '<li>';
        echo '<span class="tran-text" style="width: 215px;">'.$value["moneda"].'</span>';
        echo '<span class="pull-center text-success tran-price ">$ '.$value["compra"].'</span>';
        echo '<span class="pull-right style="color:"white;">$ '.$value["venta"].'</span>';
        echo '</li>';  
    }
    echo '</ul>';
}




if ($type=="indices"){
    
 

    $json = file_get_contents(env('PARACHUTE_ENDING_API')."/api/arg/indices");
    $obj = json_decode($json, true);
    echo '<ul class="list-unstyled transaction-list m-r-5 nicescroll" id=indices-list>';
    foreach ( $obj as $value){
        echo '<li>';
        echo '<span class="tran-text" style="width: 215px;">'.$value["symbol"].'</span>';
        echo '<span class="pull-center text-success tran-price style="">$ '.$value["last"].'</span>';
        echo '<span class="pull-right style="color:"white;">'.$value["change"].' %</span>';
        echo '</li>';  
    }
    echo '</ul>';
}

if ($type=="mep-al30"){

    $json = file_get_contents(env('PARACHUTE_ENDING_API')."/api/arg/mep/48hs");
    $obj = json_decode($json, true);

    echo '<h2 class="m-0 text-dark counter font-600">$ '.$obj[1]["MEPlast"].'</h2>';

}

if ($type=="dolar-blue"){

    $json = file_get_contents(env('PARACHUTE_ENDING_API')."/api/arg/dolarHoy");
    $obj = json_decode($json, true);

    echo '<h2 class="m-0 text-dark counter font-600">$ '.$obj[1]["venta"].'</h2>';

}

if ($type=="merval"){

    $json = file_get_contents(env('PARACHUTE_ENDING_API')."/api/arg/indices");
    $obj = json_decode($json, true);

    echo '<h2 class="m-0 text-dark counter font-600">$ '.$obj[0]["last"].'</h2>';

}



