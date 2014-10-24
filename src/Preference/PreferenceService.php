<?php namespace Anomaly\Streams\Addon\Module\Preferences\Preference;

use Anomaly\Streams\Platform\Traits\CommandableTrait;
use Anomaly\Streams\Addon\Module\Preferences\Exception\PreferenceDoesNotExistException;

class PreferenceService
{
    use CommandableTrait;

    protected $preference;

    protected $preferences;

    function __construct(PreferenceModel $preference)
    {
        $this->preference  = $preference;
        $this->preferences = $preference->all(); // TODO: Include user restriction somewhere.
    }

    public function get($key, $default = null)
    {
        list($namespace, $key) = explode('::', $key);
        list($addonType, $addonSlug) = explode('.', $namespace);

        try {

            // TODO: Finish this with the auth package.
            $userId = 1;

            $value = $this->preferences->findPreference($addonType, $addonSlug, $key, $userId)->value;

        } catch (PreferenceDoesNotExistException $e) {

            $value = $default;

        }

        return $value;
    }

    /*public function set($key, $value)
    {
        list($namespace, $key) = explode('::', $key);
        list($addonType, $addonSlug) = explode('.', $namespace);

        $command = new SetPreferenceValueCommand($addonType, $addonSlug, $key, $value);

        $this->execute($command);
    }*/
}
 