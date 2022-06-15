<?php
include 'header.php';
include 'pdo/pdo.php';

if (isset($_SESSION['user'])) {
    $id = $_SESSION['user']['ma_kh'];
    $name = $_SESSION['user']['ten_kh'];
    $diachi = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $sdt = $_SESSION['user']['sdt'];
} else {
    $id = "";
    $name = "";
    $diachi = "";
    $email = "";
    $sdt = "";
}

function tongdon(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $sp_add){
        $ttien = $sp_add[3] * $sp_add[4];
        $tong += $ttien; 
    }
    return $tong; 
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['ma_kh'];
    else $iduser = 0;
    $name = $_POST['name'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $time = Date("H:i:s d/m/Y");
    $pttt = $_POST['pttt'];

    $tongdon = tongdon();

    $sql = "INSERT into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngay_dat_hang,total,id_user) values ('$name','$email','$diachi','$sdt','$pttt','$time','$tongdon','$iduser')";
    $id_bill = pdo_execute_lastinsertID($sql);

    foreach ($_SESSION['mycart'] as $cart) {
        $idkh = $_SESSION['user']['ma_kh'];
        $sql = "INSERT into cart(id_user,id_pro,img,namepro,price,soluong,thanhtien,id_bill) values ('$idkh','$cart[0]','$cart[2]','$cart[1]','$cart[4]','$cart[3]','$tongdon','$id_bill')";
        pdo_execute($sql);
    };
    header('location: billcomfirm.php?id=' . $id_bill . '');
    die;
}


?>

<form action="bill.php" method="post">
    <div class="row_cart mb">
        <div class="cart mb">
            <h2>Thông tin đặt hàng</h2>
            <table>
                <tr>
                    <td>Người đặt</td>
                    <td><input type="text" name="name" value="<?= $name ?>" required></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="diachi" value="<?= $diachi ?>" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?= $email ?>" required></td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td><input type="text" name="sdt" value="<?= $sdt ?>" required></td>
                </tr>
            </table>
        </div>
        <hr>
        <h3>Phương thức thanh toán</h3>
        <div class="cart mb">
            <input type="radio" name="pttt" value="1" checked> Trả tiền khi nhận hàng
            <input type="radio" name="pttt" value="2"> Chuyển khoản ngân hàng
            <input type="radio" name="pttt" value="3"> Thanh toán online
        </div>
        <hr>
        <div class="cart mb">
            <h3>Thông tin giỏ hàng</h3><br>
            <table>
                <tr>
                    <th>Mã hàng hóa</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Đơn giá</th>
                </tr>
                <?php $tong = 0;
                $i = 0; ?>
                <?php foreach ($_SESSION['mycart'] as $sp_add) : ?>
                    <?php $ttien = $sp_add[3] * $sp_add[4]; ?>
                    <?php $tong += $ttien; ?>
                    <?php $id_xoa = '<a href="cart_del.php?id=' . $i . '"><input type="submit" value="Xóa"></a>'; ?>
                    <tr>
                        <td><?= $sp_add[0] ?></td>
                        <td><?= $sp_add[1] ?></td>
                        <td><img src="admin/upload_sp/<?= $sp_add[2] ?>" width="120" alt=""></td>
                        <td><?= $sp_add[3] ?></td>
                        <td><?= $ttien ?> VNĐ</td>
                    </tr>
                    <?php $i += 1 ?>
                <?php endforeach ?>
                <br>
                <tr>
                    <th colspan="4">Tổng đơn hàng</th>
                    <td><?= $tong ?> VNĐ</td>
                </tr>
            </table>
            <a href="bill.php"><input type="submit" name="comfirm" value="Hoàn tất đặt hàng"></a>
        </div>
    </div>
</form>

<?php
include 'footer.php';
?>