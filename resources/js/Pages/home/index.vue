<template>
    <div class="p-8 flex items-center w-full">
        <h1 class="text-blue-500">Hello World ! </h1>
    </div>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout.vue";

export default {
    name: "index",
    layout: [AppLayout],
    props: {
        test:{
            required: true,
            type: String,
        }
    }
}
</script>
