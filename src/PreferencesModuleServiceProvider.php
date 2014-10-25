<?php namespace Anomaly\Streams\Addon\Module\Preferences;

use Illuminate\Support\ServiceProvider;
use Anomaly\Streams\Addon\Module\Preferences\Preference\PreferenceModel;
use Anomaly\Streams\Addon\Module\Preferences\Preference\PreferenceService;

class PreferencesModuleServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->registerPreferenceService();
        $this->registerHelpers();
    }

    protected function registerPreferenceService()
    {
        $this->app->singleton(
            'streams.preferences',
            function () {

                return new PreferenceService(new PreferenceModel());

            }
        );
    }

    protected function registerHelpers()
    {
        include_once __DIR__ . '../../resources/helpers.php';
    }
}
 