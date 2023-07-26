       <?php 
       ob_start();
       require_once 'library/lib.php';
       require_once 'classes/crud.php';

       $lib=new Lib;
       $crud=new Crud;
       $dy=$crud->displayOneSpecific('driver','car_no',$_GET['id']);
       ?>

       <?php include 'admin/inc/header2.php'; ?>
       <!-- ============================================================== -->
       <!-- End Left Sidebar - style you can find in sidebar.scss  -->
       <!-- ============================================================== -->
       <!-- ============================================================== -->
       <!-- Page wrapper  -->
       <!-- ============================================================== -->
       <div class="">
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
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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

                                        <div class="col-md-8">

                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Car Owner Name :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['name']?>" readonly="readonly" required="required">
                                            </div>
                                            </div>

                                            <div class="col-md-12">
                                             <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Email :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['email']?>" readonly="readonly" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Phone :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['phone']?>" readonly="readonly" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Gender :</p>
                                                <input type="text" class="form-control input-rounded" value="<?=$dy['gender']?>" readonly="readonly" required="required">
                                         </div></div>

                                     

                                    </div>

                                        <div class="col-md-4">

                                        <div class="col-md-6 offset-md-2">
                                            <div class="form-group">
                                                <p class="text-muted m-b-15 f-s-12">Owner Image :</p>
                                               <img src="admin/carimages/<?=$dy['pix']?>" width="300" height="300">
                                            </div>
                                        </div>

                                        </div>


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

                                            <div class="col-md-8">
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


                                    
                                </div>


                                    <div class="form-actions">
                                        <a href="track.php" class="btn btn-success"> <i class="fa fa-arrow-left"></i> Back to Verification Area</a>
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
    <?php include 'admin/inc/footer2.php'; ?>
    <script>
          /****************************************
           *       Basic Table                   *
           ****************************************/
           $('#zero_config').DataTable();
         </script>

       </body>

       </html>