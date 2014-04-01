<?PHP
include("dir.php");
?>

<div id="content" class="subPage">
	<div class="container">
		<div class="row">
			<div class="col col-7">
				<h1>Employment</h1>
				<div id="slideArea">
					<div class="subslide" id="mainSlide">
						<img src="<?PHP $dir ?>images/subpages/employment.png" >
						<div class="tb2" >
							<div id="details" class="top">
								<div id="mainDetails" class="detail" >
									<h3>What We Expect From Our Employees</h3>
									<p>The BoatYard is currently looking for experienced shipwrights, painters, and mechanics to join our team.   We place a high value on:</p>
									<ul>
										<li>Honestly</li>
										<li>Reliability</li>
										<li>Loyalty</li>
										<li>Team Work</li>
										<li>Experience</li>
										<li>Reputation</li>
										<li>Perseverance</li>
										<li>Strong Work Ethic</li>
									</ul>
									<p>Please contact:</p>
									<p><?PHP echo $vals['general_manager']['name'] ?>, General Manager:  <span>(310) 823-8964</span> </p>
									<p>or email a resume along with references to:  <a href='mainto:<?PHP echo $vals['general_manager']['email'] ?>'><?PHP echo $vals['general_manager']['email'] ?></a></p>

								</div>
							</div>
						</div>

					</div>
					

					<div class="bottom">
						For more information or to call for availability, please contact Paul Bick at <span>(805) 985-6269</span>.
					</div>

				</div>

			</div>
			<div class="col col-5">
				<br clear="all">
				<div class="subNav" id="slipsContact">
					<form id="" class="">
						<input type="hidden" value="Request for Employment Information" name="type">
						<legend>Apply Now</legend>
						<fieldset>
							<legend>Your Name:</legend>
							<input name="Name" required />
						</fieldset>
						<fieldset>
							<legend>Email:</legend>
							<input name="Email" required />
						</fieldset>
						<fieldset>
							<legend>Position Interested In:</legend>
							<select name="Position" required>
								<option>--- Choose one ---</option>
								<option>Painter</option>
								<option>Shipwright</option>
								<option>Senior Shipwright</option>
								<option>Mechanic</option>
								<option>Electrician</option>
								<option>Administrative</option>
								<option>Crane Operator</option>
								<option>Janitorial</option>
								<option>Other</option>
							</select>
						</fieldset>
						<fieldset class='wide'>
							<legend>Comments:</legend>
							<textarea name="Comments"></textarea>
						</fieldset>
						<br/>
						<fieldset>
							<input type="submit" />
						</fieldset>


					</form>
				</div>
				<u><br clear="all">
				</u>
			</div>
		</div>
	</div>
</div>
<br>
<?PHP
$sub = $_GET['sub'];
switch ($sub ) {
	case 'welcome':

	break;

	default:
	echo("

		<script>
		$('document').ready(function() {
			submitForm();
			startNav();
			loadSub('main');
		});
	</script>");
	break;
}
?>