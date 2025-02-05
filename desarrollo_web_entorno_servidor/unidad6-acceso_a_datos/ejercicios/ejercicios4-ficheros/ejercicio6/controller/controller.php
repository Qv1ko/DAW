<?php
    require_once("./model/resolucion.php");

    $rss = new SimpleXMLElement("./data/canal.xml", 0, true);
    $data = [];

    foreach ($rss->channel->item as $item) {
        $resolucion = new Resolucion($item->title, $item->description, $item->guid);
        array_push($data, $resolucion);
    }

    require_once("./view/table.php");
?>