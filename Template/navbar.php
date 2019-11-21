<section id="container">

    <header class="header black-bg">
        <div class="sidebar-toggle-box" style="display: none;">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>TUT<span>OR</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li><a href="../routes/index.php">Tutors</a></li>


            </ul>
            <!--  notification end -->
        </div>
        <div class="nav notify-row" style="margin-left: 60%;">
            <!--  notification start -->
            <?php if (isset($_SESSION["Active"])) {
                if ($_SESSION["type"] == "teacher") {
                    include '../core/database.php';
                    $sql2 = "SELECT * from request inner join students on request.student_id=students.student_id where tutor_id=" . $_SESSION['id'];
                    $result2 = $conn->query($sql2);
                    $sql = "SELECT COUNT(request_id) as c FROM request WHERE tutor_id=".$_SESSION['id'];
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $count=$row["c"];
                    ?>

                    <ul class="nav top-menu">
                        <!-- settings start -->
                        <li id="header_notification_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge bg-warning"><?php echo $count ?></span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <div class="notify-arrow notify-arrow-yellow"></div>
                                <li>
                                    <p class="yellow">You have <?php echo $count ?> new notifications</p>
                                </li>
                                <?php while ($row2 = $result2->fetch_assoc()) { ?>

                                    <li>
                                        <p>A new request from <?php echo $row2["student_name"] ?></p>
                                    </li>
                                <?php } ?>

                            </ul>
                        </li>
                        <!-- notification dropdown end -->
                    </ul>
                <?php }
            } ?>
            <!--  notification end -->
        </div>
        <div class="top-menu">

            <ul class="nav pull-right top-menu">


                <?php if (isset($_SESSION["Active"])) {
                    echo '<li><a class="logout" href="../routes/profile.php">My Profile</a></li>';

                    echo '<li><a class="logout" href="../core/logout.php">Logout</a></li>';
                } else {
                    echo '<li><a class="logout" href="login.php">Login</a></li>';
                }
                ?>

            </ul>
        </div>
    </header>