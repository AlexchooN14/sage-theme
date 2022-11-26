<div class="mx-44 pb-5 pt-24">
    <div class="flex flex-col items-stretch justify-center m-auto w-full text-center">
        <div class="">
            <div class="my-3 text-sm tracking-widest">СВЪРЗАНИ ПРОДУКТИ</div>
            <div class="mb-10 text-4xl tracking-widest">МОЖЕ БИ ЩЕ ХАРЕСАШ И ТОВА</div>                
            {{-- Related products --}}
            <div class="grid grid-cols-3 gap-7 w-full">
                @foreach($recommended_products as $recommended_product)                    
                    <x-recommended-product :product="$recommended_product" :image-height="356" :image-width="356" />
                @endforeach
            </div>
        </div>
    </div>
</div>