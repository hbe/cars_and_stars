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
						for($b=1; $b<=$total_question_type; $b++)
						{ echo $d++ . ".";
							for($c=1; $c<=$total_option; $c++)
							{
								?>
								<div style="border:1px solid #000">
								<label class="radio inline">
								<input type="radio" name="<?php echo $d-1 ?>" id="optionsRadios2" value="<?php echo $c ?>">
								<?php echo $option[$c-1] ?> 
								</label>
								</div>
								<?php
							}
							?>
							<br />
							<?php
						}
						?>
						<br /> 
						<?php
					}
					?>
					<button class="btn btn-primary pull-left" type="submit">Submit</button>
					</form>

			</div>

</div>