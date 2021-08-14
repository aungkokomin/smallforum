{{-- Category dropdown is built with Alpine JS code. x-data is the value receiving.
    x-show is hiding HTML element. It is one of Alpine JS function.
    @click act same like Javascript's OnClick function.
    The process is "reveal" set as "false" in default. If you click Category button, "reveal" is turning to opposite of current value (which is "true").
--}}


@props(['trigger'])

<div x-data="{reveal: false}" @click.away = "reveal = false"> {{-- @click.away is when u click on other part of page dropdown box will disappear.  --}}
    {{-- Dropdown Trigger --}}
    <div @click = "reveal = ! reveal ">
        {{$trigger}}
    </div>
    {{-- Dropdown Link --}}
    <div x-show="reveal" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-50" style="display: none">
        {{$slot}}
    </div>
</div>
