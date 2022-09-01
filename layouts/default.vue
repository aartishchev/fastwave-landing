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
  height: 100vh;
}
</style>
