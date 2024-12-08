<?php

namespace Astrogoat\Fictionary\Sections\Headers;

use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Heading;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;
use Astrogoat\Fictionary\Traits\CommonSection;

class Centered extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.headers.centered';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/headers/centered.jpg';

    public function bricks(): array
    {
        return [
            $this->headingWithSizeBrick(),
            'description' => Group::name('Description')->bricks([
                'copy' => Text::name('Description')->multipleLines()->renderAsElement('p'),
            ]),
            'eyebrow' => Group::name('Eyebrow')->bricks([
                'copy' => Text::name('Eyebrow')->renderAsElement('p'),
            ]),
            'container' => Group::name('Container')->bricks([
                'maxWidth' => Select::name('Width')
                    ->options([
                        'narrow' => 'Narrow',
                        'normal' => 'Normal',
                        'wide' => 'Wide',
                    ])
                    ->default('normal'),
            ]),
        ];
    }

    public function getContainerMaxWidthCss(): string
    {
        return match ($this->get('container.maxWidth')->getKey()) {
            'narrow' => 'fic-max-w-2xl',
            default => 'fic-max-w-3xl',
            'wide' => 'fic-max-w-4xl',
        };
    }
}
