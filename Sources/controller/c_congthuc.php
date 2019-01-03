<?php
    //include_once "config/database.php";
    include_once "model/m_congthuc.php";
    class C_congthuc{
        public function index(){
            $m_congthuc = new M_congthuc();
            $menu = $m_congthuc->getMenu();
            $cthuc = $m_congthuc->getDanhSach();
            return array('menu'=>$menu, 'cthuc'=>$cthuc);
        }

        function loaimon(){
            $id_loaimon = $_GET['id_loaimon'];
            $m_congthuc = new M_congthuc();
            $danhmuc = $m_congthuc->getCongThucByIdLoaiMon($id_loaimon);
            $title = $m_congthuc->getTitleById($id_loaimon);
            $menu = $m_congthuc->getMenu();
            return array('danhmuc'=>$danhmuc, 'title'=>$title, 'menu'=>$menu);
        }
 
        function chiTietCt(){
            $id = $_GET['id'];
            $m_congthuc = new M_congthuc();
            $chiTietCt = $m_congthuc->getChiTietCt($id);
            return array('chiTietCt'=>$chiTietCt);
        }

        function timkiem($key){
            $m_congthuc = new M_congthuc();
            $congthuc = $m_congthuc->search($key);
            return $congthuc;
        }
    }
?>