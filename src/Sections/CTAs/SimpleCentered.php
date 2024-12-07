<?php

namespace Astrogoat\Fictionary\Sections\CTAs;

use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class SimpleCentered extends Section
{
    protected string $view = 'fictionary::sections.ctas.simple-centered';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/ctas/simple-centered.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')
                ->bricks([
                    'copy' => Text::name('Heading')->multipleLines()->renderAsElement('h2'),
                ]),
            'subheading' => Group::name('Subheading')
                ->bricks([
                    'copy' => Text::name('Heading')->multipleLines()->renderAsElement('p'),
                ]),
            'ctas' => Group::name('Cta')->bricks([
                'primary' => Link::name('Primary CTA'),
                'secondary' => Link::name('Secondary CTA'),
            ]),
        ];
    }
}
