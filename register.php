<head>
	<script src="scripts/jquery-ui-1.8.17.custom/js/jquery-1.7.1.min.js"></script>
	<script src="scripts/jquery-ui-1.8.17.custom/js/jquery-ui-1.8.17.custom.min.js"></script>
	<script src="scripts/jquery.validationEngine.js"></script>
	<script src="scripts/jquery.validationEngine-en.js"></script>
	
	<script src="scripts/global.js"></script>
	<script src="scripts/register.js"></script>
	
	<link rel="stylesheet" href="css/index.css" />
	<link rel="stylesheet" href="css/validationEngine.jquery.css" />
	
</head>


<div id="reg_tab" class="tab">
	<div class="lefty" id="sorryMsg" style="display:none">
		<b>Thank you for your interest in The Royal Race.</b> <p/>
		
		We are preparing for tomorrows race and 
		no longer accepting ONLINE registration at this time.  If you would 
		like to participate please be at Barnes Park at 7:45am tomorrow 
		morning with check or cash to register and receive your race bib 
		number.  Thank you so much! <i>~The Royal Race Team</i>
	</div>
	<div class="lefty" id="regContent">
		<div id="joinUs">
			<b>Want to join us?</b><p />
			Simply click the "Register Now" link below to let us know you're coming.  
			After that, complete payment by clicking the "Checkout" button. Upon receipt of payment, your registration will be complete.
			<p/>
			Can't make it in person?  Register as a <span class="important">"Spirit Runner"</span> and your donation will go to JDRF.  We will also email you when you can come pick up your shirt!
			<p />
			<input type="button" value="Register Now" id="regBtn"></input>
		</div>
		
		
		<form id="regForm">
			<table>
				<tr>
					<td><label for="firstName">First Name</label></td>
					<td><input type="text" name="firstName" id="firstName" class="validate[required] text ui-widget-content ui-corner-all" /></td>
				</tr>
				<tr>
					<td><label for="lastName">Last Name</label></td>
					<td><input type="text" name="lastName" id="lastName" class="validate[required] text ui-widget-content ui-corner-all" /></td>
				</tr>
				<tr>
					<td><label for="race">Race</label></td>
					<td>
						<select name="race" id="race" class="ui-widget-content ui-corner-all">
							 <option value="5k">$25.00 - 5K</option>
							 <option value="1k">$15.00 - Kid K (1K)</option>
							 <option value="Spirit Runner">Spirit Runner</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="rank">Rank</label></td>
					<td>
						<select name="rank" id="rank" class="ui-widget-content ui-corner-all">
							<option value="Under 12">Under 12</option>
							 <option value="12-19">Age 12-19</option>
							 <option value="20-29">Age 20-29</option>
							 <option value="30-39">Age 30-39</option>
							 <option value="40-49">Age 40-49</option>
							 <option value="50-65">Age 50-65</option>
							 <option value="Over 65">Over 65</option>
							 <option value="Wheelchair">Wheelchair</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="shirtSize">Shirt Size</label></td>
					<td>
						<select name="shirtSize" id="shirtSize" class="ui-widget-content ui-corner-all">
							 <option value="Child Small">Child Small</option>
							 <option value="Child Medium">Child Medium</option>
							 <option value="Child Large">Child Large</option>
							 <option value="X-Small">X-Small</option>
							 <option value="Small">Small</option>
							 <option value="Medium">Medium</option>
							 <option value="Large">Large</option>
							 <option value="X-Large">X-Large</option>
							 <option value="XX-Large">XX-Large</option>
							 <option value="XXX-Large">XXX-Large</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="email">Email</label></td>
					<td><input type="text" name="email" id="email" value="" class="validate[required, funcCall[validateEmail] text ui-widget-content ui-corner-all" /></td>
				</tr>
			</table>
		</form>
		<p/>
		<span class="important" id="payUs" style="display:none">
			We show you've already registered and simply need to pay by selecting an option below.
		</span>
		<p/>
		<div id="alreadyRegisteredTxt">
			Have you already filled out the registration form but still need to submit your payment?  Please click a button below to begin the payment process.	
		</div>
		<div id="registrationSuccess">
			Thanks <span id="thanksName"></span>! You're almost done!<br/>
			Simply click the a button below and complete the payment process to finalize your registration.
		</div>
		<p/>
			<div id="paymentTypeButtons">
				<input type="button" value="Pay with Google Checkout" id="gCheckoutBtn"/>
				<input type="button" value="Pay with PayPal" id="payPalBtn"/>
			</div>
			<form action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/339210514174784" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm" target="_top" style="display:none">
			    <table class="gCheckout">
			        <tr>
			            <td align="right" width="1%">
			                <select name="item_selection_1" class="text ui-widget-content ui-corner-all">
			                    <option value="1">$25.00 - The Royal Race - 5K</option>
			                    <option value="2">$15.00 - The Royal Race - Kid K (1K)</option>
			                </select>
			                <input name="item_option_name_1" type="hidden" value="The Royal Race - 5k"/>
			                <input name="item_option_price_1" type="hidden" value="25.0"/>
			                <input name="item_option_description_1" type="hidden" value="Adult 5k Race."/>
			                <input name="item_option_quantity_1" type="hidden" value="1"/>
			                <input name="item_option_currency_1" type="hidden" value="USD"/>
			                <input name="item_option_name_2" type="hidden" value="The Royal Race - Kids k (1k)"/>
			                <input name="item_option_price_2" type="hidden" value="15.0"/>
			                <input name="item_option_description_2" type="hidden" value="Children's 1K Race"/>
			                <input name="item_option_quantity_2" type="hidden" value="1"/>
			                <input name="item_option_currency_2" type="hidden" value="USD"/>
			            </td>
			            <td align="left" width="1%">
			                <input alt="" src="https://checkout.google.com/buttons/buy.gif?merchant_id=339210514174784&amp;w=117&amp;h=48&amp;style=trans&amp;variant=text&amp;loc=en_US" type="image"/>
			            </td>
			        </tr>
			    </table>
			</form>
		<p/>
		<form id="payPalForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="display:none">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="JEVGPX6JQR9YE">
			<table>
				<tr>
					<td><input type="hidden" name="on0" value="The Royal Race">The Royal Race</td>
				</tr>
				<tr>
					<td>
						<select name="os0" class="text ui-widget-content ui-corner-all">
							<option value="The Royal Race - 5K">The Royal Race - 5K$25.00 USD</option>
							<option value="The Royal Race - Kid K (1K)">The Royal Race - Kid K (1K)$15.00 USD</option>
						</select>
					</td>
					<td>
						<input type="hidden" name="currency_code" value="USD">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="righty">
		<img src="images/register.jpg" class="tabImage"/>
	</div>
</div>