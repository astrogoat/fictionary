<?php

namespace Astrogoat\Fictionary\Sections\Blog;

use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;
use Illuminate\Support\Facades\Blade;

class ThreeColumnWithImages extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.blog.three-column-with-images';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/blog/three-column-with-images.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')->bricks([
                'heading' => Text::name('Heading')->renderAsElement('h2'),
                'description' => Text::name('Description')->renderAsElement('p'),
            ]),
            'articles' => Repeater::name('Articles')->bricks([
                'title' => Text::name('Title')->renderAsElement(false),
                'description' => Text::name('Description')->renderAsElement(false)->multipleLines(),
                'image' => Media::name('Image')->maxFiles(1),
                'link' => Link::name('Link'),
            ]),
//            'eyebrow' => Text::name('Eyebrow')->renderAsElement('h2'),
//            'callouts' => Group::name('Callouts')->bricks([
//                ...$this->iconsBrick(),
//                'items' => Repeater::name('Callouts')
//                    ->bricks([
//                        'title' => Text::name('Title')->renderAsElement(false),
//                        'description' => Text::name('Description')->renderAsElement('dd'),
//                        ...$this->iconsWithCustomIconBrick(),
//                    ]),
//
//            ]),
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
