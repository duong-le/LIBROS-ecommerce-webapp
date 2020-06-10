<?php
$sp = SanPhamSach($IDS);
$row_sp = mysqli_fetch_array($sp);
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 text-center" style="margin-top: 40px;margin-bottom: 40px">
            <img src="assets/upload/<?php echo ($row_sp['Hinhanh']) ?  $row_sp['Hinhanh'] : "book_preview.png"; ?>" alt="book" width="280" height="auto">
        </div>
        <div class="col-12 col-md-6 text-center">
            <br>
            <h1 class="product_title"><?php echo $row_sp['Tensach'] ?></h1>
            <b style="font-size: 35px"><?php echo number_format($row_sp['Giasach']) ?> đ</b>
            <?php require "views/blocks/addToCart.php" ?>
            <p style="font-size: 20px"><b>Tác giả:</b> <?php echo $row_sp['Tacgia'] ?></p>
            <p style="font-size: 20px"><b>Số trang:</b> <?php echo $row_sp['Sotrang'] ?></p>
            <p style="font-size: 20px"><b>Năm xuất bản:</b> <?php echo $row_sp['NamXB'] ?></p>
            <p style="font-size: 20px"><b>Nhà xuất bản:</b> <?php echo $row_sp['Ten_NXB'] ?></p>

        </div>
    </div>
</div>
<br>

<!-- hr -->
<br>
<?php
require "views/blocks/hr.php";
?>

<!-- Lien Quan -->
<div class="container">
    <div style="background-color:#be2a2b;color: white;padding: 14px 20px;text-align: center">
        <b>SẢN PHẨM LIÊN QUAN</b>
    </div>
    <br>
    <br>

    <div class="row">
        <?php
        $splq = SPlienquan($row_sp['ID_Theloai'], $row_sp['ID_Sach']);
        while ($row_splq = mysqli_fetch_array($splq)) {
            ?>
            <div class="col-6 col-md-3 text-center">
                <a href="index.php?p=product&ID_Sach=<?php echo $row_splq['ID_Sach'] ?>">
                    <img src="assets/upload/<?php echo ($row_splq['Hinhanh']) ? $row_splq['Hinhanh'] : "book_preview.png"; ?>" alt="book" width="auto" height="110">
                    <p style="margin-top:10px"><?php echo $row_splq['Tensach'] ?></p>
                </a>
                <b><?php echo number_format($row_splq['Giasach']) ?> đ</b>
            </div>
        <?php
        } ?>
    </div>
</div>

<br>