@php
  function create_list($string, $ul_classes, $ul_styles, $li_classes, $li_styles) {
    $string = str_replace("<ul>", "<ul class=\"".$ul_classes."\" style=\"".$ul_styles."\">", $string);
    $string = str_replace("<li>", "<li class=\"".$li_classes."\" style=\"".$li_styles."\">", $string);
    $string = str_replace("<p>", "<p class=\"".$li_classes."\" style=\"".$li_styles."\">", $string);
    return $string;    
  }
@endphp

<div class="mx-44">
  <div>
    {{-- Breadcrumbs --}}
    <p class="text-xs py-20">Начало/Продукти/Acne Out/Acne Out: Активен крем + Hydro Active хидратиращ крем</p>
  </div>

  <div class="flex flex-row justify-center items-start">
    {{-- Product content is one row --}}
    <div style="min-width: calc(50% + 40px);" class="flex flex-row mr-4 min-h-[200vh] ">

      {{--  --}}
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
      {{--  --}}

      {{-- Product visuals --}}
      @if($gallery)
        @php($counter = 0)
        {{-- Gallery --}}
        <div class="flex flex-col w-1/2">          
          <ul id="thumbnails" class="thumbnails">
            @foreach($gallery as $gallery_image_id)
              @if($counter == 0)
                @php($image = wp_get_attachment_image_url($gallery_image_id, 'full'))
                @php($counter++)
              @endif           
              <li class="thumbnail">
                <img src="{!! wp_get_attachment_image_url($gallery_image_id, 'full') !!}" alt="">
              </li>
            @endforeach
          </ul>
        </div>
        <script>          
          document.addEventListener("DOMContentLoaded", () => {
            var thumbnails = document.getElementsByClassName('thumbnail');
            for (var i = 0; i < thumbnails.length; i++) {
                initThumbnail(thumbnails[i], i);  // Does not work
            }
          });
        </script>
        
        {{-- Thumbnail Section --}}
        <div class="flex flex-col w-auto">                    
          @if($is_package_price)
            <div class="my-1 flex justify-end">
              <span class="bg-transparent text-xs font-semibold text-rose-500 py-2 px-4 border border-rose-500 rounded-full">
                ПАКЕТНА ЦЕНА
              </span>
            </div>
          @endif
          <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
            <div class="splide__track">
              <ul class="splide__list">
                @foreach($gallery as $gallery_image_id)          
                  <li class="splide__slide">
                    {{-- Thumbnail Photo --}}
                    <img src="{!! wp_get_attachment_image_url($gallery_image_id, 'full') !!}" alt="">
                  </li>               
                @endforeach
              </ul>
            </div>
          </section>                 
        </div>
        <script>  // does not work
          document.addEventListener("DOMContentLoaded", () => {
            createSplide();            
          });          
        </script>
      @endif
    </div>

    <div class="flex-col ml-4 w-auto justify-center">
      {{-- Product info --}}
      <p class="font-bold text-2xl">{!! the_title() !!}</p>
      @if($is_package_price)
        <p class="font-thin text-xs text-bundle-smalltext tracking-[.12em] mt-2 mb-1">промо комплект</p>
      @endif
      @if($bundle_price)
        <p class="text-xl">{!! $bundle_price !!} лв.</p>
      @endif
      <div class="flex flex-row w-full h-12 mt-4">
        {{-- quantity + button bar --}}

        <div name="quantity-input" class="w-1/7 bg-gray-100 flex flex-row">
          {{-- quantity part --}}
          <input name="quantity" type="number" class="text-sm ml-1 w-2/3 bg-gray-100 outline-0 border-none pointer-events-none" min="1" value="1">
          {{-- quantity number --}}
          <div class=" flex flex-col w-auto">
            <button class="" onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepUp()">
              <i class="fa-solid fa-plus text-[9px] font-light"></i>
            </button>
            <button class="" onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepDown()">
              <i class="fa-solid fa-minus text-[9px] font-light"></i>
            </button>              
          </div>          
        </div>  

        <button class="w-6/7 bg-buy-button items-center justify-center transition ease-in-out delay-50 hover:scale-110 duration-300">
          <p class="text-white">Купи</p>
        </button>        
      </div>
      
      <ul style="list-style-type: circle; list-style-position: inside;" class="my-6">
        <li class="my-3 text-xs">Индивидуална онлайн консултация</li>        
        <li class="my-3 text-xs">Безплатна доставка над 100 лв. | Сигурно плащане</li>
        <li class="my-3 text-xs">Комплимент мини продукт към всяка поръчка</li>
      </ul>

      <div class="my-12">
        <span class="font-extrabold text-sm">{!! $bundle_suitable_for_description !!}</span>
        <div class="text-xs font-thin mt-3">
          <span>Съдържа:
            
            @for($i = 0; $i < $related_products_count; $i++)
              <span>{!! get_the_title($related_products[$i]) !!}</span>
              @if($related_products_count - $i != 1)
                <span> и </span>
              @endif
            @endfor
          </span>
        </div>
      </div>

      <div class="mb-10">
        <p class="text-xs mb-3">Промо комплектът съдържа:</p>
        <hr class="h-[2px] border border-gray-300">
      </div>
      
      <ul class="ml-4 pink-bullets mb-8">
        @foreach((array_reverse($related_products)) as $related_product_id)
          <li class="text-[12px] tracking-wider	">{!! get_post_field('post_content', $related_product_id) !!}</li>
        @endforeach
      </ul>

      {{-- Действие --}}
      <div class="mb-5">
        <p class="text-xs mb-3 font-semibold">Действие</p>
        <hr class="h-px border-gray-700">
      </div>
           
      <ul class="ml-4 pink-bullets mb-8">
        @foreach($helps_for_list as $helps_for)
          <li class="text-[12px] tracking-wider	">{!! $helps_for['label'] !!}</li>
        @endforeach
      </ul>
            
      {{-- Начин на употреба --}}
      <div class="mb-5">
        <p class="text-xs mb-3 font-semibold">Начин на употреба</p>
        <hr class="h-px border-gray-700">
      </div>
      {{-- How to Use Description --}}
      {!! create_list($how_to_use_description, $ul_pink_classes, '', $li_pink_classes, '') !!}

      {{-- Additional Description --}}
      <p class="{!! $li_pink_classes !!} mt-10">
        {!! $additional_description !!}
      </p>
      <div class="w-full">
        <iframe class="mt-32 w-full h-80" src="https://www.youtube.com/embed/{!! $tutorial_id !!}" frameborder="0" allowfullscreen></iframe>
      </div>
      
      {{-- Не съдържа --}}
      <div class="mb-5 mt-10">
        <p class="text-xs mb-3 font-semibold">Не съдържа</p>
        <hr class="h-px border-gray-700">
      </div>

      <div class="flex flex-row w-full justify-between">
        @foreach($bad_ingredients as $ingredient_id)
          {{-- <span>{!! get_post($ingredient_id) !!}</span> --}}
          
          <div class="flex flex-row w-1/3  items-center">
            <img class="w-1/3 h-auto mr-3" src="{!! get_the_post_thumbnail_url($ingredient_id) !!}">
            <span class="text-xs">{!! get_the_title($ingredient_id) !!}</span>
          </div>          
        @endforeach        
      </div>

      {{-- Ревюта --}}
      <div class="mb-5 mt-10">
        <p class="text-xs mb-3 font-semibold">Ревюта</p>
        <hr class="h-px border-gray-700">
      </div>

    </div>
  </div>

  <article @php(post_class())>
      <header>
        <h1 class="entry-title">
          {!! $title !!}
        </h1>
    
        @include('partials.entry-meta')
      </header>
    
      <div class="entry-content">
        @php(the_content())
      </div>
    
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
    
      @php(comments_template())
  </article>


</div>
  