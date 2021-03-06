<?php
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-Reporting System</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets'; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'assets'; ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets'; ?>/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url().'assets'; ?>/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'assets'; ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="<?php echo base_url(); ?>home">E-Reporting</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
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
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url(); ?>home/profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>home/setting"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <li>
                            <a href="<?php echo base_url(); ?>home"><i class="fa fa-dashboard fa-fw"></i> Ticket(s) Inbox</a>
                        </li>
						<li>
                            <a href="<?php echo base_url(); ?>home/server_status"><i class="fa fa-dashboard fa-fw"></i> Server Status</a>
                        </li>
                        <li>
                            <!-- <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a> -->
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li> 
                        <li>
                            <a href="<?php //echo base_url(); ?>home/crticket"><i class="fa fa-edit fa-fw"></i> Change</a>
                        </li> -->
                        
                        <li>
                            <!-- <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a> -->
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- modified by eri sunarko : -->
			<?php
				//print_r($dataTicket);
				$ticketId 	= $dataTicket[0]['ticket_id'];
				$serviceBy 	= $dataTicket[0]['service_by'];
				$progress 	= $dataTicket[0]['progress'];
				$status		= $dataTicket[0]['status'];
				$dueDate	= $dataTicket[0]['due_date'];
			?>
			<form method="POST" action="<?php echo base_url() . 'home/upd_ticket/' . $ticketId; ?>">
            <div class="table-responsive">
                <table>
                    <tr>
						<td>Ticket ID</td>
						<td>&nbsp&nbsp&nbsp</td>
						<td> : </td>
						<td><input type="text" name="ticket_id" value="<?php echo $ticketId; ?>" disabled /></td>
                    </tr>
					<tr>
						<td>Ticket Title</td>
						<td>&nbsp&nbsp&nbsp</td>
						<td> : </td>
						<td><input type="text" name="ticket_title" value="<?php echo $dataTicket[0]['title']; ?>" disabled /></td>
                    </tr>
					<tr>
						<td>Ticket Description</td>
						<td>&nbsp&nbsp&nbsp</td>
						<td> : </td>
						<td><textarea name="ticket_description" disabled><?php echo $dataTicket[0]['description']; ?></textarea></td>
                    </tr>
					<tr>
						<td>Service by</td>
						<td>&nbsp&nbsp&nbsp</td>
						<td> : </td>
						<td>
							<select name="service_by">
								<option value="not yet processed">not yet processed</option>
								<option value="IT support-1" <?php if ($serviceBy == 'IT support-1') { echo 'selected'; } ?> >IT support-1</option>
								<option value="IT support-2" <?php if ($serviceBy == 'IT support-2') { echo 'selected'; } ?> >IT support-2</option>
							</select>
						</td>
                    </tr>
					<tr>
						<td>Progress</td>
						<td>&nbsp&nbsp&nbsp</td>
						<td> : </td>
						<td>
							<select name="progress">
								<option value="not yet processed">not yet processed</option>
								<option value="waiting for the queue" <?php if ($progress == 'waiting for the queue') { echo 'selected'; } ?> >waiting for the queue</option>
								<option value="on process" <?php if ($progress == 'on process') { echo 'selected'; } ?> >on process</option>
								<option value="done" <?php if ($progress == 'done') { echo 'selected'; } ?> >done</option>
							</select>
						</td>
                    </tr>
					<tr>
						<td>Status</td>
						<td>&nbsp&nbsp&nbsp</td>
						<td> : </td>
						<td>
							<select name="status">
								<option value="open" >open</option>
								<option value="closed" <?php if ($progress == 'closed') { echo 'selected'; } ?> >closed</option>
							</select>
						</td>
                    </tr>
					<tr>
						<td>Date created</td>
						<td>&nbsp&nbsp&nbsp</td>
						<td> : </td>
						<td><input type="text" name="datecreate" value="<?php echo $dataTicket[0]['date_created']; ?>" disabled /></td>
                    </tr>
					<tr>
						<td>Duedate</td>
						<td>&nbsp&nbsp&nbsp</td>
						<td> : </td>
						<td><input type="date" name="duedate" /></td>
                    </tr>
					<tr>
						<td></td>
						<td colspan="2"><input type="submit" /></td>
						<td></td>
						<td></td>
                    </tr>
                </table>
            </div>
			</form>
        </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets'; ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets'; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'assets'; ?>/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url().'assets'; ?>/vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url().'assets'; ?>/vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url().'assets'; ?>/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'assets'; ?>/dist/js/sb-admin-2.js"></script>
	
	<script>
		$(document).ready(function(){
			// ~ make sure custom js loaded properly :
			console.log('Custom Js loaded!');
			
			// ~ trigger on click table row :
			$('.clickable_row').on('click', function(){
				window.location = '<?php echo base_url(); ?>' + 'home/take_action/id';
			});
			
			// ~ 
		});
	</script>
	
</body>

</html>

