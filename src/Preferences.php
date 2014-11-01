<?php namespace Anomaly\Streams\Addon\Module\Preferences;

/**
 * Class Preferences
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Module\Preferences
 */
class Preferences
{

    /**
     * Available preferences.
     *
     * @var array
     */
    protected $preferences = [];

    /**
     * Create a new Preferences instance.
     */
    function __construct()
    {
        $this->boot();
    }

    /**
     * Set up the class.
     */
    protected function boot()
    {
        //
    }

    /**
     * Set available preferences.
     *
     * @param array $preferences
     * return $this
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;

        return $this;
    }

    /**
     * Get available preferences.
     *
     * @return array
     */
    public function getPreferences()
    {
        return $this->preferences;
    }
}
 