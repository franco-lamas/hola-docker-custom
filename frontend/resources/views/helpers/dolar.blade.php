<?php
$type= $_GET['type'];

if ($type=="mep"){
    $var = $_GET['setlement'];

    $json = file_get_contents(env('PARACHUTE_ENDING_API')."/api/arg/mep/".$var);
    $obj = json_decode($json, true);

    foreach ( $obj as $value){
        echo '<tr class="">';
        echo '<td>'.$value["symbolARS"].'</td>';
        echo '<td>'.$value["bidARS"].'</td>';
        echo '<td>'.$value["askARS"].'</td>';
        echo '<td>'.$value["lastARS"].'</td>';

        echo '<td>'.$value["symbolUSD"].'</td>';
        echo '<td>'.$value["bidUSD"].'</td>';
        echo '<td>'.$value["askUSD"].'</td>';
        echo '<td>'.$value["lastUSD"].'</td>';

        echo '<td>'.$value["MEPbid"].'</td>';
        echo '<td>'.$value["MEPask"].'</td>';
        echo '<td>'.$value["MEPlast"].'</td>';

        echo '</tr>'; 
}


}

if ($type=="ccl"){
    $var = $_GET['panel'];
    $json = file_get_contents(env('PARACHUTE_ENDING_API')."/api/arg/ccl/".$var);
    $obj = json_decode($json, true);



    foreach ( $obj as $value){
        echo '<tr>';
        echo '<td>'.$value["Ticker"].'</td>';
        echo '<td>'.$value["Cedear"].'</td>';

        echo '<td>'.$value["FC"].'</td>';

        echo '<td>'.$value["TickerUS"].'</td>';
        echo '<td>'.$value["Stock"].'</td>';

        echo '<td>'.$value["CCL"].'</td>';
        echo '</tr>'; 

    }
}

?>