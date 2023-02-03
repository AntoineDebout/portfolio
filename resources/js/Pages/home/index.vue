<template>
  <div class="flex flex-row p-8 gap-12">
    <div class="flex flex-col gap-4 w-1/4">
      <CardInfo :about-data="aboutData"></CardInfo>
      <CardSkills :data="aboutData.skills_general"></CardSkills>
    </div>
    <div class="flex flex-col gap-2 w-1/2">
      <div class="bg-white self-start px-4 py-1 border-green-500 border-l-8 font-bold rounded">EXPERIENCES</div>
      <div class="flex flex-col gap-4">
          <CardExperience
              v-for="(data, key) in aboutData.experiences"
              :data="data"
              :id="key.toString()"
          ></CardExperience>
      </div>
    </div>
    <div class="flex flex-col gap-2 w-1/4">
      <CardStudies :data="aboutData.studies"/>
      <CardContact></CardContact>
    </div>
  </div>
</template>

<script>
import AppLayout from "../../Layouts/AppLayout.vue";
import CardInfo from "../../Components/About/CardInfo.vue";
import CardExperience from "../../Components/About/CardExperience.vue";
import CardSkills from "../../Components/About/CardSkills.vue";
import CardStudies from "../../Components/About/CardStudies.vue";
import CardContact from "../../Components/About/CardContact.vue";

export default {
  name: "index",
  layout: [AppLayout],
  components: {
    CardInfo,
    CardExperience,
    CardSkills,
    CardStudies,
    CardContact,
  },
  props: {
    aboutData: {
      required: true,
      type: Object,
    }
  }
}
</script>
