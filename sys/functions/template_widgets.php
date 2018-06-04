<?php

    function widgetcounter($titulo, $contador, $link, $icon){
        echo'
            <div class="col-md-12 col-lg-6 col-xl-6">
                <section class="panel panel-featured-left panel-featured-primary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fa fa-'.$icon.'"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">'.$titulo.'</h4>
                                    <div class="info">
                                        <strong class="amount">'.$contador.'</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase" href="'.$link.'">(ver todos)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            ';
    }

    function statsbar($stat, $value){
        return'
            <div class="progress progress-xl progress-squared m-md">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="10" style="width: '.$value.'0%;">
                     '.$stat.': '.$value.'
                </div>
            </div>
            ';
    }

    function modal ($id, $titulo, $texto){
        $pos = strrpos($_SERVER['REQUEST_URI'], '/');
        $link = $pos === false ? $_SERVER['REQUEST_URI'] : substr($_SERVER['REQUEST_URI'], $pos + 1);
        $link = explode('?', $link);
        $link = $link[0];
        return '
        <div class="modal fade" id="modal'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">'.$titulo.'</h4>
                    </div>
                    <div class="modal-body">
                            <p>
                                '.$texto.'
                            </p>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-default" href="db/'.$link.'-del?del='.$id.'">Sim</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
?>