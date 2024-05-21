<template>
    <div>
        <h1>Posts</h1>
        <ul>
            <li v-for="post in posts" :key="post.id">{{ post.title }}</li>
        </ul>
    </div>
</template>
<script>
export default {
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        axios.get('/api/posts').then((response) => {
            this.posts = response.data;
        });
    },
};
</script>
