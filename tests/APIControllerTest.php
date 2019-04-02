<?php
/**
 * Created by PhpStorm.
 * User: alugbinabiodun
 * Date: 2019-04-01
 * Time: 16:15
 */

//require './vendor/autoload.php';

use Language\Controller\APICallController;
use Language\Models\GetParameter;
use Language\Exceptions\ResponseException;

class APIControllerTest extends PHPUnit_Framework_TestCase
{

    public function testMakeAPICall(){
        $params=new GetParameter("LanguageFiles","getLanguageFile");
        $getParam=$params->buildPayload();
        $apiController=new APICallController();
        $payload=[
            'language'=>'en'
        ];
        $result=$apiController->makeAPICall($getParam,$payload);
        $this->assertEquals("OK",$result['status']);
        $this->assertNotNull($result['data']);
        $this->assertEquals(977,strlen($result['data']));
    }


    /**
     * Checks the api call result.
     *
     * @param mixed $result The api call result to check.
     *
     * @throws Exception   If the api call was not successful.
     * @throws \Exception
     *
     * @return void
     */
    protected function checkForApiErrorResult($result)
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