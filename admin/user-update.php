<?php
include 'includes/header.php';
include '../config/database.php';

?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit User
                    <a href="./user.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?php
                $user_id = mysqli_real_escape_string ($conn, $_GET['id']);
                $query = "SELECT * FROM users WHERE id = $user_id";
                $sql = mysqli_query($conn, $query);
                if (mysqli_num_rows($sql) > 0) {
                    $user = mysqli_fetch_array($sql);
                ?>
                <form action="code.php" method="post">
                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                    <div class="mb-3">
                        <label for="">Name: </label>
                        <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Phone: </label>
                        <input type="text" class="form-control" name="phone" value="<?= $user['phone'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Email: </label>
                        <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">Select Role</label>
                        <input type="text" class="form-control" name="role" value="<?= $user['role'] ?>">

                    </div>
                    <div class="mb-3">
                        <button type="submit" name="updateUser" class="btn btn-primary">Save</button>
                    </div>
                </form>
                <?php
                }
                ?>


            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>