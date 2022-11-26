<li {{ $attributes->merge(['class' => 'mx-5 py-7 text-gray-700 items-center']) }}
    @if($dropdownAttributes)
        id='{{ ($dropdownAttributes['id']) }}' data-collapse-toggle='{{ $dropdownAttributes['data-collapse-toggle'] }}'
        data-dropdown-placement='{{ $dropdownAttributes['data-dropdown-placement'] }}'
    @endif>

    @if($iconType)
        <div class='flex flex-row items-center'>               
            <i class="{{ $iconClass }}"></i>           
            <a href="{{ $link }}" class='hover-underline-animation block rounded md:border-0 md:p-0'>{{ $linkText }}</a>
        </div>
    @else
        <a href="{{ $link }}" class='hover-underline-animation block rounded md:border-0 md:p-0'>{{ $linkText }}</a>
    @endif

    {{-- <style>
        #products-dropdown-button:hover #products-dropdown {
            display: block;
            opacity: 0;
        }
        #products-dropdown:not([class*="hidden"]) {
            opacity: 1;
            transition: opacity 2.3s ease-in-out;
        }
        #products-dropdown-button:hover #products-dropdown:not(:hover) {
            
        }
    </style> --}}
    
    @if($dropdownAttributes)        
        <x-dynamic-component :component="$dropdownAttributes['component']" />
    @endif

</li>