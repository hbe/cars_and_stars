<div class="content">
		<div class="title shift-left">
			<h3>Student List View</h3>
		</div>

		<div class="title-borderless shift-right">
			<br />
			<form>
				<button onclick="window.location.href='student-add';" class="btn pull-right" type="button">Add New Student</button>
			</form>
		</div>

		<br clear="all" />

		<div class="student-content">
			<form class="form-search pull-right">
                    <select class="span2 radioAlign">
                        <option>Class</option>
                        <option>Student ID</option>
                        <option>Student Name</option>
                        <option>Test</option>
                    </select>
		            <input type="text" class="input-medium">
                    <button type="submit" class="btn">Search</button>
		    </form>
			<table class="table table-striped">
    		<tr>
    			<td>ID</td>
    			<td>Student Name</td>
    			<td>Class</td>
    			<td>Teacher</td>
    			<td>Report</td>
    			<td>Control</td>
    		</tr>
<?php // foreach($query->result() as $row): ?>
           
<?php // endforeach; ?>
    		</table>
		</div>

</div>