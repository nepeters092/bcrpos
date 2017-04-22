{include file= './header.tpl'}
{include file= './nav.tpl'}
{include file= './footer.tpl'}
<div id="data" class="col-xs-9 col-md-10">
	<form action="insert.php" method="post">
		First Name: <input type="text" name="first" value="" /><br />
		Last Name: <input type="text" name="last" value="" /><br />
		Street Address: <input type="text" name="addr" value="" /><br />
		City: <input type="text" name="city" value="" /><br />
		State: <input type="text" name="state" value="" /><br />
		Zip: <input type="text" name="zip" value="" /><br />
		Email: <input type="email" name="email" value="" /><br />
		Phone: <input type="tel" name="phone" value="" /><br />
		<br />
		<input type="submit" name="submit" value="Add Record" />
	</form>
</div>
</div>
</div>



