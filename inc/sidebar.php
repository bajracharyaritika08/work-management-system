<?php 

$user_id = 1;
if ($user_id == 1){

}else {

}

?>


<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../assets/images/logokam.png" alt="kam logo" style="height:75px;width:50px;">
            </div>

            <span class="logo_name">| KAM- क्षॆत्र |</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="DashBoard.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="CreateTask.php">
                        <i class="uil uil-graph-bar"></i>
                        <span class="link-name">Assign Task</span>
                    </a>
                </li>
                <li>
                    <a href="Managetasks.php">
                        <i class="uil uil-comment-edit"></i>
                        <span class="link-name">Manage task</span>
                    </a>
                </li>
                <li>
                    <a href="ManageUser.php">
                    <i class="uil uil-users-alt"></i>
                        <span class="link-name">Manage User </span>
                    </a>
                </li>
                <li>
                    <a href="LeaveRecords.php">
                        <i class="uil uil-fast-mail"></i>
                        <span class="link-name">Leave Requests</span>
                    </a>
                </li>
                <li>
                    <a href="AskForHelp.php" >
                    <i class="uil uil-clipboard-alt"></i>
                        <span class="link-name">Ask for help?</span>
                    </a>
                </li>
            </ul>
            <ul class="logout-mode">
                
                <li>
                    <a href="../AdminIndex.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>