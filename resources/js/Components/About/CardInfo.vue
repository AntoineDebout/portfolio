<template>
  <div class="flex flex-col gap-4 border border-2 rounded border-gray-500 bg-white shadow-xl px-8 py-4">
    <div class="flex flex-row items-center gap-4">
      <img class="w-24 h-24 rounded-full" :src="aboutData.me.img"/>
      <div class="flex flex-col gap-1">
        <span
            v-text="aboutData.me.name"
            class="font-bold text-2xl"></span>
        <span
            v-text="aboutData.me.job"
            class="text-xl"></span>
      </div>
    </div>
    <div class="flex flex-col gap-4">
      <div class="flex flex-row gap-2">
          <common-tag
              v-for="(data, key) in aboutData.skills_tags"
              :icon="data.icon"
              :backgroundClass="data.background"
              :roundedClass="data.rounded"
          >
            <template #text>
              <div v-text="data.title"></div>
            </template>
          </common-tag>
      </div>
      <div class="flex flex-col gap-3">
        <div
            v-for="(data, key) in aboutData.infos"
            class="flex flex-row gap-2 items-center">
          <common-icon
              :type="data.icon.type"
              :name="data.icon.name"
              :size="data.icon.size"
              :class="data.icon.class"
          />
          <span v-text="data.title"></span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardInfo",
  props: {
    aboutData:{
      required: true,
      type: Object,
    },
  },
}
</script>
