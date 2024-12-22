<?php

namespace Astrogoat\Fictionary\Sections\CallToAction;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class DarkPanelWithImage extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.ctas.dark-panel-with-image';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/ctas/dark-panel-with-image.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')
                ->bricks([
                    'copy' => Text::name('Heading')->multipleLines()->renderAsElement('h2'),
                ]),
            'description' => Group::name('Description')
                ->bricks([
                    'copy' => Text::name('Description')->multipleLines()->renderAsElement('p'),
                ]),
            'image' => Group::name('Image')->bricks([
                'media' => Media::name('Image')->maxFiles(1),
            ]),
            ...$this->ctasBrick(),
        ];
    }
}
