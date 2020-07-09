<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/9 0009
 * Time: 23:20
 */
Co::set(['hook_flags' => SWOOLE_HOOK_TCP]);

$http = new Swoole\Http\Server("0.0.0.0", 9501);
$http->set(['enable_coroutine' => true]);

$http->on("WorkerStart",function($server, $worker_id) {
    require_once dirname(__DIR__).'/vendor/autoload.php';
});

$http->on('request', function ($request, $response) {
    $response->end(json_encode($request));
});

$http->start();

