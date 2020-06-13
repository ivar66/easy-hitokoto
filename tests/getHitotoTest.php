<?php
/*
 * This is a new PhpStorm file.
 *
 * (c) ivar <625079860@qq.com>
 *
 * Date: 2020/6/13 下午11:39
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
require_once '../vendor/autoload.php';

use Ivar\EasyHitokoto\EasyHitokoto;

$arrReq = [
//    'c'         => 'i',
    'charset'   => 'utf-8'
];
$obj = new EasyHitokoto();
$arrayOk = $obj->getHitOkOto($arrReq);
var_export($arrayOk);die;