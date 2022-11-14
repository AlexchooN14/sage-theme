<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>


{{-- <header class="banner">
  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header> --}}

<style>
  .hover-underline-animation {
    display: inline-block;
    position: relative;
    color: inherit;    
  }
  
  .hover-underline-animation:after {
    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 1px;    
    bottom: 0;
    left: 0;
    background-color: currentColor;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }
  
  .hover-underline-animation:hover:after {
    transform: scaleX(1);
    transform-origin: bottom left;
  }
</style>

@php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
@endphp

<div class="">
  <div class="bg-gradient-to-r from-red-100 to-red-300 text-center py-2 text-xs ">
    @include('sections.sidebar-nav-ad')
  </div>
  <div class="border-b border-solid border-gray-100 py-5 bg-white">
    <div class="flex flex-row justify-center items-center">

      <div>
        <a href="{{ home_url('/') }}" class="flex flex-none items-center">
          @if(has_custom_logo())
            <img src="{{ esc_url( $logo[0] ) }}" class="mr-3 h-6 sm:h-9" alt="{!! $siteName !!}">        
          @endif
        </a>
      </div>
      <style>
        #nav:hover li:not(:hover){
          opacity: 0.5;
        }      
      </style>
      <div class="flex-initial">
        {{-- middle container --}}
        <ul id="nav" class=" text-sm flex flex-row items-center p-2 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
          <li class="relative mx-3 hover-underline-animation pb-0.5">
            <a href="#" class=" block text-gray-700 rounded  md:border-0 md:p-0">ПРОДУКТИ</a>
            {{-- <div class="group-hover:block dropdown-menu absolute top-dropdown-nav bg-slate-300 hidden"> --}}
              {{-- Product Dropdown --}}
              {{-- <p class="text-red-500">adsdadas</p> --}}
            {{-- </div> --}}
          </li>
          <li class=" mx-3 hover-underline-animation pb-0.5">
            <a href="#" class=" block text-gray-700 rounded  md:border-0 md:p-0 ">РЕШЕНИЕ</a>
          </li>
          <li class=" mx-3 hover-underline-animation pb-0.5">
            <div class="flex flex-row items-center">   
              <i class="fa-solid fa-crown pr-1 text-crown-500"></i>
              <a href="#" class=" block text-gray-700 rounded  md:border-0 md:p-0 ">НАЙ - ПРОДАВАНИ</a>
            </div> 
          </li>
          <li style="color: #ff6096" class=" mx-3 hover-underline-animation pb-0.5">
            <div class="flex flex-row text-promo-500 items-center"> 
              <i class="fa-solid fa-fire-flame-curved pr-1"></i>
              <a href="#" class=" block rounded ">ПРОМО ПРОДУКТИ</a>
            </div> 
          </li>
          <li class=" mx-3 hover-underline-animation pb-0.5">
            <a href="#" class=" block text-gray-700 rounded  md:border-0 md:p-0 ">КОНТАКТИ</a>
          </li>
          <li class=" mx-3 hover-underline-animation pb-0.5">
            <a href="#" class=" block text-gray-700 rounded  md:border-0 md:p-0 ">БЛОГ</a>
          </li>      
        </ul>
      </div>

      <div class="">
        {{-- Right Container --}}
        <div class="text-xs flex flex-row items-center">
          <a href="#">
            <i class="fa-solid fa-magnifying-glass text-2xl mx-4"></i>
          </a>        
          <li class="ml-3 hover-underline-animation pb-0.5">
            <a href="#" class="block block  text-gray-700 rounded  md:border-0 md:p-0 ">Вход</a>
          </li>
          <p class="mx-3">|</p>
          <li class="mr-14 hover-underline-animation pb-0.5">
            <a href="#" class="block block  text-gray-700 rounded  md:border-0 md:p-0  md:border-0 md:p-0">Регистрирай се</a>
          </li>
          <a class="flex flex-row items-center" href="#">
            <i class="fa-solid fa-bag-shopping text-2xl text-blue-500"></i>
            <span class="mx-3 mt-1">22.99 лв.</span>
          </a>
        </div>
      </div>

    </div>
  </div>
</div>
