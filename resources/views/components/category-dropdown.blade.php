<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold text-left flex w-full lg:inline-flex lg:w-32">
            {{isset($CurrentCat) ? $CurrentCat->name : 'Category'}}

            <x-icon name="down-arrow" class="absolute pointer-event-none" style="right: 12px"/>

        </button>
    </x-slot>
    <x-dropdown-item href="/" :active="empty(request('category'))">All</x-dropdown-item>
    @foreach($categories as $category)
        <x-dropdown-item
            href="/?category={{$category->slug}}" :active="request('category') == $category->slug">
            {{$category->name}}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
