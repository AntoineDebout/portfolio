<template>
    <InertiaHead>
        <title>Portfolio - Antoine DEBOUT</title>
        <meta
            name="description"
            content="Antoine DEBOUT - Portfolio"
        >
    </InertiaHead>
    <Navbar></Navbar>
    <div class="h-full w-full">
      <slot></slot>
    </div>

    <footer>
        <Footer></Footer>
    </footer>

</template>

<script>
import Footer from '../Components/Footer.vue';
import Navbar from '../Components/Navbar.vue';

export default {
    name: "AppLayout",
    components: {Footer, Navbar},
}
</script>
