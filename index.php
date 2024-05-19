<?php
include('includes/header.php');
include('db.php');
$allResults = selectAll();
?>
<div class="container p-5">
    <div class="row">
        <div class="col-8">
            <h1>All Users</h1>
        </div>
        <div class="col-2"></div>
        <div class="col-2"><button type="button" class="btn btn-success"><a href="create.php" class="text-decoration-none text-white">Add user</a></button></div>
    </div>
    <div class="row mt-3 p-2">

        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>description At</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <?php if (isset($allResults)) { ?>
                    <tbody>
                        <?php foreach ($allResults as $record) { ?>
                            <tr>
                                <td><?php echo $record['id'] ?></td>
                                <td><?php echo $record['name'] ?></td>
                                <td><?php echo $record['email'] ?></td>
                                <td class="d-flex justify-content-evenly">
                                    <a href="delete.php?id=<?php echo $record['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="edit.php?id=<?php echo $record['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                </td>


                            </tr>
                        <?php } ?>

                    </tbody>
                <?php } ?>
            </table>
        </div>


    </div>


</div>
<?php
include('includes/footer.php');
