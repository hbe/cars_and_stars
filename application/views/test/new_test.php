<form  method="post" action="/test">
<?php 

foreach($books as $list)
{
	?>
	<input type="radio" name="book" value="<?php echo $list->book ?>"><?php echo $list->book ?><br>
	<?php
}

?>
<br />
<?php
echo (isset($empty))? $empty . "<br />" : "";
?>
<input type="submit" value="Begin Test">
</form>