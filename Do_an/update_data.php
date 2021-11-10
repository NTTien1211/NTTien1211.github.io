<?php 
        require("config.php");
        require("login_submit.php");
        $Tenhienthi = $_POST['txtTenhienthi'];
        $Ngaysinh=  $_POST['txtNgaysinh'];
        $Gioitinh=  $_POST['Gender'];
        $Nghenghiep=  $_POST['txtNghenghiep'];
        $Chuyenmon=  $_POST['txtChuyenmon'];
        $Anhdaidien=  $_POST['files'];
         $Vetoi=  $_POST['editor'];
         $Vetoiii = preg_replace('/(<\/?h1>)/', '', $Vetoi);
          $Sodienthoai=  $_POST['txtSodienthoai'];
          $Diachi=  $_POST['txtDiachi'];
          $Website=  $_POST['txtWebsite'];
          $facebook=  $_POST['txtFacebook'];
          $Email=  $_POST['txtEmail'];

          $usernamee = $_SESSION["username"];
          $usernamee = preg_replace('/\s+/', '', $usernamee);
        
          $sqll = "select * from $usernamee";
          $resultt=mysqli_query($conn , $sqll);
          $roww = mysqli_num_rows($resultt);
        if ($roww < 1) {
                if(isset($_POST['submit_savethongtin'])){
                    $sql = "insert into $usernamee (Tenhienthi,  Ngaysinh,Gioitinh, Nghenghiep ,Kynangchuyenmon,Anhdaidien,Vetoi,Sodienthoai ,Diachi,Website,Facebook,Email)    
                                value( '$Tenhienthi',   '$Ngaysinh' ,'$Gioitinh' ,   '$Nghenghiep' ,'$Chuyenmon',   '$Anhdaidien' ,   '$Vetoi' , '$Sodienthoai' ,  '$Diachi',   '$Website' ,   '$facebook' ,  '$Email'  )";
                $result=mysqli_query( $conn, $sql);
                }
                if($result){
                    mysqli_close($conn);
                    echo "<script language='javascript'>alert('Thêm thông tin lần đầu  thành công!');location.href='course.php';";
                    echo "</script>";
                }
                else{
                    echo "Update Thất bại!!! "  . mysqli_error($conn);
                    
                }


         }
         else{
            
            if(isset($_POST['submit_savethongtin'])){
                $sql = "update $usernamee set Tenhienthi = '$Tenhienthi', Ngaysinh = '$Ngaysinh', Gioitinh = '$Gioitinh' , Nghenghiep = '$Nghenghiep' ,
                Kynangchuyenmon = '$Chuyenmon', Anhdaidien = '$Anhdaidien' , Vetoi = '$Vetoi' ,
                 Sodienthoai = '$Sodienthoai' ,Diachi = '$Diachi', Website = '$Website' , Facebook = '$facebook' ,Email = '$Email'  " ;
                $result=mysqli_query( $conn, $sql);
                }
                if($result){
                    mysqli_close($conn);
                    echo "<script language='javascript'>alert('Update dữ liệu thành công!');location.href='course.php';";
                    echo "</script>";
                }
                else{
                    echo "Update Thất bại!!! "  . mysqli_error($conn);
                    
                }
         }
       



?>