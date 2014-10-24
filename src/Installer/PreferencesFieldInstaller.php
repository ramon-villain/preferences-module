<?php namespace Anomaly\Streams\Addon\Module\Preferences\Installer;

use Anomaly\Streams\Platform\Field\FieldInstaller;

class PreferencesFieldInstaller extends FieldInstaller
{

    /**
     * Fields to install.
     *
     * @var array
     */
    protected $fields = [
        'addon_type' => [
            'type' => 'text',
        ],
        'addon_slug' => [
            'type' => 'text',
        ],
        'key'        => [
            'type' => 'text',
        ],
        'user'       => [
            'type' => 'relationship',
        ],
        'value'      => [
            'type' => 'textarea',
        ],
    ];

}