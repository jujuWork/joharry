<nav>
    <button class="burger" onclick="toggleMenu()">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="burger__menu" id="menu">
        <ul class="burger__menu-list">
            <li class="burger__menu-items">Work Exeprience</li>
            <li class="burger__menu-items">Skills</li>
            <li class="burger__menu-items">Certificates</li>
            <li class="burger__menu-items">Works</li>
            <li class="burger__menu-items">Contact</li>
        </ul>
    </div>
</nav>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('active');
    }
</script>