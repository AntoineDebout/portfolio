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
    faLocationDot,
} from '@fortawesome/free-solid-svg-icons';
import {
    faGithub,
    faVuejs,
    faCss3,
    faLaravel,
    faTwitter,
} from '@fortawesome/free-brands-svg-icons';

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
          faVuejs,
          faGithub,
          faCss3,
          faLaravel,
          faLocationDot,
          faTwitter,
      );
    }
}
</script>
