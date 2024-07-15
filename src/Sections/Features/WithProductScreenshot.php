<?php

namespace Astrogoat\Fictionary\Sections\Features;

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
            'screenshot' => Media::name('Screenshot')->maxFiles(1),
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
}
