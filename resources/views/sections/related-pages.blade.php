<div class="mx-44 pb-18">
    <hr class="my-24 bg-theme-pink border-none h-px">

    <div class="flex flex-col items-stretch justify-center m-auto w-3/4 text-center">
        <div class="">
            <div class="my-3 text-sm tracking-widest">С ЛЮБОВ КЪМ КОЖАТА</div>
            <div class="mb-10 text-4xl tracking-widest">СЪВЕТИ ЗА КРАСОТА</div>

            {{-- Related Blogposts --}}
            <div class="grid grid-cols-3 gap-10">
                @foreach($blogposts as $blogpost)                            
                    <x-blogpost :instance="$blogpost"/>
                @endforeach
            </div>
        </div>
    </div>
</div>