<template>
  <div class="flex flex-col bg-white rounded gap-4 pb-6">
    <div class="flex flex-col border-b">
      <div class="flex flex-row items-center gap-4 p-6">
        <img class="w-12 h-12" :src="data.img_icon"/>
        <div class="flex flex-col gap-0.5 w-full">
          <div class="flex flex-row justify-between items-center">
            <div
                class="flex flex-row items-center text-xl font-bold leading-none"
                :class="{'cursor-pointer': data.link_url !== undefined}"
                v-text="data.company + ' - ' + data.job"
                @click="openUrl(data.link_url)">
            </div>
            <common-tag
                :id="id"
                backgroundClass="bg-green-100"
                roundedClass="rounded"
                class="px-2"
            >
              <template #text>
                <div
                    class="text-green-500 text-xs p-2 font-bold"
                    v-text="data.contract"></div>
              </template>
            </common-tag>
          </div>
          <div
              class="text-sm text-gray-400"
              v-text="data.starts_at + ' - ' + data.ends_at"
          ></div>
        </div>
      </div>
    </div>
    <div class="px-6 text-justify" v-text="data.description"></div>
  </div>
</template>

<script>
export default {
  name: "CardExperience",
  props: {
    data: {
      type: Object,
      required: true,
    },
    id: {
      type: String,
      required: false,
      default: '1',
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