<?php
/**
 * Created by PhpStorm.
 * User: alugbinabiodun
 * Date: 2019-04-02
 * Time: 13:31
 */



use \Language\LanguageBatchBo;

class LanguageBatchBoTest extends PHPUnit_Framework_TestCase
{

    public function testGenerateLanguageFiles(){
        try{
            LanguageBatchBo::generateLanguageFiles();
        }catch (\Exception $ex){
             var_dump($ex);
        }
    }


    public function testGetLanguageFile(){
        try{
            $result=LanguageBatchBo::getLanguageFile('portal','en');
            $this->assertTrue($result);
        }
        catch(\Exception $ex){
            $this->assertNull($ex);
        }
    }


    public function testGetAppletLanguageFile(){
        $result=LanguageBatchBo::getAppletLanguageFile("portal","en");
        $this->assertNotNull($result);
        $this->assertStringStartsWith('<?xml version="1.0" encoding="UTF-8"?>',$result);
        $this->assertStringEndsWith('</data>',$result);
    }

    public function testGetAppletLanguages(){
        $data=LanguageBatchBo::getAppletLanguages("portal");
        $this->assertNotNull($data);
        $this->assertEquals(1,count($data));
    }
}