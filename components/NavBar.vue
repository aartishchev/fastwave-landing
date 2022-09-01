<template>
  <nav class="nav-wrapper">
    <a
      v-for="(item, index) in navItems"
      :key="index"
      class="nav-item"
      :title="item.description"
      @click="setContent(item.componentName)"
    >
      <span class="sr-only">{{ item.description }}</span>
      <span class="nav-icon" :style="{ borderTopColor: getItemColor(item.componentName) }" />
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
      required: true
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
}

.nav-item {
  padding: 7px;
}

.nav-icon {
  display: inline-block;
  width: 0;
  height: 0;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-top: 12px solid;
  border-bottom: 0;
}
</style>
