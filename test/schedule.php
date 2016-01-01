<?php
//Start the PHP session
session_start();
 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="World Affairs Conference">
		<title>Schedule - World Affairs Conference</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/base.css" />
		<style>
			.popover{
				color:black;
			}
			.keynote{
				background-color:#5E7794;
				text-align: center;
				font-weight: bold;
			}
			.plen{
				background-color:#5E7794;
				text-align: center;
				font-weight: bold;
			}
			.reg{
				background-color:#809C29;
				text-align: center;
				font-weight: bold;
			}
			.panel{
				background-color:#DC8944;
				text-align: center;
				font-weight: bold;
			}
			.lunch{
				background-color:#C61B26;
				text-align: center;
				font-weight: bold;
			}
			th{
				text-align: center;
			}
		</style>
	</head>

	<body style="position:relative;">
		<?php include_once("import_info.php") ?>
		<?php include_once("navbar.php") ?>

		<div class = "container">
			<h1 style="text-align: center;">Keynote Address Schedule</h1>
			<h6 style="text-align: center;">Click on a block to learn more</h6>
			<div class = "table-responsive">
				<table class = "table">
					<tr>
						<th></th>
						<th>COAT CHECK/WAIT</th>
						<th>ADDRESS</th>
						<th>Q&A</th>
					</tr>
					<tr>
						<td><b>Foyer</b></td>
						<td class="reg">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Coat Check" data-content='The Foyer will have a complimentary coat check service.' data-html="true">Coat Check</a>
						</td>
						<td></td>
						<td></td>
					</tr>
					<tr> 
						<td><b>Laidlaw Hall</b></td>
						<td class="reg">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Seating" data-content='Seating will begin in Laidlaw Hall.' data-html="true">Seating</a>
						</td>
						<td class="keynote">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Keynote Address" data-content='The <a href="keynote.php"><b>Keynote Address</b></a> will feature a prominent member of the community discussing current affairs, inside of Laidlaw Hall. It is open to the general public. ' data-html="true">Keynote Address</a>
						</td>
						<td class="keynote">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Question Period" data-content='After the <a href="keynote.php"><b>Keynote Address</b></a>, the speaker will take questions from the audience in Laidlaw Hall. ' data-html="true">Question Period</a>
						</td>
					</tr>
				</table>
			</div>
			</br>
			<h1 style="text-align: center;">Conference Day Schedule</h1>
			<h6 style="text-align: center;">Click on a block to learn more</h6>
			<div class = "table-responsive">
				<table class = "table">
					<tr>
						<th></th>
						<th>8:30-9:00</th>
						<th>9:00-10:15</th>
						<th>10:30-11:30</th>
						<th>11:35-12:35</th>
						<th>12:35-1:20</th>
						<th>1:20-2:20</th>
						<th>2:25-3:25</th>
					</tr>
					<tr>
						<td><b>CC3</b></td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 1" data-content='The first <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 2" data-content='The second <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 2</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 3" data-content='The third <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 3</a>
						</td>
						<td></td>
					</tr>
					<tr>
						<td><b>David Chu Theatre</b></td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 1" data-content='The first <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 2" data-content='The second <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 2</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 3" data-content='The third <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 3</a>
						</td>
						<td></td>
					</tr>
					<tr>
						<td><b>Foyer</b></td>
						<td class="reg">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Delegate/Faculty Registration" data-content='Registered Delegates and Faculty Members should drop by the Student Center to pick up their delegate packages and nametags.' data-html="true">Delegate/Faculty Reg.</a>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Laidlaw Hall</b></td>
						<td></td>
						<td class="panel">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Opening Panel: The Future of the Internet" data-content='The <a href="opening.php"><b>opening panel</b></a> in Laidlaw Hall features Ron Deibert and Graeme Bunton discussing the Future of the Internet. It has already revolutionized the world; what will it do next?' data-html="true">Opening Panel</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 1" data-content='The first <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 2" data-content='The second <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 2</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 3" data-content='The third <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 3</a>
						</td>
						<td class="panel">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Closing Panel: Sami Jo Small" data-content='The <a href="closing.php"><b>closing panel</b></a> in Laidlaw Hall features Olympic Gold Medalist Sami Jo Small, and a presentation that will inspire and engage delegates for an outstanding finish to the Conference.' data-html="true">Closing Panel</a>
						</td>
					</tr>
					<tr>
						<td><b>Lecture Theatre</b></td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 1" data-content='The first <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 2" data-content='The second <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 2</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 3" data-content='The third <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 3</a>
						</td>
						<td></td>
					</tr>
					<tr>
						<td><b>Lett Gym</b></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="lunch">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Delegate Lunch" data-content='Delegates will have a buffet-style lunch in the Lett Gym. A vegetarian option will be available.' data-html="true">Delegate Lunch</a>
						</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Library</b></td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 1" data-content='The first <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 2" data-content='The second <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 2</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 3" data-content='The third <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 3</a>
						</td>
						<td></td>
					</tr>
					<tr>
						<td><b>Old Gym</b></td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 1" data-content='The first <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 2" data-content='The second <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 2</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Plenary Session 3" data-content='The third <a href="plenaries.php"><b>plenary session</b></a> will be held here, featuring these people discussing these important issues.' data-html="true">Plenary Session 3</a>
						</td>
						<td></td>
					</tr>
					<tr>
						<td><b>Student Center</b></td>
						<td class="reg">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="UCC Registration" data-content='UCC students/WAC staff should drop by the Student Center to pick up their delegate packages and nametags.' data-html="true">UCC Delegate/Staff Reg.</a>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Upper Dining Hall</b></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="lunch">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Faculty Lunch" data-content='Faculty will have a buffet-style lunch in the Upper Dining Hall. A vegetarian option will be available.' data-html="true">Faculty Lunch</a>
						</td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>

			
		 	<script src="js/jquery.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/nav-collapse.js"></script>
			<script>
				$(function () {
					$('[data-toggle="popover"]').popover()
				})
			</script>
		</div>
		<?php include_once("footer.php") ?>
	</body>
</html>