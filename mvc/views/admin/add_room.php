
 			
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                       
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head" style="background-color: #008000;border-radius: 5px; padding: 2px;">
									<header>Add room</header>
									  <!--<button id = "panel-button" 
			                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
			                           data-upgraded = ",MaterialButton">
			                            <i class = "material-icons">more_vert</i>
			                        </button>
			                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
			                           data-mdl-for = "panel-button">
			                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
			                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
			                        <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li> -->
			                        </ul>
								</div>

								<form action="./admin/add_room" method="POST">
								<!-- from thêm Phòng-->
								<div class="card-body row">
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ma_phong"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;">
					                     <label class = "mdl-textfield__label" style="padding-left: 5px;">Mã Phòng của Bạn</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
                                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ten_phong"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;">
					                     <label class = "mdl-textfield__label">Tên Phòng</label>
					                  </div>
						           	</div>
						           	<div class="col-lg-6 p-t-20"> 
                                       <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "number" id = "txtRoomNo" name="gia_phong"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;">
					                     <label class = "mdl-textfield__label">Giá Phòng</label>
					                  </div>
						            </div>
									<div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            
										  		<input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" name="ma_ha" value=""
										 		style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px; color: black" placeholder="" disabled>
												<!-- <select name="ma_ha" id="sample3" class="mdl-textfield__input"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px; height: 33.2px" value="">
													<?php $hinhanh = $data["maHinhAnh"];?>
                                                    <?php foreach($hinhanh as $row){ ?>
														<option value="<?php echo $row["ma_hinh_anh"]; ?>" id="opt_ha">
														<?php 
															if($row["ma_hinh_anh"] != "banner")
																echo $row["ma_hinh_anh"];?>
                                                    <?php } ?>
												</select> -->
												
									            <label for="sample2" class="mdl-textfield__label">Mã Hình ảnh</label>
									        </div>
							            </div>
										<div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
												<select id="sample2" name="ma_tt" class="mdl-textfield__input" value="" onchange="auto_set_ma_ha()"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px; height: 33.2px" placeholder="">
													<option value="" hidden>Chọn mã thuộc tính</option>
													<?php $thuoctinh = $data["maThuocTinh"];?>
                                                    <?php foreach($thuoctinh as $row){ ?>
														<option value="<?php echo $row["ma_thuoc_tinh"]; ?>">
														<?php echo $row["ma_thuoc_tinh"];?>
														</option>
                                                    <?php } ?>
												</select>
									            <label for="sample2" class="mdl-textfield__label">Mã Thuộc Tính</label>
							
									        </div>
							            </div>
										<div class="col-lg-6 p-t-20"> 
						              		<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     		<input type="text" class = "mdl-textfield__input" id="txtRoomNo" name="suc_chua_room"
										 		style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" value = 1>
					                     		<label class = "mdl-textfield__label" style="padding-left: 5px;">Sức chứa</label>
					                  		</div>
						            	</div>
										<div class="col-lg-6 p-t-20"> 
						              		<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     		<!-- <input type="number" class = "mdl-textfield__input" id="txtRoomNo" name="tinh_trang_room"
										 		style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" onchange="check_val_stt()" value = 0> -->
					                     		<select name="tinh_trang_room" id="txtRoomNo" class = "mdl-textfield__input"
												 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px; height: 33.2px">
														<option value="0">Empty</option>;
														<option value="1">Full</option>;
												</select>
												<label class = "mdl-textfield__label" style="padding-left: 5px;">Tình trạng</label>
					                  		</div>
						            	</div>
                                       <div class="col-lg-12 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
					                     <textarea class = "mdl-textfield__input" rows =  "4"  name="noi_dung"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
					                        id = "education" ></textarea>
					                     <label class = "mdl-textfield__label" for = "text7">Nhập nội dung mô tả cho phòng của bạn</label>
					                  </div>
							         </div>
							         <div class="col-lg-12 p-t-20 text-center"> 
						              	<button type="submit" name="add_new_room" style="border-radius: 20px;"
										  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
										  Thêm Phòng Này</button>
										<button type="button" onclick="xem_ds()" style="border-radius:20px;"
										class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">
										Xem Danh Sách</button>
						            </div>
								</div>
								</form>


								<!-- END from thêm Phòng-->
							</div>
						</div>
					</div> 
                </div>
            </div>
            <!-- end page content -->
<!-- phần này dành cho java scrip hoặc php --> 
<script type="text/javascript">
			function xem_ds(){
				window.location ="./admin/allroom"
			}
			function thanhcong(){
				swal("Thành Công!",
				"Phòng Của Bạn Đã Được Thêm Vào Hệ Thống");
			}

			function thatbai(){
				swal("Lỗi......!",
				"Kiểm Tra các ô và thử lại. (Lưu ý: mã phòng không được trùng nhau!)");
			}

			function check_val_stt(){
				var val = document.querySelector('.tinh_trang_room').value;
				console.log(val);
				if(val != 0 && val != 1){
					swal("Lỗi.....!",
					"Trường thông tin chỉ chứa giá trị 0 hoặc 1");
				}
			}

			function auto_set_ma_ha(){
				var val = document.querySelector("select[name='ma_tt']");
				document.querySelector("input[name='ma_ha']").textContent = val.textContent;
				var demo = document.querySelector("input[name='ma_ha']").value = val.value;
				console.log(demo)
			}
</script>

		<?php 
		if(isset($data["result"])){
			echo $data["result"];
			if($data["result"] == true){
				echo '<script type="text/javascript"> thanhcong(); </script>';
			}else{
				echo '<script type="text/javascript"> thatbai(); </script>';
			}
		}
		?>

