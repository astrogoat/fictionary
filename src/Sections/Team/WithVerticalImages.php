<?php

namespace Astrogoat\Fictionary\Sections\Team;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Brick;
use Helix\Lego\Bricks\Editor;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;
use Illuminate\Support\Facades\Blade;

class WithVerticalImages extends Section
{
    use CommonSection;
    protected string $view = 'fictionary::sections.team.with-vertical-images';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/team/with-vertical-images.jpg';

    /**
     * @return array<Brick>
     */
    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')->bricks([
                'heading' => Text::name('Heading')->renderAsElement('h2'),
                'description' => Text::name('Description')->renderAsElement('p'),
            ]),
            'rows' => Group::name('Rows')->bricks([
                'rows' => Repeater::name('Rows')->bricks([
                    'title' => Text::name('Title')->renderAsElement('h3'),
                    'description' => Text::name('Description')->renderAsElement('p'),
                    'content' => Editor::name('Content'),
                    'media' => Media::name('Image')->maxFiles(1),
                    'links' => Repeater::name('Links')->bricks([
                        ...$this->iconsBrick(),
                        'destination' => Link::name('Destination'),
                    ]),
                ]),
            ]),
        ];
    }

    public function renderLink($link)
    {
        if (! $link->destination->hasContent()) {
            return Blade::render('<x-fab::elements.icon :icon="$icon" class="fic-size-5 fic-text-gray-400 hover:fic-text-gray-500" />', ['icon' => $link->icon->key]);
        }

        return $link->destination
            ->class('fic-text-gray-400 hover:fic-text-gray-500')
            ->setHtml(fn () => Blade::render('<x-fab::elements.icon :icon="$icon" class="fic-size-5" />', ['icon' => $link->icon->key]));
    }
}
