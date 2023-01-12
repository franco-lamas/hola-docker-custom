@include('header')
@include('menus.menu')

<?php
$type= $_GET['ticker'];

echo $type;
?>
<div class="content-page">
    <div class="content">
                <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Opciones <?php echo $type; ?></h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Silico</a></li>
                        <li><a href="#">Opciones</a></li>
                        <li class="active"><?php echo $type; ?></li>
                    </ol>
                </div>
            </div>

            <div class="row"id="indices-list">
                <!-- Indices -->

            </div> <!-- end row -->


            <div class="row"id="indices-list2">
                <!-- Indices -->

            </div> <!-- end row -->
              
    </div> <!-- content -->

</div>



<script>
    $(document).ready(function() {
        // Fetch the initial table
        get_indices();
        // Fetch every 30 seconds
        get_indices2();
        setInterval(get_indices, 15000);

    });
    function get_indices(){
        var ticker = "<?php echo $type;?>";
        $('#indices-list').load('/helpers/options-helper?ticker='+ticker+"&table=all" , 'update=true');
    }
    function get_indices2(){
        var ticker = "<?php echo $type;?>";
        $('#indices-list2').load('/helpers/options-helper?ticker='+ticker+"&table=all" , 'update=true');
    }
</script>

@include('footer')

