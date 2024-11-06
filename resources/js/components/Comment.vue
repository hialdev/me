<template>
    <div>
        <!-- Menampilkan informasi balasan ketika parent_id ada -->
        <div v-if="parent_id" class="rounded-3xl p-5 bg-purple-100 shadow-xl my-4 flex items-center gap-7 justify-between">
            <div class="flex-1">
                <div class="font-medium">Reply Comment @{{ getParentComment.name }}</div>
                <p class="text-xs text-slate-500 line-clamp-2">{{ getParentComment.body }}</p>
                <div v-if="reply_id" class="rounded-3xl p-5 mt-4 bg-purple-950 text-white">
                    <div class="font-medium">Reply to @{{ getReplyComment.name }}</div>
                    <p class="text-xs text-slate-200 line-clamp-2">{{ getReplyComment.body }}</p>
                </div>
            </div>
            <button @click="cancelReply" class="text-white bg-rose-700 p-1 px-3 rounded-2xl">Cancel</button>
        </div>

        <form ref="formSubmit" @submit.prevent="submitComment">
            <div class="grid grid-cols-2 gap-3 mt-5">
                <div class="w-full col-span-2 sm:col-span-1">
                    <input
                        v-model="name"
                        type="text"
                        :class="{'border-red-500': errors.name, 'border-purple-700': !errors.name}"
                        class="p-3 px-5 dark:text-white w-full rounded-3xl border-2 bg-transparent focus:outline-0 focus:border-purple-500"
                        placeholder="Display Name"
                        required
                    />
                    <p v-if="errors.name" class="text-xs text-rose-400">{{ errors.name }}</p>
                </div>

                <div class="w-full col-span-2 sm:col-span-1">
                    <input
                        v-model="email"
                        type="email"
                        :class="{'border-red-500': errors.email, 'border-purple-700': !errors.email}"
                        class="p-3 px-5 dark:text-white w-full rounded-3xl border-2 col-span-2 sm:col-span-1 bg-transparent focus:outline-0 focus:border-purple-500"
                        placeholder="Email (No Displaying in Comment)"
                        required
                    />
                    <p v-if="errors.email" class="text-xs text-rose-400">{{ errors.email }}</p>
                </div>

                <div class="w-full col-span-2">
                    <textarea
                        v-model="body"
                        :class="{'border-red-500': errors.body, 'border-purple-700': !errors.body}"
                        class="p-3 dark:text-white w-full px-5 rounded-3xl border-2 col-span-2 bg-transparent focus:outline-0 focus:border-purple-500"
                        rows="7"
                        placeholder="Your opinion"
                        required
                    ></textarea>
                    <p v-if="errors.body" class="text-xs text-rose-400">{{ errors.body }}</p>
                </div>

                <input type="hidden" v-model="commentable_id">
                <input type="hidden" v-model="commentable_type">
                <input type="hidden" v-model="parent_id"> <!-- Field untuk parent_id -->
                <div class="w-full col-span-2">
                    <button type="submit" class="p-3 px-5 rounded-3xl bg-purple-700 text-white font-medium">Send</button>
                </div>
            </div>
        </form>

        <div class="mt-4">
            <ul v-if="comments.length">
                <li v-for="comment in comments" :key="comment.id">
                    <div v-if="comment.parent_id == null || comment.parent_id == ''" class="p-5 bg-violet-100 dark:bg-indigo-950 dark:text-purple-50 mb-4 rounded-3xl">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="font-medium">{{ comment.name }}</div>
                            <div class="text-slate-400 text-xs">{{ timeAgo(comment.created_at) }}</div>
                        </div>
                        <p class="text-slate-400 text-sm">{{ comment.body }}</p>
                        <button @click="setParentId(comment.id)" class="text-blue-500 text-xs">Reply</button>
                    </div>
                    <div v-if="comment.replies && comment.replies.length">
                        <ul class="border-l-2 p-4 ms-6">
                            <li v-for="reply in comment.replies" :key="reply.id">
                                <div class="p-5 bg-violet-100 mb-4 dark:bg-indigo-950 dark:text-purple-50 rounded-3xl">
                                    <div class="flex items-center gap-2 mb-2">
                                        <div class="font-medium">{{ reply.name }}</div>
                                        <div class="text-slate-400 text-xs">{{ timeAgo(reply.created_at) }}</div>
                                    </div>
                                    <p class="text-slate-400 text-sm mb-2">{{ reply.body }}</p>
                                    <button @click="setReplyId(reply.id, comment.id)" class="text-blue-500 text-xs">Reply</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div v-else>No comments yet. Be the first to comment!</div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: ['projectId', 'commentableType'],
    data() {
      return {
        name: localStorage.getItem('commenterName') || '',
        email: localStorage.getItem('commenterEmail') || '',
        body: '',
        commentable_id: this.projectId,
        commentable_type: this.commentableType,
        parent_id: null,
        reply_id: null,
        comments: [],
        errors: {},
      };
    },
    computed: {
        getParentComment() {
            return this.comments.find(comment => comment.id === this.parent_id) || {};
        },
        getReplyComment() {
            return this.comments.find(comment => comment.id === this.reply_id) || {};
        },
    },
    methods: {
        submitComment() {
            const commentData = {
                name: this.name,
                email: this.email,
                body: this.body,
                commentable_id: this.commentable_id,
                commentable_type: this.commentable_type,
                parent_id: this.parent_id,
            };

            localStorage.setItem('commenterName', this.name);
            localStorage.setItem('commenterEmail', this.email);

            axios.post('/comments', commentData).then(response => {
                if (this.parent_id) {
                    const parentComment = this.comments.find(comment => comment.id === this.parent_id);
                    if (parentComment) {
                        parentComment.replies.push(response.data); // Menambahkan balasan ke komentar induk
                    }
                } else {
                    this.comments.unshift(response.data);
                }
                this.clearForm();
                this.errors = {};
            }).catch(error => {
                if (error.response && error.response.status === 422) {
                    this.errors = error.response.data;
                }
            });
        },
        fetchComments() {
            axios.get(`/comments/${this.commentable_id}/${this.commentable_type}`).then(response => {
                this.comments = response.data.map(comment => ({
                    ...comment,
                    replies: comment.replies || [], // Memastikan replies ada
                }));
            });
        },
        setParentId(commentId) {
            this.parent_id = commentId;
            const element = this.$refs.formSubmit;
            element.scrollIntoView({ behavior: 'smooth' });
        },
        setReplyId(replyId, commentId) {
            this.reply_id = replyId;
            this.parent_id = commentId;
            const element = this.$refs.formSubmit;
            element.scrollIntoView({ behavior: 'smooth' });
        },
        cancelReply() {
            this.parent_id = null;
            this.reply_id = null;
        },
        clearForm() {
            this.name = '';
            this.email = '';
            this.body = '';
            this.parent_id = null;
        },
        timeAgo(time) {
            const diff = (new Date() - new Date(time)) / 1000; // Selisih waktu dalam detik
            const minutes = Math.floor(diff / 60); // Selisih dalam menit
            const hours = Math.floor(minutes / 60); // Selisih dalam jam
            const days = Math.floor(hours / 24); // Selisih dalam hari

            if (minutes < 1) {
                return 'just now';
            } else if (minutes < 60) {
                return `${minutes} minute(s) ago`;
            } else if (hours < 24) {
                const remainingMinutes = minutes % 60;
                return `${hours} hour(s) ${remainingMinutes} minute(s) ago`;
            } else {
                const remainingHours = hours % 24;
                const remainingMinutes = minutes % 60;
                return `${days} day(s) ${remainingHours} hour(s) ${remainingMinutes} minute(s) ago`;
            }
        }
    },
    mounted() {
        this.fetchComments();
    },
};
</script>
