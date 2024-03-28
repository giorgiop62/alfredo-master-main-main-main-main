<script>
import axios from 'axios';

export default {
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        this.fetchPosts();
    },
    methods: {
        async fetchPosts() {
            try {
                const response = await axios.get('http://127.0.0.1:8000/admin/posts');
                this.posts = response.data;
            } catch (error) {
                console.error('Si è verificato un errore durante il recupero dei post:', error);
            }
        },
    },
};
</script>

<template>
    <div class="container-fluid">
        <h1 class="text-center p-3">Concerti</h1>
        <table class="table table-dark table-striped table-hover">
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{ post.luogo }}</td>
                    <td>{{ post.data }}</td>
                    <td>{{ post.descrizione }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<style lang="scss" scoped>
.container-fluid {
    color: white;
    background-image: url("../../assets/notte.jpg");
    background-size: cover;
    width: 100%;
}

.table {
    opacity: 0.8;
}

@media only screen and (max-width: 767px) {
    .container-fluid {
        height: 1200px;
    }
}
</style>
