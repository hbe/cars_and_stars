<script src="/styles/js/jquery.js" type="text/JavaScript"></script>
<div class="content">
		<div class="title">
			<h3>Start a New Test</h3>
		</div>

			<div class="test-content">
				<p>Please select a Book to begin.</p>
			<form  method="post" action="/test">

			<br />

			<table>
			<tr>
			<td class="testform">
				Enter the Student ID:
			</td>
			<td class="testform-input">
				<input type="text" placeholder="Student ID" name="student-id" />
			</td>
			</tr>
			</table>

			<br />

			<div id="pick-group">

				<table>
				<tr>
				<td class="testform">
					Pick your test group: 
				</td>
				<td class="testform-input">
					<select class="radioAlign">
						<option>Choose here</option>
					</select>
				</td>
				<td class="testform-inputBtn">
					<button type="button" class="btn" onclick="showCreateNewTestGroup()">Create a New Test Group</button>
				</td>
				</tr>
				</table>

			</div> 

			<div id="new-group">
				<button type="button" class="btn" onclick="showPickTestGroup()">Choose Existing Test Group</button> 
			</div>

			<br />

			<div id="radio">
				<?php 
				foreach($books as $list)
				{
					?>
					<label class="radio inline">
					<input type="radio" name="book" id="optionsRadios1" value="<?php echo $list->book ?>" checked>
					<?php echo $list->book ?>
					</label>
					<?php
				}
				?>
			</div>
			
			<br />
			<?php
			echo (isset($empty))? $empty . "<br />" : "";
			?>
			
			<br />
			<input type="hidden" id="createOrPick" ></input>

   			<button class="btn btn-primary pull-left" type="submit">Begin Test</button>

			</form>

			</div>

</div>

<script type="text/JavaScript">
	$('#radio').hide();
	$('#new-group').hide();
	$("#createOrPick").val("0");
</script>

<script type"text/JavaScript">

	function showCreateNewTestGroup()
	{
		$('#radio').show('slow');
		$('#pick-group').hide();
		$('#new-group').show('slow');
		$("#createOrPick").val("1");
	}

	function showPickTestGroup()
	{
		$('#radio').hide();	
		$('#pick-group').show('slow');
		$('#new-group').hide();
		$("#createOrPick").val("0");
	}

</script>