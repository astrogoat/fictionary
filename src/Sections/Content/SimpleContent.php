<?php

namespace Astrogoat\Fictionary\Sections\Content;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Editor;
use Helix\Lego\Bricks\Toggle;
use Helix\Lego\Http\Livewire\Section;

class SimpleContent extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.content.simple-content';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/content/simple-content.jpg';

    public function bricks(): array
    {
        return [
            'content' => Editor::name('Content'),
            'useProse' => Toggle::name('Optimize readability')
                ->help('This will format the content for better readability.')
                ->default(true),
        ];
    }
}
