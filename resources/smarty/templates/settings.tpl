{include file= './nav.tpl'}
{include file= './footer.tpl'}
	
	<div class="row">
		
		<div id="main-body" class="settings-body col-xs-12">
			
			<div class="row">
			
				<div class="col-xs-6">
					<h4>Account Settings:</h4>
					<form id="account-settings" action="#" method="post">
					{foreach from=$data item=item key=key}
						Last Name:<br /> <input type="text" name="lastName" value='{$item.last_name}'> <br />
						First name:<br /> <input type="text" name="firstName" value='{$item.first_name}'> <br />
						Email:<br /> <input type="text" name="email" value='{$item.email}'> <br />
						<input class="submit-button" type="submit" name="editAccount" value="Submit" />
					{/foreach}
					</form>
					{$note}
				</div>
				
				<div class="col-xs-6">
					<h4>Security Settings:</h4>
					Change Password: <br />
					<form method="post" action="">
						<input type="password" name="oldpass1" placeholder="Current Password" /><br />
						<input type="password" name="oldpass2" placeholder="Confirm Password" /><br />
						<input type="password" name="newpass1" placeholder="New Password" /><br />
						<input type="password" name="newpass2" placeholder="Confirm New Password" /><br />
						<input class="submit-button" type="submit" name="changePass" value="Submit" />
					</form><br />
					{$errors}{$msg} <br /><br />
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
</div>
