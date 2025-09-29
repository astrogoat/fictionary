<x-lego::section>
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        <div class="fic-mx-auto fic-max-w-2xl lg:fic-mx-0">
            {!! $this->get('heading.heading')->class('fic-text-pretty fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl') !!}
            {!! $this->get('heading.description')->class('fic-mt-6 fic-text-lg/8 fic-text-gray-600') !!}
        </div>
        <div class="fic-mx-auto fic-mt-16 fic-max-w-2xl sm:fic-mt-20 lg:fic-mt-24 lg:fic-max-w-none">
            <dl class="fic-grid fic-max-w-xl fic-grid-cols-1 fic-gap-x-8 fic-gap-y-16 lg:fic-max-w-none lg:fic-grid-cols-3">
                @foreach($this->get('features.items') as $feature)
                    <div class="fic-flex fic-flex-col">
                        <dt class="fic-text-base/7 fic-font-semibold fic-text-gray-900">
                            @php($icon = $this->renderFeatureIcon($feature))
                            @if($icon)
                                <div class="fic-mb-6 fic-flex fic-size-10 fic-items-center fic-justify-center fic-rounded-lg fic-bg-accent-600">
                                    {!! $icon !!}
                                </div>
                            @endif
                            {!! $feature->title !!}
                        </dt>
                        <dd class="fic-mt-1 fic-flex fic-flex-auto fic-flex-col fic-text-base/7 fic-text-gray-600">
                            {{ $feature->description->class('fic-flex-auto') }}
                            @if($feature->link->hasContent())
                                <p class="fic-mt-6">
                                    {!! $feature->link->class('fic-text-sm/6 fic-font-semibold fic-text-accent-600') !!}
                                </p>
                            @endif
                        </dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </div>
</x-lego::section>
