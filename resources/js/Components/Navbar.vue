<template>
    <div class="sticky flex flex-row justify-between items-center px-8 top-0 h-16 w-full bg-gray-600">
        <img class="w-12 h-12 rounded" :src="$page.props.meta.picture.logo_url"/>
        <h1 class="text-gray-900 text-xl font-mono font-semibold border-r-2 border-black w-[28ch] whitespace-nowrap overflow-hidden animate-typing">Bienvenue sur mon portfolio</h1>
        <common-icon
            type="fab"
            name="github"
            size="lg"
            class="text-gray-400"
        />
    </div>
</template>

<script>
export default {
    name: "Navbar"
}
</script>