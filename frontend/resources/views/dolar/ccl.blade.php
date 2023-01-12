@include('header')
@include('menus.menu')


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">

                        
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>Ticker ARG</td>
                                            <th>Last Cedear</td>
                                            <th>FC</td>
                                            <th>Ticker US</td>
                                            <th>Last US</td>
                                            <th>CCL</td>
                                                
                                        </tr>
                                    </thead>
                                    <tbody id="vehicleList">
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
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
        ccl_cedear();

        // Fetch every 5 seconds
        setInterval(refreshTable, 15000);
    });

    function refreshTable(){
        $.getJSON('{{ env('PARACHUTE_ENDING_API') }}'+"/api/arg/ccl", function(data) {
            var vehicleListData = '';
            $.each(data, function(key, value) {
                vehicleListData += '<tr id="rowVehicleStatus" class="">';
                vehicleListData += '<td>'+value.Ticker+'</td>';
                vehicleListData += '<td>'+value.Cedear+'</td>';
                vehicleListData += '<td>'+value.FC+'</td>';
                vehicleListData += '<td>'+value.TickerUS+'</td>';

                vehicleListData += '<td>'+value.Stock+'</td>';
                vehicleListData += '<td>'+value.CCL+'</td>';
                vehicleListData += '</tr>';     
            });

            // We use .html instead of .append here, to make sure we don't add the same
            // entries when the interval is ran for the n-th time.
            $('#vehicleList').html(vehicleListData);
        });
    }
    function ccl_cedear(){
        $('#vehicleList').load ('/helpers/dolar?panel=cedear&type=ccl', 'update=true');
        }
</script>

@include('footer')
                    