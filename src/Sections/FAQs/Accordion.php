<?php

namespace Astrogoat\Fictionary\Sections\FAQs;

use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Heading;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class Accordion extends Section
{
    protected string $view = 'fictionary::sections.faqs.accordion';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/faqs/accordion.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')
                ->bricks([
                    'copy' => Heading::name('Heading')->defaultElement('h2')->default('Frequently Asked Questions'),
                ]),
            'faqs' => Repeater::name('FAQs')
                ->bricks([
                    'question' => Text::name('Question')->renderAsElement('span'),
                    'answer' => Text::name('Answer')->multipleLines()->renderAsElement('p'),
                ]),
        ];
    }
}
