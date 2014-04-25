<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongHosnv extends FTable {

    var $id = 0;
    var $hoten = 0;
    var $gioitinh = 0;
    var $ngaysinh = null;
    var $noisinh = null;
    var $nguyenquan = null;
    var $truquan = null;
    var $tongiao = null;
    var $iddantoc = 0;
    var $socmnd = 0;
    var $ngaycap = null;
    var $idtinhthanh = 0;
    var $dangvien = 0;
    var $ngayvao = null;
    var $idchucvu = 0;
    var $idphongban = 0;
    var $phanxuong = null;
    var $hesl = 0;
    var $mucluong = 0;
    var $phucap = 0;
    var $thuclinh = 0;
    var $ngayhuongluong = null;
    var $idhocvan = 0;
    var $idchuyenmon = 0;
    var $idngoaingu = 0;

    function __construct(&$db) {
        parent::__construct("#__hosnv", "id", $db);
    }

}

?>