<?php

namespace Astrogoat\Fictionary\Sections\Heroes;

use Closure;
use Exception;
use Helix\Lego\Bricks\Button;
use Helix\Lego\Bricks\Checkbox;
use Helix\Lego\Bricks\Group;
use Helix\Lego\Bricks\Input;
use Helix\Lego\Bricks\Link;
use Helix\Lego\Bricks\Media;
use Helix\Lego\Bricks\Select;
use Helix\Lego\Bricks\Text;
use Helix\Lego\Http\Livewire\Section;

class SplitWithScreenshot extends Section
{
    protected string $view = 'fictionary::sections.heroes.split-with-screenshot';
    protected static ?string $thumbnail = 'vendor/fictionary/section-thumbnails/heroes/split-with-screenshot.jpg';

    public bool|string $subscribedMessage = false;

    public static ?Closure $signUp = null;
    public bool|null $signUpSuccessful = null;

    public function bricks(): array
    {
        return [
            'heading' => Text::name('Heading')->renderAsElement(false),
            'subheading' => Text::name('Subheading')->renderAsElement(false)->multipleLines(),
            'logo' => Group::name('Logo')
                ->bricks([
                    'media' => Media::name('Logo')->maxFiles(1),
                    'height' => Select::name('Height')->options([
                        'fic-h-8' => 'Extra Small',
                        'fic-h-12' => 'Small',
                        'fic-h-16' => 'Medium',
                        'fic-h-20' => 'Large',
                        'fic-h-24' => 'Extra Large',
                        '' => 'Full',
                    ]),
                ]),
            'screenshot' => Media::name('Screenshot')->maxFiles(1),
            'update' => Group::name('Update')
                ->bricks([
                    'show' => Checkbox::name('Show update?')->default(true),
                    'badge' => Text::name('Badge')->renderAsElement(false)
                        ->when(fn ($brick, $group) => $this->get($group)->show->isChecked())
                        ->default("What's new"),
                    'update' => Text::name('Update')->renderAsElement(false)
                        ->when(fn ($brick, $group) => $this->get($group)->show->isChecked()),
                ]),
            'cta' => Group::name('Call to Action')->bricks([
                'mode' => Select::name('CTA Mode')->options([
                    'input' => 'Input',
                    'buttons' => 'Buttons',
                    'both' => 'Both',
                ])->help('Show input field, buttons, or both'),
                'input' => Input::name('Input')->when(fn () => in_array($this->get('cta.mode')->getKey(), ['input', 'both'])),
                'inputButton' => Button::name('Input Button')->when(fn () => in_array($this->get('cta.mode')->getKey(), ['input', 'both'])),
                'primaryCta' => Link::name('Primary CTA')->when(fn () => in_array($this->get('cta.mode')->getKey(), ['buttons', 'both'])),
                'secondaryCta' => Link::name('Secondary CTA')->when(fn () => in_array($this->get('cta.mode')->getKey(), ['buttons', 'both'])),
            ]),
        ];
    }

    public function signUp()
    {
        if (static::$signUp) {
            $response = call_user_func(static::$signUp, $this->getInput('cta.input'), $this);

            $this->signUpSuccessful = ! ($response instanceof Exception);
            $this->subscribedMessage = ($response instanceof Exception) ? $response->getMessage() : $response;

            $this->remount();

            return;
        }

        $this->signUpSuccessful = true;
        $this->subscribedMessage = 'Thank up for signing up!';

        return null;
    }
}
