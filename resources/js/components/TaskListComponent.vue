<template>
    <div class="container">
       
        <table class="table table-hover">
            <thead class="thead-light">
            <p>This is TaskList Page.</p>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Project</th>
                <th scope="col">Content</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
                <th scope="col">Done</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="task in tasks" v-bind:key="task.name">
            <th scope="row">{{ task.id }}</th>
                <td>{{ task.title }}</td>
                <td>{{ task.content }}</td>
                <td>
                    <button class="btn btn-danger" v-on:click="deleteTask(task.id)">Delete</button>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'task.edit', params: {taskId: task.id }}">
                        <button class="btn btn-primary">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-success" v-on:click="openModal(task)">Done</button>
                </td>
                <modal :task="postTask" v-show="showContent" @close="closeModal" />
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
                tasks: [],
                showContent: false,
                postTask: ""
            }
        },
        methods: {
            getTasks() {
                axios.get('/api/tasks')
                    .then((res) => {
                        this.tasks = res.data;
                    });
            },
            deleteTask(id) {
                axios.delete('/api/tasks/' + id)
                    .then((res) => {
                        this.getTasks();
                    });
            },
            
            openModal: function(task){
                this.showContent = true
                this.postTask = task
                },
            closeModal: function(){
                this.showContent = false
            }
        },
        mounted() {
            this.getTasks();
        }
    }
</script>