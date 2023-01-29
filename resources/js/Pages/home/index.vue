<template>
  <div class="flex flex-row p-8 gap-8 w-full">
      <CardInfo
          :about-data="aboutData"
      >
      </CardInfo>
    <div class="flex flex-col gap-4 w-full">
      <CardExperience
          v-for="(data, key) in aboutData.experiences"
          :data="data"
          :id="key.toString()"
      ></CardExperience>
    </div>
  </div>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout.vue";
import CardInfo from "../../Components/About/CardInfo.vue";
import CardExperience from "../../Components/About/CardExperience.vue";

export default {
    name: "index",
    layout: [AppLayout],
    components: {
      CardInfo,
      CardExperience,
    },
    props: {
        aboutData:{
            required: true,
            type: Object,
        }
    }
}
</script>
