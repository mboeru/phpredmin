<?php
class Controller
{
    private $_objects = Null;

    public function __construct()
    {
        $this->_objects['app']    = App::instance();
        $this->_objects['router'] = Router::instance();
        $this->_objects['inputs'] = Inputs::instance();
        $this->_objects['log']    = Log::factory();
    }

    public function __get($object)
    {
        return isset($this->_objects[$key]) ? $this->_objects[$key] : Null;
    }
}