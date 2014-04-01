<?PHP
include("dir.php");
?>

<div id="content" class="subPage">
	<div class="container">
		<div class="row">
			<div class="col col-7">
				<h1>Slips</h1>
				<div id="slideArea">
					<div class="subslide" id="mainSlide" title="Wet">
						<img src="<?PHP echo $dir ?>images/subpages/slips.png" >
					</div>
					<div class="subslide" id="drySlide" title="Dry">
						<img src="<?PHP echo $dir ?>images/subpages/dry.png" >
					</div>
				</div>
				<div class="tb2" >
					<div id="details" class="top">
						<div id="mainDetails" class="detail" >
							<h3>Slip Details</h3>
							<ul>
								<li>Ample Parking</li>
								<li>30 &amp; 50 Amp Power</li>
								<li>Secure Gates with Card Key Access</li>
								<li>Dock Carts, Laundry Room, ADA Ramps</li>
								<li>Free Haul-Out and Launch at the BoatYard after One Year Tenancy</li>
							</ul>
							<table class="tb3">
								<tr>
									<td><strong>Length</strong></td>
									<td><strong>Rate</strong></td>
									<td><strong>Monthly Rent</strong></td>
								</tr>
								<tr>
									<td>20-24 feet</td>
									<td>$    11.50</td>
									<td>$    180</td>
								</tr>
								<tr>
									<td>25-29 feet</td>
									<td>$    12.50</td>
									<td>$    250</td>
								</tr>
								<tr>
									<td>30-34 feet</td>
									<td>$    15.00</td>
									<td>$    330</td>
								</tr>
								<tr>
									<td>35-39 feet</td>
									<td>$    17.50</td>
									<td>$    420</td>
								</tr>
								<tr>
									<td>40-44 feet</td>
									<td>$    19.00</td>
									<td>$    520</td>
								</tr>
								<tr>
									<td>End Ties (Up to 80 feet)</td>
									<td>$    23.00</td>
									<td>1,020</td>
								</tr>
								<tr>
									<td colspan='3'>65-85 end ties:  Call for pricing and availability</td>
								</tr>
								<tr>
									<td colspan='3'>*Rent based upon the larger of the slip or boat length including all extensions, swim steps, bowsprits, etc.</td>

								</table>
							</div>


							<div id="dryDetails" class="detail" >
								<h3>Dry Slip Details</h3>
								<table class="tb3">
									<tr>
										<td><strong>Dry Storage/Self Storage</strong></td>
										<td><strong>Monthly Prices</strong></td>
									</tr>
									<tr>
										<td>Trailer Only</td>
										<td>$50</td>
									</tr>
									<tr>
										<td>Up to 17ft</td>
										<td>$70</td>
									</tr>
									<tr>
										<td>18ft to 24ft</td>
										<td>$75</td>
									</tr>
									<tr>
										<td>25ft to 27ft</td>
										<td>$90</td>
									</tr>
									<tr>
										<td>28ft to 35ft</td>
										<td>$115</td>
									</tr>
									<tr>
										<td colspan='2'>35ft+ Call for Quote</td>
										<td>&nbsp;</td>
									</tr>
								</table>
								<table class="tb3">
									<tr>
										<td><strong>Dry Storage with Hoist Services*</strong></td>
										<td><strong>Monthly Prices</strong></td>
									</tr>
									<tr>
										<td>Up to 17ft</td>
										<td>$100</td>
									</tr>
									<tr>
										<td>18ft to 24ft</td>
										<td>$105</td>
									</tr>
									<tr>
										<td>25ft to 27ft</td>
										<td>$120</td>
									</tr>
									<tr>
										<td>28ft to 35ft</td>
										<td>$145</td>
									</tr>
									<tr>
										<td colspan='2'>35ft+ Call for Quote</td>
									</tr>
								</table>
								<p>*Hoist Services limited to 5 haul-outs per month after which $15 for each additional haul-out.  Boats must be picked up within 30 minutes of launching.  There is a return to storage fee of $25 for no-shows.</p>
							</div>

							<div class="bottom">
								<p>For more information or to schedule your haul-out appointment, please contact Scott Simmer at <span>(310) 823-8964</span> or complete the on-line scheduling request under the Resources Section of this website and someone from the BoatYard will be in touch with you shortly.</p>
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<div class="col col-5">
					<br clear="all">
					<div class="subNav" id="slipsContact">
						<form id="" class="">
							<input type="hidden" value="Request for Slip Info" name="type">
							<legend>Request Slip Info</legend>
							<fieldset>
								<legend>Your Name:</legend>
								<input name="Name" required/>
							</fieldset>
							<fieldset>
								<legend>Email:</legend>
								<input type="email" name="Email" required />
							</fieldset>
							<fieldset>
								<legend>Phone:</legend>
								<input type="tel" name="phone" />
							</fieldset>
							<fieldset>
								<legend>Contact Preference:</legend>
								<input type="radio" name="contact" value="phone"> Phone
								<input type="radio" name="contact" value="email"> Email
							</fieldset>
							<fieldset>
								<legend>Boat Name:</legend>
								<input name="Boatname" required/>
							</fieldset>
							<fieldset>
								<legend>Length:</legend>
								<input name="Length" required />
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
</div>
<?PHP
		//$sub = $_GET['sub'];
switch ($_GET['sub']) {
	case 'welcome':
	$sub = "main";
	break;

	case 'dry':
	$sub = "dry";
	break;

	default:
	$sub = "main";
	break;
}
echo("
	<script>
	$('document').ready(function() {
		submitForm();
		startNav();
		loadSub('$sub');
		console.log('slips.php > Document > ready');
			//keepInView('#slipsContact');
	});
</script>");
?>
