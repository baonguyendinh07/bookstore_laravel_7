<?php
    function showStatus($status/*, $link = '', $column = 'status' */)
    {
        if ($status === 'active' || $status == 1) {
            $aClass = "success";
        } elseif ($status === 'inactive' || $status == 0) {
            $aClass = "danger";
        }
        //return sprintf('<a href="%s" class="btn btn-%s rounded-circle btn-sm btn-ajax-%s"><i class="fas fa-check""></i></a>', $link, $aClass, $column);
        return $aClass;
    }
?>