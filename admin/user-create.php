<?php include 'includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add User
                    <a href="./user.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <!-- thông báo  -->
                <?= alertMessage(); ?>

                <form action="code.php" method="post">
                    <div class="mb-3">
                        <label for="">Name: </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="">Phone: </label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="">Email: </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="">Password: </label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="">Select Role</label>
                        <select name="role" class="form-select">
                            <option value="">Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="saveUser" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>