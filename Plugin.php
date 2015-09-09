<?php namespace BenFreke\MenuManager;

use Backend;
use System\Classes\PluginBase;

/**
 * MenuManager Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'benfreke.menumanager::lang.app.name',
            'description' => 'benfreke.menumanager::lang.app.description',
            'author' => 'Ben Freke',
            'icon' => 'icon-list-alt',
            'homepage' => 'https://github.com/benfreke/oc-menumanager-plugin'
        ];
    }

    public function registerPermissions()
    {
        return [
            'benfreke.menumanager.view' => [
                'label' => 'benfreke.menumanager::lang.permission.view',
                'tab' => 'benfreke.menumanager::lang.app.name'
            ],
            'benfreke.menumanager.move' => [
                'label' => 'benfreke.menumanager::lang.permission.move',
                'tab' => 'benfreke.menumanager::lang.app.name'
            ],
            'benfreke.menumanager.edit' => [
                'label' => 'benfreke.menumanager::lang.permission.edit',
                'tab' => 'benfreke.menumanager::lang.app.name'
            ],
        ];
    }
}
