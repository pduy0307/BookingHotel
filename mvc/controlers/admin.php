<?php 

class admin extends controler{
    public $doituong;
    public $tam;
    public $listroom;
    

    public function __construct(){
        $this->doituong = $this->model("adminModel");
        $this->listroom = $this->model("homeModel");
    }
    
    // hàm mặc định khi chạy controler
    public function home(){

        if(isset($_SESSION["ten"])){
            $this->view("admin_index",["page"=>"index",
            "booking_room"=>$this->doituong->getBookRoom(),
            "booking_room1"=>$this->doituong->getBookRoom1(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),

            "total_thanhtoan"=>$this->doituong->getToatalDoanhThu(),
            "total_lienhe"=>$this->doituong->getToatal_tinnhan(),
            "total_chuathanhtoan"=>$this->doituong->getToatal_chuaThanhToan(),
            "total_datphong"=>$this->doituong->getToatal_datphong(),


            "user_info"=>$_SESSION["ten"]]);
        } else{
            if(isset($_POST["login-admin"])){
            
                $username = trim($_POST["username"]);
                $password = trim($_POST["pass"]);
                
                $result = $this->doituong->check_login($username,$password);
                $this->tam = $result;
    
                try{
                    if($result != null){
                        foreach($result as $row){
                            $_SESSION["ten"] = $row["ten"];
                            $this->tam = $row["ten"];
                          
                        }
                    }
                }catch(Exception $e){

                }
               
               if($result == false){
                $this->view("admin_login",["page"=>"login","errow"=>false]);
               }else{
                $this->view("admin_index",["page"=>"index",
                "booking_room"=>$this->doituong->getBookRoom(),
                "booking_room1"=>$this->doituong->getBookRoom1(),
                "number_booking"=>$this->doituong->getNumberBookingRoom(),
                "number_lienhe"=>$this->doituong->getNumber_lienhe(),
                "alllienhe"=>$this->doituong->getAllLienHe(),
                "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),

                "total_thanhtoan"=>$this->doituong->getToatalDoanhThu(),
                "total_lienhe"=>$this->doituong->getToatal_tinnhan(),
                "total_chuathanhtoan"=>$this->doituong->getToatal_chuaThanhToan(),
                "total_datphong"=>$this->doituong->getToatal_datphong(),
                "user_info"=>$_SESSION["ten"]]);
            
               }
                
            }else{
                $this->view("admin_login",["page"=>"login"]);
            } 
        }
    }
    // ham logout
    function logout(){
        if(isset($_SESSION['ten'])){
            unset($_SESSION['ten']);
        $this->view("admin_login",["page"=>"login"]);
        }
    }

    // hàm tạo tài khảon
    function taotaikhoan(){
        if(isset($_POST["btn_dangki"])){
            $user = $_POST["username_create"];
            $pass = $_POST["pass_create"];
            $email = "null";
            $sdt  = "null";
            $ten ="Người Quản Trị ";

            $result = $this->doituong->taotaikhoan_admin($user, $pass, $email , $sdt , $ten);
            $this->view("admin_login",["page"=>"create_user",
            "result"=>$result]);

           
        }else {
            $this->view("admin_login",["page"=>"create_user"]);
        }
    }

    //********************************************* BOOKING ODER AND VIEW ************************** */

    function datphong(){
        
            $this->view("admin_index",["page"=>"view_booking",
            "booking_room"=>$this->doituong->getBookRoom(),
            "booking_room1"=>$this->doituong->getBookRoom1(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$_SESSION["ten"]]);
        
    }

    
    //*******************************************END BOOKING ODER AND VIEW ************************** */

    // ************************************************** Booking room Details ********************
        // ham xac nhan trạng thái đặt phòng
        function xacnhan($ma,$trangthai){
           if($trangthai=="0"){
               $xn = 1;
           } else{
               $xn = 0;
           }

           $result = $this->doituong->xacnhan($ma,$xn);
           $this->view("admin_index",["page"=>"index",
                "booking_room"=>$this->doituong->getBookRoom(),
                "booking_room1"=>$this->doituong->getBookRoom1(),
                "number_booking"=>$this->doituong->getNumberBookingRoom(),
                "number_lienhe"=>$this->doituong->getNumber_lienhe(),
                "alllienhe"=>$this->doituong->getAllLienHe(),
                "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),

                "total_thanhtoan"=>$this->doituong->getToatalDoanhThu(),
                "total_lienhe"=>$this->doituong->getToatal_tinnhan(),
                "total_chuathanhtoan"=>$this->doituong->getToatal_chuaThanhToan(),
                "total_datphong"=>$this->doituong->getToatal_datphong(),
                "user_info"=>$_SESSION["ten"]]);

             }

        // hàm thanh toán phòng 
        function thanhtoanPhong($ma){
            $this->view("admin_index",["page"=>"index",
                "result_tt"=>$this->doituong->thanhtoan_phong($ma),
                "booking_room"=>$this->doituong->getBookRoom(),
                "booking_room1"=>$this->doituong->getBookRoom1(),
                "number_booking"=>$this->doituong->getNumberBookingRoom(),
                "number_lienhe"=>$this->doituong->getNumber_lienhe(),
                "alllienhe"=>$this->doituong->getAllLienHe(),
                "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
                "total_thanhtoan"=>$this->doituong->getToatalDoanhThu(),
                "total_lienhe"=>$this->doituong->getToatal_tinnhan(),
                "total_chuathanhtoan"=>$this->doituong->getToatal_chuaThanhToan(),
                "total_datphong"=>$this->doituong->getToatal_datphong(),
                "user_info"=>$_SESSION["ten"]]);
            
          }


        // hàm chỉnh sửa nội dung
        function editbooking($ma){
            if(isset($_POST["btn_update_booking"])){
                    $ma_dp = $_POST["ma_dp"];
                    $ngay_check_in = $_POST["ngay_check_in"];
                    $email = $_POST["email"];
                    $ngay_check_out = $_POST["ngay_check_out"];
                    $sdt = $_POST["sdt"];
                    $nguoi_lon = $_POST["nguoi_lon"];
                    $hoten = $_POST["hoten"];
                    $treem = $_POST["treem"];
                    $ngay_dat = $_POST["ngay_dat"];
                    $loai_phong = $_POST["loai_phong"];
                    $ghichu = $_POST["ghichu"];

                    $result= $this->doituong-> updateBooking($ma_dp,$ngay_check_in, $ngay_check_out 
                    ,$sdt, $nguoi_lon,$hoten, $treem , $ngay_dat,$loai_phong  , $ghichu, $email );
                    $this->view("admin_index",["page"=>"view_booking",
                    "result_up"=> $result,
                    "booking_room"=>$this->doituong->getBookRoom(),
                    "booking_room1"=>$this->doituong->getBookRoom1(),
                    "number_booking"=>$this->doituong->getNumberBookingRoom(),
                    "number_lienhe"=>$this->doituong->getNumber_lienhe(),
                    "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
                    "updateFull"=>$this->listroom->updateSTT($loai_phong),
                    "user_info"=>$_SESSION["ten"]]);

            }else{
                $this->view("admin_index",["page"=>"update_booking",
                "one_booking_room"=>$this->doituong->getOneBookRoom($ma),
                "listroom"=>$this->listroom->getListRoom(),
                "listroom_emp"=>$this->listroom->getListRoom_emp(),
                "number_booking"=>$this->doituong->getNumberBookingRoom(),
                "number_lienhe"=>$this->doituong->getNumber_lienhe(),
                "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
                "user_info"=>$_SESSION["ten"]]);
            }
           
        }

        // hàm xóa booking 
        function deletebooking($ma){
            $result2 = $this->doituong->update_stt_room($ma);
            $result = $this->doituong->delete_booking($ma);
            $this->view("admin_index",["page"=>"view_booking",
                "result_b"=>$result,
                "booking_room"=>$this->doituong->getBookRoom(),
                //"one_booking_room"=>$this->doituong->getOneBookRoom($ma),
                "number_lienhe"=>$this->doituong->getNumber_lienhe(),
                "alllienhe"=>$this->doituong->getAllLienHe(),
                "number_booking"=>$this->doituong->getNumberBookingRoom(),
                "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
                "listroom"=>$this->listroom->getListRoom(),
                "user_info"=>$_SESSION["ten"]]);
        }



    // **************************************************END  Booking room Details ********************


    //****************************************************************** ROOM  */
    // them phòng
    function add_room(){
       if(isset($_POST["add_new_room"])){
            $ma_phong = $_POST["ma_phong"];
            $ten_phong = $_POST["ten_phong"];
            $gia_phong = $_POST["gia_phong"];
            $ma_hinh_anh = $_POST["ma_tt"];
            $ma_thuoc_tinh = $_POST["ma_tt"];
            $noi_dung = $_POST["noi_dung"];
            $suc_chua_room = $_POST["suc_chua_room"];
            $tinh_trang_room = $_POST["tinh_trang_room"];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            //$id_phong = date("dmy").date('His');
        //echo $ma_hinh_anh;
        $ma_room = [];
        $ma_room = $this->doituong->getMaPhong();
        $dem = 0;
        $i = 0;
        foreach($ma_room as $row){
            if($ma_phong == $row['ma_phong'])
                $dem = 1;
        }

        if($dem == 0)
            $result =  $this->doituong->add_room_model($ma_phong,$ten_phong,$gia_phong,$ma_hinh_anh,$ma_thuoc_tinh,$noi_dung, $suc_chua_room, $tinh_trang_room);    
        if($dem == 1)
            $result = 0;
        $this->view("admin_index",["page"=>"add_room",
        "result"=>$result,
        "booking_room"=>$this->doituong->getBookRoom(),
        "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
        "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
        "number_booking"=>$this->doituong->getNumberBookingRoom(),
        "number_lienhe"=>$this->doituong->getNumber_lienhe(),
        "alllienhe"=>$this->doituong->getAllLienHe(),
        "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
        "user_info"=>$_SESSION["ten"]]);
       }else{
        $this->view("admin_index",["page"=>"add_room",
        "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
        "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
        "booking_room"=>$this->doituong->getBookRoom(),
        "number_booking"=>$this->doituong->getNumberBookingRoom(),
        "number_lienhe"=>$this->doituong->getNumber_lienhe(),
        "alllienhe"=>$this->doituong->getAllLienHe(),
        "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
        "user_info"=>$_SESSION["ten"]]);
       }
    }
       // hiển thị danh sách các phòng 
       function allroom(){
        $this->view("admin_index",["page"=>"view_rooms",
        "allroom"=>$this->doituong->getAllRoom(),
        "booking_room"=>$this->doituong->getBookRoom(),
        "number_booking"=>$this->doituong->getNumberBookingRoom(),
        "number_lienhe"=>$this->doituong->getNumber_lienhe(),
        "alllienhe"=>$this->doituong->getAllLienHe(),
        "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
        "user_info"=>$_SESSION["ten"]]);
       }

       // cạp nhật thông tin phòng 
       function updateRooms($ma){
            if(isset($_POST["btn_update_room"])){
                $ma_phong = $_POST["ma_phong"];
                $ten_p = $_POST["ten_phong"];
                $gia_p = $_POST["gia_phong"];
                $ma_ha = $_POST["ma_tt"];
                $ma_tt = $_POST["ma_tt"];
                $noi_dung = $_POST["noi_dung"];
                $suc_chua_room =  $_POST["suc_chua_r"];
                $tinh_trang_room = $_POST["tinh_trang_r"];

                $result = $this->doituong->UpdateRooms($ma_phong,$ten_p, $gia_p, $ma_tt, $ma_ha , $noi_dung, $suc_chua_room, $tinh_trang_room);
                $this->view("admin_index",["page"=>"view_rooms",
                "result_up_r"=>$result,
                "allroom"=>$this->doituong->getAllRoom(),
                "number_booking"=>$this->doituong->getNumberBookingRoom(),
                "number_lienhe"=>$this->doituong->getNumber_lienhe(),
                "alllienhe"=>$this->doituong->getAllLienHe(),
                "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
                "user_info"=>$_SESSION["ten"]]);

            }else{

            $this->view("admin_index",["page"=>"update_room",
            "oneroom_select"=>$this->doituong->getOneRooms($ma),
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$_SESSION["ten"]]);
            }
       }

       // xóa phòng được chọn 
       function deleteRoom($ma){
        $result = $this->doituong->delete_room($ma);
        $this->view("admin_index",["page"=>"view_rooms",
        "result_de"=>$result,
        "allroom"=>$this->doituong->getAllRoom(),
        "number_booking"=>$this->doituong->getNumberBookingRoom(),
        "number_lienhe"=>$this->doituong->getNumber_lienhe(),
        "alllienhe"=>$this->doituong->getAllLienHe(),
        "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
        "user_info"=>$_SESSION["ten"]]);

       }
    

    //****************************************************************** END  ROOM  */



    //****************************************************************** IMAGE  */
    // thêm hình ảnh
    function add_image(){
       if(isset($_POST["addImage"])){
       
            $image = $_FILES['image']['name'];
            $ma_anh  =  $_POST['ma_ha'];
            $ten_anh  = $_POST['ten_anh'];
            $target = "public/assets/images/".basename($image);
            $id = time();
           if($ma_anh == null || $ma_anh =="" || $image ==null || $image ==""){
                $this->view("admin_index",["page"=>"add_image","user_info"=>$_SESSION["ten"],
               "result"=>false]);
            } else{
            $result = $this->doituong->add_image_model($ma_anh, $ten_anh , $image , $id);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }

            $this->view("admin_index",["page"=>"add_image",
            //"listma_tt"=>$this->doituong->getMaThuocTinh(),
            "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$_SESSION["ten"],
            "result"=>$result]);
            }
       }else{
        $this->view("admin_index",["page"=>"add_image",
        "listma_tt"=>$this->doituong->getMaThuocTinh(),
        "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
        "number_booking"=>$this->doituong->getNumberBookingRoom(),
        "number_lienhe"=>$this->doituong->getNumber_lienhe(),
        "alllienhe"=>$this->doituong->getAllLienHe(),
        "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
        "user_info"=>$_SESSION["ten"]]);
       }
    }


    // lấy danh sách hình ảnh hiện có trong csdl 
    function allimage(){
        $this->view("admin_index",["page"=>"view_image",
        "allImage"=>$this->doituong->getAllImage(),
        "number_booking"=>$this->doituong->getNumberBookingRoom(),
        "number_lienhe"=>$this->doituong->getNumber_lienhe(),
        "alllienhe"=>$this->doituong->getAllLienHe(),
        "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
        "user_info"=>$_SESSION["ten"]]);
    }
    
    // hàm xóa hình ảnh 
    function deleteimage($id_hinh_anh){
        $this->view("admin_index",["page"=>"view_image",
        "allImage"=>$this->doituong->getAllImage(),
        "number_booking"=>$this->doituong->getNumberBookingRoom(),
        "number_lienhe"=>$this->doituong->getNumber_lienhe(),
        "alllienhe"=>$this->doituong->getAllLienHe(),
        "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),

        "result_de_im"=>$this->doituong->delete_image($id_hinh_anh),
        "user_info"=>$_SESSION["ten"]]);
    }
    //******************************************************************END  IMAGE  */

    //****************************************************************** START THUỘC TÍNH   */
    // hàm thêm thuộc tính
    function add_thuoctinh(){
        if( isset($_POST["addThuocTinh"]) ){
            $tieu_de = $_POST["ten_ThuocTinh"];
            $noidung = $_POST["noi_dung_ThuocTinh"];
            $ma_thuoc_tinh = trim($_POST["ma_ThuocTinh"]);
            //$id  = time();
            if($tieu_de===null || $noidung === null || $ma_thuoc_tinh ===null ){
                $this->view("admin_index",["page"=>"add_thuoctinh",
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "result"=>false,
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "test"=>$ma_thuoc_tinh,
            "user_info"=>$_SESSION["ten"]]);
           
            }else {
               
            $result = $this->doituong->addThuocTinh($ma_thuoc_tinh,$tieu_de,$noidung);
                $this->view("admin_index",["page"=>"add_thuoctinh",
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
            "result"=>$result,
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$_SESSION["ten"]]);
            }
           
        }else {
            $this->view("admin_index",["page"=>"add_thuoctinh",
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "maHinhAnh"=>$this->doituong->getMaHinhAnh(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$_SESSION["ten"]]);
        }  
    }

    // view thuôc tính 
    function viewThuocTinh(){
            $this->view("admin_index",["page"=>"view_thuoctinh",
            "allthuoctinh"=>$this->doituong->getAllThuocTinh(),
            "booking_room"=>$this->doituong->getBookRoom(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$_SESSION["ten"]]);
        
    }

    // delete thuộc tính
    function deleteThuocTinh($ma){
        $kq = $this->doituong->delete_thuoctinh($ma);
        $this->view("admin_index",["page"=>"view_thuoctinh",
        "allthuoctinh"=>$this->doituong->getAllThuocTinh(),
        "result"=>$kq,
        "number_booking"=>$this->doituong->getNumberBookingRoom(),
        "number_lienhe"=>$this->doituong->getNumber_lienhe(),
        "alllienhe"=>$this->doituong->getAllLienHe(),
        "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
        "user_info"=>$_SESSION["ten"]]);
    }

    //update thuoc tinh 
    function updatethuoctinh($ma){
        if(isset($_POST["update_tt"])){
            //$ma = $_POST["ma_tt_up"];
            $ten = $_POST["ten_tt_up"];
            $noidung = $_POST["nd_tt_up"];
            $result = $this->doituong->update_thuoc_tinh($ma , $ten , $noidung );
            
            $this->view("admin_index",["page"=>"view_thuoctinh",
            "allthuoctinh"=>$this->doituong->getAllThuocTinh(),
            "result_up"=>$result,
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$_SESSION["ten"]]);

        } else {
            $this->view("admin_index",["page"=>"update_thuoctinh",
            "onethuoctinh"=>$this->doituong->getOneThuocTinh($ma),
            "maThuocTinh"=>$this->doituong->getMaThuocTinh(),
            "ma_tt"=>$ma,
            //"id_tt"=>$id,
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$_SESSION["ten"]]);
        }

        
    }

    //****************************************************************** END THUỘC TÍNH   */


     //************************************************* PHẦN CHO TRANG LIÊN HỆ TIN NHẮN ************/

        // hiển thị tất cả các tin nhắn 
        function getAll_lien_he($id){
            if(empty($id) || $id=="all"){
                $this->view("admin_index",["page"=>"view_lienhe",
            "booking_room"=>$this->doituong->getBookRoom(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$this->tam]);
            }else{
                $this->doituong->updateStatus_lien_he($id);
                $this->view("admin_index",["page"=>"chitiet_lien_he",
            "booking_room"=>$this->doituong->getBookRoom(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "one_lienhe"=>$this->doituong->getOne_lienhe($id),
            "alllienhe"=>$this->doituong->getAllLienHe(),
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$this->tam]);
            }
        }

        // xóa liên hệ tin nhắn từ khách hàng

        function delete_lienhe($id){
            $this->view("admin_index",["page"=>"view_lienhe",
            "result_de_lh"=>$this->doituong->delete_lien_he($id),
            "booking_room"=>$this->doituong->getBookRoom(),
            "number_booking"=>$this->doituong->getNumberBookingRoom(),
            "number_lienhe"=>$this->doituong->getNumber_lienhe(),
            "one_lienhe"=>$this->doituong->getOne_lienhe($id),
            "alllienhe"=>$this->doituong->getAllLienHe(),
           
            "chitietnumberbooking"=>$this->doituong->getChitietNumberBooking(),
            "user_info"=>$this->tam]);
        }

      //************************************************ END PHẦN CHO TRANG LIÊN HỆ TIN NHẮN ************/
}
?>