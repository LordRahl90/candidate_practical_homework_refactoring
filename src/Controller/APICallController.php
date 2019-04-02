<?php
/**
 * Created by PhpStorm.
 * User: alugbinabiodun
 * Date: 2019-04-01
 * Time: 16:09
 */

namespace Language\Controller;

use Language\ApiCall;
use Language\Exceptions\ResponseException;


class APICallController
{

    public function testFunc(){
        return 'Hello';
    }

    public function makeAPICall($getParameter,$postParameter,$target='language_api',$mode='system_api'){
        $languageResponse = ApiCall::call(
            $target,
            $mode,
            [
                'system' => $getParameter->getSystem(),
                'action' => $getParameter->getAction()
            ],
            $postParameter
        );

        return $languageResponse;
    }


    public function checkForApiErrorResult($result)
    {
        // Error during the api call.
        if ($result === false || !isset($result['status'])) {
            throw new \Exception('Error during the api call');
        }
        // Wrong response.
        if ($result['status'] != 'OK') {
            throw new ResponseException($result);
        }
        // Wrong content.
        if ($result['data'] === false) {
            throw new \Exception('Wrong content!');
        }
    }

}