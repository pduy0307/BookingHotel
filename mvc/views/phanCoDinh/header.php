<div class="wrapHeader">
            <div class="wrapHeaderTop"></div>

            <div class="wrapHeaderBottom">
                <div class="container-xl containerHeaderBottom">
                    <div class="clearfix contentHeaderBottom">
                        <a href="#" title="Menu" class="btnShowMenuHeaderMobile">
                            <div class="iconShow"><i class="fas fa-bars"></i></div>
                            <div class="iconHidden"><i class="fas fa-times"></i></div>
                        </a>

                        <h1 class="wrapLogoHeaderBottom">
                            <a class="linkLogoHeaderBottom" href="./home_index" >
                            <img src="public/assets/images/2DTY.jpg" class="imgLogoHeaderBottom" 
                            /></a>
                        </h1>

                        <div class="wrapBtnBookRoomHeader">
                            <button type="button" name="book-now" class="btnType1 btnBookNowRoomHeader"  data-toggle="modal" data-target="#modalFormBookRoom"
                            >Đặt phòng ngay</button>
                        </div>

                        <div class="wrapCloseMenuHeaderMobile"></div>
                        <div class="wrapMenuMainHeaderBottom">
                            <ul class="listMenuMainHeaderBottom">
                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./home_index" 
                                    title="Trang chủ">Trang chủ</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom menuSubHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./room" title="Phòng">Phòng</a>
                                    <div class="btnDropdowMenuSubHeaderBottom"><i class="fas fa-chevron-down"></i></div>

                                    <div class="wrapListMenuSubHeaderBottom">
                                        <ul class="listMenuSubHeaderBottom">
                                            <?php $listroom =json_decode( $data["listroom_emp"],true) ?>
                                            <?php foreach($listroom as $row) { ?>
                                            <li class="listItemMenuSubHeaderBottom">
                                            <a class="listLinkMenuSubHeaderBottom"
                                             href="./room/chitiet/<?php echo $row["ma_phong"]  ?>" name="<?php echo $row["ma_phong"]  ?>" >
                                             <?php echo $row["ten_phong"] ?></a></li>

                                            <?php } ?>
                                        </ul>
                                    </div>
                                </li>
                                
                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./hinhanh" title="Hình ảnh">Hình ảnh</a>
                                </li>

                                <li class="listItemMenuMainHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="./lienhe" title="Liên hệ">Liên hệ</a>
                                </li>
                            </ul>

                            <div class="headerTopLeft">
                                <ul class="clearfix listMenuHeaderTop">
                                    <li class="listItemHeaderTop"><a target="_blank" class="listLinkHeaderTop" href="https://www.google.com/maps/place/University+of+Information+Technology+-+VNUHCM/@10.8700089,106.8008654,17z/data=!3m1!4b1!4m5!3m4!1s0x317527587e9ad5bf:0xafa66f9c8be3c91!8m2!3d10.8700089!4d106.8030541" title="Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh, Vietnam" target="_blank"><i class="fas fa-map-marker-alt"></i> Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh, Vietnam</a></li>
                                    <li class="listItemHeaderTop"><a class="listLinkHeaderTop" href="tel:0902700485" title="0902 700 485"><i class="fas fa-phone"></i> Hotline: 0902 700 485</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="headerTopRight">
                            <ul class="clearfix listMenuHeaderTop menuSearchAndLanguage">
                                <li class="listItemHeaderTop menuSubHeaderBottom menuLanguageHeaderBottom">
                                    <a class="listLinkMenuMainHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langVietNam.jpg" class="imgLanguageHeaderBottom" alt="Viet Nam" /></a>
                                    <div class="btnDropdowMenuSubHeaderBottom"><i class="fas fa-chevron-down"></i></div>

                                    <div class="wrapListMenuSubHeaderBottom">
                                        <ul class="listMenuSubHeaderBottom">
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langVietNam.jpg" alt="Viet Nam" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langEnglish.jpg" alt="English" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="Viet Nam"><img src="public/assets/images/langChinese.jpg" alt="Chinese" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langKorean.jpg" alt="Korean" /></a></li>
                                            
                                            <li class="listItemMenuSubHeaderBottom"><a class="listLinkMenuSubHeaderBottom" href="javascript:void(0)" title="English"><img src="public/assets/images/langRussian.jpg" alt="English" /></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>