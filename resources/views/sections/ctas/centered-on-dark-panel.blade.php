<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl sm:fic-px-6 lg:fic-px-8">
        <div class="fic-relative fic-isolate fic-overflow-hidden fic-bg-gray-900 fic-px-6 fic-py-24 fic-text-center fic-shadow-2xl sm:fic-rounded-3xl sm:fic-px-16">
            {!! $this->get('heading.copy')->class('fic-text-balance fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-white sm:fic-text-5xl') !!}
            {!! $this->get('description.copy')->class('fic-mx-auto fic-mt-6 fic-max-w-xl fic-text-pretty fic-text-lg/8 fic-text-gray-300') !!}
            <div class="fic-mt-10 fic-flex fic-items-center fic-justify-center fic-gap-x-6">
                {!! $this->get('ctas.primary')->class('fic-rounded-md fic-bg-white fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-gray-900 fic-shadow-sm hover:fic-bg-gray-100 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-white') !!}
                {!! $this->get('ctas.secondary')->class('fic-text-sm/6 fic-font-semibold fic-text-white') !!}
            </div>
            <svg viewBox="0 0 1024 1024" class="fic-absolute fic-left-1/2 fic-top-1/2 fic--z-10 size-[64rem] fic--translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
                <defs>
                    <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                        <stop stop-color="#7775D6" />
                        <stop offset="1" stop-color="#E935C1" />
                    </radialGradient>
                </defs>
            </svg>
        </div>
    </div>
</x-lego::section>
