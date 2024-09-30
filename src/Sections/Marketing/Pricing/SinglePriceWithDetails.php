<?php

namespace Astrogoat\Fictionary\Sections\Marketing\Pricing;

use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Editor;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Http\Livewire\Section;

class SinglePriceWithDetails extends Section
{
    protected string $view = 'fictionary::sections.marketing.pricing.single-price-with-details';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/marketing/pricing/single-price-with-details.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Text::name('Heading')->renderAsElement(false),
            'description' => Editor::name('Description'),
            'includesHeading' => Text::name('Includes Heading')->default('What\'s included')->renderAsElement(false),
            'includes' => Repeater::name('Includes')->bricks([
                'title' => Text::name('Title')->renderAsElement(false),
            ]),
            'priceHeading' => Text::name('Price Heading')->renderAsElement(false),
            'price' => Text::name('Price')->renderAsElement(false),
            'currency' => Text::name('Currency')->default('USD')->renderAsElement(false),
            'cta' => Link::name('CTA'),
            'finePrint' => Editor::name('Fine Print'),
        ];
    }
}
