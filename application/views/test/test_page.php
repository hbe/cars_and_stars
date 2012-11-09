<h1>this is the test page for book <?php echo $book; ?></h1>
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
			<input type="radio" name="<?php echo $d-1 ?>" value="<?php echo $c ?>"><?php echo $option[$c-1] ?> 
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
<input type="submit" value="Submit">
</form>