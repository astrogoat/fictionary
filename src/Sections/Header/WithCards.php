<?php

namespace Astrogoat\Fictionary\Sections\Header;

use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Number;
use Helix\Lego\Bricks\Heading;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Checkbox;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Http\Livewire\Section;
use Illuminate\Support\Facades\Blade;
use Astrogoat\Fictionary\Traits\CommonSection;

class WithCards extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.headers.with-cards';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/headers/with-cards.jpg';

    public function bricks(): array
    {
        return [
            ...$this->backgroundImageWithTransformationsBrick(),
            ...$this->headingWithSizeBrick(),
            'description' => Group::name('Description')->bricks([
                'copy' => Text::name('Description')->multipleLines()->renderAsElement('p'),
            ]),
            'cards' => Group::name('Cards')->bricks([
                ...$this->iconsBrick(),
                'items' => Repeater::name('Cards')->bricks([
                    'title' => Text::name('Title')->renderAsElement('h3'),
                    'description' => Text::name('Description')->renderAsElement('p'),
                    ...$this->iconsWithCustomIconBrick(),
                ]),
            ]),
        ];
    }

    public function renderIcon($card)
    {
        $css = 'fic-h-7 fic-w-5 fic-flex-none fic-text-accent-400';

        if ($card->icon?->customIcon->hasMedia()) {
            return $card->icon->customIcon->class($css);
        }

        if ($card->icon?->element->key) {
            return Blade::render('<x-fab::elements.icon :icon="$icon" :class="$css" />', [
                'icon' => $card->icon->element->key,
                'css' => $css,
            ]);
        }

        return Blade::render('<x-fab::elements.icon :icon="$icon" :class="$css" />', [
            'icon' => $this->get('cards.icon')->key,
            'css' => $css,
        ]);
    }
}
