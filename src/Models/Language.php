<?php
/**
 * Created by PhpStorm.
 * User: alugbinabiodun
 * Date: 2019-04-01
 * Time: 15:49
 */

namespace Language\Models;


class Language
{
    protected $application;
    private $system;
    private $action;

    public function __construct($system,$action)
    {
        $this->system=$system;
        $this->action=$action;
    }

    /**
     * @return mixed
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param mixed $application
     */
    public function setApplication($application): void
    {
        $this->application = $application;
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

}