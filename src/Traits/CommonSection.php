<?php

namespace Astrogoat\Fictionary\Traits;

use Helix\Fabrick\Icon;
use Helix\Lego\Bricks\Checkbox;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Heading;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Number;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Media\Transformations\Transformation;
use ReflectionClass;
use Str;

trait CommonSection
{
    public function backgroundImageWithTransformationsBrick(string $groupName = 'Background image')
    {
        return [
            'background' => Group::name($groupName)->bricks([
                'image' => Media::name('Image')->maxFiles(1),
                'should-apply-transformation' => Checkbox::name('Apply image transformation'),
                'transformations' => Group::name('Transformations')
                    ->when(fn () => $this->getBrickCurrentValue('background.should-apply-transformation') ?: false)
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
        ];
    }

    public function headingWithSizeBrick(): array
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
                            'xl' => 'Extra large',
                            '2xl' => '2x Extra large',
                        ])
                        ->default('lg'),
                ]),
        ];
    }

    private function getIcons(): array
    {
        return collect(['' => '-- Select icon --'])
            ->push(...(new ReflectionClass(Icon::class))->getConstants())
            ->mapWithKeys(function ($value, $key) {
                if ($key === '') {
                    return ['' => $value];
                }

                return [$value => Str::of($value)->replace('-', ' ')->ucfirst()->toString()];
            })->toArray();
    }

    public function iconsBrick(): array
    {
        return [
            'icon' => Select::name('Icon')->options($this->getIcons()),
        ];
    }

    public function iconsWithCustomIconBrick(): array
    {
        return [
            'icon' => Group::name('Icon')->bricks([
                'element' => Select::name('Icon')->options($this->getIcons()),
                'customIcon' => Media::name('Custom icon')->maxFiles(1),
            ]),
        ];
    }

    public function ctasBrick(): array
    {
        return [
            'ctas' => Group::name('CTA')->bricks([
                'primary' => Link::name('Primary CTA'),
                'secondary' => Link::name('Secondary CTA'),
            ]),
        ];
    }

    public function getBackgroundImageWithTransformations()
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

    public function getHeadingSizeCss(): string
    {
        return match ($this->get('heading.size')->getKey()) {
            'sm' => 'fic-text-lg sm:fic-text-2xl',
            'md' => 'fic-text-2xl sm:fic-text-4xl',
            default => 'fic-text-3xl sm:fic-text-5xl',
            'xl' => 'fic-text-4xl sm:fic-text-6xl',
            '2xl' => 'fic-text-5xl sm:fic-text-7xl',
        };
    }
}
