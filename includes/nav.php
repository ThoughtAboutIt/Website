<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    Welcome <?php echo $_SESSION['username']; ?>&nbsp;
                </li>
                <li>
                    <a class="waves-effect waves-teal " href="dashboard.html"><i class="glyphicon glyphicon-dashboard" ></i>Dashboard</a>
                </li>
                <li>
                    <a class="waves-effect waves-teal" href="pages.html"><i class="glyphicon glyphicon-file" ></i>Pages</a>
                </li>
                <li>
                    <a class="waves-effect waves-teal" href="users.html"><i class="glyphicon glyphicon-user" ></i>Users</a>
                </li>
                <li>
                <a href="logout.php?logout">Sign Out</a>
                </li>    
            </ul>
        </div>
