<?php

namespace Astrogoat\Fictionary\Sections\Features;

use Helix\Lego\Bricks\Checkbox;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class WithProductScreenshot extends Section
{
    protected string $view = 'fictionary::sections.features.with-product-screenshot';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/features/with-product-screenshot.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Text::name('Heading'),
            'description' => Text::name('Description')->multipleLines()->renderAsElement('p'),
            'eyebrow' => Text::name('Eyebrow')->renderAsElement('h2'),
            'image' => Group::name('Image')->bricks([
                'media' => Media::name('Image')->maxFiles(1),
                'size' => Select::name('Size')->options([
                    'xs' => 'Extra small',
                    'sm' => 'Small',
                    'md' => 'Medium',
                    'lg' => 'Large',
                ])->default('md'),
                'shadow' => Checkbox::name('Add shadow to image')->default(true),
            ]),
            'callouts' => Repeater::name('Callouts')
                ->bricks([
                    'title' => Text::name('Title')->renderAsElement(false),
                    'description' => Text::name('Description')->renderAsElement('dd'),
                    'icon' => Media::name('Icon')->maxFiles(1),
                ]),
            'container' => Group::name('Container')
                ->bricks([
                    'layout' => Select::name('Layout')
                        ->options([
                            'left' => 'Left',
                            'right' => 'Right',
                        ])
                        ->default('right'),
                ]),
        ];
    }

    public function getImageWidthCss(): string
    {
        return match ($this->get('image.size')->key) {
            'xs' => 'fic-w-[32rem] sm:fic-w-[42rem]',
            'sm' => 'fic-w-[40rem] sm:fic-w-[47rem]',
            default => 'fic-w-[48rem] sm:fic-w-[57rem]',
            'lg' => 'fic-w-[56rem] sm:fic-w-[67rem]',
        };
    }

    public function getImageShadowCss(): string
    {
        return $this->get('image.shadow')->isChecked() ? ' fic-shadow-xl ' : '';
    }
}
