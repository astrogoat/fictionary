<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-max-w-7xl fic-px-6 lg:fic-px-8">
        <div class="fic-mx-auto fic-max-w-2xl fic-text-center">
            {!! $this->get('heading.heading')->class('fic-text-balance fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl') !!}
            {!! $this->get('heading.description')->class('fic-mt-2 fic-text-lg/8 fic-text-gray-600') !!}
        </div>
        <div class="fic-mx-auto {{ $this->get('heading.heading')->hasContent() || $this->get('heading.description')->hasContent() ? 'fic-mt-16' : '' }} fic-grid fic-max-w-2xl fic-auto-rows-fr fic-grid-cols-1 fic-gap-8 sm:fic-mt-20 lg:fic-mx-0 lg:fic-max-w-none lg:fic-grid-cols-3">
            @foreach($this->get('articles') as $article)
                <article class="fic-relative fic-isolate fic-flex fic-flex-col fic-justify-end fic-overflow-hidden fic-rounded-2xl fic-bg-gray-900 fic-px-8 fic-pb-8 fic-pt-80 sm:fic-pt-48 lg:fic-pt-80 {{ $article->layout->colSpan->key }}">
                    {!! $article->image->image->class('fic-absolute fic-inset-0 fic--z-10 fic-size-full fic-object-cover') !!}
                    <div class="fic-absolute fic-inset-0 fic--z-10 fic-bg-gradient-to-t fic-from-gray-900 fic-via-gray-900/50"></div>
                    <div class="fic-absolute fic-inset-0 fic--z-10 fic-rounded-2xl fic-ring-1 fic-ring-inset fic-ring-gray-900/10"></div>

                    <div class="fic-flex fic-flex-wrap fic-items-center fic-gap-y-1 fic-overflow-hidden fic-text-sm/6 fic-text-gray-300">
{{--                            <time datetime="2020-03-16" class="fic-mr-8">{{ $article->author->date }}</time>--}}
                        <div class="fic--ml-4 fic-flex fic-items-center fic-gap-x-4">
                            <svg viewBox="0 0 2 2" class="fic--ml-0.5 fic-size-0.5 fic-flex-none fic-fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="fic-flex fic-gap-x-2.5">
                                {!! $article->author->image->class('fic-size-6 fic-flex-none fic-rounded-full fic-bg-white/10') !!}
                                {{ $article->author->name }}
                            </div>
                        </div>
                    </div>
                    <h3 class="fic-mt-3  fic-text-white">
                        <x-lego::bricks.link :link="$article->link->link">
                            <span class="fic-absolute fic-inset-0"></span>

                            <div class="flex flex-col">
                                <span class="fic-font-semibold fic-text-xl/6">{{ $article->link->link->getContent() }}</span>
                                {{ $article->description->description->getContent() }}
                            </div>
                        </x-lego::bricks.link>
                    </h3>
                </article>
            @endforeach
        </div>
    </div>
</x-lego::section>
