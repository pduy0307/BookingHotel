
 			
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                       
                    </div>
                     <div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Update Room</header>
								</div>
								<?php $roomct = json_decode($data["oneroom_select"],true);
										foreach($roomct as $row_rom_ct){ ?>
								<form action="./admin/updateRooms/<?php  echo $row_rom_ct["ma_phong"];?>" method="POST">
								<!-- from thêm Phòng-->
								

								<div class="card-body row">
						            <div class="col-lg-6 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo" 
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										  value="<?php  echo $row_rom_ct["ma_phong"];?>"  readonly name="ma_phong">
					                     <label class = "mdl-textfield__label">Mã Phòng của Bạn</label>
					                  </div>
						            </div>
						            <div class="col-lg-6 p-t-20"> 
                                    <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "text" id = "txtRoomNo"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 value="<?php  echo $row_rom_ct["ten_phong"];?>" name="ten_phong">
					                     <label class = "mdl-textfield__label">Tên Phòng</label>
					                  </div>
						           	</div>
						           	<div class="col-lg-6 p-t-20"> 
                                       <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     <input class = "mdl-textfield__input" type = "number" id = "txtRoomNo"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;" 
										 value="<?php  echo $row_rom_ct["gia_phong"];?>" name="gia_phong">
					                     <label class = "mdl-textfield__label">Giá Phòng</label>
					                  </div>
						            </div>
									<div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
									            <input class="mdl-textfield__input" type="text" id="sample3"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px; color: black"
												 value="<?php echo $row_rom_ct["ma_hinh_anh"]?>" readonly tabIndex="-1" name="ma_ha" disabled>
												 
									            <label for="sample3" class="mdl-textfield__label">Mã Hình Ảnh</label>
									        </div>
							            </div>
										<div class="col-lg-6 p-t-20"> 
							              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
										  		<?php $thuoctinh = $data["maThuocTinh"];?>
										  		<select id="sample2" name="ma_tt" class="mdl-textfield__input" placeholder="" onchange="auto_set_ma_ha()"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px; height: 33.2px" 
												value="">
														<option value="<?php  echo $row_rom_ct["ma_thuoc_tinh"];?>" hidden><?php  echo $row_rom_ct["ma_thuoc_tinh"];?></option>
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
					                     		<input class = "mdl-textfield__input" type = "number" id = "txtRoomNo"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 		value="<?php  echo $row_rom_ct["suc_chua"];?>" name="suc_chua_r">
					                     		<label class = "mdl-textfield__label">Sức chứa</label>
					                  		</div>
						           		</div>
										   <div class="col-lg-6 p-t-20"> 
                                    		<div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
					                     		<!-- <input class = "mdl-textfield__input" type = "number" id = "txtRoomNo"
												style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
										 		value="<?php  echo $row_rom_ct["tinh_trang"];?>" name="tinh_trang_r"> -->
												 <select name="tinh_trang_r" id="txtRoomNo" class = "mdl-textfield__input"
												 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px; height: 33.2px" 
												 value="<?php  echo $row_rom_ct["tinh_trang"];?>">
														<option value="<?php  echo $row_rom_ct["tinh_trang"];?>" id="opt1"></option>;
														<option id="opt2"></option>;
												</select>
					                     		<label class = "mdl-textfield__label">Tình trạng</label>
					                  		</div>
						           		</div>
                                       <div class="col-lg-12 p-t-20"> 
						              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
					                     <textarea class = "mdl-textfield__input" rows =  "4"  name="noi_dung"
										 style="border: 1px solid #A9A9A9 ;border-radius: 5px; padding: 2px;"
					                        id = "education" > <?php  echo $row_rom_ct["noi_dung"];?></textarea>
					                     <label class = "mdl-textfield__label" for = "text7">Nhập nội dung mô tả cho phòng của bạn</label>
					                  </div>
							         </div>
									 <?php }?>
							         <div class="col-lg-12 p-t-20 text-center"> 
						              	<button type="submit" name="btn_update_room" style="border-radius: 20px;"
										  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
										Cập Nhật</button>
										<button type="button" onclick="xem_ds()" style="border-radius: 20px;"
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
			<script type="text/javascript">
            function xem_ds(){
                window.location = "./admin/allroom"
            }
            var get_val_stt = document.getElementById("opt1").value;
			if(get_val_stt == 1){
				document.getElementById("opt1").textContent = "Full";
				document.getElementById("opt2").value = 0;
				document.getElementById("opt2").textContent = "Empty";
			}
			if(get_val_stt == 0){
				document.getElementById("opt1").textContent = "Empty";
				document.getElementById("opt2").value = 1;
				document.getElementById("opt2").textContent = "Full";
			}

			function auto_set_ma_ha(){
				var val = document.querySelector("select[name='ma_tt']");
				document.querySelector("input[name='ma_ha']").textContent = val.textContent;
				var demo = document.querySelector("input[name='ma_ha']").value = val.value;
			}
        </script>