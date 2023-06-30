<?php
include '../config/database.php';
include '../config/function.php';

// Thêm người dùng

if (isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $is_ban = validate($_POST['is_ban']) == true ? 1 : 0;
    $role = validate($_POST['role']);

    if ($name != '' && $email != '' && $phone != '' && $password != '') {
        $query = "INSERT INTO users (name, phone, email, password, is_ban, role) VALUES ('$name','$phone', '$email','$hash', '$is_ban','$role')";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            redirect('user.php', 'User / Admin Added Successfully');
        } else {
            redirect('user-create.php', 'Something went wrong');
        }
    } else {
        redirect('user-create.php', 'Vui lòng nhập tất cả trường');
    }
}


// Thay đổi thông tin user

if (isset($_POST['updateUser'])) {
    $user_id = validate($_POST['user_id']);
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $role = validate($_POST['role']);
    $query = "UPDATE users SET name='$name', phone='$phone', email='$email', role='$role' WHERE id= $user_id ";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('user.php', 'User Deleted successfully');
    } else {
        redirect('user.php', 'Something went wrong');
    }
}

// Xóa dữ liệu người dùng

if (isset($_POST['deleteUser'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['deleteUser']);
    $query = "DELETE FROM users WHERE id = $user_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('user.php', 'User deleted successfully');
    } else {
        redirect('user.php', 'Something went wrong');
    }
}
