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

    function options($options,$selectResult = '')
    {
        $optionsXHTML = '';
        foreach ($options as $key => $option) {
            $selected = strval($key) == $selectResult ? 'selected' : '';
            $optionsXHTML .= sprintf('<option value="%s" %s>%s</option>', $key, $selected, $option);
        }
        echo $optionsXHTML;
    }
?>