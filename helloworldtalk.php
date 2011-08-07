<?php
define('_JEXEC', 1);

require_once '../libraries/import.php';

jimport('joomla.application.cli');

class HelloWorld extends JCli
{
    public function execute()
    {
        $this->out('What is your name?');
        $name = $this->in();
   
        $this->out();
        $this->out('Hi '.$name.',');
        $this->out('Welcome to the Joomla Platform!');
        $this->out();
    }
   
    /**
     * We don’t really need configuration for this application.
     *
     * @return  void
     */
    protected function fetchConfigurationData()
    {
        return array();
    }
}

JCli::getInstance('HelloWorld')->execute();