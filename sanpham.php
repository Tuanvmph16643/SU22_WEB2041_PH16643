<?php
require 'header.php';
include 'pdo/pdo.php';

$sql = "SELECT * from loai order by ma_loai desc";
$dm = pdo_query($sql);

$sql = "SELECT * from hang_hoa order by ma_hh";
$sp = pdo_query($sql);


?>
<div class="row_sp">
    <div class="cot_trai">
        <ul>
            <h2>Danh mục</h2>
            <?php foreach ($dm as $l) : ?>
                <li><a href="sanpham_loc.php?ma_loai=<?= $l['ma_loai'] ?>"> <?= $l['ten_loai'] ?> </a></li>
                <!-- <li><a href="#">Kính</a></li>
            <li><a href="#">Ví</a></li>
            <li><a href="#">Túi xách</a></li> -->
            <?php endforeach ?>
        </ul>
    </div>
    <div class="cot_phai">
        <h2>Sản phẩm</h2>
            <hr width="95%">
            <div class="dong3">
            <?php foreach ($sp as $s) : ?>
                <div class="product3">
                    <a href="sanpham_chitiet.php?ma_hh=<?=$s['ma_hh']?>"><img class="img-fluid" src="admin/upload_sp/<?= $s['hinh'] ?>" width="120" alt=""></a>
                    <br>
                    <a href="sanpham_chitiet.php?ma_hh=<?=$s['ma_hh']?>">
                        <h3><?= $s['ten_hh'] ?></h3>
                    </a>
                    <p><?= $s['don_gia'] ?> VNĐ</p>
                </div>
            <?php endforeach ?>
            <!-- <div class="product3">
                <a href="#"><img class="img-fluid" src="img/louis-vuitton-racer-slingbag-g65-bags - M46107_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#">
                    <h3>Kính</h3>
                </a>
            </div>
            <div class="product3">
                <a href="#"><img class="img-fluid" src="img/louis-vuitton-pocket-organizer-crocodilien-mat-wallets-and-small-leather-goods - N91552_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#">
                    <h3>Kính</h3>
                </a>
            </div>
        </div>
        <h2>Đồng hồ</h2>
        <hr width="95%">
        <div class="dong3">
            <div class="product3">
                <a href="#"><img class="img-fluid" src="img/louis-vuitton-multiple-wallet-crocodilien-mat-wallets-and-small-leather-goods - N80348_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#">
                    <h3>Đồng hồ</h3>
                </a>
            </div>
            <div class="product3">
                <a href="#"><img class="img-fluid" src="img/louis-vuitton-1-1-evidence-sunglasses-s00-sunglasses - Z1682E_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#">
                    <h3>Đồng hồ</h3>
                </a>
            </div>
            <div class="product3">
                <a href="#"><img class="img-fluid" src="img/louis-vuitton-lv-clash-mask-sunglasses-s00-sunglasses - Z1593E_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#">
                    <h3>Đồng hồ</h3>
                </a>
            </div>
        </div>
        <h2>Túi</h2>
        <hr width="95%">
        <div class="dong3">
            <div class="product3">
                <a href="#"><img class="img-fluid" src="img/louis-vuitton-star-light-sunglasses-s00-sunglasses - Z1644U_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#">
                    <h3>Túi</h3>
                </a>
            </div>
            <div class="product3">
                <a href="#"><img class="img-fluid" src="img/louis-vuitton-tambour-damier-graphite-race-chronograph-watches-and-jewelry - QBB160_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#">
                    <h3>Túi</h3>
                </a>
            </div>
            <div class="product3">
                <a href="#"><img class="img-fluid" src="img/louis-vuitton-tambour-all-black-watches-and-jewelry - QBBB12_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#">
                    <h3>Túi</h3>
                </a>
            </div> -->
            </div>
    </div>
</div>
<?php
require 'footer.php';
?>