<div class="content">
		<div class="title">
			<h3>Start a New Test</h3>
		</div>

			<div class="test-content">
				<p>Please select a Book to begin.</p>
			<form  method="post" action="/test">
			<?php 
			foreach($books as $list)
			{
				?>
				<label class="radio inline">
				<input type="radio" name="book" style="border:1px solid #000; width:50px;" id="optionsRadios1" value="<?php echo $list->book ?>" checked>
				<?php echo $list->book ?>
				</label>
				<?php
			}

			?>
			<br />
			<?php
			echo (isset($empty))? $empty . "<br />" : "";
			?>
			<br />

   			<button class="btn btn-primary pull-left" type="submit">Begin Test</button>

			</form>

			</div>
</div>