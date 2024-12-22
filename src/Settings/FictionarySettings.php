<?php

namespace Astrogoat\Fictionary\Settings;

use Astrogoat\Fictionary\Settings\Peripherals\Theming;
use Helix\Lego\Settings\AppSettings;

class FictionarySettings extends AppSettings
{
    public array $colors;

    protected array $peripherals = [
        Theming::class,
    ];

    public function rules(): array
    {
        return [
            'settings.colors.accent.50' => 'nullable|string',
            'settings.colors.accent.100' => 'nullable|string',
            'settings.colors.accent.200' => 'nullable|string',
            'settings.colors.accent.400' => 'nullable|string',
            'settings.colors.accent.500' => 'nullable|string',
            'settings.colors.accent.600' => 'nullable|string',
            'settings.colors.accent.700' => 'nullable|string',
            'settings.colors.accent.800' => 'nullable|string',
            'settings.colors.accent.900' => 'nullable|string',
            'settings.colors.accent.950' => 'nullable|string',
        ];
    }

    public function description(): string
    {
        return 'Fictionary is a collection of sections that can be used in your project.';
    }

    public function hidden(): array
    {
        return [
            'colors',
        ];
    }

    public static function group(): string
    {
        return 'fictionary';
    }
}
