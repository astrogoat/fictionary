<?php

namespace Astrogoat\Fictionary\Sections\Blog;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Toggle;
use Helix\Lego\Http\Livewire\Section;

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
                'description' => Text::name('Description')->renderAsElement('p')->multipleLines(),
                'image' => Media::name('Image')->maxFiles(1),
                'link' => Link::name('Link'),
                'showCta' => Toggle::name('Show CTA')->default(false),
            ]),
        ];
    }
}
