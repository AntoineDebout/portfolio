<template>
    <div class="p-8 flex flex-col w-fit">
        <CardInfo
            :about-data="aboutData"
        >
        </CardInfo>
    </div>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout.vue";
import CardInfo from "../../Components/About/CardInfo.vue";

export default {
    name: "index",
    layout: [AppLayout],
    components: {
      CardInfo,
    },
    props: {
        aboutData:{
            required: true,
            type: Object,
        }
    }
}
</script>
