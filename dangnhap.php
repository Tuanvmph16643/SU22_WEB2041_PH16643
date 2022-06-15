<?php
include 'header.php';
include 'pdo/pdo.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $sql = "SELECT * from tai_khoan where user = '$username' and pass = '$pass'";
    $checkuser = pdo_query_one($sql);
    if(is_array($checkuser)){
        $_SESSION['user'] = $checkuser;
        header('location: index.php');
        // $thongbao = "Đăng nhập thành công";
    }else{
        $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký";
    }
    // if($checkuser == null){
    //     $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký";
    // }
    
}


?>

<div class="row_login">
    <div class="log">
        <h2>Đăng nhập</h2>
        <?php if(isset($thongbao)){
            echo $thongbao;
        } ?>
        <br>
        <form action="dangnhap.php" method="post">
            <label for="">Tài khoản</label>
            <br>
            <input type="text" name="username" placeholder="Tên tài khoản" required>
            <br>
            <label for="">Mật khẩu</label>
            <br>
            <input type="password" name="pass" placeholder="Mật khẩu" required>
            <br>
            <input type="submit" value="Đăng nhập">
            <br>
            Chưa có tài khoản? <a href="Dangky.php">Đăng ký thành viên</a>
            <br>
            <a href="quenmk.php">Quên mật khẩu</a>
        </form>
    </div>
</div>


<?php
include 'footer.php';
?>