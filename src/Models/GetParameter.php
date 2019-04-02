<?php
/**
 * Created by PhpStorm.
 * User: alugbinabiodun
 * Date: 2019-04-01
 * Time: 16:22
 */

namespace Language\Models;


class GetParameter
{
    protected $action;
    protected $system;


    public function __construct($system,$action)
    {
        $this->setSystem($system);
        $this->setAction($action);
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): void
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param mixed $system
     */
    public function setSystem($system): void
    {
        $this->system = $system;
    }

    public function buildPayload(){
        return [
            'system'=>$this->getSystem(),
            'action'=>$this->getAction()
        ];
    }

}