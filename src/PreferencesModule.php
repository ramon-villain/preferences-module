<?php namespace Anomaly\Streams\Addon\Module\Preferences;

use Anomaly\Streams\Platform\Addon\Module\ModuleAddon;

class PreferencesModule extends ModuleAddon
{
    public function newServiceProvider()
    {
        return new PreferencesModuleServiceProvider($this->app);
    }
}
