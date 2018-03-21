<?php
namespace ApiResultCode;
use Illuminate\Support\Facades\Facade;
class Result extends Facade;
{
    public static function getFacadeAccessor()
    {
        return 'api-result-code';
    }
    static function create($result, $code) {
        $arr['code']    = $code;
        $arr['result']  = $result != '' ? $result : new stdClass();
        $arr['message'] = Config('result_code.' . $code, '');
        return $arr;
    }
}
