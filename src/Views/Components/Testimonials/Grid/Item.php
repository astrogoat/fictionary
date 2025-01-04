<?php

namespace Astrogoat\Fictionary\Views\Components\Testimonials\Grid;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Item extends Component
{
    public function __construct(
        public string $name,
        public string $quote,
        public ?string $imageSrc = null,
        public ?string $additionalNameInformation = null,
        public string $size = 'small',
    )
    {
    }

    public function render(): View
    {
        if ($this->size === 'large') {
            return view('fictionary::components.testimonials.grid.large');
        }

        return view('fictionary::components.testimonials.grid.small');
    }
}
