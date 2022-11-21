<li {{ $attributes->merge(['class' => 'mx-3 hover-underline-animation pb-0.5 text-gray-700']) }}>
    @if($iconType)
        <div class='flex flex-row items-center'>               
            <i class="{{ $iconClass }}"></i>           
            <a href="{{ $link }}" class='block rounded md:border-0 md:p-0'>{{ $linkText }}</a>
        </div>
    @else
        <a href="{{ $link }}" class='block rounded md:border-0 md:p-0'>{{ $linkText }}</a>
    @endif    
    
</li>