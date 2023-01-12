@include('header')
@section('title') {{'Page Title Goes Here'}} @endsection
@include('menus.menu')





<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
    <!-- Start content -->
    
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">

                    <h4 class="page-title">Home Dashabord</h4>
                    <p class="text-muted page-title-alt">Silico - Analisis del mercado argentino en tiempo Real.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-attach-money text-primary"></i>
                        <h2 id="mep-al30"> </h2>
                        <div class="text-muted m-t-5">Dolar MEP</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-attach-money text-primary"></i>
                        <h2 id="dolar-blue"> </h2>
                        <div class="text-muted m-t-5">Dolar Blue</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-trending-up  text-info"></i>
                        <h2 id="merval"> </h2>
                        <div class="text-muted m-t-5">MERVAL</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-panel widget-style-2 bg-white">
                        <i class="md md-account-child text-custom"></i>
                        <h2 class="m-0 text-dark counter font-600">8564</h2>
                        <div class="text-muted m-t-5">Users</div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <!-- Indices -->
                <div class="col-lg-4">
                    <div class="card-box">
                        <h4 class="m-t-0 m-b-20 header-title"><b>indices</b></h4>

                        <div class="nicescroll mx-box" id=indices-list>
                        </div>

                    </div>

                </div> <!-- end col -->

                <!-- Monedas -->
                <div class="col-lg-4">
                    <div class="card-box">
                        <h4 class="m-t-0 m-b-20 header-title"><b>Monedas</b></h4>

                        <div class="nicescroll mx-box" id=monedas-list>
                        </div>
                    
                    </div>

                </div> <!-- end col -->


                <!-- Todos app -->
                <div class="col-lg-4">
                    <div class="card-box">
                        <h4 class="m-t-0 m-b-20 header-title"><b>Todo</b></h4>
                        <div class="todoapp">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4>
                                </div>
                                <div class="col-sm-6">
                                    <a href="" class="pull-right btn btn-primary btn-sm waves-effect waves-light" id="btn-archive">Archive</a>
                                </div>
                            </div>

                            <ul class="list-group no-margn nicescroll todo-list" style="height: 280px" id="todo-list"></ul>

                                <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                <div class="row">
                                    <div class="col-sm-9 todo-inputbar">
                                        <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                    </div>
                                    <div class="col-sm-3 todo-send">
                                        <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container -->
                    
    </div> <!-- content -->
    <footer class="footer text-right">
        © 2023. Silico. La informacion puede contener errores y no son recomendaciones de inversion.
    </footer>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<style>
.text-success {
    color: #98a6ad;
}
</style>


<script>
    $(document).ready(function() {
        // Fetch the initial table
        get_mep();
        get_dolarBlue()
        get_merval();
        get_indices();
        get_monedas();
        // Fetch every 30 seconds
        setInterval(get_mep, 30000);
        setInterval(get_dolarBlue, 30000);
        setInterval(get_merval, 30000);
        setInterval(get_indices, 30000);
        setInterval(get_monedas, 30000);
    });

    function get_mep(){
        $('#mep-al30').load('/helpers/home-helper?type=mep-al30', 'update=true');
    }

    function get_dolarBlue(){
        $('#dolar-blue').load('/helpers/home-helper?type=dolar-blue', 'update=true');
    }  

    function get_merval(){
        $('#merval').load('/helpers/home-helper?type=merval', 'update=true');
    }

    function get_indices(){
        $('#indices-list').load('/helpers/home-helper?type=indices', 'update=true');
    }
    function get_monedas(){
        $('#monedas-list').load('/helpers/home-helper?type=monedas', 'update=true');
    }
</script>

@include('footer')

