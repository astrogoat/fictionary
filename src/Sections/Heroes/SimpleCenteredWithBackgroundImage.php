<?php

namespace Astrogoat\Fictionary\Sections\Heroes;

use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Number;
use Helix\Lego\Bricks\Checkbox;
use Helix\Lego\Http\Livewire\Section;
use Helix\Lego\Media\Transformations\Transformation;

class SimpleCenteredWithBackgroundImage extends Section
{
    protected string $view = 'fictionary::sections.heroes.simple-centered-with-background-image';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/heroes/simple-centered-with-background-image.jpg';

    public function bricks(): array
    {
        return [
            'background' => Group::name('Background image')->bricks([
                'image' => Media::name('Image')->maxFiles(1),
                'should-apply-transformation' => Checkbox::name('Apply image transformation'),
                'transformations' => Group::name('Transformations')
                    ->when(fn () => $this->getBrickCurrentValue('background.should-apply-transformation'))
                    ->bricks([
                        'grayscale' => Group::name('Grayscale')->bricks([
                            'enabled' => Checkbox::name('Make grayscale')->default(true),
                        ]),
                        'color' => Group::name('Color')->bricks([
                            'hex' => Text::name('HEX')->default('#0D0D20')->help('Should be a HEX code.'),
                            'strength' => Number::name('Strength')->default(80)->help('Between 0-80.')->min(0)->max(100),
                        ]),
                        'blur' => Group::name('Blur')->bricks([
                            'strength' => Number::name('Strength')->default('0')->help('Between 0-2000')->min(0)->max(2000),
                        ]),
                    ]),
            ]),
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

    public function getBackgroundImage()
    {
        $image = $this->get('background.image')->first()->class('fic-absolute fic-inset-0 fic--z-10 fic-size-full fic-object-cover');

        if ($this->get('background.should-apply-transformation')->isChecked()) {
            $transformations = Transformation::new();

            if ($this->get('background.transformations.grayscale.enabled')->isChecked()) {
                $transformations->grayscale();
            }

            if ($this->get('background.transformations.blur.strength')->getValue() > 0) {
                $transformations->blur(1000);
            }

            if ($this->get('background.transformations.color.strength')->getValue() > 0) {
                $transformations->colorize($this->get('background.transformations.color.strength')->getValue(), $this->get('background.transformations.color.hex')->getValue());
            }


            $image->transformation($transformations);
        }

        return $image;
    }
}
