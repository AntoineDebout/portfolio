<template>
    <InertiaHead>
        <title>Portfolio - Antoine DEBOUT</title>
        <meta
            name="description"
            content="Antoine DEBOUT - Portfolio"
        >
    </InertiaHead>
    <Navbar></Navbar>
    <div class="mt-16 bg-gray-200 h-full">
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
