<?php namespace Anomaly\Streams\Addon\Module\Preferences\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

class PreferencesStreamInstaller extends StreamInstaller
{

    /**
     * Stream information.
     *
     * @var array
     */
    protected $stream = [
        'is_hidden' => true,
    ];

    /**
     * Stream field assignments.
     *
     * @var array
     */
    protected $assignments = [
        'addon_type' => [],
        'addon_slug' => [],
        'key'        => [],
        'user'       => [],
        'value'      => [],
    ];

}