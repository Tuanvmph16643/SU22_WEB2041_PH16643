<?php
include 'pdo/pdo.php';
include 'header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $anhdd = 'noimage.jpg';

    $sql = "INSERT into tai_khoan(user,pass,email,anh_dai_dien,ten_kh) values ('$username','$password','$email','$anhdd',$name)";
    pdo_execute($sql);
    $thongbao = "Đăng ký thành công!";
}


?>

<div class="rowtk">

    <h2>Đăng ký</h2>
    <br>
    <form action="" method="post">
        <?php if(isset($thongbao)){ echo $thongbao;} ?>
        <div class="mb">
            <label for="">Họ và tên</label>
            <br>
            <input type="text" name="name" placeholder="Họ và tên" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Tài khoản</label>
            <br>
            <input type="text" name="username" placeholder="Tài khoản" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Mật khẩu</label>
            <br>
            <input type="password" name="password" placeholder="Mật khẩu" required>
        </div>
        <br>
        <div class="mb">
            <label for="">Email</label>
            <br>
            <input type="email" name="email" id="" placeholder="Email" required>
        </div>
        <br>
        <input type="submit" name="dangky" value="Đăng ký"><br>
        <input type="reset" value="Nhập lại"><br><br>
        <a href="dangnhap.php">Quay lại đăng nhập</a>
    </form>

</div>


<?php
include 'footer.php';
?>