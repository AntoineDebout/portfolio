<template>
  <div class="flex flex-row p-8 gap-8 w-full">
    <div class="flex flex-col gap-4">
      <CardInfo :about-data="aboutData"></CardInfo>
      <CardSkills :data="aboutData.skills_general"></CardSkills>
    </div>
    <div class="flex flex-col gap-4">
      <CardExperience
          v-for="(data, key) in aboutData.experiences"
          :data="data"
          :id="key.toString()"
      ></CardExperience>
    </div>
    <div class="flex flex-col gap-4">
      <CardStudies/>
    </div>
  </div>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout.vue";
import CardInfo from "../../Components/About/CardInfo.vue";
import CardExperience from "../../Components/About/CardExperience.vue";
import CardSkills from "../../Components/About/CardSkills.vue";
import CardStudies from "../../Components/About/CardStudies.vue";

export default {
  name: "index",
  layout: [AppLayout],
  components: {
    CardInfo,
    CardExperience,
    CardSkills,
    CardStudies,
  },
  props: {
    aboutData: {
      required: true,
      type: Object,
    }
  }
}
</script>
