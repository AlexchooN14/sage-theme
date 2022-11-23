<div {{ $attributes->merge(['class' => 'flex flex-col text-left']) }}>
    <a href="{{ $permalink }}">
        <img src="{{ $image_url }}" />
    </a>
    <div>
        <p class="text-sm text-gray-400 h-12">
            @if ($excerpt)
                {{ $excerpt }}
            @endif
        </p>
        <a href="{{ $permalink }}">
            <p>{{ $title }}</p>
        </a>                            
    
        <span>Ревюта</span>
    
        <p class="my-3">{{ $price }} лв.</p>
            
        @if ($in_stock > 0 || !is_int($in_stock))
            <button class="h-12 bg-buy-button w-full items-center justify-center transition ease-in-out delay-50 hover:scale-110 duration-300">
                <p class="text-white">Добави в количката</p>
            </button>
        @else
            <button class="h-12 bg-gray-200 w-full items-center justify-center disabled" style="cursor: not-allowed;">
                <p class="text-white">Изчерпан</p>
            </button>
        @endif  
    </div>
</div>