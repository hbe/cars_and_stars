<div class="content">
		<div class="title">
			<h3>Test Result</h3>
		</div>

	<?php 

	$d=1;
	for($a=0; $a<$total_section_of_question; $a++)
	{
		for($b=1; $b<=$total_question_type; $b++)
		{ echo $d++ . ".";
			for($c=1; $c<=$total_option; $c++)
			{
				?>
				<input type="radio" name="<?php echo $b ?>" value="<?php echo $c ?>"><?php echo $option[$c-1] ?> 
				<?php
			}
			?>
			<br />
			<?php
		}
		?>
		<br />
		<br />
		<br />
		<?php
	}
	
	?>

</div>
