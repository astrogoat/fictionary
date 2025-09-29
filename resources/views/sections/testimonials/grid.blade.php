<x-lego::section class="relative isolate">
    <div class="fic-absolute fic-inset-x-0 fic-top-1/2 fic--z-10 fic--translate-y-1/2 fic-transform-gpu fic-overflow-hidden fic-opacity-30 fic-blur-3xl" aria-hidden="true">
        <div class="fic-ml-[max(50%,38rem)] fic-aspect-[1313/771] fic-w-[82.0625rem] fic-bg-gradient-to-tr fic-from-[#ff80b5] fic-to-[#9089fc]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="fic-absolute fic-inset-x-0 fic-top-0 fic--z-10 fic-flex fic-transform-gpu fic-overflow-hidden fic-pt-32 fic-opacity-25 fic-blur-3xl sm:fic-pt-40 xl:fic-justify-end" aria-hidden="true">
        <div class="fic-ml-[-22rem] fic-aspect-[1313/771] fic-w-[82.0625rem] fic-flex-none fic-origin-top-right fic-rotate-[30deg] fic-bg-gradient-to-tr fic-from-[#ff80b5] fic-to-[#9089fc] xl:fic-ml-0 xl:fic-mr-[calc(50%-12rem)]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        <div class="fic-mx-auto fic-max-w-2xl fic-text-center">
            {!! $this->get('heading.eyebrow')->class('fic-text-base/7 fic-font-semibold fic-text-indigo-600') !!}
            {!! $this->get('heading.heading')->class('fic-mt-2 fic-text-balance fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl') !!}
        </div>
        <div class="fic-mx-auto {{ $this->get('heading.heading')->hasContent() ? 'fic-mt-16' : '' }} fic-grid fic-max-w-2xl fic-grid-cols-1 fic-grid-rows-1 fic-gap-8 fic-text-sm/6 fic-text-gray-900 sm:fic-mt-20 sm:fic-grid-cols-2 xl:fic-mx-0 xl:fic-max-w-none xl:fic-grid-flow-col xl:fic-grid-cols-4">
            @php($prominent = $this->get('testimonials.prominent'))
            @if($prominent->quote->hasContent())
                <x-fic::testimonials.grid.item
                    :name="$prominent->name"
                    :additional-name-information="$prominent->additionalNameInformation"
                    :quote="$prominent->quote"
                    :image-src="$prominent->image->getFirstMediaUrl()"
                    size="large"
                >
                </x-fic::testimonials.grid.item>
            @endif
            <div class="fic-space-y-8 xl:fic-contents xl:fic-space-y-0">
                <div class="fic-space-y-8 xl:fic-row-span-2">
                    @foreach($this->get('testimonials.rowOne.testimonials') as $testimonial)
                        <x-fic::testimonials.grid.item
                            :name="$testimonial->name"
                            :additional-name-information="$testimonial->additionalNameInformation"
                            :quote="$testimonial->quote"
                            :image-src="$testimonial->image->getFirstMediaUrl()"
                        >
                        </x-fic::testimonials.grid.item>
                    @endforeach
                </div>
                <div class="fic-space-y-8 xl:fic-row-start-1">
                    @foreach($this->get('testimonials.rowTwo.testimonials') as $testimonial)
                        <x-fic::testimonials.grid.item
                            :name="$testimonial->name"
                            :additional-name-information="$testimonial->additionalNameInformation"
                            :quote="$testimonial->quote"
                            :image-src="$testimonial->image->getFirstMediaUrl()"
                        >
                        </x-fic::testimonials.grid.item>
                    @endforeach
                </div>
            </div>
            <div class="fic-space-y-8 xl:fic-contents xl:fic-space-y-0">
                <div class="fic-space-y-8 xl:fic-row-start-1">
                    @foreach($this->get('testimonials.rowThree.testimonials') as $testimonial)
                        <x-fic::testimonials.grid.item
                            :name="$testimonial->name"
                            :additional-name-information="$testimonial->additionalNameInformation"
                            :quote="$testimonial->quote"
                            :image-src="$testimonial->image->getFirstMediaUrl()"
                        >
                        </x-fic::testimonials.grid.item>
                    @endforeach
                </div>
                <div class="fic-space-y-8 xl:fic-row-span-2">
                    @foreach($this->get('testimonials.rowFour.testimonials') as $testimonial)
                        <x-fic::testimonials.grid.item
                            :name="$testimonial->name"
                            :additional-name-information="$testimonial->additionalNameInformation"
                            :quote="$testimonial->quote"
                            :image-src="$testimonial->image->getFirstMediaUrl()"
                        >
                        </x-fic::testimonials.grid.item>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-lego::section>
