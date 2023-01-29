<template>
<div
    :id="'common-tag-' + id"
    class="flex flex-row items-center gap-1 py-1"
    v-bind="$attrs"
>
    <common-icon
        v-if="icon !== null"
        :type="icon.type"
        :name="icon.name"
        :size="icon.size"
        :class="icon.class"
    />
  <slot name="text"></slot>
</div>
</template>

<script>
export default {
  props: {
    id: {
      type: String,
      required: true
    },
    backgroundClass:{
      type: String,
      required: true,
    },
    borderClass: {
      type: String,
      required: false
    },
    roundedClass: {
      type: String,
      required: false,
    },
    icon: {
      type: Object,
      required: false,
      default: null,
    },
  },
  mounted(){
    let commonTagDiv = document.getElementById('common-tag-' + this.id);

    commonTagDiv.classList.add(this.backgroundClass);
    commonTagDiv.classList.add(this.roundedClass);
    commonTagDiv.classList.add(this.borderClass);
  }
}
</script>