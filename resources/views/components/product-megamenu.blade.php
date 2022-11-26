<div id="products-dropdown" class="hidden top-[141px] z-10 px-24 fixed w-full left-0 right-0 py-7 bg-white">
    <div class="ml-[12%]">
        <div class="flex flex-row justify-between">
            <div class="flex flex-col pb-10 justify-between">
              <div>
                
                <x-dropdown-part link="#" text="Acne Out"/>
                <x-dropdown-part link="#" text="Pure Skin"/>
                <x-dropdown-part link="#" text="Atopity"/>
                <x-dropdown-part link="#" text="Melabel"/>
                <x-dropdown-part link="#" text="Sebomax"/>
                <x-dropdown-part link="#" text="Odorex"/>
                <x-dropdown-part link="#" text="Keratolin Body"/>
                <x-dropdown-part link="#" text="Keratolin Foot"/>
                <x-dropdown-part link="#" text="Keratolin Hands & Maxi"/>
                <x-dropdown-part link="#" text="Scarex"/>
                <x-dropdown-part link="#" text="Calmax & Repelex"/>
                <x-dropdown-part link="#" text="Мини продукти"/>
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