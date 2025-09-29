<?php

namespace Astrogoat\Fictionary\Sections\Pricing;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class ThreeTiers extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.pricing.three-tiers';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/pricing/three-tiers.jpg';

    public function bricks(): array
    {
        $tierBricks = [
            'name' => Text::name('Name')->renderAsElement('h3'),
            'amount' => Text::name('Amount')->renderAsElement('span'),
            'interval' => Text::name('Interval')->renderAsElement('span'),
            'badge' => Text::name('Badge')->renderAsElement('p'),
            'description' => Text::name('Description')->renderAsElement('p'),
            'features' => Repeater::name('Features')->bricks([
                ...$this->iconsBrick(),
                'name' => Text::name('Feature')->renderAsElement('span'),
            ]),
            'cta' => Link::name('CTA'),
        ];

        return [
            'eyebrow' => Group::name('Eyebrow')->bricks([
                'copy' => Text::name('Eyebrow')->renderAsElement('h2'),
            ]),
            ...$this->headingWithSizeBrick(),
            'description' => Group::name('Description')->bricks([
                'copy' => Text::name('Description')->renderAsElement('p')->multipleLines(),
            ]),
            'tiers' => Group::name('Tiers')->bricks([
                'one' => Group::name('One')->bricks($tierBricks),
                'two' => Group::name('Two')->bricks($tierBricks),
                'three' => Group::name('Three')->bricks($tierBricks),
            ]),
        ];
    }
}
