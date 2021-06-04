
<template>
  <div id="overlay">
    <div id="modal">
      <td>{{ val.title }}</td>
      <td>{{ val.content }}</td>
      <td>{{ val.person_in_charge }}</td>

      <button @click="submit('close')">submit</button>

      <button @click="$emit('close')">close</button>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Modal',
    props: ['val'],
    data: function () {
      return {
        val: {}
      }
    },
    methods: {
      submit() {
        // 引数調整不可避、そしてなぜ"PUT"なのか
        axios.post('/api/tasks/' + this.taskId, this.task)
          .then((res) => {
          this.$router.push({name: 'task.list'})
        });
      }
    }
  }
</script>
