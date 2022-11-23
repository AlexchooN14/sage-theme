<div class="mx-44 pb-5 pt-24">
    <div class="flex flex-col items-stretch justify-center m-auto w-full text-center">
        <div class="">
            <div class="my-3 text-sm tracking-widest">СВЪРЗАНИ ПРОДУКТИ</div>
            <div class="mb-10 text-4xl tracking-widest">МОЖЕ БИ ЩЕ ХАРЕСАШ И ТОВА</div>                
            {{-- Related products --}}
            <div class="grid grid-cols-3 gap-7 w-full">        
                {{-- @dump($recommended_products) --}}
                @foreach($recommended_products as $recommended_product)
                    {{-- <div class="flex flex-col text-left"> --}}
                        {{-- <a href="{!! get_the_permalink($recommended_product) !!}">
                            <img src="{!! get_the_post_thumbnail_url($recommended_product) !!}" />
                        </a>
                        <div>
                            <p class="text-sm text-gray-400 h-12">
                                @if (get_post_field('post_excerpt', $recommended_product))
                                    {!! get_post_field('post_excerpt', $recommended_product) !!}
                                @endif
                            </p>
                            <a href="{!! get_the_permalink($recommended_product) !!}">
                                <p>{!! get_the_title($recommended_product) !!}</p>
                            </a>                            

                            <span>Ревюта</span>

                            <p class="my-3">{!! (wc_get_product($recommended_product))->get_regular_price() !!} лв.</p>

                            @php($product_quantity = (wc_get_product($recommended_product))->get_stock_quantity())
                            @if ($product_quantity > 0 || !is_int($product_quantity))
                                <button class="h-12 bg-buy-button w-full items-center justify-center transition ease-in-out delay-50 hover:scale-110 duration-300">
                                    <p class="text-white">Добави в количката</p>
                                </button>
                            @else
                                <button class="h-12 bg-gray-200 w-full items-center justify-center disabled" style="cursor: not-allowed;">
                                    <p class="text-white">Изчерпан</p>
                                </button>
                            @endif  
                        </div>  --}}                        
                    {{-- </div> --}}
                    <x-recommended-product :product="$recommended_product" />
                @endforeach
            </div>
        </div>
    </div>
</div>