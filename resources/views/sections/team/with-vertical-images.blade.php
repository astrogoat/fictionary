<x-lego::section :section="$this">
    <div class="fic-mx-auto fic-grid fic-max-w-7xl fic-grid-cols-1 fic-gap-20 fic-px-6 lg:fic-px-8 xl:fic-grid-cols-5">
        <div class="fic-max-w-2xl xl:fic-col-span-2">
            {!! $this->get('heading.heading')->class('fic-text-pretty fic-text-4xl fic-font-semibold fic-tracking-tight fic-text-gray-900 sm:fic-text-5xl') !!}
            {!! $this->get('heading.description')->class('fic-mt-6 fic-text-lg/8 fic-text-gray-600') !!}
        </div>
        <ul role="list" class="fic--mt-12 fic-space-y-12 fic-divide-y fic-divide-gray-200 xl:fic-col-span-3">
            @foreach($this->get('rows.rows') as $row)
                <li class="fic-flex fic-flex-col fic-gap-10 fic-pt-12 sm:fic-flex-row">
                    {!! $row->media->class('fic-aspect-[4/5] fic-w-52 fic-flex-none fic-rounded-2xl fic-object-cover') !!}
                    <div class="fic-max-w-xl fic-flex-auto">
                        {!! $row->title->class('fic-text-lg/8 fic-font-semibold fic-tracking-tight fic-text-gray-900') !!}
                        {!! $row->description->class('fic-text-base/7 fic-text-gray-600') !!}
                        {!! $row->content->class('fic-mt-6 fic-text-base/7 fic-text-gray-600') !!}
                        <ul role="list" class="fic-mt-6 fic-flex fic-gap-x-6">
                            @foreach($row->links as $link)
                                <li>
                                    {!! $this->renderLink($link) !!}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-lego::section>
