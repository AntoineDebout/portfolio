import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import CommonIcon from './Components/Elements/CommonIcon.vue'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
        return pages[`./Pages/${name}.vue`]
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .component('InertiaHead', Head)
            .component('InertiaLink', Link)
            .component('font-awesome-icon', FontAwesomeIcon)
            .component('CommonIcon', CommonIcon)
            .mount(el)
    },
    progress: {
        color: '#29d',
    },
});
