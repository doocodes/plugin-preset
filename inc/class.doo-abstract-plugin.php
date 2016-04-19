<?php

/**
 * Class DOO_Abstract_Plugin
 */
abstract class DOO_Abstract_Plugin
{

    /**
     * [$_instance description]
     *
     * @var Object
     */
    protected static $_instance;


    /**
     * Plugins settings
     *
     * @var array
     */
    protected $_settings;


    /**
     * @var array
     */
    protected $_errors = array();


    /**
     * Singleton
     *
     * @return Object
     */
    public final static function single()
    {
        if (static::$_instance === null) {
            static::$_instance = new static();
        }
        return static::$_instance;
    }



    protected function __construct()
    {
        /**
         * This hook is called once any activated plugins have been loaded.
         * Is generally used for immediate filter setup, or plugin overrides.
         * The plugins_loaded action hook precedes the setup_theme, after_setup_theme, init and wp_loaded action hooks.
         */
        add_action('plugins_loaded', array($this, 'init'));

        register_activation_hook(DOO_PLUGIN_PRESET_FILE     , array($this, 'activation'));
        register_deactivation_hook(DOO_PLUGIN_PRESET_FILE   , array($this, 'deactivation'));
        register_uninstall_hook(DOO_PLUGIN_PRESET_FILE      , array($this, 'uninstall'));
    }


    /**
     * Initialize all staff
     * @return void
     */
    abstract public function init();
    abstract public function activation();
    abstract public function deactivation();
    abstract public function uninstall();
}