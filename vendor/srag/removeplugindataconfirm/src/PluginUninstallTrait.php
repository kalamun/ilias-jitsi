<?php

namespace srag\RemovePluginDataConfirm\Jitsi;

/**
 * Trait PluginUninstallTrait
 *
 * @package srag\RemovePluginDataConfirm\Jitsi
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait PluginUninstallTrait
{

    use BasePluginUninstallTrait;


    /**
     * @return bool
     *
     * @internal
     */
    protected final function beforeUninstall() : bool
    {
        return $this->pluginUninstall();
    }


    /**
     * @internal
     */
    protected final function afterUninstall()/*: void*/
    {

    }
}
