<?php
/**
 * Created by PhpStorm.
 * User: Deng
 * Date: 2017/5/29
 * Time: 23:50
 */

namespace DengTp5\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '账户不存在';
    public $error_code = '20000';
}