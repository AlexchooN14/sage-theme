<button id="scrollTopButton" class="fixed hidden bottom-24 right-12 z-10 border-none outline-0 px-[16px] py-[11px] bg-buy-button rounded-full" onclick="topFunction()">
    <i class="fa-solid fa-arrow-up-from-bracket text-white text-sm"></i>
</button>

<script>
    let mybutton = document.getElementById("scrollTopButton");
    window.onscroll = function() { 
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        window.scrollTo({top: 0, behavior: 'smooth'}); // For Chrome, Firefox, IE and Opera
    }
</script>