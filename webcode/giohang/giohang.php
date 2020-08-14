<?php 
      @session_start();
      ob_start();
      $id_sanpham= $_GET['themgiohang'];
     
      if($id_sanpham!=""){
            include("dbconnect.php");
            $sql= " SELECT * from tbl_sanpham where id_sanpham='$id_sanpham'" ;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
           
            if($stmt->rowCount()==1){
               if(isset($_SESSION['giohang'][$id_sanpham])){
                  $_SESSION['giohang'][$id_sanpham]["soluong"]++;
               }
               else
               {
                  $_SESSION['giohang'][$id_sanpham]["soluong"]=1;
               }
                header("Location: index.php?p=giohang/chitietgiohang.php");

            }
            else{
               header("Location: index.php?p=product/home.php");
            }
          
          
      }else
      {
               header("Location: index.php?p=product/home.php");
            }
      
      ob_end_flush();
 ?>
 