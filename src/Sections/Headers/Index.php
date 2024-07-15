<?php

namespace Astrogoat\Fictionary\Sections\Headers;

use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Heading;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class Index extends Section
{
    protected string $view = 'fictionary::sections.headers.index';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/headers/index.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')
                ->bricks([
                    'copy' => Heading::name('Heading')->defaultElement('h2'),
                    'size' => Select::name('Size')
                        ->options([
                            'sm' => 'Small',
                            'md' => 'Medium',
                            'lg' => 'Large',
                        ])
                        ->default('lg'),
                ]),
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

    public function getHeadingSizeCss(): string
    {
        return match ($this->get('heading.size')->getKey()) {
            'sm' => 'fic-text-lg sm:fic-text-2xl',
            'md' => 'fic-text-2xl sm:fic-text-4xl',
            default => 'fic-text-4xl sm:fic-text-6xl',
        };
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
