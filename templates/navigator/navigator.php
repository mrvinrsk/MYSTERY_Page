<link rel="stylesheet" href="/MYSTERY/templates/navigator/navigator.css">

<ul id="navigator" class="navigator">
    <li><a>Home</a></li>
    <li><a>Quizzes</a></li>
</ul>

<script>
    document.addEventListener('scroll', function () {
        var y = window.pageYOffset;
        var navigator = document.getElementById('navigator');

        if (y >= 50) {
            if (!navigator.classList.contains("scrolled")) {
                navigator.classList.add("scrolled");
            }
        } else {
            if (navigator.classList.contains("scrolled")) {
                navigator.classList.remove("scrolled");
            }
        }
    });
</script>