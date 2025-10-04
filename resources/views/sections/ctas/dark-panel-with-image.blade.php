<x-lego::section>
    <div class="fic-mx-auto fic-max-w-7xl sm:fic-px-6 lg:fic-px-8">
        <div class="fic-relative fic-isolate fic-overflow-hidden fic-bg-gray-900 fic-px-6 fic-pt-16 fic-shadow-2xl sm:fic-rounded-3xl sm:fic-px-16 md:fic-pt-24 lg:fic-flex lg:fic-gap-x-20 lg:fic-px-24 lg:fic-pt-0">
            <svg viewBox="0 0 1024 1024" class="fic-absolute fic-left-1/2 fic-top-1/2 fic--z-10 fic-size-[64rem] fic--translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:fic-left-full sm:fic--ml-80 lg:fic-left-1/2 lg:fic-ml-0 lg:fic--translate-x-1/2 lg:fic-translate-y-0" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                <defs>
                    <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                        <stop stop-color="#7775D6" />
                        <stop offset="1" stop-color="#E935C1" />
                    </radialGradient>
                </defs>
            </svg>
            <div class="fic-mx-auto fic-max-w-md fic-text-center lg:fic-mx-0 lg:fic-flex-auto lg:fic-py-32 lg:fic-text-left">
                {!! $this->get('heading.copy')->class('font-headline fic-text-balance fic-text-3xl fic-font-semibold fic-tracking-tight fic-text-white sm:fic-text-4xl') !!}
                {!! $this->get('description.copy')->class('fic-mt-6 fic-text-pretty fic-text-lg/8 fic-text-gray-300') !!}
                <div class="fic-mt-10 fic-flex fic-items-center fic-justify-center fic-gap-x-6 lg:fic-justify-start">
                    {!! $this->get('ctas.primary')->class('fic-rounded-md fic-bg-white fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-gray-900 fic-shadow-sm hover:fic-bg-gray-100 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-white') !!}
                    {!! $this->get('ctas.secondary')->class('fic-text-sm/6 fic-font-semibold fic-text-white') !!}
                </div>
            </div>
            <div class="fic-relative fic-mt-16 fic-h-80 lg:fic-mt-8">
                {!! $this->get('image.media')->class('fic-absolute fic-left-0 fic-top-0 fic-w-[57rem] fic-max-w-none fic-rounded-md fic-bg-white/5 fic-ring-1 fic-ring-white/10') !!}
{{--                <img class="fic-absolute fic-left-0 fic-top-0 fic-w-[57rem] fic-max-w-none fic-rounded-md fic-bg-white/5 fic-ring-1 fic-ring-white/10" src="https://tailwindui.com/plus/img/component-images/dark-project-app-screenshot.png" alt="App screenshot" width="1824" height="1080">--}}
            </div>
        </div>
    </div>
</x-lego::section>
