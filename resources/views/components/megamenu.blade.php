<div id="{{ $id }}-dropdown" {{ $attributes->merge(['class' => 'absolute hidden top-[108px] border-t border-gray-100 z-10 px-24 fixed w-full left-0 right-0 py-7 bg-white']) }}>
    <div id="{{ $id }}-left-wrapper">
        <div class="flex flex-row justify-between">
            <div class="flex flex-col pb-10 justify-between">
              <div>
                {{-- <x-dropdown-part link="#" text="Acne Out" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Pure Skin" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Atopity" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Melabel" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Sebomax" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Odorex" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Keratolin Body" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Keratolin Foot" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Keratolin Hands & Maxi" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Scarex" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Calmax & Repelex" textSize="text-megamenu-bigger"/>
                <x-dropdown-part link="#" text="Мини продукти" textSize="text-megamenu-bigger"/> --}}
                @foreach($dropdownParts as $dropdownPart)
                    <x-dropdown-part link="{{ $dropdownPart['link'] }}" text="{{ $dropdownPart['text'] }}" textSize="{{ $dropdownPart['textSize'] }}"/>
                @endforeach
              </div>

              <button class="h-12 bg-buy-button items-center justify-center transition ease-in-out delay-50 hover:scale-110 duration-300">
                <p class="text-white hover-underline-animation">ВИЖ ВСИЧКИ</p>
              </button>
            </div>
            
            <div class="flex flex-row pb-10 grow-0 shrink-0 basis-[55em] ml-auto">
              <div class="min-h-full border-r border-gray-200 my-5 mr-15"></div>
              @foreach ($navbar_recommended_products as $navbar_recommended_product)
                <div class="flex flex-row w-1/2 px-3">
                    <x-recommended-product :product="$navbar_recommended_product" imageHeight="275" imageWidth="315"/>
                </div>
              @endforeach
            </div>        
        </div>    
    </div>
</div>