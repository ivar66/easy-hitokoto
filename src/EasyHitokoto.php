<?php
/*
 * This file is part of the ivar/easy-EasyHitokoto
 *
 * (c) ivar <625079860@qq.com>
 *
 * Date: 2020/6/13 下午8:46
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Ivar\EasyHitokoto;

use Ivar\EasyHitokoto\Traits;

class EasyHitokoto{

    use Traits\HasHttpRequest;

    /**
     * request header
     * @var array
     */
    protected $header;

    /**
     *  base URL
     */
    const ENDPOINT_URL = 'https://v1.hitokoto.cn';

    /**
     * Easy51Tracking constructor.
     *
     */
    public function __construct()
    {
        $this->header = [
            'Content-Type'      =>  'application/json',
        ];
    }

    /**
     *
     * @see doc : https://developer.hitokoto.cn/sentence/
     *
     * @param array $arrReq
     * @return array
     */
    public function getHitOkOto($arrReq = []){

        return $this->get(self::ENDPOINT_URL,$arrReq,$this->header);
    }

}