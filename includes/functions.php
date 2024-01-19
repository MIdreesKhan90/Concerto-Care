<?php 

//----------------------------- Methods----------------------------


function article_pagination($result,$totalPostPerPage,$basename,$tb='false'){

   $total = $result->getMeta()['count'];
   $next= $result->getMeta()['next_page'];
   $prev = $result->getMeta()['previous_page'];
   $page = (isset($_GET['pg']) and $_GET['pg']!="") ? $_GET['pg'] : 1;
   $totalPages = ceil($total/$totalPostPerPage);
   $links = '';
   $html = '';
    if ( $totalPages > '1') {
        $current = $page;
        $next = $current + 1;
        $prev = $current - 1;
        $links = '';
        for ($i = 1; $i <= $totalPages; $i++) {
            if ($current == $i) {
                $links .= '<span class="paginate__item active">' . $i . '</span>';
            } else {
                $links .= '<a href="'. $basename.'?tab=' . $tb . '&pg='  . $i . '" class="paginate__item ">' . $i . '</a>';
            }
        }
         $html .= ('<div class="paginate__list">' . ($current > 1 ? '<a href="'.$basename.'?tab=' . $tb . '&pg=' . $prev . '" class="paginate__item prev"><img src="./assets/img/left.png" alt="" class="img-fluid""/>' : '') . $links . ($current < $totalPages  ? '<a href="'. $basename.'?tab=' . $tb . '&pg=' . $next . '" class="paginate__item next"><img src="./assets/img/right.png" alt="" class="img-fluid""/></a>' : '') . '</div>');
         echo $html;
        }
};

// Use to access protected property of an object
function accessProtected($obj, $prop) {
  $reflection = new ReflectionClass($obj);
  $property = $reflection->getProperty($prop);
  $property->setAccessible(true);
  return $property->getValue($obj);
};