<?php

namespace Astrogoat\Fictionary\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class FictionarySettings extends AppSettings
{
    // public string $url; // Example, modify to fit your need.

    public function rules(): array
    {
        //        'url' => Rule::requiredIf($this->enabled === true), // Example, modify to fit your need.
    }

    public function description(): string
    {
        return 'Interact with Fictionary.';
    }

    public static function group(): string
    {
        return 'fictionary';
    }
}
