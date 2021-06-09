<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
            <p>This is DoneTaskList Page.</p>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Project</th>
                <th scope="col">Content</th>
                <th scope="col">Evaluation</th>
                <th scope="col">Comment</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="task in todotasks" v-bind:key="task.name">
            <th scope="row">{{ task.id }}</th>
                <td>{{ task.title }}</td>
                <td>{{ task.content }}</td>
                <td>{{ task.evaluation }}</td>
                <td>{{ task.comment }}</td>
                <td>
                    <button class="btn btn-danger" v-on:click="deleteTask(task.id)">Delete</button>
                </td>
            </tr>
            </tbody>
            </table>
    </div>
</template>

<script>

    import Modal from '../components/Modal.vue'

    export default {
        components: {
            Modal
        },
        data: function () {
            return {
                todotasks: [],
                showContent: false,
                postTask: ""
            }
        },
        methods: {
            getTasks() {
                axios.get('/api/todotasks')
                    .then((res) => {
                        this.todotasks = res.data;
                    });
            },
            deleteTask(id) {
                axios.delete('/api/todotasks/' + id)
                    .then((res) => {
                        this.getTasks();
                    });
            },
        },
        mounted() {
            this.getTasks();
        }
    }
</script>