<?php

class Plugin_assemble extends Plugin
{
    public $meta = array(
        'name'       => 'Assemble',
        'version'    => '1.0',
        'author'     => 'Jack McDade',
        'author_url' => 'http://jackmcdade.com'
    );

    public function index()
    {
        $var = $this->fetchParam('var', null, false, false, false);

        return (array_get($this->context, $var));
    }
}