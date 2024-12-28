<?php

namespace Astrogoat\Fictionary\Sections\CallToAction;

use Helix\Lego\Bricks\Link;
use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class SplitWithImage extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.ctas.split-with-image';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/ctas/split-with-image.jpg';

    public function bricks(): array
    {
        return [
            ...$this->backgroundImageWithTransformationsBrick('Image'),
            'content' => Group::name('Content')->bricks([
                'eyebrow' => Text::name('Eyebrow')->renderAsElement('h2'),
                'title' => Text::name('Title')->renderAsElement('p'),
                'description' => Text::name('Description')->renderAsElement('p'),
            ]),
            'cta' => Group::name('CTA')->bricks([
                'primary' => Link::name('Primary CTA'),
            ]),
        ];
    }
}
