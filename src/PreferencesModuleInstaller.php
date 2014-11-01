<?php namespace Anomaly\Streams\Addon\Module\Preferences;

use Anomaly\Streams\Platform\Addon\Module\ModuleInstaller;

/**
 * Class PreferencesModuleInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Module\Preferences
 */
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
