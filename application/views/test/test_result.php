<div class="content">
		<div class="title">
			<h3>Test Result</h3>
		</div>

		Correct answer ---- Student Answer
		<br>
		<br>
	<?php 

	$d=1;

	for($a=0; $a<$total_section_of_question; $a++)
	{
		for($b=1; $b<=$total_question_type; $b++)
		{ 
			echo $d . ".  ";
			
			echo $answer[$d - 1] . "----" . $student_answers[$d - 1];

			$d++;
			echo "<br>";	
		}
		?>
		<br />
		<br />
		<br />
		<?php
	}
	
	?>

</div>
