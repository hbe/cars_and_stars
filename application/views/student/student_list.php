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
				    <div class="input-prepend">
    <div class="btn-group">
    <button class="btn dropdown-toggle" data-toggle="dropdown">
    Search By
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
    	<li><a href="#">Action</a></li>
    </ul>
    </div>
    <input class="span2" id="prependedDropdownButton" type="text">
    </div>
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
    		</table>
		</div>

</div>