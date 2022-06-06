
 <!-- breadcrumbs -->
        <div class="wrapBreadCrumb">
            <div class="wrapImgResize wrapImgBreadcrumb">
                <img src="public/assets/images/image_nen.jpg" class="imgBreadcrumbs" alt="Liên Hệ" />
            </div>

            <div class="wrapTextBreadcrumb">
                <div class="container-xl containerTextBreadcrumb">
                    <h1 class="wrapTitleType2 titlePageCurrentBreadcrumb">Liên Hệ</h1>

                    <nav aria-label="breadcrumb" class="navListBreadcrumb">
                        <ol class="breadcrumb olListBreqadcrumb">
                            <li class="breadcrumb-item itemListBreadcrumb"><a href="./home_index" 
							class="linkListBreadcrumb" >Trang chủ</a></li>
                            <li class="breadcrumb-item itemListBreadcrumb active" aria-current="page">Liên Hệ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end breadcrumbs -->

        <!-- page contact -->
        <div class="wrapPageContact">
            <div class="container-xl containerPageContact">
                <div class="contentPageContact">
        			<div class="row rowInfoHotel">
        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Địa chỉ</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p>Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh, Vietnam</p>

                                            </div>
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Hotline</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-phone"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p><a href="tel:02588688888" >0902 700 485</a></p>
                                        </div>										
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Email</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="fas fa-envelope"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p><a href="mailto:info@homestayqt.com" title="info@homestayqt.com">2DTY@gmail.com</a></p>
                                        </div>										
									</div>
								</div>
        					</div>
        				</div>

        				<div class="col-sm-6 col-lg-3 colInfoHotel">
        					<div class="contentInfoHotel">
        						<h2 class="wrapTitleType1 titleItemContact">Giờ mở cửa</h2>

								<div class="media mediaInfoHotel">
									<div class="media-left">
                                        <div class="wrapIconItemContact">
                                            <i class="far fa-clock"></i>
                                        </div>
									</div>

									<div class="media-body">
                                        <div class="wrapTextItemContact">
                                            <p>6:00 sáng đến 11:00 tối</p>
                                        </div>
									</div>
								</div>
        					</div>
        				</div>
        			</div>

        			<div class="wrapFrmAndMap">
        				<div class="row rowFrmAndMapContact">
        					<div class="col-sm-5 colFrmContact">
        						<div class="contentFrmContact">
        							<div class="frmSendMessage">
	        							<h2 class="wrapTitleType1 titleItemContact">Gửi tin nhắn</h2>

	        							<h3 class="textSendMessage">Nếu bạn có bất kỳ câu hỏi nào, vui lòng gửi tin nhắn với của chúng tôi. Chúng tôi luôn ở đây để trả lời câu hỏi của bạn.</h4>

	        						<form action="./lienhe/tinnhan" method="POST" name="lien_he_form" onsubmit=" return check_lh()"> 
									<div class="form-group">
											<label class="titleInputSendMessage">Họ và tên</label>
											<input type="text" class="form-control" name="hoten" />
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage">Email</label>
											<input type="email" class="form-control" name="email"/>
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage">Số điện thoại</label>
											<input type="text" class="form-control" name="sdt" />
										</div>

										<div class="form-group">
											<label class="titleInputSendMessage"  >Tin nhắn</label>
											<textarea class="form-control" rows="5" name="noidung"></textarea>
										</div>

										<button type="submit" class="btnType1 btnSendFrm" name="sent-lien-he" >
											<i class="far fa-paper-plane"></i> Gửi ngay</button>
									</form>
									</div>
        						</div>
        					</div>

        					<div class="col-sm-7 colMapContact">
							<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.231171196225!2d106.8008654153029!3d10.870014160430387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2sUniversity%20of%20Information%20Technology%20-%20VNUHCM!5e0!3m2!1sen!2s!4v1653475657259!5m2!1sen!2s" 
								width="600" height="450" style="border:0;" 
								allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        					</div>
        				</div>
        			</div>
        		</div>
            </div>
        </div>
		<!-- end page contact -->


		<script src="public/assets/js/contact.js"></script>
		<!-- Ngoại vi cho php java script -->
	
		<script type="text/javascript">

			function thanhcong(){
				swal("Cảm ơn bạn đã liên hệ!",
				"Bộ phận chúng tôi sẽ xem và xủa lý yêu cầu của bạn trong thơi gian sớm nhất");
			}	

			function them_that_bai(){
				swal("Đã xảy ra lỗi! ",
				"Chúng tôi không thể xử lý yêu cầu của bạn lúc này. Hãy thử lại hoặc liên hệ chúng tôi quan số điện thoại ! ");
			}

			function check_lh(){
				var hoten = document.forms["lien_he_form"]["hoten"].value;
				if (hoten== "") {
					swal("Lỗi....!", 
					"Vui lòng cho chúng tôi biết họ tên của bạn");
					return false;
				}
				var email = document.forms["lien_he_form"]["email"].value;
				if (email== "") {
					swal("Lỗi....!", 
					"Để lại email chúng tôi sẽ liên hệ lại với bạn");
					return false;
				}
				var sdt = document.forms["lien_he_form"]["sdt"].value;
				if (sdt== "") {
					swal("Lỗi....!", 
					"Để lại Số điện thoại chúng tôi sẽ liên hệ lại với bạn");
					return false;
				}
				var noidung = document.forms["lien_he_form"]["noidung"].value;
				if (noidung== "") {
					swal("Lỗi....!", 
					"Cho chúng tôi biết bạn muốn gì ở chúng tôi hay có bất kì câu hỏi nào?");
					return false;
				}
				return true
			}


		</script>
			<?php if(  isset($data["ketqua"])){		
				if($data["ketqua"] == 1){
				
				echo '<script type="text/javascript">    thanhcong();      </script>';
				}else{
				
					echo '<script type="text/javascript">    them_that_bai();      </script>';
				}
	
			} ?>