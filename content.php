<?php
include 'pdo/pdo.php';
$sql = "SELECT * from hang_hoa order by ma_hh limit 1,2";
$sp = pdo_query($sql);
$sql = "SELECT * from hang_hoa order by ma_hh limit 3,9";
$sp2 = pdo_query($sql);
?>


<div class="row">
    <div class="dong1">
        <div class="cot">
            <a href="#"><img src="img/tag heuer.jpg" alt=""></a>
        </div>
        <div class="cot">
            <?php foreach ($sp as $s) : ?>
                <div class="product">
                    <a href="sanpham_chitiet.php?ma_hh=<?=$s['ma_hh']?>"><img class="img-fluid" src="admin/upload_sp/<?= $s['hinh'] ?>" width="120" alt=""></a>
                    <br>
                    <a href="sanpham_chitiet.php?ma_hh=<?=$s['ma_hh']?>">
                        <h3><?= $s['ten_hh'] ?></h3>
                    </a>
                    <p><?= $s['don_gia'] ?></p>
                </div>
            <?php endforeach ?>
            <!-- <div class="product">
                <a href="#"><img class="img-fluid" src="img/glasses/louis-vuitton-cyclone-sunglasses-s00-sunglasses - Z1578E_PM2_Front view.jpg" alt=""></a>
                <br>
                <a href="#"><h3>Kính CYCLONE SUNGLASSES</h3></a>
            </div> -->
        </div>
    </div>
    <hr width="95%">
    <h1 class="title_line">Product</h1>
    <hr width="95%">
    <div class="dong2">
        <?php foreach ($sp2 as $s2) : ?>
            <div class="product2">
                <a href="sanpham_chitiet.php?ma_hh=<?=$s2['ma_hh']?>"><img src="admin/upload_sp/<?= $s2['hinh'] ?>" width="120" alt=""></a>
                <br>
                <a href="sanpham_chitiet.php?ma_hh=<?=$s2['ma_hh']?>">
                    <h3><?= $s2['ten_hh'] ?></h3>
                </a>
                <p><?= $s2['don_gia'] ?> VNĐ</p>
            </div>
        <?php endforeach ?>
        <!-- <div class="product2">
            <a href="#"><img class="img-fluid" src="img/bags/louis-vuitton-duo-messenger-g65-bags - M46104_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Túi Dou Messenger G65</h3></a>
        </div>
        <div class="product2">
            <a href="#"><img class="img-fluid" src="img/bags/louis-vuitton-racer-slingbag-g65-bags - M46107_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Túi Racer Slingbag G65</h3></a>
        </div>
        <div class="product2">
            <a href="#"><img class="img-fluid" src="img/wallet/louis-vuitton-pocket-organizer-crocodilien-mat-wallets-and-small-leather-goods - N91552_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Ví LV Pocket Organizer Crocodilien</h3></a>
        </div>
    </div>
    <hr width="90%">
    <div class="dong2">
        <div class="product2">
            <a href="#"><img class="img-fluid" src="img/wallet/louis-vuitton-multiple-wallet-crocodilien-mat-wallets-and-small-leather-goods - N80348_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Ví LV Multiple Wallet Crocodilien</h3></a>
        </div>
        <div class="product2">
            <a href="#"><img class="img-fluid" src="img/glasses/louis-vuitton-1-1-evidence-sunglasses-s00-sunglasses - Z1682E_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Kính LV 1.1 Evidence</h3></a>
        </div>
        <div class="product2">
            <a href="#"><img class="img-fluid" src="img/glasses/louis-vuitton-lv-clash-mask-sunglasses-s00-sunglasses - Z1593E_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Kính LV Clash Mark</h3></a>
        </div>
    </div>
    <hr width="90%">
    <div class="dong2">
        <div class="product2">
            <a href="#"><img class="img-fluid" src="img/glasses/louis-vuitton-star-light-sunglasses-s00-sunglasses - Z1644U_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Kính LV Star Light</h3></a>
        </div>
        <div class="product2">
            <a href="#"><img class="img-fluid" src="img/watch/louis-vuitton-tambour-damier-graphite-race-chronograph-watches-and-jewelry - QBB160_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Đồng hồ Tambour Damier Graphite Chronograph</h3></a>
        </div>
        <div class="product2">
            <a href="#"><img class="img-fluid" src="img/watch/louis-vuitton-tambour-all-black-watches-and-jewelry - QBBB12_PM2_Front view.jpg" alt=""></a>
            <br>
            <a href="#"><h3>Đồng hồ Tambour All Black Small Second 41.5</h3></a>
        </div> -->
    </div>
</div>
</div>