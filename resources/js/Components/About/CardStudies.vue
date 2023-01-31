<template>
  <div class="flex flex-col gap-2 w-fit">
    <div class="bg-white self-start px-4 py-1 border-green-500 border-l-8 font-bold rounded">FORMATIONS</div>
    <div class="flex flex-col bg-white rounded p-4 gap-4">
      <div
          v-for="(item, key) in data"
          class="flex flex-col"
      >
        <div class="flex flex-row items-center gap-4">
          <img class="w-12 h-12" :src="item.img_icon"/>
          <div class="flex flex-col gap-1">
            <div
                class="flex text-sm leading-normal"
                v-text="item.name"
            ></div>
            <div
                class="flex text-xs leading-normal"
                v-text="item.school"
            ></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardStudies",
  props: {
    data: {
      type: Object,
      required: true,
    }
  }
}
</script>
