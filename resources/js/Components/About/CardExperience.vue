<template>
  <div class="bg-white w-full rounded p-6">
    <div class="flex flex-row items-center gap-4">
      <img class="w-12 h-12" :src="data.img_icon"/>
      <div class="flex flex-col gap-0.5">
        <div
            class="text-xl font-bold leading-none"
            v-text="data.company">
        </div>
        <div
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
  }
}
</script>