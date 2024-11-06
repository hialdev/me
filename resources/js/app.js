require('./bootstrap');

import { createApp } from 'vue';
import CommentComponent from './components/Comment.vue';

const app = createApp({
    components: {
        CommentComponent,
    },
});

app.mount('#vue');