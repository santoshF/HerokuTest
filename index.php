<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="_/css/custom.css" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="_/js/myscript.js" ></script>
		<script type="text/javascript" src="_/js/respond.min.js" ></script>
		<title>New Web Project</title>
	</head>
	<body>
		<div id="fb-root"></div>
		<div class="loggedoff container">
			<div class="jumbotron">
				<p>
					Welcome, you're not logged in. To see awesome features, please
					<button class="btn btn-default" onclick="goLogin()">
						Log in
					</button>
					<img src="images/technovation.jpg" alt="welcome" class="img-responsive"  >

				</p>
			</div>
		</div>

		<div class="loggedin container">
			<header class="row jumbotron ">

				<div class="col-lg-6 col-sm-5">
					<div id="images"></div>
					<p class="caption" id="welcome"></p>
				</div>

				<div class="col-lg-6 col-sm-7">
					Welcome to Technovation Facebook app
				</div>

			</header>

			<div class="row">
				<ul class="nav nav-tabs nav-justified">
					<li >
						<a href="#event"  data-toggle="tab" ><span class="glyphicon glyphicon-bell"> </span> Event </a>
					</li>
					<li class="active">
						<a href="#schedule" data-toggle="tab"><span class="glyphicon glyphicon-calendar"> </span> Schedule</a>
					</li>
					<li>
						<a href="#photos" data-toggle="tab"><span class="glyphicon glyphicon-flash"> </span> Photos </a>
					</li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane fade" id="event">
						<h4 class="title">The list of Events </h4>
						<!-- Accordion Panel-->
						<div class="panel-group" id="accordion">

							<!--Panel 1 -->
							<div class="panel panel-default">

								<div class="panel-heading">
									<h4 class="panel-title"><a href="#t1" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"> <!--Add Heading --> Quiz-A-Thon </a></h4>
								</div>

								<div id="t1" class="panel-collapse collapse in">
									<div class="panel-body">
										<!--Add content -->
										This is a technical quiz competition.
										<div class="fb-like" data-width="200"></div>
										<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
										<fb:like href="https://developers.facebook.com/docs/plugins/" layout="standard" action="like" show_faces="true" share="true"></fb:like>

										<!--div class="fb-comments" data-href="https://fernslab.in/tabsite/" data-numposts="5" data-colorscheme="light"></div-->
									</div>

								</div>
							</div>
							<!--End of Panel 1 -->

							<!--Panel 2 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#t2" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"> <!--Add Heading --> Poster Wall </a></h4>
								</div>

								<div id="t2" class="panel-collapse collapse">
									<div class="panel-body">
										<!--Add content -->
										Make a poster based on the given theme.
									</div>

								</div>
							</div>
							<!--End of Panel 2 -->

							<!--Panel 3 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#t3" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"> <!--Add Heading --> Code C </a></h4>
								</div>

								<div id="t3" class="panel-collapse collapse">
									<div class="panel-body">
										<!--Add content -->
										It is a programming contest in C/C++/JAVA.
									</div>

								</div>
							</div>
							<!--End of Panel 3 -->

							<!--Panel 4 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#t4" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"> <!--Add Heading --> Assemble It </a></h4>
								</div>

								<div id="t4" class="panel-collapse collapse">
									<div class="panel-body">
										<!--Add content -->
										Assemble a CPU as fast as you can.

									</div>

								</div>
							</div>
							<!--End of Panel 4 -->

							<!--Panel 5 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#t5" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"> <!--Add Heading --> Junkyard </a></h4>
								</div>

								<div id="t5" class="panel-collapse collapse">
									<div class="panel-body">
										<!--Add content -->
										Creating an art work based on a given theme

									</div>

								</div>
							</div>
							<!--End of Panel 5 -->

							<!--Panel 6 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#t6" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"> <!--Add Heading --> Rubix Cubix </a></h4>
								</div>

								<div id="t6" class="panel-collapse collapse">
									<div class="panel-body">
										<!--Add content -->
										Solve the rubik's cube.
									</div>

								</div>
							</div>
							<!--End of Panel 6 -->

							<!--Panel 7 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#t7" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"> <!--Add Heading --> Web World </a></h4>
								</div>

								<div id="t7" class="panel-collapse collapse">
									<div class="panel-body">
										<!--Add content -->
										Design a website for the given theme.
									</div>

								</div>
							</div>
							<!--End of Panel 6 -->

							<!--Panel 6 -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#t8" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"> <!--Add Heading --> Tech Talk</a></h4>
								</div>

								<div id="t8" class="panel-collapse collapse">
									<div class="panel-body">
										<!--Add content -->
										Companies like IBM Gives topics for Presentation
									</div>

								</div>
							</div>
							<!--End of Panel 6 -->

						</div><!--End of Accordion -->

					</div>
					<div class="tab-pane fade active in"  id="schedule">
						<div class="table-responsive">
							<table class="table  table-bordered table-hover table-striped condensed">
								<thead>
									<tr>
										<th> 11th January </th>
									</tr>
									<tr>
										<th class="col-sm-2"> Time </th>
										<th class="col-sm-5"> Event </th>
										<th class="col-sm-5"> Venue* </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td >08:00 AM  -  05:00 PM </td>
										<td>Registration </td>
										<td>ISSC & CMS Departments </td>
									</tr>
									<tr>
										<td>09:00 AM  - 10:00 AM</td>
										<td>Code C (Round 1) </td>
										<td>CMS Building Classroom, Near University Press, Pune University</td>
									</tr>
									<tr>
										<td>10:15 AM  – 11:15 AM </td>
										<td><!--Add Data --> Quiz-A-Thon (Round 1) </td>
										<td><!--Add Data --> CMS Building Classroom, Near University Press, Pune University </td>
									</tr>
									<tr class="success">
										<td><!--Add Date Data --> 11:30 AM – 12:15 PM </td>
										<td><!--Add Data --> Seminar by Mr. Lux Rao,CTO,HP </td>
										<td><!--Add Data --> CMS Building Classroom, Near University Press, Pune University </td>
									</tr>
									<tr class="success">
										<td><!--Add Date Data --> 12:30 AM – 1:00 PM </td>
										<td><!--Add Data --> Seminar by Mr. Bhavesh Rawal, Harbinger on “Performance Enggineering with respect to web applications “ </td>
										<td><!--Add Data --> CMS Building Classroom, Near University Press, Pune University </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 2:00 PM – 4:00 PM </td>
										<td><!--Add Data --> Assemble It </td>
										<td><!--Add Data --> ISSC Department </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 2:00 PM – 4:00 PM </td>
										<td><!--Add Data --> Rubix Cubix </td>
										<td><!--Add Data --> ISSC Department </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 3:00 PM  – 4:00 PM </td>
										<td><!--Add Data --> Poster Wall </td>
										<td><!--Add Data --> CMS Department </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 3:30 PM – 5:00 PM </td>
										<td><!--Add Data --> Web world </td>
										<td><!--Add Data --> CMS Computer Lab </td>
									</tr>

								</tbody>

							</table>

						</div>

						<div class="table-responsive">
							<table class="table  table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th> 12th January </th>
									</tr>
									<tr>
										<th class="col-sm-2"> Time </th>
										<th class="col-sm-5"> Event </th>
										<th class="col-sm-5"> Venue* </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td ><!--Add Date Data --> 8:00 AM – 9:00 AM </td>
										<td><!--Add Data --> Registration </td>
										<td><!--Add Data --> ISSC & CMS Departments </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 9:00 AM  – 10:30 AM </td>
										<td><!--Add Data --> Junk Yard </td>
										<td><!--Add Data --> ISSC Department </td>
									</tr>
									<tr class="success">
										<td><!--Add Date Data --> 10:30 AM – 12:00 PM </td>
										<td><!--Add Data --> Seminars by Mr. Mahesh Paradkar, IBM & Mr. Atul Gore, IBM </td>
										<td><!--Add Data --> Sant Namdeo Hall, Pune University </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 12:15 PM – 01:15 PM </td>
										<td><!--Add Data --> Tech Talk </td>
										<td><!--Add Data --> CMS Department </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 2:00 PM – 3:30 PM </td>
										<td><!--Add Data --> Code C (Round 2) </td>
										<td><!--Add Data --> ISSC Computer Lab </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 03:30 PM – 05:00 PM </td>
										<td><!--Add Data --> Quiz-A-Thon ( Round 2) </td>
										<td><!--Add Data --> Sant Namdeo Hall, Pune University </td>
									</tr>
									<tr>
										<td><!--Add Date Data --> 05:00 PM – 6:00 PM </td>
										<td><!--Add Data --> Prize Distribution </td>
										<td><!--Add Data --> Sant Namdeo Hall, Pune University </td>
									</tr>
								</tbody>
							</table>

						</div>
						<div>
							<span class="label label-danger">* Venue may change</span>
						</div>

					</div>

				
				<div  class="tab-pane fade" id="photos">

					<div id="photoSet" class="col-lg-4"></div>

				</div>
			</div>
		</div>
		<footer>
			<small>Designed by Santosh Fernandes.</small>
			<button class="btn btn-primary" onclick="shareUI()">
				Share
			</button>
		</footer>
		</div><!--End of Container -->

		<!-- Latest compiled and minified JavaScript -->
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<script>
			$(function() {
				$('.nav-tabs a:second').tab('show');
			});
		</script>
	</body>
</html>
