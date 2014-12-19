
<div class="container">
	<div class="grid fluid">
		<div class="span4">
			<fieldset>
				<legend>Form input</legend>
				<form method="get">
					NIM : <input type="text" name="nim" id="nim" value="<?php echo $_GET['npm']?>"/><div id="error"></div><br/>
					Nama : <input type="text" name="email" required value="<?php echo $_GET['nama']?>"/>
					<textarea cols=30 rows=3>Ini adalah value textarea</textarea><br/>
					<select>
						<option value=1>Option</option>
						<option value=2>Option</option>
						<option value=3>Option</option>
					</select><br/>
					<input type="submit" value="OK" />
				</form>
			</fieldset>
		</div>
	</div>
</div>