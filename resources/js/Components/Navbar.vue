<template>
    <div class="absolute flex flex-row justify-between items-center px-8 top-0 h-16 w-full bg-gray-600">
        <img class="w-12 h-12 rounded" :src="$page.props.meta.picture.logo_url"/>
        <h1 class="font-bold">Navbar</h1>
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