<?php
class hinhanhModel extends connectDB{


    // hàm get danh sách hình ảnh
     function getAllImage(){
         $sql = "SELECT DISTINCT * FROM `hinh_anh` GROUP by hinh_anh.ma_hinh_anh LIMIT 6" ; 
         $result = $this->connect->query($sql);
         $hinhanh = array();
            if ($result->num_rows > 0) {
               
                while($row = $result->fetch_assoc()) {           
                    $hinhanh[] = $row;
                }
            } else {
                return false;
            }
            return json_encode($hinhanh);
     }
     // ham chi tiet hinh anh 
     function getOneIamge($ma){
        
            $sql = "SELECT * FROM `hinh_anh` WHERE ma_hinh_anh='$ma'" ; 
            $result = $this->connect->query($sql);
            $one_hinhanh = array();
               if ($result->num_rows > 0) {
                  
                   while($row = $result->fetch_assoc()) {           
                       $one_hinhanh[] = $row;
                   }
               } else {
                   return false;
               }
               return json_encode($one_hinhanh);
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
