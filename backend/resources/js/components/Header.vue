<template>
    <div>
        <header class="container-fluid">
            <h2 class="hidden">
                Main Menu
            </h2>
            <nav class="navbar is-dark" role="navigation" aria-label="main navigation" style="margin-bottom: 30px;">
                <h2 class="hidden">Main Navigation</h2>
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">LakhveerBawa.Com
                    </a>

                    <a role="button" class="navbar-burger burger" @click="toggleMenu" v-bind:class="{ 'is-active': MenuStatus }" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu" v-bind:class="{ 'is-active': MenuStatus }">

                    <div class="navbar-end">
                        <a class="navbar-item">
                            Home
                        </a>

                        <a class="navbar-item" href="#myprojects">
                            Projects
                        </a>

                        <a class="navbar-item" href="#skills">
                            Skills
                        </a>

                        <a class="navbar-item" href="#contactme">
                            Contact Me
                        </a>

                    </div>

                </div>
            </nav>
        </header>

    </div>
</template>

<script>
export default  {
    data() {
        return {
            MenuStatus: false
        }
    },
methods: {
    toggleMenu() {
        this.MenuStatus = !this.MenuStatus;
    }
}
}

</script>

<style>
.navbar-brand a {
    font-weight: bold;
}
</style>