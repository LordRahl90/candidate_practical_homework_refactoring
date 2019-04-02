<?php
/**
 * Created by PhpStorm.
 * User: alugbinabiodun
 * Date: 2019-04-01
 * Time: 16:09
 */

namespace Language\Controller;

use Language\ApiCall;


class APICallController
{

    public function testFunc(){
        return 'Hello';
    }

    public function makeAPICall($getParameter,$postParameter,$target='language_api',$mode='system_api'){
        $languageResponse = ApiCall::call(
            $target,
            $mode,
            $getParameter,
            $postParameter
        );

        return $languageResponse;
    }

}