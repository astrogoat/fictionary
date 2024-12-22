<?php

namespace Astrogoat\Fictionary\Sections\Feature;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;
use Illuminate\Support\Facades\Blade;

class OffsetWithFeatureList extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.features.offset-with-feature-list';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/features/offset-with-feature-list.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Text::name('Heading')->renderAsElement('p'),
            'description' => Text::name('Description')->multipleLines()->renderAsElement('p'),
            'eyebrow' => Text::name('Eyebrow')->renderAsElement('h2'),
            'callouts' => Group::name('Callouts')->bricks([
                ...$this->iconsBrick(),
                'items' => Repeater::name('Callouts')
                    ->bricks([
                        'title' => Text::name('Title')->renderAsElement(false),
                        'description' => Text::name('Description')->renderAsElement('dd'),
                        ...$this->iconsWithCustomIconBrick(),
                    ]),

            ]),
        ];
    }

    public function getCalloutIcon($callout)
    {
        if ($callout->icon?->customIcon->hasMedia()) {
            return $callout->icon->customIcon->class('fic-absolute fic-left-0 fic-top-1 fic-w-6 fic-text-accent-500');
        }

        if ($callout->icon?->element->key) {
            return Blade::render('<x-fab::elements.icon :icon="$icon" class="fic-absolute fic-left-0 fic-top-1 fic-size-5 fic-text-accent-500" />', ['icon' => $callout->icon->element->key]);
        }

        return Blade::render('<x-fab::elements.icon :icon="$icon" class="fic-absolute fic-left-0 fic-top-1 fic-size-5 fic-text-accent-500" />', ['icon' => $this->get('callouts.icon')->key]);
    }
}
