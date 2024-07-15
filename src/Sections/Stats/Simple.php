<?php

namespace Astrogoat\Fictionary\Sections\Stats;

use Helix\Lego\Bricks\Text;
use Helix\Lego\Bricks\Brick;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Number;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Repeater;
use Helix\Lego\Bricks\Checkbox;
use Helix\Lego\Http\Livewire\Section;

class Simple extends Section
{
    protected $view = 'fictionary::sections.stats.simple';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/stats/simple.jpg';

    /**
     * @return array<Brick>
     */
    public function bricks(): array
    {
        return [
            'stats' => Repeater::name('Stats')->bricks([
                'count' => Number::name('Count'),
                'description' => Text::name('Description')->renderAsElement('dt')->help('Optional'),
                'prefix' => Text::name('Prefix')->help('Optional')->renderAsElement(false),
                'suffix' => Text::name('Suffix')->help('Optional')->renderAsElement(false),
                'shouldAnimate' => Checkbox::name('Should animate the count?')->default(false),
                'animationStart' => Number::name('Animation start number')
                    ->default(0)
                    ->when(fn ($brickName, $groupBrickName, $repeaterIndex) => $this->get("stats.$repeaterIndex.shouldAnimate")->isChecked()),
                'animationDuration' => Number::name('Animation duration')
                    ->default(2)
                    ->step(.5)
                    ->when(fn ($brickName, $groupBrickName, $repeaterIndex) => $this->get("stats.$repeaterIndex.shouldAnimate")->isChecked()),
                'animateOnce' => Checkbox::name('Animate once')
                    ->default(true)
                    ->help('Animate the stat when it comes into view only once? If unchecked it will animate everytime the stat comes back into view.')
                    ->when(fn ($brickName, $groupBrickName, $repeaterIndex) => $this->get("stats.$repeaterIndex.shouldAnimate")->isChecked()),
            ]),
            'density' => Select::name('Stats Density')
                ->options([
                    'tight' => 'Tight',
                    'normal' => 'Normal',
                    'spacious' => 'Spacious',
                    'extra-spacious' => 'Extra Spacious',
                ])
                ->default('normal')
                ->help('How many stats before breaking to a new line.'),
        ];
    }

    public function getGridDensityCss(): string
    {
        return match ($this->get('density')->getKey()) {
            'tight' => 'fic-max-w-lg fic-grid-cols-5 fic-gap-x-8 fic-gap-y-10 sm:fic-max-w-xl sm:fic-grid-cols-7 sm:fic-gap-x-10 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-6',
            default => 'fic-max-w-lg fic-grid-cols-4 fic-gap-x-8 fic-gap-y-10 sm:fic-max-w-xl sm:fic-grid-cols-6 sm:fic-gap-x-10 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-5',
            'spacious' => 'fic-max-w-lg fic-grid-cols-3 fic-gap-x-8 fic-gap-y-10 sm:fic-max-w-xl sm:fic-grid-cols-5 sm:fic-gap-x-10 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-4',
            'extra-spacious' => 'fic-max-w-lg fic-grid-cols-2 fic-gap-x-8 fic-gap-y-10 sm:fic-max-w-xl sm:fic-grid-cols-4 sm:fic-gap-x-10 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-3',
        };
    }
}
