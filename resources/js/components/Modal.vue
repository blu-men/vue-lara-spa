
<template>
  <div id="overlay">
    <div id="modal">
      <td>{{ task.id }}</td>
      <td>{{ task.title }}</td>
      <td>{{ task.content }}</td>
      <td>{{ task.person_in_charge }}</td>
      <button type="submit" class="btn btn-primary">●</button>
      <button type="submit" class="btn btn-primary">▲</button>
      <button type="submit" class="btn btn-primary">✖︎</button>

      <button @click="submit()">submit</button>

      <button @click="$emit('close')">close</button>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Modal',
    props: ['task'],
    // data: function () {
    //   return {
    //     task: {}
    //   }
    // },
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
