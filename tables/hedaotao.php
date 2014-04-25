<?php

//--------------------------------------------
//Designed by Generate Script Tool
//Copyright (c) 2014 by Admin
//--------------------------------------------

class TableTienluongHedaotao extends FTable {

    var $id = 0;
    var $tenhedaotao = null;

    function __construct(&$db) {
        parent::__construct("#__hedaotao", "id", $db);
    }

}

?>