<?php namespace Anomaly\Streams\Addon\Module\Preferences;

use Anomaly\Streams\Platform\Addon\Module\ModuleInstaller;

class PreferencesModuleInstaller extends ModuleInstaller
{
    /**
     * Installers to run during module installation.
     *
     * @var array
     */
    protected $installers = [
        'Anomaly\Streams\Addon\Module\Preferences\Installer\PreferencesFieldInstaller',
        'Anomaly\Streams\Addon\Module\Preferences\Installer\PreferencesStreamInstaller',
    ];
}
