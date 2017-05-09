<?php

class Library_file {

		public function upload_file($picture="hinhanh"){
				echo "123";exit;
				$arr_Data = array();
				$ten_file = '';
				$ten_file = $_FILES['hinhanh']['name'];
				if($ten_file != ''){
					// xử lý đổi tên file
					//tách chuỗi thành mảng
					$arr_tach = explode('.',$ten_file);		
					//dếm số phần tử của mảng
					$count = count($arr_tach);
					$duoifile = $arr_tach[$count-1];
					// echo "Tên đuôi file là:{$duoifile}";
					//loại đuổi file ra khỏi mảng
					unset($arr_tach[$count-1]);
					//duyêt qua mảng để nối
					$str_chuoi = '';
					foreach($arr_tach as $key=>$value){
						if($key==0){
							$str_chuoi = $value;	
						}else{
							$str_chuoi = $str_chuoi.'-'.$value;
						}
					}
					$ten_file = $str_chuoi.'-'.time().'.'.$duoifile;	
					//$tmp_name : là địa chỉ tạm thời
					$tmp_name = $_FILES['hinhanh']['tmp_name'];
					//C:\xampp\htdocs\PHPFORM\images
					$path_upload = $_SERVER['DOCUMENT_ROOT'].'/public/images/'.$ten_file;
					$result = move_uploaded_file($tmp_name,$path_upload);
					$arr_Data['tenfile'] = $ten_file;

					if($result){
						$arr_Data['msg'] = 'Chuc mừng bạn upload thành công';
					}
					else{
						$arr_Data['msg'] = 'Có lỗi khi upload hình ảnh';
					}

				}		
	}
}