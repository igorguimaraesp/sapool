<?php

    include "template_forms.php";
    include "template_widgets.php";
    include "db_request.php";


    #CONVERSORES
    function converterdata($data){
        $quebrardata = explode("/", $data);
        $novadata = "$quebrardata[1]" . "/" . "$quebrardata[0]" . "/" . "$quebrardata[2]";
        return $novadata;
    }

    function converterdataehora($data){
        $quebrardata = explode("-", $data);
        $novahora = explode(" ", $quebrardata[2]);
        $dia = explode(" ", $quebrardata[2]);
        $novadata = "$dia[0]" . "/" . "$quebrardata[1]" . "/" . "$quebrardata[0]" . " às " . "$novahora[1]";
        return $novadata;
    }


    #MENU
    function nav_solo($titulo, $link, $icon){
        $pos = strrpos($_SERVER['REQUEST_URI'], '/');
        $id = $pos === false ? $_SERVER['REQUEST_URI'] : substr($_SERVER['REQUEST_URI'], $pos + 1);
        $linkurl = explode("?", $id);
        $linkurl = $linkurl[0];
        $linkurl = explode("-", $linkurl);
        if ($linkurl[0] == "$link") {
            echo "<li class='nav-active'>";
        }
        else {
            echo "<li>";
        }
        echo'
        <a href="'.$link.'">
            <i class="fa fa-'.$icon.'" aria-hidden="true"></i>
            <span>'.$titulo.'</span>
        </a>
        </li>
        ';
    }

    function nav_sub_start($titulo, $link, $icon){
        $pos = strrpos($_SERVER['REQUEST_URI'], '/');
        $id = $pos === false ? $_SERVER['REQUEST_URI'] : substr($_SERVER['REQUEST_URI'], $pos + 1);
        $linkurl = explode("-", $id);
        if ($linkurl[0] == "$link") {
            echo "<li class='nav-active nav-parent'>";
        }
        else {
            echo "<li class='nav-parent'>";
        }
        echo'
            <a>
                <i class="fa fa-'.$icon.'" aria-hidden="true"></i>
                <span>'.$titulo.'</span>
            </a>
                <ul class="nav nav-children">
        ';
    }

    function nav_sub_end(){
        echo'
                </ul>
            </li>
        ';
    }

    function nav_sub_item($titulo, $link){
        echo'<li><a href="'.$link.'">'.$titulo.'</a></li>';
    }

    #TEMPLATE
    function breadcrumbs($titulo, $item1, $item2, $item3){
        echo'
            <header class="page-header">
                <h2>'.$titulo.'</h2>

                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="dashboard">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>'.$item1.'</span></li>
                        <li><span>'.$item2.'</span></li>
                        <li><span>'.$item3.'</span></li>
                    </ol>

                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                </div>
            </header>
        ';
    }

    function panel_header($titulo){
        echo'
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-title">'.$titulo.'</h2>
            </header>
        ';
    }

?>