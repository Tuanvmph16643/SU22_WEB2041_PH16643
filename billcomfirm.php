<?php
include 'header.php';
include 'pdo/pdo.php';

$id = $_GET['id'];
$sql = "SELECT * from bill where id = $id";
$ttdh = pdo_query_one($sql);
$sql = "SELECT * from cart where id_bill = $id";
$ttc = pdo_query($sql); 


?>

<div class="row_cart">
    <div class="ds_cart mb">
        <h3>Cảm ơn quý khách đã đặt hàng</h3>
        <br>
        <h3>Thông tin đơn hàng</h3>
        <br>
        
            <li>- Mã đơn hàng: Order-<?=$ttdh['id']?> </li>
            <li>- Ngày đặt hàng: <?=$ttdh['ngay_dat_hang']?> </li>
            <li>- Tổng đơn hàng: <?=$ttdh['total']?> </li>
            <li>- Phương thức thanh toán: <?=$ttdh['bill_pttt']?> </li>
        
    </div>
    <div class="ds_cart mb">
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
                <?php foreach ($ttc as $c) : ?>
                    <?php $ttien = $c['thanhtien']; ?>
                    <?php $tong += $c['thanhtien']; ?>
                    <tr>
                        <td><?= $c['id_pro'] ?></td>
                        <td><?= $c['namepro'] ?></td>
                        <td><img src="admin/upload_sp/<?= $c['img'] ?>" width="120" alt=""></td>
                        <td><?= $c['soluong'] ?></td>
                        <td><?= $c['thanhtien'] ?> VNĐ</td>
                    </tr>
                    <?php $i += 1 ?>
                <?php endforeach ?>
                <br>
                <tr>
                    <th colspan="4">Tổng đơn hàng</th>
                    <td><?= $tong ?> VNĐ</td>
                </tr>
            </table>
    </div>
</div>

<?php 
include 'footer.php';
?>