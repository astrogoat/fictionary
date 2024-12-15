<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        <div class="fic-mx-auto fic-grid fic-max-w-2xl fic-grid-cols-1 fic-gap-x-8 fic-gap-y-16 sm:fic-gap-y-20 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-5">
            <div class="fic-col-span-2">
                {!! $this->get('eyebrow')->class('fic-text-base/7 fic-font-semibold fic-text-accent-600') !!}
                {!! $this->get('heading')->class('fic-mt-2 fic-text-pretty fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl') !!}
                {!! $this->get('description')->class('fic-mt-6 fic-text-base/7 fic-text-gray-600') !!}
            </div>
            <dl class="fic-col-span-3 fic-grid fic-grid-cols-1 fic-gap-x-8 fic-gap-y-10 fic-text-base/7 fic-text-gray-600 sm:fic-grid-cols-2 lg:fic-gap-y-16">
                @foreach($this->get('callouts.items') as $callout)
                    <div class="fic-relative fic-pl-9">
                        <dt class="fic-font-semibold fic-text-gray-900">
{{--                            <x-fab::elements.icon icon="bell" />--}}
                            {!! $this->getCalloutIcon($callout) !!}
{{--                            <svg class="fic-absolute fic-left-0 fic-top-1 fic-size-5 fic-text-accent-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />--}}
{{--                            </svg>--}}
                            {{ $callout->title }}
                        </dt>
                        {!! $callout->description->class('fic-mt-2') !!}
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</x-lego::section>
