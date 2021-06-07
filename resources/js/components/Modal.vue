
<template>
  <div id="overlay">
    <div id="modal">

      <div id="modal-text">
        <!-- <td>{{ task.id }}</td> -->
        <td>{{ task.title }}</td>
        <td>{{ task.content }}</td>
        <td>
          Result：
          <select name="evaluation" v-model="task.evaluation">
          <option value="●">●</option>
          <option value="✖︎">✖︎</option>
          <option value="▲">▲</option>
          </select>
        </td>
        <td><textarea name="kanso" rows="1" cols="20" v-model="task.comment"></textarea></td>

      </div>

      <div id="modal-buttons">
        <td><button @click="submit()" class="btn btn-primary">Submit</button></td>

        <td><button @click="$emit('close')" class="btn btn-danger">Close</button></td>
      </div>

    </div>
  </div>
</template>

<script>
  export default {
    name: 'Modal',
    props: ['task'],
    data: function () {
      return {
        task: {}
      }
    },
    methods: {
      submit() {
        // 引数調整不可避、そしてなぜ"PUT"なのか
        axios.post('/api/todotasks/' + this.taskId, this.task)
          .then((res) => {
          this.$router.push({name: 'task.list'})
        });
      }
    }
  }
</script>
