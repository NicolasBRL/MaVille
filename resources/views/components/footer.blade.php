<footer class="p-6">
    <div class="p-4 bg-white shadow md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-gray-500 sm:text-center">© 2023 La Roche sur Yon™. Tous droits réservés.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Mentions légales</a>
            </li>
            <li>
                <a href="{{route('contact')}}" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>


<script>
    // Header scrolling
    const header = document.getElementById('header');
    document.addEventListener('scroll', function() {
        // Get the scroll position
        let scrollPos = window.pageYOffset;

        if (scrollPos > 25) {
            if (!header.classList.contains('scrolled')) header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    // Mobile menu
    const bm = document.querySelector('.bm-icon');
    bm.onclick = function() {
        header.classList.toggle('active');
    }
</script>