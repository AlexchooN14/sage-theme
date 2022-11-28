{{-- Related Blogposts --}}
<div {{ $attributes->merge(['class' => 'flex flex-col blogpost-wrapper']) }}>
    {{-- image --}}
    <img src="{{ $imageUrl }}" class="mb-6 blogpost-image">
    {{-- meta --}}
    <div class="flex flex-row justify-center align-center mb-3">
        <div class="flex flex-column w-1/2 top-1/2">
            <span class="text-sm font-thin text-left tracking-wide">{{ $category }}</span>
        </div>
        <span class="mx-2">|</span>
        <div class="flex flex-column w-1/2 items-center">
            <span class="text-sm font-thin text-gray-500 text-left tracking-tight">{{ $dateOfPosting }}</span>
        </div>
        
    </div>                    
    {{-- heading --}}
    <div class="text-lg tracking-wider text-left mb-12">{{ $title }}</div>
    {{-- read more --}}
    <a href="{{ $link }}" class="text-buy-button text-left text-sm font-medium">ПРОЧЕТИ</a>
</div>

<style>
    .blogpost-wrapper:hover > .blogpost-image {
        opacity: 0.5;
    }
</style>