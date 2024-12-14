<?php

namespace Astrogoat\Fictionary\Sections\Hero;

use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Number;
use Helix\Lego\Bricks\Checkbox;
use Helix\Lego\Http\Livewire\Section;
use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Media\Transformations\Transformation;

class SimpleCenteredWithBackgroundImage extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.heroes.simple-centered-with-background-image';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/heroes/simple-centered-with-background-image.jpg';

    public function bricks(): array
    {
        return [
            ...$this->backgroundImageWithTransformationsBrick(),
            'pill' => Group::name('Pill')->bricks([
                'content' => Text::name('Content')->renderAsElement(false),
                'link' => Link::name('Link'),
                'should-display' => Checkbox::name('Should display')->default(false),
            ]),
            'heading' => Group::name('Heading')->bricks([
                'content' => Text::name('Content')->renderAsElement(false)->multipleLines(),
                'size' => Select::name('Size')->options([
                    'fic-text-lg sm:fic-text-2xl' => 'Large',
                    'fic-text-xl sm:fic-text-3xl' => 'Extra large',
                    'fic-text-2xl sm:fic-text-4xl' => '2x Extra large',
                    'fic-text-3xl sm:fic-text-5xl' => '3x Extra large',
                    'fic-text-4xl sm:fic-text-6xl' => '4x Extra large',
                    'fic-text-5xl sm:fic-text-7xl' => '5x Extra large',
                ])->default('fic-text-5xl sm:fic-text-7xl'),
                'color' => Select::name('Color')->options([
                    'fic-text-white' => 'White',
                    'fic-text-black' => 'Black',
                ])->default('text-white'),
                'max-width' => Select::name('Max width')->options([
                    'fic-max-w-2xl' => 'Narrowest',
                    'fic-max-w-3xl' => 'Narrower',
                    'fic-max-w-4xl' => 'Narrow',
                    'fic-max-w-5xl' => 'Wide',
                    'fic-max-w-6xl' => 'Wider',
                    'fic-max-w-7xl' => 'Widest',
                ])->default('fic-max-w-2xl'),
            ]),
            'subheading' => Group::name('Sub heading')->bricks([
                'content' => Text::name('Content')->renderAsElement(false)->multipleLines(),
                'size' => Select::name('Size')->options([
                    'fic-text-lg sm:fic-text-xl/8' => 'Large',
                    'fic-text-xl sm:fic-text-2xl' => 'Extra large',
                    'fic-text-2xl sm:fic-text-3xl' => '2x Extra large',
                ])->default('fic-text-lg sm:fic-text-xl/8'),
                'color' => Select::name('Color')->options([
                    'fic-text-white' => 'White',
                    'fic-text-black' => 'Black',
                    'fic-text-gray-400' => 'Light Gray',
                    'fic-text-gray-300' => 'Lighter Gray',
                    'fic-text-gray-200' => 'Lightest Gray',
                ])->default('fic-text-gray-400'),
                'max-width' => Select::name('Max width')->options([
                    'fic-max-w-2xl' => 'Narrowest',
                    'fic-max-w-3xl' => 'Narrower',
                    'fic-max-w-4xl' => 'Narrow',
                    'fic-max-w-5xl' => 'Wide',
                    'fic-max-w-6xl' => 'Wider',
                    'fic-max-w-7xl' => 'Widest',
                ])->default('fic-max-w-2xl'),
            ]),
            'ctas' => Group::name('Call to Action')->bricks([
                'primary' => Link::name('Primary CTA'),
                'secondary' => Link::name('Secondary CTA'),
            ]),
        ];
    }
}
