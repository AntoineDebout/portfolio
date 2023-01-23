<template>
    <font-awesome-icon
        v-bind="$attrs"
        :icon="[type, name]"
        :size="size"
    />
</template>

<script>

import { library } from '@fortawesome/fontawesome-svg-core';
import {
    faUserSecret,
} from '@fortawesome/free-solid-svg-icons';

export default {
    props: {
        type: {
            type: String,
            required: true,
        },
        name: {
            type: String,
            required: true,
        },
        size: {
            type: String,
            default: 'lg',
            required: false,
        },
    },
    created() {
      library.add(
          faUserSecret,
      );
    }
}
</script>

<style scoped>

</style>
