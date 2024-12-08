<?php

namespace Astrogoat\Fictionary\Sections\Pricing;

use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Http\Livewire\Section;
use Illuminate\Support\Facades\Blade;
use Astrogoat\Fictionary\Traits\CommonSection;

class TwoTiersWithEmphasizedTier extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.pricing.two-tiers-with-emphasized-tier';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/pricing/two-tiers-with-emphasized-tier.jpg';

    public function bricks(): array
    {
        return [
            'eyebrow' => Group::name('Eyebrow')->bricks([
                'copy' => Text::name('Eyebrow')->renderAsElement('h2'),
            ]),
            ...$this->headingWithSizeBrick(),
            'description' => Group::name('Description')->bricks([
                'copy' => Text::name('Description')->renderAsElement('p')->multipleLines(),
            ]),
            'tiers' => Group::name('Tiers')->bricks([
                'standard' => Group::name('Standard')->bricks([
                    'name' => Text::name('Name')->renderAsElement('h3'),
                    'amount' => Text::name('Amount')->renderAsElement('span'),
                    'interval' => Text::name('Interval')->renderAsElement('span'),
                    'description' => Text::name('Description')->renderAsElement('p'),
                    'features' => Repeater::name('Features')->bricks([
                        ...$this->iconsBrick(),
                        'name' => Text::name('Feature')->renderAsElement('span'),
                    ]),
                    'cta' => Link::name('CTA'),
                ]),
                'emphasized' => Group::name('Emphasized')->bricks([
                    'name' => Text::name('Name')->renderAsElement('h3'),
                    'amount' => Text::name('Amount')->renderAsElement('span'),
                    'interval' => Text::name('Interval')->renderAsElement('span'),
                    'description' => Text::name('Description'),
                    'features' => Repeater::name('Features')->bricks([
                        ...$this->iconsBrick(),
                        'name' => Text::name('Feature'),
                    ]),
                    'cta' => Link::name('CTA'),
                ]),
            ]),
        ];
    }

    public function renderIcon()
    {
        return Blade::render('<x-fab::elements.icon :icon="$icon" class="fic-absolute fic-left-0 fic-top-1 fic-size-5 fic-text-indigo-500" />', ['icon' => $this->get('callouts.icon')->key]);
    }
}
