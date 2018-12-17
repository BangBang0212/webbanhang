<?php
	$sql_loai="select * from loaisp order by idloaisp asc";
	$row_loai=mysql_query($sql_loai);
?>
<div class="box_list">
            <div class="tieude">
            	<h4>Loại sản phẩm</h4>
            </div>
            	<ul class="list">
                <?php
				while($dong_loai=mysql_fetch_array($row_loai)){
				?>
                	<li><a href="index.php?quanly=loaisp&id=<?php echo $dong_loai['idloaisp'] ?>"><?php echo $dong_loai['tenloaisp'] ?></a></li>
                  <?php
				}
				  ?>
                </ul>
                </div><!--Ket thuc div box loai phu kien -->
               <?php
	$sql_hieu="select * from hieusp order by idhieusp asc";
	$row_hieu=mysql_query($sql_hieu);
?>
                <div class="box_list">
            <div class="tieude">
            	<h4>Thương hiệu</h4>
            </div>
            	<ul class="list">
                <?php
				while($dong_hieu=mysql_fetch_array($row_hieu)){
				?>
                	<li><a href="index.php?quanly=hieusp&id=<?php echo $dong_hieu['idhieusp'] ?>"><?php echo $dong_hieu['tenhieusp'] ?></a></li>
                  <?php
				}
				  ?>
                </ul>
                </div><!--Ket thuc div box thuong hieu -->
                 <div class="box_list">
                 
                   <div class="tieude">
            	<h4>Hàng bán chạy</h4>
            		</div>
                    <?php
					$sql_banchay=mysql_query("select * from sanpham order by idsanpham desc limit 8");
					
					?>
            	<ul class="hangbanchay">	
                <?php
				while($dong_banchay=mysql_fetch_array($sql_banchay)){
				?>
                	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_banchay['loaisp'] ?>&id=<?php echo $dong_banchay['idsanpham'] ?>">
                    	<img src="admincp/modules/quanlysanpham/uploads/<?php echo $dong_banchay['hinhanh'] ?>" width="150" height="150" />
                    	<p><?php echo $dong_banchay['tensp'] ?></p>
                        <p style="color:red;"><?php echo number_format($dong_banchay['giadexuat']).' '.'VNĐ' ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
                </div><!--Ket thuc div box hang ban chay -->
                 