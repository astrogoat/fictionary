<?php

namespace Astrogoat\Fictionary\Settings\Peripherals;

use Helix\Lego\Settings\Peripherals\Peripheral;

class Theming extends Peripheral
{
    public function render()
    {
        return view('fictionary::settings.peripherals.theming');
    }
}
