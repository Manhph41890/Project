<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="timkiem">
    <form class="locdonhang" action="" method="POST">
    <div class="tim_kiem"><input type="date" name="ngayBatDau"></div>
    <div class="tim_kiem"><input type="date" name="ngayKetThuc"></div>
    <div class="go"><input type="submit" name="filter" value="Lọc"></div>
    </form>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
            <table>
                <tr>
                    <th></th>
                    <th>Sản phẩm</th>
                    <th>Tài Khoản</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php 
                    foreach($listbl as $bl){
                        extract($bl);
                        $xoabl = 'index.php?act=xoabl&id_bl='.$id_bl;
                        $ngay_bl_formatted = date("d/m/Y ~ H:ia", strtotime($ngay_bl));
                ?> 
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?=$id_sp?></td>
                                <td><?=$id_tk?></td>
                                <td><?=$noi_dung?></td>
                                <td><?=$ngay_bl_formatted?></td>
                                <td><a onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?')" href="<?=$xoabl?>"><div class="xoa"><input type="button" value="Xóa"></div></td></a>
                            </tr>
                <?php } ?>
                
            </table>
            <!----------------------- Phân trang ----------------------->
            <nav id="pagination" class="pagination_wrap pagination_pages">
                    <?php
                    if ($current_page > 1 && $total_page > 1){
                        echo '<a class="pager_prev" href="index.php?act=dsbl&page='.($current_page-1).'"></a> ';
                    }
                    for ($i = 1; $i <= $total_page; $i++){
                        
                        if ($i == $current_page){
                            echo ' <span class="pager_current active ">'.$i.'</span>';
                        }
                        else{
                            echo '<a href="index.php?act=dsbl&page='.$i.'">'.$i.'</a>';
                        }
                    }
                        ?>
                </nav>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            </div>
        </form>
    </div>
</div>
</div> 