<?php require_once('include/session.php'); 
include_once 'headergetabil.php';
?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Home</a>
                    </li>
                    <li>
                        <a href="item.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Item List</a>
                    </li>
                    <li class="active">
                        <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Product Profile</a>
                    </li>
                    <li>
                        <a href="stock.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Stocks</a>
                    </li>
                    <li>
                        <a href="expired.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Expired</a>
                    </li>
                    <li>
                        <a href="sales.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span> Sales</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <button class="btn btn-default" id="add-stock">New Stock
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </button>

                <button class="btn btn-danger" id="del-stock">Remove Selected
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </button>

               <div id="all-stocklist"></div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php include_once('modal/stock.php'); ?>
<?php include_once('modal/confirmation.php'); ?>
<?php include_once('modal/message.php'); ?>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/regis.js"></script>


</body>

</html>
