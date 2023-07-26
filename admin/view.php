
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;
$lib->check_login2();

$dy=$crud->displayOneSpecific('driver','car_no',$_GET['id']);
?>


<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">CAR INFO DETAILS</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Car Info Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title"><!-- 
                                <h4>DIAGNOSIS</h4> -->

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                   <form action="#">
                                     <div class="row p-t-20">

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Car Owner Name :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['name']?>" readonly="readonly" required="required">
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Email :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['email']?>" readonly="readonly" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Phone :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['phone']?>" readonly="readonly" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Gender :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['gender']?>" readonly="readonly" required="required">
                                         </div></div>

                                     <div class="col-md-4">
                                         <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Address :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['address']?>" readonly="readonly" required="required">
                                            </div></div>

                                             <div class="col-md-4">
                                         <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle name :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['vname']?>" readonly="readonly" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                         <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Type :</p>
                                               <input type="text" class="form-control input-rounded" value="<?=$dy['vtype']?>" readonly="readonly" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                          <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Model :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['vmodel']?>" readonly="readonly" required="required">
                                            </div></div>

                                             <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Number :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['vnumber']?>" readonly="readonly" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Year :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['vyear']?>" readonly="readonly" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Class :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['vclass']?>" readonly="readonly" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Fuel Type :</p>
                                            <input type="text" class="form-control input-rounded" value="<?=$dy['vfuel']?>" readonly="readonly" required="required">
                                             </div></div>

                                             <div class="col-md-4">
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Chasis Number  :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['vchasis']?>" readonly="readonly" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Colour :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['vcolour']?>" readonly="readonly" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Next of Kin Detail :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['vnok']?>" readonly="readonly" required="required">
                                            </div></div>

                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Owner National Identity Number :</p>
                                                <input type="number" class="form-control input-rounded" value="<?=$dy['vnin']?>" readonly="readonly" required="required">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Car Unique Number :</p>
                                               <input type="text" class="form-control" value="<?=$dy['car_no']?>" readonly="readonly" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                         <div class="form-group">
                                        <p class="text-muted m-b-15 f-s-12">BarCode Image :</p>
                                         <?php
                            // $show="admin/barcode.php?codetype=Code39&size=100&text=".$dy['driver_no']."&print=true";
                              // echo "<img alt='testing' src=".$show." width='500' height='120'/>";
                             echo "<img alt='Qr code image' src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$dy['car_no']."&choe=UTF-8'/>";

                                            ?>
                                    </div>
                                </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Owner Image :</p>
                                               <img src="carimages/<?=$dy['pix']?>" width="300" height="300">
                                            </div>
                                        </div>




                                    
                                </div>


                                            <div class="offset-sm-4 col-md-10">
                                                        <a href="view-driver.php" class="btn btn-success col-md-5"> Back to Car Info</a>
                                                       
                                                    </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->

            
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
 <?php
include 'inc/footer.php';
?>
 
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>