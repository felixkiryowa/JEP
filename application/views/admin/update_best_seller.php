<!--<!DOCTYPE html>
<html lang="en">  
<head>
<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/styles/bootstrap4/bootstrap.min.css');?>">
</head>
<body>
<div class="container">
    <h2>User Account</h2>
    <h3>Welcome <?php // echo $user['username']; ?>!</h3>
    <div class="account-info">
        <p><b>Name: </b><?php // echo $user['id']; ?></p>
        <p><b>Email: </b><?php //echo $user['password']; ?></p>

    </div>
    
    <a href="<?php //echo site_url('admin_controller/logout');?>">Logout</a></br>
    <a href="<?php //echo site_url('user_controller/secondPage');?>">Navigate To Second Page</a>
</div>
</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png"      href="<?php echo base_url('assets/images/logo.png');?>"/>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo  base_url('admin/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Datatables CSS -->
    <link href="<?php echo  base_url('admin/css/dataTables.jqueryui.css');?>" rel="stylesheet">
    <link href="<?php echo  base_url('admin/css/jquery.dataTables.min.css');?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('admin/vendor/metisMenu/metisMenu.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('admin/dist/css/sb-admin-2.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('admin/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    
    <link href="<?php echo base_url('admin/css/dataTables.jqueryui.css" rel="stylesheet');?>">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color:#EA5B77;">JEP | JEWELLERY</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#" ><i class="fa fa-bar-chart-o fa-fw"></i> Add Pair of Earings</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header" style="color:#EA5B77;">Edit Bag Information</h4>
                    <div class="messages"></div>
                    
                      <?php
                               if($pair_added = $this->session->flashdata('pair_added')){

                                 echo '<div class="alert alert-success alert-dismissable">'
                                   . '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'
                                      .$pair_added. 
                                     '</div>';
                             }
                             elseif ($adding_pair_failed = $this->session->flashdata('adding_pair_failed')) {
                                   echo '<div class="alert alert-danger alert-dismissable">'
                                 . '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'
                                        .$adding_pair_failed. 
                                      '</div>';
                              }
                             elseif($error_with_fields = $this->session->flashdata('error_with_fields')){
                                 echo '<div class="alert alert-danger alert-dismissable">'
                                 . '<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'
                                        .$error_with_fields. 
                                      '</div>';
                              }
                       ?>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php echo form_open('best_sellers_controller/save_editted_best_seller_info/'.$best_seller->id);?>
                   
                        <div class="modal-body">
                                <div class="form-group">
                                  <?php echo form_label('Title :', 'edit_title');?>
                                   <?php
                                $data = array( 'name'=> 'edit_title',
                                               'placeholder' =>'Enter Product Title',
                                               'value'=> set_value('edit_title',$best_seller->title),
                                               'class' => 'form-control'
                                               );
                                echo form_input($data);
                                ?>
                                 <span class="text text-danger">
                                       <?php echo form_error('edit_title')?>
                                     </span> 
                                
                                </div>
                                <div class="form-group">
                                   <?php echo form_label('Price :', 'edit_price');?>
                                   <?php
                                $price = array( 'name'=> 'edit_price',
                                               'placeholder' =>'Enter Product Price',
                                               'value'=> set_value('edit_price',$best_seller->price),
                                               'class' => 'form-control'
                                               );
                                echo form_input($price);
                                ?>
                                  <span class="text text-danger">
                                       <?php echo form_error('edit_price')?>
                                     </span> 
                                </div>	
                                  <div class="form-group">
                                       <?php echo form_label('Description :', 'edit_description');?>
                                        <?php
                                          $description = array(
                                                        'name'        => 'edit_description',   
                                                        'placeholder' => 'Enter Product Description',
                                                        'value'=> set_value('edit_price',$best_seller->description),
                                                        'rows'        => '3',
                                                        'class'       => 'form-control'
                                                         
                                                      );

                                          echo form_textarea($description);
                                        ?>
			             <span class="text text-danger">
                                       <?php echo form_error('edit_description')?>
                                     </span>
				  </div>	

                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                     </form>
                    
                </div>
                <!-- /.col-lg-8 -->
               
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
    


    <!-- jQuery -->
    <script src="<?php echo base_url('admin/js/jquery-3.1.1.min.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('admin/vendor/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('admin/vendor/metisMenu/metisMenu.min.js');?>"></script>
    <script src="<?php echo base_url('admin/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('admin/js/dataTables.jqueryui.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('admin/dist/js/sb-admin-2.js');?>"></script>
	   <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url ('admin/admin.js');?>"></script>

</body>

</html>




