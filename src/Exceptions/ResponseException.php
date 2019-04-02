<?php
/**
 * Created by PhpStorm.
 * User: alugbinabiodun
 * Date: 2019-04-02
 * Time: 13:07
 */

namespace Language\Exceptions;


use Throwable;

class ResponseException extends \Exception
{

    public function __construct($result, int $code = 0, Throwable $previous = null)
    {
        $message='Wrong response: '.
            $this->buildEmptyTypeMessage($result['type']).
            $this->buildEmptyCodeMessage($result['code']).
            ' '.((string)$result['data']);
        parent::__construct($message, $code, $previous);
    }


    public function buildEmptyTypeMessage($type){
        return !empty($type) ? "Type( ${$type} )":"";
    }

    public function buildEmptyCodeMessage($code){
        return !empty($code) ? "Type( ${$code} )":"";
    }

}