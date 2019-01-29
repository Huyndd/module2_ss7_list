<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 08:21
 */
include "ArrayList.php";
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
echo $listInteger->get(6);