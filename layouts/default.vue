<template>
  <div class="application">
    <!-- <TheHeader /> -->
    <Nuxt />
    <!-- <TheFooter /> -->
  </div>
</template>

<script>
export default {
  name: 'DefaultLayout'
}
</script>

<style>
.application {
  display: grid;
  grid-template-columns: auto 1fr auto;
  min-width: 320px;
  height: 100vh;
}
</style>
