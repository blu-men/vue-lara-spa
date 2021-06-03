
<template>
  <div id="overlay">
    <div id="modal">
      <td>{{ val.title }}</td>
      <td>{{ val.content }}</td>
      <td>{{ val.person_in_charge }}</td>
      <button @click="$emit('close')">close</button>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Modal',
    props: ['val']
  }
</script>
