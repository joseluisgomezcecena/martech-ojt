<?php
if($_SESSION['ojt_user_level'] == 0)
{
    die("You dont have permission to access this page <a href='index.php'>Go Back</a>");
}
require_once("classes/CellOps.php");
$cellops = new CellOps();


if (isset($cellops)) {
    if ($cellops->errors) {
        foreach ($cellops->errors as $error) {
            echo "
        <script type='text/javascript'>
          document.addEventListener('DOMContentLoaded', function(event) {
            swal('Error!','$error','error');
          });
       </script>
       ";        }
    }
    if ($cellops->messages) {
        foreach ($cellops->messages as $message) {
            echo "
        <script type='text/javascript'>
          document.addEventListener('DOMContentLoaded', function(event) {
            swal('$message');
          });
       </script>
       ";
        }
    }
}

$query = "SELECT * FROM cells WHERE cell_id = {$_GET['cell_id']}";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

$get_data = "SELECT * FROM ops WHERE op_id = {$_GET['op_id']}";
$result_data = mysqli_query($connection, $get_data);
$row_data = mysqli_fetch_array($result_data);


?>

<h1 class="h3 mb-4 text-gray-800">Delete Operation For: <span class="text-primary"><?php echo $row['cell_name']; ?></span>
<span><a class="btn btn-primary float-right" href="index.php?page=cell_op">Add Operation</a></span></h1>

<form method="POST" id="form-user" autocomplete="off" enctype="multipart/form-data">

    <div class="row">






        <div class="col-lg-4">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    <h6 class="m-0 font-weight-bold text-default">Delete Operation</h6>

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">

                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div id="profile-data" class="card-body">
                    <form method="POST">




                        <div class="form-group">
                            <label>Operation Name</label>
                            <input type="text" name="op_name" id="" class="form-control" value="<?php echo $row_data['op_name'] ?>" required>
                        </div>


                        <div class="form-group ">
                            <button id="edit_profile1" name="delete_op" type="submit" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i>&nbsp;&nbsp;Delete Operation
                            </button>
                        </div>

                    </form>
                </div>
                <!-- Card Body -->
            </div>

        </div>









        <div class="col-lg-8">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    <h6 class="m-0 font-weight-bold text-default">Operation List</h6>

                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">

                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body ">
                    <div class="card-body ">


                        <div style="margin-top:-20px;" class="table-responsive">
                            <table  style="font-size: 14px; vertical-align:middle; " class="table  table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Operation</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM ops WHERE cell_id = {$_GET['cell_id']} AND op_active = 1";
                                $result = mysqli_query($connection, $query);
                                while($row = mysqli_fetch_array($result)):
                                    ?>
                                    <tr>
                                        <td><?php echo $row['op_id'] ?></td>
                                        <td><?php echo $row['op_name'] ?></td>
                                        <td><a href="index.php?page=edit_ops&op_id=<?php echo $row['op_id'] ?>&cell_id=<?php echo $_GET['cell_id'] ?>" class="btn btn-primary">Edit</a></td>
                                        <td><a href="index.php?page=delete_ops&op_id=<?php echo $row['op_id'] ?>&cell_id=<?php echo $_GET['cell_id'] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php
                                endwhile;
                                ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>

        </div>




    </div>
</form>          








