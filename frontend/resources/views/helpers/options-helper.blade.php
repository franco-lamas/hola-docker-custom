
<?php
$ticker= $_GET['ticker'];
$table= $_GET['table'];

if ($table=="all"){
    $json = file_get_contents(env('PARACHUTE_ENDING_API')."/api/arg/options/".$ticker."/all");
    $obj = json_decode($json, true);
    $front=$obj;
    $back=$obj;
    $overBack=$obj;
    foreach ( $obj as $value){
    $front=json_decode($value["Front"], true);
    $back=json_decode($value["Back"], true);
    $overBack=json_decode($value["OverBack"], true);
    }

    ?>
    <div class="col-lg-4" >
        <div class="card-box table-responsive "style="max-height: 480px;">

            <h4 class="m-t-0 m-b-20 header-title" ><b>Front Month</b></h4>
                <table class="table table-striped table-sm">
                    <tr>
                        <th>Ticker</td>
                        <th>Strike</td>
                        <th>Bid</td>
                        <th>Ask</td>
                        <th>Last</td>
                        <th>IV</td>
                        <th>Theoric</td>       
                    </tr>

                    <tbody>
    <?php

    foreach ( $front as $value){
        echo '<tr>';
        echo '<td>'.$value["symbol"].'</td>';
        echo '<td>'.$value["strike"].'</td>';
        echo '<td>'.$value["bid"].'</td>';
        echo '<td>'.$value["ask"].'</td>';
        echo '<td>'.$value["last"].'</td>';
        echo '<td>'.$value["IV"].'</td>';
        echo '<td>'.$value["THEOR"].'</td>';

        echo '</tr>'; 
    }
    ?>


                    </tbody>
                </table>
            <!--</div>-->
        </div>
    </div> <!-- end col -->

    <div class="col-lg-4" >
        <div class="card-box table-responsive "style="max-height: 480px;">

            <h4 class="m-t-0 m-b-20 header-title" ><b>Back Month</b></h4>
                <table class="table table-striped table-sm">
                    <tr>
                        <th>Ticker</td>
                        <th>Strike</td>
                        <th>Bid</td>
                        <th>Ask</td>
                        <th>Last</td>
                        <th>IV</td>
                        <th>Theoric</td>            
                    </tr>

                    <tbody>
    <?php

    foreach ( $back as $value){
        echo '<tr>';
        echo '<td>'.$value["symbol"].'</td>';
        echo '<td>'.$value["strike"].'</td>';
        echo '<td>'.$value["bid"].'</td>';
        echo '<td>'.$value["ask"].'</td>';
        echo '<td>'.$value["last"].'</td>';
        echo '<td>'.$value["IV"].'</td>';
        echo '<td>'.$value["THEOR"].'</td>';

       
        echo '</tr>'; 
    }
    ?>


                    </tbody>
                </table>
            <!--</div>-->
        </div>
    </div> <!-- end col -->


    <div class="col-lg-4" >
        <div class="card-box table-responsive "style="max-height: 480px;">

            <h4 class="m-t-0 m-b-20 header-title" ><b>Over Back Month</b></h4>
                <table class="table table-striped table-sm">
                    <tr>
                        <th>Ticker</td>
                        <th>Strike</td>
                        <th>Bid</td>
                        <th>Ask</td>
                        <th>Last</td>
                        <th>IV</td>
                        <th>Theoric</td>            
                    </tr>

                    <tbody>
    <?php

    foreach ( $overBack as $value){
        echo '<tr>';
        echo '<td>'.$value["symbol"].'</td>';
        echo '<td>'.$value["strike"].'</td>';
        echo '<td>'.$value["bid"].'</td>';
        echo '<td>'.$value["ask"].'</td>';
        echo '<td>'.$value["last"].'</td>';
        echo '<td>'.$value["IV"].'</td>';
        echo '<td>'.$value["THEOR"].'</td>';

        echo '</tr>'; 
    }
    ?>


                    </tbody>
                </table>
            <!--</div>-->
        </div>
    </div> <!-- end col -->
    <?php
    }
?>