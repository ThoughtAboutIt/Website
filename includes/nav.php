<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a class="waves-effect waves-teal " href="dashboard.html"><i class="glyphicon glyphicon-dashboard" ></i>Dashboard</a>
                </li>
                <li>
                    <a class="waves-effect waves-teal" href="#"><i class="glyphicon glyphicon-file" ></i>Pages</a>
                </li>
                <li>
                    <a class="waves-effect waves-teal" href="#"><i class="glyphicon glyphicon-user" ></i>Users</a>
                </li>
                <li>
                    <a class="waves-effect waves-teal" href="#"><i class="glyphicon glyphicon-cog" ></i>Tools</a>
                </li>
                <li>
                Welcome <?php echo $_SESSION['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
                </li>    
            </ul>
        </div>
