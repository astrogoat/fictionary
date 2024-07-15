<?php

namespace Astrogoat\Fictionary\Sections\CTAs;

use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Heading;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Http\Livewire\Section;

class SimpleJustified extends Section
{
    protected string $view = 'fictionary::sections.ctas.simple-justified';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/ctas/simple-justified.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')
                ->bricks([
                    'copy' => Text::name('Heading')->multipleLines()->renderAsElement('h2'),
                ]),
            'primaryCta' => Link::name('Primary CTA'),
            'secondaryCta' => Link::name('Secondary CTA'),
        ];
    }
}
