<h1 align="center">Easy Hitokoto</h1>

<p align="center">支持服务器端快捷返回一条诗词，动漫等语句</p>


## 环境需求

- PHP >= 5.6

## 安装

```shell
$ composer require ivar/easy-hitokoto
```

## 使用

获取一言的数据

```php

<?php

use Ivar\EasyHitokoto\EasyHitokoto;

$arrReq = [
    'c'         => 'i', //不传为随机返回一条数据
    'charset'   => 'utf-8'
    // 参数参考文档api即可，https://developer.hitokoto.cn/sentence
];
$obj = new EasyHitokoto();
$arrayOk = $obj->getHitOkOto($arrReq);

```


## License

MIT
