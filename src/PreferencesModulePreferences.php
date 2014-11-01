<?php namespace Anomaly\Streams\Addon\Module\Preferences;

/**
 * Class PreferencesModulePreferences
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Module\Preferences
 */
class PreferencesModulePreferences extends Preferences
{

    /**
     * Available preferences.
     *
     * @var array
     */
    protected $preferences = [
        'general' => [
            [
                'timezone'    => [
                    'type' => 'select',
                ],
                'date_format' => [
                    'type' => 'text',
                ],
                'time_format' => [
                    'type' => 'text',
                ]
            ],
        ],
    ];
}
 