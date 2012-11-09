<?php if(isset($page)){

echo ($page === 1)? "<b>Home</b> | " : "<a href='/'>Home</a> | ";
echo ($page === 2)? "<b>Start a new test</b> | " : "<a href='/new-test'>Start a new test</a> | ";
echo ($page === 3)? "<b>Student List View</b> | " : "<a href=''>Student List View</a> | ";
echo ($page === 4)? "<b>Class List View</b> | " : "<a href=''>Class List View</a> | ";
echo ($page === 5)? "<b>Settings</b> | " : "<a href=''>Settings</a> | ";
echo ($page === 6)? "<b>Archive</b> | " : "<a href=''>Archive</a> | ";
echo ($page === 7)? "<b>logout</b> | " : "<a href='/logout'>logout</a>";

}