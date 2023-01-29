<template>
  <div class="flex flex-col bg-white w-full rounded gap-4">
    <div class="flex flex-col border-b">
      <div class="flex flex-row items-center gap-4 p-6">
        <img class="w-12 h-12" :src="data.img_icon"/>
        <div class="flex flex-col gap-0.5">
          <div
              class="flex flex-row items-center text-xl font-bold leading-none"
              :class="{'cursor-pointer': data.link_url !== undefined}"
              v-html="data.company + ' - ' + data.job"
              @click="openUrl(data.link_url)">
          </div>
          <div
              class="text-sm text-gray-400"
              v-text="data.starts_at + ' - ' + data.ends_at"
          ></div>
        </div>

      </div>
    </div>
    <span class="px-6">TOTO</span>
  </div>
</template>

<script>
export default {
  name: "CardExperience",
  props: {
    data: {
      type: Object,
      required: true,
    }
  },
  methods: {
      openUrl(url = null){
        if (url !== null){
          window.open(url);
        }
      }
  },
}
</script>