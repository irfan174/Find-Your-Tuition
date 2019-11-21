<?php include '../Template/header.php'?>
<?php if (isset($_SESSION["Active"])) {
} else {
    header("Location: login.php?message=Please login first");
}
?>
<script>
    function prodlistajax() {
        var search = document.getElementById("search").value;
        ///console.log("search value " + search);
        var httpreq = new XMLHttpRequest();
        httpreq.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                console.log("Table updated");
                document.getElementById("tablebody").innerHTML = this.responseText;
            }
        }
        httpreq.open("GET", "../core/ajaxlocation.php?search=" + search, true);
        httpreq.send();
    }
</script>
<body>
<?php include '../Template/navbar.php'?>
<div class="panel-body minimal">
    <div class="mail-option">
        <div class="chk-all">
            <div class="pull-left mail-checkbox">
                <input type="checkbox" class="">
            </div>
            <div class="btn-group">
                <a data-toggle="dropdown" href="#" class="btn mini all">
                    All
                    <i class="fa fa-angle-down "></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"> None</a></li>
                    <li><a href="#"> Read</a></li>
                    <li><a href="#"> Unread</a></li>
                </ul>
            </div>
        </div>
        <div class="btn-group">
            <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                <i class=" fa fa-refresh"></i>
            </a>
        </div>
        <div class="btn-group hidden-phone">
            <a data-toggle="dropdown" href="#" class="btn mini blue">
                More
                <i class="fa fa-angle-down "></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <a data-toggle="dropdown" href="#" class="btn mini blue">
                Move to
                <i class="fa fa-angle-down "></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
            </ul>
        </div>
        <ul class="unstyled inbox-pagination">
            <li><span>1-50 of 99</span></li>
            <li>
                <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
            </li>
            <li>
                <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
            </li>
        </ul>
    </div>
    <div class="form-group">
        <label for="search">Search</label>
        <input type="search" id="search" name="search" class="form-control" placeholder="search by address here" onkeyup="prodlistajax();">
    </div>
    <div class="table-inbox-wrap ">
        <table class="table table-inbox table-hover">
            <thead>
                <td>Name</td>
                <td style="text-align: center">Area</td>
                <td style="text-align: center">Age</td>
                <td style="text-align: center">Class</td>
                <td style="text-align: center">Institute</td>
                <td style="text-align: center">Background</td>
            </thead>
            <tbody id="tablebody">
            <?php include '../core/database.php' ?>
            <?php
            $sql = "SELECT * from tutors";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){ ?>
            <tr class="unread">
                <td class="view-message " style="width: 16%;"><a href="user.php?id=<?php echo $row["tutor_id"]?>"><?php echo $row["tutor_name"]?></a></td>
                <td class="view-message " style="text-align: center"><?php echo $row["area_name"]?></td>
                <td class="view-message " style="text-align: center"><?php echo $row["age"]?></td>
                <td class="view-message " style="text-align: center"><?php echo $row["class"]?></td>
                <td class="view-message "style="text-align: center"><?php echo $row["institute"]?></td>
                <td class="view-message "style="text-align: center"><?php echo $row["background"]?></td>

            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("img/login-bg.jpg", {
        speed: 500
    });
</script>