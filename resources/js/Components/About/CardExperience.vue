<template>
  <div class="bg-white w-full rounded p-6">
    <div class="flex flex-row items-center gap-4">
      <img class="w-12 h-12" :src="data.img_icon"/>
      <div class="flex flex-col gap-0.5">
        <div
            class="text-xl font-bold leading-none hover:cursor-pointer"
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
        if (url === null){
          return;
        }else {
          window.open(url);
        }
      }
  },
}
</script>