<div class="content">
		<div class="title">
			<h3>Test Page for <?php echo $book; ?></h3>
		</div>

			<div class="test-content">
				<p>Please select the choices below.</p>
					<form method="post" action="/test-result">
					<input type="hidden" name="book" value="<?php echo $book ?>"/>
					<?php 
					$d=1;
					for($a=0; $a<$total_section_of_question; $a++)
					{
					?>
						<div class="sectionGrid"> <!-- START OF BOX CREATION -->
					<?php
						for($b=1; $b<=$total_question_type; $b++)
				
							{ echo "<div class='numChoiceWidth'>" . $d++ . ".</div>";

							for($c=1; $c<=$total_option; $c++)

							{
					?>
								<label class="radio radioChoiceWidth inline">
								<input type="radio" name="<?php echo $d-1 ?>" id="optionsRadios2" value="<?php echo $c ?>">
								<?php echo $option[$c-1] ?> 
								</label>

							<?php
							}
							?>
							<br />
							<?php
						}
						?>
						<br />
						</div> <!-- END OF BOX CREATION-->
						<?php
					}
					?>
					<br clear="all" />
					<button class="btn btn-primary pull-left" type="submit">Submit</button>
					</form>

			</div>

</div>