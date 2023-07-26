
<?php
require_once '../library/lib.php';
require_once '../classes/crud.php';
?>

<?php
$lib=new Lib;
$crud=new Crud;

$lib->check_login2();

if (isset($_POST['sub'])) {
$crud->addDriver($_POST,$_POST);
}
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
                        <h4 class="page-title">ADD CAR INFO</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Car Info</li>
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
                                    <form action="add-driver.php" method="POST" enctype="multipart/form-data">
                                     <div class="row p-t-20">

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Car Owner Name :</p>
                                                <input type="text" class="form-control input-rounded" name="name" placeholder="Please enter name" required="required">
                                            </div>
                                            </div>

                                            <div class="col-md-4">
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Email :</p>
                                                <input type="text" class="form-control input-rounded" name="email" placeholder="Please enter email" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Phone :</p>
                                                <input type="text" class="form-control input-rounded" name="phone" placeholder="Please enter phone number" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Select Gender :</p>
                                                <select class="form-control input-rounded" name="gender"  required="required">
                                                     <option value="MALE">MALE</option>
                                                     <option value="FEMALE">FEMALE</option>
                                             </select>
                                         </div></div>

                                     <div class="col-md-4">
                                         <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Address :</p>
                                                <input type="text" class="form-control input-rounded" name="address" placeholder="Please enter address" required="required">
                                            </div></div>

                                             <div class="col-md-4">
                                         <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle name :</p>
                                                <input type="text" class="form-control input-rounded" name="vname" placeholder="Please enter vehicle name" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                         <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Type :</p>
                                                <select class="form-control input-rounded" name="vtype"  required="required">
                                                     <option value="COMMERCIAL">COMMERCIAL</option>
                                                     <option value="GOVERNMENT">GOVERNMENT</option>
                                                      <option value="PRIVATE">PRIVATE</option>

                                             </select>
                                            </div></div>

                                            <div class="col-md-4">
                                          <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Model :</p>
                                                <input type="text" class="form-control input-rounded" name="vmodel" placeholder="Please enter model" required="required">
                                            </div></div>

                                             <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Number :</p>
                                                <input type="text" class="form-control input-rounded" name="vnumber" placeholder="Please enter number" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Year :</p>
                                                <input type="text" class="form-control input-rounded" name="vyear" placeholder="Please enter year" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                              <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Class :</p>
                                                <input type="text" class="form-control input-rounded" name="vclass" placeholder="Please enter class i.e suv,bus,van,truck" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Fuel Type :</p>
                                             <select class="form-control input-rounded" name="vfuel"  required="required">
                                                     <option value="FUEL">FUEL</option>
                                                     <option value="BIOFUEL">BIOFUEL</option>
                                                      <option value="DIESEL">DIESEL</option>

                                             </select>
                                             </div></div>

                                             <div class="col-md-4">
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Chasis Number  :</p>
                                                <input type="text" class="form-control input-rounded" name="vchasis" placeholder="Please enter chasis number" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Vehicle Colour :</p>
                                                <input type="text" class="form-control input-rounded" name="vcolour" placeholder="Please enter colour" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Next of Kin Detail :</p>
                                                <input type="text" class="form-control input-rounded" name="vnok" placeholder="Please enter next of kin detail" required="required">
                                            </div></div>

                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Owner National Identity Number :</p>
                                                <input type="number" class="form-control input-rounded" name="vnin" placeholder="Please enter nin" required="required">
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Car Unique Number :</p>
                                               <input type="text" class="form-control" name="car_no"  value="<?=$lib->gen()?>" required>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Upload Owner Image :</p>
                                               <input type="file" class="form-control"  name="pix" required>
                                            </div>
                                        </div>


                                    
                                </div>


                                            <div class="offset-sm-4 col-md-10">
                                                        <button type="submit" class="btn btn-success col-md-5" name="sub"> <i class="ti-plus"></i> Add Car Info</button>
                                                       
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