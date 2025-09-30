<x-lego::section>
    <div class="fic-px-6 fic-py-24 sm:fic-px-6 sm:fic-py-32 lg:fic-px-8">
        <div class="fic-mx-auto fic-max-w-2xl fic-text-center">
            {!! $this->get('heading.copy')->class('font-headline fic-text-balance fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl') !!}
            {!! $this->get('subheading.copy')->class('fic-mx-auto fic-mt-6 fic-max-w-xl fic-text-pretty fic-text-lg/8 fic-text-gray-600') !!}
            <div class="fic-mt-10 fic-flex fic-items-center fic-justify-center fic-gap-x-6">
                {!! $this->get('ctas.primary')->class('fic-rounded-md fic-bg-accent-600 fic-px-3.5 fic-py-2.5 fic-text-sm fic-font-semibold fic-text-white fic-shadow-sm hover:fic-bg-accent-500 focus-visible:fic-outline focus-visible:fic-outline-2 focus-visible:fic-outline-offset-2 focus-visible:fic-outline-accent-600') !!}
                {!! $this->get('ctas.secondary')->class('fic-text-sm/6 fic-font-semibold fic-text-gray-900') !!}
            </div>
        </div>
    </div>
</x-lego::section>
