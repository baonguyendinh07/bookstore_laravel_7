<?php
function showStatus($status, $link = '', $column = '')
{
    if ($status === 'active' || $status == 1) {
        $aClass = "success";
    } elseif ($status === 'inactive' || $status == 0) {
        $aClass = "danger";
    }
    echo sprintf('<a href="%s" class="btn btn-%s rounded-circle btn-sm btn-ajax-%s"><i class="fas fa-check""></i></a>', $link, $aClass, $column);
}

function options($options, $selectResult = '')
{
    $optionsXHTML = '';
    foreach ($options as $key => $option) {
        $selected = strval($key) == $selectResult ? 'selected' : '';
        $optionsXHTML .= sprintf('<option value="%s" %s>%s</option>', $key, $selected, $option);
    }
    echo $optionsXHTML;
}

function randomString($length = 5)
{
    $arrCharacter = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
    $arrCharacter = implode('', $arrCharacter);
    $arrCharacter = str_shuffle($arrCharacter);

    $result        = substr($arrCharacter, 0, $length);
    return $result;
}

function areaFilterStatus($options, $route, $params)
{
    $xhtml = '';
    $keySelected = $params['status'] ?? 'all';

    $url = '';
    if (isset($params['group_id']))     $url .= '&group_id=' . $params['group_id'];
    if (isset($params['cate_id']))      $url .= '&cate_id=' . $params['cate_id'];
    if (isset($params['special']))      $url .= '&special=' . $params['special'];
    if (isset($params['search-key']))   $url .= '&search-key=' . $params['search-key'];

    foreach ($options as $option => $countItems) {
        $link = $route . '?status=' . $option . $url;
        $aClass = $option == $keySelected ? 'btn-info' : 'btn-secondary';
        $xhtml .= sprintf('<a href="%s" class="btn %s">%s <span class="badge badge-pill badge-light">%s</span></a> ', $link, $aClass, ucfirst($option), $countItems ?? 0);
    }
    echo $xhtml;
}

function highlight($searchKey, $subject)
{
    if (!empty(trim($searchKey))) {
        $searchKey = preg_quote(trim($searchKey));
        $subject = preg_replace("#$searchKey#i", "<mark style='padding:0;background-color:yellow'>\\0</mark>", $subject);
    }
    echo $subject;
}

function textCutting($text, $length)
{
    $text = trim($text);
    $result = strlen($text) > $length ? substr($text, 0, $length) . '...' : $text;
    return $result;
}

function showProductBox($arrData, $pathPicture, $strlen, $boxHeight = '', $heightTextBox = '', $openDiv = '', $closeDiv = '')
{
    $xhtmlTypeBooks = '';
    $searchValue = $_GET['search'] ?? '';
    foreach ($arrData as $value) {
        $id         = $value['id'];
        $name       = textCutting($value['name'], $strlen);
        $picture    = !empty($value['picture']) ? $pathPicture . '/' . $value['picture'] : $pathPicture . '/default.jpg';
/*         $itemURL      = filterURL($value['name']) . '-b' . $id;
        $quickViewURL = filterURL($value['name']) . '-qv' . $id; */
        $itemURL = route('frontend.book.getItem', $id);
        $quickViewURL = '';
        $saleOffXhtml = '';

        if ($value['sale_off'] > 0) {
            $saleOffXhtml = '
            <div class="lable-block">
                <span class="lable4 badge badge-danger"> -' . $value['sale_off'] . '%</span>
            </div>';
        }
        if ($value['sale_off'] > 0) {
            $price     = number_format($value['price'] * (100 - $value['sale_off']) / 100) . 'đ <del>' . number_format($value['price']) . 'đ</del>';
        } else {
            $price    = number_format($value['price']) . 'đ';
        }

        $xhtmlTypeBooks .=
            $openDiv . '
            <div class="product-box" ' . $boxHeight . '">
                <div class="img-wrapper">
                    <div class="lable-block">
                        ' . $saleOffXhtml . '
                    </div>
                    <div class="front">
                        <a href="' . $itemURL . '">
                            <img src="' . $picture . '" class="img-fluid blur-up lazyload bg-img" alt="">
                        </a>
                    </div>
                    <div class="cart-info cart-wrap">
                        <a href="" title="Add to cart" class="btn-ajax-addOneToCart"><i class="ti-shopping-cart"></i></a>
                        <a href="' . $quickViewURL . '" title="Quick View" class="btn-ajax-quick-view"><i class="ti-search" data-toggle="modal" data-target="#quick-view"></i></a>
                    </div>
                </div>
                <div class="product-detail">
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="' . $itemURL . '" title="' . $value['name'] . '" style="display:block;height:' . $heightTextBox . '">
                        <h6>' . $name . '</h6>
                    </a>
                    <h4 class="text-lowercase" style="">' . $price . '</h4>
                </div>
            </div>'
            . $closeDiv;
    }
    echo $xhtmlTypeBooks;
}
