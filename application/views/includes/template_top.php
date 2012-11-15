<div class="wrapper-dashboard">

<div class="dashboard-top">
	<div class="logo">
	<h2>Cars and Stars Portal</h2>
	</div>
</div>

<div class="breadcrumbs">
    <ul class="breadcrumb full-width">
    <li><a href="dashboard">Home</a> <span class="divider">/</span></li>
    <?php if(isset($page)) { 
			echo ($page === 1)? "<li class='active'>Dashboard</li>" : "";
	 	} 
    ?>
    <?php if(isset($page)) { 
			echo ($page === 2)? "<li class='active'>Start a New Test</li>" : "";
	 	} 
    ?>
    <?php if(isset($page)) { 
			echo ($page === 3)? "<li class='active'>Student List View</li>" : "";
	 	} 
    ?>
    <?php if(isset($page)) { 
			echo ($page === 9)? "<li><a href='student-list'>Student List View</a> <span class='divider'>/</span></li><li class='active'>Student Test List View</li>" : "";
	 	} 
    ?>
    <?php if(isset($page)) { 
			echo ($page === 10)? "<li><a href='student-list'>Student List View</a> <span class='divider'>/</span></li><li class='active'>Add New Student</li>" : "";
	 	} 
    ?>
    <?php if(isset($page)) { 
			echo ($page === 11)? "<li><a href='student-list'>Student List View</a> <span class='divider'>/</span></li><li class='active'>Edit Student</li>" : "";
	 	} 
    ?>
    <?php if(isset($page)) { 
			echo ($page === 12)? "<li class='active'>Class List View</li>" : "";
	 	} 
    ?>
    <?php if(isset($page)) { 
			echo ($page === 13)? "<li class='active'>Test Group List View</li>" : "";
	 	} 
    ?>
     <?php if(isset($page)) { 
			echo ($page === 14)? "<li class='active'>Testing Wizard</li>" : "";
	 	} 
    ?>
    </ul>
</div>

<div class="main-menu">

<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 1)? "<b>Home</b>" : "<a href='/'>Home</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 2)? "<b>Start a New Test</b>" : "<a href='/new-test'>Start a New Test</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 3 || $page === 9 || $page === 10)? "<b>Student List View</b>" : "<a href='/student-list'>Student List View</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 4 || $page === 13 ||  $page === 14)? "<b>Test List View</b>" : "<a href='/test-list'>Test List View</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 5 || $page === 12)? "<b>Class List View</b>" : "<a href='class-list'>Class List View</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 6)? "<b>Settings</b>" : "<a href=''>Settings</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 7)? "<b>Archive</b>" : "<a href=''>Archive</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 8)? "<b>Logout</b>" : "<a href='/logout'>Logout</a>";
	 	} ?>
	</div>
</div>

<div class="dashboard-content">
