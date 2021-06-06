
<template>
  <div id="overlay">
    <div id="modal">
      <td>{{ task.id }}</td>
      <td>{{ task.title }}</td>
      <td>{{ task.content }}</td>
        評価：
      <td>
        <select name="evaluation" v-model="task.evaluation">
        <option value="●">●</option>
        <option value="✖︎">✖︎</option>
        <option value="▲">▲</option>
        </select>

        <textarea name="kanso" rows="4" cols="5" v-model="task.comment"></textarea>

        <button @click="submit()" class="btn btn-primary">submit</button>

        <button @click="$emit('close')">close</button>
      </td>
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
