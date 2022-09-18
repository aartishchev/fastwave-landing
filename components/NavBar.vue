<template>
  <nav class="nav-wrapper">
    <a
      v-for="(item, index) in navItems"
      :key="index"
      :style="{ borderTopColor: getItemColor(item.componentName) }"
      class="nav-item"
      :title="item.description"
      @click="setContent(item.componentName)"
    >
      <span class="sr-only">{{ item.description }}</span>
    </a>
  </nav>
</template>

<script>
export default {
  props: {
    activeComponent: {
      type: String,
      required: true
    },
    navItems: {
      type: Array,
      default: () => []
    }
  },
  emits: ['set-content'],
  computed: {
    navItemsColor () {
      return this.navItems.find(item => item.componentName === this.activeComponent).navItemsColor
    }
  },
  methods: {
    setContent (componentName) {
      this.$emit('set-content', componentName)
    },
    getItemColor (componentName) {
      return componentName === this.activeComponent ? '#01f1fe' : this.navItemsColor
    }
  }
}
</script>

<style>
.nav-wrapper {
  display: grid;
  justify-items: center;
  row-gap: 15px;
}

.nav-item {
  width: 0;
  height: 0;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-top: 12px solid;
  border-bottom: 0;
}
</style>
