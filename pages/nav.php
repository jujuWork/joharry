<nav>
    <button class="burger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="burger__menu" id="menu">
        <ul class="burger__menu-list">
            <li class="burger__menu-items">
                <a href="#work" class="burger__menu-links">Work Exeprience</a>
            </li>
            <li class="burger__menu-items">
                <a href="#skills" class="burger__menu-links">Skills</a>
            </li>
            <li class="burger__menu-items">
                <a href="#certificate" class="burger__menu-links">Certificates</a>
            </li>
            <li class="burger__menu-items">
                <a href="#projects" class="burger__menu-links">Projects</a>
            </li>
            <li class="burger__menu-items">
                <a href="#contact" class="burger__menu-links">Contact me</a>
            </li>
        </ul>
    </div>
</nav>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('active');
    }

    // Closing the menu when click outside
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('menu');
        const menuButton = event.target.closest('[onclick*="toggleMenu"]');

        if (!menu.contains(event.target) && !menuButton) {
            menu.classList.remove('active');
        }
    })
</script>