
<template>
  <div id="overlay">
    <div id="modal">
      <p>{{ val.title }}</p>
      <p>{{ val.content }}</p>
      <p>{{ val.person_in_charge }}</p>
      <button @click="$emit('close')">閉じる</button>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'Modal',
    props: ['val']
  }
</script>
