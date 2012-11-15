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
			echo ($page === 1)? "<li class='active'>Dashboard</li>" : "<li><a href='dashboard'>Dashboard</a> <span class='divider'>/</span></li>";
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
			echo ($page === 3)? "<b>Student List View</b>" : "<a href='/student-list'>Student List View</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 4)? "<b>Test List View</b>" : "<a href=''>Test List View</a>";
	 	} ?>
	</div>
	<div class="menu">
		<?php if(isset($page)) { 
			echo ($page === 5)? "<b>Class List View</b>" : "<a href=''>Class List View</a>";
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
