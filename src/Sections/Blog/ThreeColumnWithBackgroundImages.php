<?php

namespace Astrogoat\Fictionary\Sections\Blog;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class ThreeColumnWithBackgroundImages extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.blog.three-column-with-background-images';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/blog/three-column-with-background-images.jpg';

    public function bricks(): array
    {
        return [
            'heading' => Group::name('Heading')->bricks([
                'heading' => Text::name('Heading')->renderAsElement('h2'),
                'description' => Text::name('Description')->renderAsElement('p'),
            ]),
            'articles' => Repeater::name('Articles')->bricks([
                'author' => Group::name('Author')->bricks([
                    'name' => Text::name('Name')->renderAsElement(false),
                    'image' => Media::name('Image')->maxFiles(1),
                ]),
                'image' => Group::name('Image')->bricks([
                    'image' => Media::name('Image')->maxFiles(1),
                ]),
                'link' => Group::name('Link')->bricks([
                    'link' => Link::name('Title'),
                    'description' => Link::name('Title'),
                ]),
                'description' => Group::name('Description')->bricks([
                    'description' => Text::name('Description')->renderAsElement('span')->multipleLines(),
                ]),
                'layout' => Group::name('Layout')->bricks([
                    'colSpan' => Select::name('Column span')->default('lg:fic-col-span-1')->help('Number of columns the article should span.')->options([
                        'lg:fic-col-span-1' => '1',
                        'lg:fic-col-span-2' => '2',
                        'lg:fic-col-span-3' => '3',
                    ]),
                ]),
            ]),
        ];
    }
}
