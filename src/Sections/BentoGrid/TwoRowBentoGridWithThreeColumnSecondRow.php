<?php

namespace Astrogoat\Fictionary\Sections\BentoGrid;

use Helix\Lego\Bricks\Media;
use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class TwoRowBentoGridWithThreeColumnSecondRow extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.bento-grid.two-row-bento-grid-with-three-column-second-row';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/bento-grid/two-row-bento-grid-with-three-column-second-row.jpg';

    public function bricks(): array
    {
        $gridBricks = [
            'media' => Media::name('Image'),
            'eyebrow' => Text::name('Eyebrow')->renderAsElement('h3'),
            'title' => Text::name('Title')->renderAsElement('p'),
            'description' => Text::name('Description')->multipleLines()->renderAsElement('p'),
        ];

        return [
            'eyebrow' => Group::name('Eyebrow')->bricks([
                'copy' => Text::name('Eyebrow')->renderAsElement('h2'),
            ]),
            ...$this->headingWithSizeBrick(),
            'grid' => Group::name('Grid')->bricks([
                'first' => Group::name('First')->bricks($gridBricks),
                'second' => Group::name('Second')->bricks($gridBricks),
                'third' => Group::name('Third')->bricks($gridBricks),
                'fourth' => Group::name('Fourth')->bricks($gridBricks),
                'fifth' => Group::name('Fifth')->bricks($gridBricks),
            ]),
        ];
    }
}
