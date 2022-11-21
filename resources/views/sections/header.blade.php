<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
{{-- <header class="banner">
  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header> --}}


<div class="sticky top-0">
  @include('sections.sidebar-nav-ad')
  <div class="border-b border-solid border-gray-100 py-5 bg-white">
    <div class="flex flex-row justify-center items-center">
      <div class="flex flex-none items-center">
        <a href="{{ home_url('/') }}">
          @if(has_custom_logo())
            <img src="{{ esc_url( $logo[0] ) }}" class="mr-3 h-6 sm:h-9" alt="{!! $siteName !!}">        
          @endif
        </a>
      </div>


      <div class="flex-initial">
        {{-- middle container --}}
        <ul id="nav" class=" text-sm flex flex-row items-center p-2 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
          
          <x-navbar-part link="#" linkText="продукти" />
          <x-navbar-part link="#" linkText="решение" />
          <x-navbar-part link="#" linkText="най - продавани" iconType="crown" />
          <x-navbar-part link="#" linkText="ПРОМО ПРОДУКТИ" class="!text-promo-500" iconType="flame" />
          <x-navbar-part link="#" linkText="КОНТАКТИ"/>
          <x-navbar-part link="#" linkText="БЛОГ"/>    

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
