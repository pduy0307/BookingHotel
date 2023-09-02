<?php
class lienheModel extends connectDB{

    // insert tin nhắn từ khách hàng 
    public function themLienHe($hoten,$email,$sdt,$noidung,$idlienhe,$ngay){
        $sql  = "INSERT INTO lien_he(ho_ten,email,sdt,noi_dung,id_lien_he,ngay) VALUES
        ('$hoten','$email','$sdt','$noidung','$idlienhe','$ngay')";

        $ketqua = $this->connect->query($sql);

        if($ketqua){
            return true;
            
        }else{
            return false;
        }
    }

    function getListRoom_emp(){
        $sql = 'SELECT *  FROM phong WHERE tinh_trang = 0';
        $result = $this->connect->query($sql);

        // trả về mảng phòng
        $listroom  = array();
        if ($result->num_rows > 0) {
            // show dữ liệu trên trang
            while($row = $result->fetch_assoc()) {           
                $listroom[] = $row;
            }
        } else {
            echo "0 results";
        }
     return json_encode($listroom);
    }
    
}
?>