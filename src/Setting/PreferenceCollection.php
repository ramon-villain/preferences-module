<?php namespace Anomaly\Streams\Addon\Module\Preferences\Preference;

use Anomaly\Streams\Platform\Entry\EntryCollection;
use Anomaly\Streams\Addon\Module\Preferences\Exception\PreferenceDoesNotExistException;

class PreferenceCollection extends EntryCollection
{
    public function findPreference($addonType, $addonSlug, $key)
    {
        foreach ($this->items as $item) {

            if ($addonType == $item->addon_type and $addonSlug == $item->addon_slug and $key == $item->key) {

                return $item;

            }

        }

        throw new PreferenceDoesNotExistException("The preference [{$addonType}.{$addonSlug}::{$key}] does not exist.");
    }
}
 