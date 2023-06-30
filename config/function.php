<?php
session_start();
// Hàm này dùng để lấy dữ liệu
function validate($inputData)
{
    global $conn;
    return mysqli_real_escape_string($conn, $inputData);
}

// Hàm này dùng để gán thông tin khi submit
function redirect($url, $status)
{
    $_SESSION['status'] = $status;
    header("Location:" . $url);
    exit(0);
}

// Hàm này dùng để gán thông báo
function alertMessage()
{
    if (isset($_SESSION['status'])) :
?>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?= $_SESSION['status']; ?>
            <button type="button" class="btn-close btn-danger" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php
        unset($_SESSION['status']);
    endif;
}
