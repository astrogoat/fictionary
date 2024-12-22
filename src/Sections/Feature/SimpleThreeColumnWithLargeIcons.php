<?php

namespace Astrogoat\Fictionary\Sections\Feature;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Editor;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;
use Illuminate\Support\Facades\Blade;

class SimpleThreeColumnWithLargeIcons extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.features.simple-three-column-with-large-icons';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/features/simple-three-column-with-large-icons.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')->bricks([
                'heading' => Text::name('Heading')->renderAsElement('h2'),
                'description' => Text::name('Description')->renderAsElement('p'),
            ]),
            'features' => Group::name('Features')->bricks([
                'items' => Repeater::name('Features')
                    ->bricks([
                        'title' => Text::name('Title')->renderAsElement(false),
                        'description' => Editor::name('Description'),
                        ...$this->iconsWithCustomIconBrick(),
                        'link' => Link::name('Link'),
                    ]),
            ]),
        ];
    }

    public function renderFeatureIcon($feature)
    {
        if ($feature->icon?->customIcon->hasMedia()) {
            return $feature->icon->customIcon->class('fic-size-6 fic-text-white');
        }

        if ($feature->icon?->element->key) {
            return Blade::render('<x-fab::elements.icon :icon="$icon" class="fic-size-6 fic-text-white" />', ['icon' => $feature->icon->element->key]);
        }

        return '';
    }
}
