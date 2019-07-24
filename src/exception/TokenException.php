<?php
/**
 * Created by PhpStorm.
 * User: Deng
 * Date: 2017/5/26
 * Time: 23:23
 */

namespace DengTp5\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效Token';
    public $error_code = 10000;
}