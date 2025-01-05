<?php

namespace Astrogoat\Fictionary\Sections\Testimonial;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class Grid extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.testimonials.grid';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/testimonials/grid.jpg';

    public function bricks(): array
    {
        $rowBricks = [
            'testimonials' => Repeater::name('Testimonials')->bricks([
                'name' => Text::name('Name')->renderAsElement(false),
                'additionalNameInformation' => Text::name('Additional Name Information')->renderAsElement(false)->help('Could be the persons social media handle.'),
                'quote' => Text::name('Testimonial')->multipleLines()->renderAsElement(false),
                'image' => Media::name('Image')->maxFiles(1),
            ]),
        ];

        return [
            'heading' => Group::name('Heading')->bricks([
                'eyebrow' => Text::name('Eyebrow')->renderAsElement('h2'),
                'heading' => Text::name('Title')->renderAsElement('p'),
            ]),
            'testimonials' => Group::name('Testimonials')->bricks([
                'prominent' => Group::name('Prominent')->bricks([
                    'name' => Text::name('Name')->renderAsElement(false),
                    'additionalNameInformation' => Text::name('Additional Name Information')->renderAsElement(false)->help('Could be the persons social media handle.'),
                    'quote' => Text::name('Testimonial')->multipleLines()->renderAsElement(false),
                    'image' => Media::name('Image')->maxFiles(1),
                ]),
                'rowOne' => Group::name('Row One')->bricks($rowBricks),
                'rowTwo' => Group::name('Row Two')->bricks($rowBricks),
                'rowThree' => Group::name('Row Three')->bricks($rowBricks),
                'rowFour' => Group::name('Row Four')->bricks($rowBricks),
            ]),
        ];
    }
}
