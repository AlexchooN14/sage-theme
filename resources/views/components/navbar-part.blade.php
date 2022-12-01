<li {{ $attributes->merge(['class' => 'mx-5 py-7 text-gray-700 items-center']) }}    
    @if ($megamenuType)
        @if (in_array($megamenuType, $megamenuTypes))
            @php ($megamenuId = $megamenuAttributes[$megamenuType]['id'])
            id='{{ $megamenuId }}-dropdown-button' data-collapse-toggle='{{ $megamenuId }}-dropdown'
            data-dropdown-placement='bottom'
        @else
            @php (throw new InvalidArgumentException($megamenuType." is not a valid Megamenu Type"))
        @endif
    @endif
    >

    @if($iconType)
        <div class='flex flex-row items-center'>               
            <i class="{{ $iconClass }}"></i>           
            <a href="{{ $link }}" class='hover-underline-animation block rounded md:border-0 md:p-0'>{{ $linkText }}</a>
        </div>
    @else
        <a href="{{ $link }}" class='hover-underline-animation block rounded md:border-0 md:p-0'>{{ $linkText }}</a>
    @endif
    
    @if($megamenuType)
        @if($megamenuType == 'blog')
            <x-blog-megamenu />
        @else
            <x-megamenu :megamenuType='$megamenuType' :megamenuTypes='$megamenuTypes' :megamenuAttributes='$megamenuAttributes' />
        @endif
    @endif

</li>
