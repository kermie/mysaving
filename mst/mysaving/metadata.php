<?php
/**
 * Module information
 */
$aModule = array(
    'id'           => 'mysaving',
    'title'        => 'mySaving',
    'url'          => 'http://www.marco-steinhaeuser.de',
    'description'  => array(
        'en'=>'Shows the percentage of saving in percent on the product detail page closed to the price information',
        'de'=>'Zeigt die Ersparnis bei Streichpreisen in Prozent auf der Produktdetailseite nahe der Preisinformation',
        'ru'=>'Показывает процент экономии на странице продукта рядом с информацией о ценах.'
    ),
    'lang'         => 'en',
    'version'      => '0.9',
    'author'       => 'Marco, on the basis of this blog post http://goo.gl/K6eno and with the grateful help of my mates',
    'thumbnail'    => 'thumb.png',
    'extend'       => array(
    'oxarticle'    => 'mst/mysaving/application/models/mst_mysaving_oxarticle'
    ),
    'blocks' => array(
    array('template' => 'page/details/inc/productmain.tpl', 'block'=>'details_productmain_tprice', 'file'=>'application/views/blocks/details_productmain_tprice.tpl'),
    ),
);
