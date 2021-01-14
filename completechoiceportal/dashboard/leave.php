<?php
	include("../inc/header.php");

    include('../phpclasses/pagination.php');

    $limit = 10;
	    
	//get number of rows
	$queryNum = $db_connect->query("SELECT COUNT(*) as postNum FROM sharp_emp WHERE status = 'former'");
	$resultNum = $queryNum->fetch_assoc();
	$rowCount = $resultNum['postNum'];
										    
	//initialize pagination class
	$pagConfig = array(
		'totalRows' => $rowCount,
		'perPage' => $limit,
		'link_func' => 'pastsearchFilter'
	);
	$pagination =  new Pagination($pagConfig);
										    
	//get rows

?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
			</div>			
			<p>Complete Choice Leave</p>
			</div>
		<ul class="nav">
		<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>Home</a></li>
			<li class="nav-item current"><a href="../dashboard/roster.php"><span class="nav-icon"><i class="fa fa-users"></i></span>Apply For Leave</a></li>
			
			<li class="nav-item"><a href="../dashboard/roster.php"><span class="nav-icon"><i class="fa fa-times"></i></span>Roster</a></li>
			<?php if($usertype == "Admin"){ ?>
				<li class="nav-item"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Employee</a></li>
				<li class="nav-item"><a href="../dashboard/add_user.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Add User</a></li>
			<?php		} ?>

		</ul>

	</section>
	<section class="contentSection right clearfix">
		<div class="container">
			<div class="wrapper employee_list clearfix">
				<div class="section_title">Leave Request</div>
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfWWPhs7riHTo8HDZIB0asbsfYSGl-cH43agdaVOXbhWex3tA/viewform?embedded=true" width="640" height="1708" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
	
	</section>
	

<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>