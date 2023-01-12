@include('header')
@include('menus.menu')



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->  
<div class="content-page"style="background-color: #2B333C">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row" >                        
                    <div class="col-lg-6">
                        <div class="card-box table-responsive">

                            <h4 class="m-t-0 m-b-20 header-title"><b>Dolar MEP 48hs</b></h4>
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <th>Ticker Pesos</td>
                                        <th>Bid Pesos</td>
                                        <th>Ask Pesos</td>
                                        <th>Last Pesos</td>
                                        <th>Ticker Dolar</td>
                                        <th>Bid Dolar</td>
                                        <th>Ask Dolar</td>
                                        <th>Last Dolar</td>
                                        <th>MEP Bid</td>
                                        <th>MEP Ask</td>
                                        <th>MEP Last</td>               
                                    </tr>
                        
                                    <tbody id="mep-48hs">
                                    </tbody>
                                </table>
                            <!--</div>-->
                        </div>

                    </div> <!-- end col -->

                    <div class="col-lg-6">

                        <div class="card-box table-responsive">
                                <h4 class="m-t-0 m-b-20 header-title"><b>Dolar MEP Contado Inmediato</b></h4>
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <th>Ticker Pesos</td>
                                        <th>Bid Pesos</td>
                                        <th>Ask Pesos</td>
                                        <th>Last Pesos</td>
                                        <th>Ticker Dolar</td>
                                        <th>Bid Dolar</td>
                                        <th>Ask Dolar</td>
                                        <th>Last Dolar</td>
                                        <th>MEP Bid</td>
                                        <th>MEP Ask</td>
                                        <th>MEP Last</td>               
                                    </tr>
                        
                                    <tbody id="mep-ci">
                                    </tbody>
                                </table>
                            
                        </div>
                    </div> <!-- end col -->
            </div>
        </div> <!-- container -->           
    </div> <!-- content -->

    <footer class="footer text-right">
        © 2023. Silico. La informacion puede contener errores y no son recomendaciones de inversion.
    </footer>

</div>            
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<script>
    $(document).ready(function() {
        // Fetch the initial table
        table_mep48hs();
        table_mepCI();
        setInterval(table_mep48hs, 15000);        
        setInterval(table_mepCI, 15000);     
    });

    function table_mep48hs() {
        $('#mep-48hs').load('/helpers/dolar?setlement=48hs&type=mep', 'update=true');
        }

    function table_mepCI() {
        $('#mep-ci').load('/helpers/dolar?setlement=ci&type=mep', 'update=true');
        }
</script>


@include('footer')