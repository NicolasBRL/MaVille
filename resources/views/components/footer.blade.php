<script>
    // Header scrolling
    const header = document.getElementById('header');
    document.addEventListener('scroll', function() {
        // Get the scroll position
        let scrollPos = window.pageYOffset;

        if (scrollPos > 100) {
            if(!header.classList.contains('scrolled')) header.classList.add("scrolled");
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
