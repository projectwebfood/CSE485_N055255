<?php
    include_once "database.php";
    class M_congthuc extends database{
        function getMenu(){
            $sql = "SELECT ct.id, ct.TieuDe, ct.Hinh, lm.*  FROM congthuc ct inner join loaimon lm
                            on ct.idLoaiMon = lm.id
                            GROUP BY lm.id ";
            $this->setQuery($sql);
		    return $this->loadAllRows();
        }

        function getDanhSach(){
            $sql = "SELECT * FROM congthuc";
            $this->setQuery($sql);
		    return $this->loadAllRows();
        }

        function getCongThucByIdLoaiMon($id_loaimon){
            $sql = "SELECT * FROM congthuc WHERE idLoaiMon = $id_loaimon";
            $this->setQuery($sql);
		    return $this->loadAllRows(array($id_loaimon));            
        }

        function getTitleById($id_loaimon){
            $sql = "SELECT Ten FROM loaimon WHERE id = $id_loaimon";
            $this->setQuery($sql);
		    return $this->loadRow(array($id_loaimon));
        }

        function getChiTietCt($id){
            $sql = "SELECT * FROM congthuc WHERE id = $id";
            $this->setQuery($sql);
		    return $this->loadRow(array($id));
        }

        function search($key){
            $sql = "SELECT ct.* FROM congthuc ct INNER JOIN loaimon lm
                            ON ct.idLoaiMon = lm.id
                            WHERE ct.TieuDe like '%$key% or lm.Ten like '%$key%' ";
            $this->setQuery($sql);
		    return $this->loadAllRows(array($key));
        }
    }
?>