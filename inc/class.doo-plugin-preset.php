<?php

require_once 'class.doo-abstract-plugin.php';

class DOO_Plugin_Preset extends DOO_Abstract_Plugin
{


    /**
     *
     */
    protected function __construct()
    {

        parent::__construct();


        /**
         * This hook is called during each page load, after the theme is initialized.
         * It is generally used to perform basic setup, registration, and init actions for a theme.
         */
        // add_action('after_setup_theme', array($this,''));
    }


    /**
     * Initialize all staff
     * Method is called once any activated plugins have been loaded.
     * Is generally used for immediate filter setup, or plugin overrides.
     *
     * @return void
     */
    public function init()
    {
        // TODO: Implement init() method.
    }


    public function activation()
    {
        // TODO: Implement activation() method.
    }

    public function deactivation()
    {
        // TODO: Implement deactivation() method.
    }

    public function uninstall()
    {
        // TODO: Implement uninstall() method.
    }
}