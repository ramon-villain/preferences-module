<?php namespace Anomaly\Streams\Addon\Module\Preferences;

use Anomaly\Streams\Platform\Addon\Module\ModuleTag;

/**
 * Class PreferencesTag
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Tag\Preferences
 */
class PreferencesTag extends ModuleTag
{

    /**
     * Get a preference value.
     *
     * @return mixed
     */
    public function get()
    {
        return preference(
            $this->getAttribute('key'),
            $this->getAttribute('default')
        );
    }
}
 