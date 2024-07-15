<?php

namespace Astrogoat\Fictionary\Sections\CloudLogos;

use Helix\Lego\Bricks\Heading;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class SimpleWithHeading extends Section
{
    protected string $view = 'fictionary::sections.cloud-logos.simple-with-heading';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/cloud-logos/simple-with-heading.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Heading::name('Heading')->defaultElement('h2'),
            'logos' => Repeater::name('Logos')->bricks([
                'media' => Media::name('Logo')->maxFiles(1),
                'title' => Text::name('Title'),
                'description' => Text::name('Description'),
            ]),
            'textPosition' => Select::name('Text Position')
                ->options([
                    'above' => 'Above',
                    'below' => 'Below',
                ])
                ->default('below')
                ->help('Show icon titles and descriptions above or below the logo.'),
            'density' => Select::name('Logo Density')
                ->options([
                    'extra-tight' => 'Extra Tight',
                    'tight' => 'Tight',
                    'normal' => 'Normal',
                    'spacious' => 'Spacious',
                    'extra-spacious' => 'Extra Spacious',
                ])
                ->default('normal')
                ->help('How many logos before breaking to a new line.'),
            'maxIconHeight' => Select::name('Icon Max Height')
                ->options([
                    'xs' => 'Extra Small',
                    'sm' => 'Small',
                    'normal' => 'Normal',
                    'lg' => 'Large',
                    'xl' => 'Extra Large',
                    '2xl' => '2X Large',
                    '3xl' => '3X Large',
                    '4xl' => '4X Large',
                    'none' => 'No max height',
                ])
                ->default('normal')
                ->help('How tall the icons may max be.'),
        ];
    }

    public function getIconDensityCss(): string
    {
        return match ($this->get('density')->getKey()) {
            'extra-tight' => '',
            'tight' => 'fic-max-w-lg fic-grid-cols-3 fic-gap-x-8 fic-gap-y-10 sm:fic-max-w-xl sm:fic-grid-cols-7 sm:fic-gap-x-10 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-6',
            default => 'fic-max-w-lg fic-grid-cols-2 fic-gap-x-8 fic-gap-y-10 sm:fic-max-w-xl sm:fic-grid-cols-6 sm:fic-gap-x-10 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-5',
            'spacious' => 'fic-max-w-lg fic-grid-cols-2 fic-gap-x-8 fic-gap-y-10 sm:fic-max-w-xl sm:fic-grid-cols-5 sm:fic-gap-x-10 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-4',
            'extra-spacious' => 'fic-max-w-lg fic-grid-cols-1 fic-gap-x-8 fic-gap-y-10 sm:fic-max-w-xl sm:fic-grid-cols-4 sm:fic-gap-x-10 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-3',
        };
    }

    public function getMaxIconHeightCss(): string
    {
        return match ($this->get('maxIconHeight')->getKey()) {
            'xs' => 'fic-max-h-4',
            'sm' => 'fic-max-h-8',
            default => 'fic-max-h-12',
            'lg' => 'fic-max-h-16',
            'xl' => 'fic-max-h-20',
            '2xl' => 'fic-max-h-24',
            '3xl' => 'fic-max-h-32',
            '4xl' => 'fic-max-h-36',
            'none' => '',
        };
    }
}
