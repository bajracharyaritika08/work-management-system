<?php 

$user_id = 1;
if ($user_id == 1){

}else {

}

?>


<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="logokam.png" alt="kam logg" style="height:75px;width:50px;">
            </div>

            <span class="logo_name">| KAM- क्षॆत्र |</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="userdashboard.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="ViewTask.php">
                        <i class="uil uil-book-open"></i>
                        <span class="link-name">View Task</span>
                    </a>
                </li>
                <li>
                    <a href="leave.php">
                    <i class="uil uil-fast-mail"></i>
                        <span class="link-name">Leaves</span>
                    </a>
                </li>
                <li>
                    <a href="../user/AskForHelp.php">
                    <i class="uil uil-clipboard-alt"></i>
                        <span class="link-name">Ask for help?</span>
                    </a>
                </li>
            </ul>
            <ul class="logout-mode">
                <li>
                    <a href="../user/Index.php">
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