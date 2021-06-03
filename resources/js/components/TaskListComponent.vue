<template>
    <div class="container">
       
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Person In Charge</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Done</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="task in tasks" v-bind:key="task.name">
            <th scope="row">{{ task.id }}</th>
                <td>{{ task.title }}</td>
                <td>{{ task.content }}</td>
                <td>{{ task.person_in_charge }}</td>
                <td>
                    <router-link v-bind:to="{name: 'task.show', params: {taskId: task.id }}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'task.edit', params: {taskId: task.id }}">
                        <button class="btn btn-success">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger" v-on:click="openModal(task)">Done</button>
                </td>
                <modal :val="postTask" v-show="showContent" @close="closeModal" />
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
            // deleteTask(id) {
            //     // idで紐付け、削除
            //     axios.delete('/api/tasks/' + id)
            //         .then((res) => {
            //             this.getTasks();
            //         });
            // },
            // submit(id) {
            //     // 処理ができねえ
            //     axios.post('/api/tasks/' + id, {params: tasks.id })
            //         .then((res) => {
            //             this.getTasks();
            //         });
            // },

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