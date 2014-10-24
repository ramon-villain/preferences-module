<?php namespace Anomaly\Streams\Addon\Module\Preferences\Preference;

use Anomaly\Streams\Platform\Model\Preferences\PreferencesPreferencesEntryModel;

class PreferenceModel extends PreferencesPreferencesEntryModel
{
    public function newCollection(array $items = [])
    {
        return new PreferenceCollection($items);
    }
}
 