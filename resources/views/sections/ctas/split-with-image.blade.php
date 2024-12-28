<x-lego::section :section="$this">
    <div class="fic-relative fic-bg-gray-900">
        <div class="fic-relative fic-h-80 fic-overflow-hidden fic-bg-accent-600 md:fic-absolute md:fic-left-0 md:fic-h-full md:fic-w-1/3 lg:fic-w-1/2">
            {!! $this->getBackgroundImageWithTransformations()->class('fic-size-full fic-object-cover') !!}
            <svg viewBox="0 0 926 676" aria-hidden="true" class="fic-absolute fic--bottom-24 fic-left-24 fic-w-[57.875rem] fic-transform-gpu fic-blur-[118px]">
                <path fill="url(#60c3c621-93e0-4a09-a0e6-4c228a0116d8)" fill-opacity=".4" d="m254.325 516.708-90.89 158.331L0 436.427l254.325 80.281 163.691-285.15c1.048 131.759 36.144 345.144 168.149 144.613C751.171 125.508 707.17-93.823 826.603 41.15c95.546 107.978 104.766 294.048 97.432 373.585L685.481 297.694l16.974 360.474-448.13-141.46Z" />
                <defs>
                    <linearGradient id="60c3c621-93e0-4a09-a0e6-4c228a0116d8" x1="926.392" x2="-109.635" y1=".176" y2="321.024" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#776FFF" />
                        <stop offset="1" stop-color="#FF4694" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="fic-relative fic-mx-auto fic-max-w-7xl fic-py-24 sm:fic-py-32 lg:fic-px-8 lg:fic-py-40">
            <div class="fic-pl-6 fic-pr-6 md:fic-ml-auto md:fic-w-2/3 md:fic-pl-16 lg:fic-w-1/2 lg:fic-pl-24 lg:fic-pr-0 xl:fic-pl-32">
                {!! $this->get('content.eyebrow')->class('fic-text-base/7 fic-font-semibold fic-text-accent-400') !!}
                {!! $this->get('content.title')->class('fic-mt-2 fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-white sm:fic-text-5xl') !!}
                {!! $this->get('content.description')->class('fic-mt-6 fic-text-base/7 fic-text-gray-300') !!}
{{--                <h2 class="fic-text-base/7 fic-font-semibold fic-text-accent-400">Award winning support</h2>--}}
{{--                <p class="fic-mt-2 fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-white sm:fic-text-5xl">We’re here to help</p>--}}
{{--                <p class="fic-mt-6 fic-text-base/7 fic-text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat quisque ut interdum tincidunt duis.</p>--}}
                <div class="fic-mt-8">
                    {!! $this->get('cta.primary')->class('fic-inline-flex fic-rounded-md fic-bg-white/10 fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-white/20 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-white') !!}
{{--                    <a href="#" class="fic-inline-flex fic-rounded-md fic-bg-white/10 fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-white/20 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-white">Visit the help center</a>--}}
                </div>
            </div>
        </div>
    </div>
</x-lego::section>
