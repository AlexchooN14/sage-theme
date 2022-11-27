<p {{ $attributes->merge(['class' => 'font-light text-sm py-1']) }} class="{{ ($textSize) ? $textSize : null }}">
    <a class="hover-underline-animation {{ ($textSize) ? $textSize : null }}" href="{{ $link }}">{{ $text }}</a>
</p>
