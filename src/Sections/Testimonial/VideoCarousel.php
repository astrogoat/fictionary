<?php

namespace Astrogoat\Fictionary\Sections\Testimonial;

use Astrogoat\Fictionary\Traits\CommonSection;
use Helix\Lego\Bricks\Checkbox;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Number;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Video;
use Helix\Lego\Http\Livewire\Section;

class VideoCarousel extends Section
{
    use CommonSection;

    protected string $view = 'fictionary::sections.testimonials.video-carousel';
    //    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/testimonials/carousel.jpg';

    public function bricks(): array
    {
        $options = [
            'slidesPerView' => Select::name('Slides per view')
                ->default(3)
                ->options([
                    'auto' => 'Auto',
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                    6 => '6',
                    7 => '7',
                    8 => '8',
                    9 => '9',
                    10 => '10',
                ]),
            'loop' => Checkbox::name('Loop')->default(false),
            'spaceBetween' => Number::name('Space between slides')->default(30),
            'centeredSlides' => Checkbox::name('Centered slides')->default(false),
        ];

        return [
            'title' => Text::name('Title'),
            'slides' => Repeater::name('Slides')->bricks([
                'video' => Video::name('Video'),
                'cover' => Media::name('Cover')->allowMultiple(false),
            ]),
            'options' => Group::name('Options')->bricks([
                'mobile' => Group::name('Mobile')->bricks($options),
                'tablet' => Group::name('Tablet')->bricks($options),
                'desktop' => Group::name('Desktop')->bricks($options),
            ]),
        ];
    }
}
