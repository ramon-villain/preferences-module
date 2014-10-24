<?php namespace Anomaly\Streams\Addon\Module\Preferences\Preference\Command;

use Anomaly\Streams\Addon\Module\Preferences\Preference\PreferenceModel;

class SetPreferenceValueCommandHandler
{
    protected $preference;

    function __construct(PreferenceModel $preference)
    {
        $this->preference = $preference;
    }

    public function handle(SetPreferenceValueCommand $command)
    {
        $data = [
            'key'        => $command->getKey(),
            'value'      => $command->getValue(),
            'addon_type' => $command->getAddonType(),
            'addon_slug' => $command->getAddonSlug(),
        ];

        return $this->preference->updateOrCreate($data);
    }
}
 