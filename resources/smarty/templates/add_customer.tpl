{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="col-xs-12">
		
			<div style="padding-top:10px" class="row">
				<div class="col-xs-6">
					<form id="addCustomer" method="post" action="#">
					<strong>Personal Information</strong><br />
					First Name<br />
					<input type="text" name="firstName" value='{$firstName}' /><br />
					Last Name<br />
					<input type="text" name="lastName" value='{$lastName}' /><br />
					Email Address<br />
					<input type="email" name="email" value='{$email}' /><br />
					Phone Number<br />
					<input type="tel" name="phone" value='{$phone}' /><br />
					Street Address<br />
					<input type="text" name="streetAddr" value='{$streetAddr}' /><br />
					City<br />
					<input type="text" name="city" value='{$city}' /><br />
					State <br />
					<select name="usState">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI" selected="selected">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select><br />
					Zip<br />
					<input type="text" name="zip" value="{$zip}" /><br />
				</div>
				
				<div class="col-xs-6">
					<strong>Photo Identification (select two):</strong><br />
					<input type="checkbox" name="photoId[]" value="DL" /> Driver's License<br />
					<input type="checkbox" name="photoId[]" value="MC" /> Military ID<br />
					<input type="checkbox" name="photoId[]" value="PP" /> Passport<br />
					<input type="checkbox" name="photoId[]" value="SI" /> Student ID<br />
					<input type="checkbox" name="photoId[]" value="CI" /> Company ID<br />
					<input type="checkbox" name="photoId[]" value="TC" /> Native Tribal Card<br />
					<br />
					<strong>Address Verification (select one):</strong><br />
					<input type="checkbox" name="addrVer[]" value="CB" /> Computer Generated Bill<br />
					<input type="checkbox" name="addrVer[]" value="ST" /> School Transcript<br />
					<input type="checkbox" name="addrVer[]" value="PS" /> Pay Stub<br />
					<input type="checkbox" name="addrVer[]" value="FM" /> First-Class Mail<br />
					<input type="checkbox" name="addrVer[]" value="CA" /> Change-of-Address Form<br />
					<br />
					<input type="submit" name="submitNewCustForm" value="Submit" />
					</form>
					<br />
					{$errors} {$success}
					
				</div>
				
				
			</div>
		
		</div>
		
	</div>

</div>