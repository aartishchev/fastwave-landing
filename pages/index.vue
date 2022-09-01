<template>
  <div class="application">
    <header v-if="isDesktopLayout" class="application__header">
      <NavBar
        :active-component="currentContent"
        :nav-items="contentOptions"
        @set-content="setContentOnClick"
      />
    </header>

    <main class="application__main">
      <template v-if="isDesktopLayout">
        <transition
          :enter-active-class="`animate__animated ${CURRENT_ANIMATION_CLASS.ENTER} animate__faster`"
          :leave-active-class="`animate__animated ${CURRENT_ANIMATION_CLASS.LEAVE} animate__faster`"
          mode="out-in"
        >
          <component
            :is="currentContent"
            class="application__dynamic-content"
            :is-desktop-layout="isDesktopLayout"
            @open-form-modal="openFormModal"
            @turn-page="turnPage"
          />
        </transition>
        <transition
          enter-active-class="animate__animated animate__slideInRight"
          leave-active-class="animate__animated animate__slideOutRight animate__faster"
        >
          <CompanyTeam
            v-if="isTeamModalShown"
            class="application__team-modal"
            @close-team-modal="closeTeamModal"
            @open-form-modal="openFormModal"
          />
        </transition>
      </template>

      <template v-else>
        <component
          :is="component.componentName"
          v-for="(component, index) in contentOptions"
          :key="index"
          :is-desktop-layout="isDesktopLayout"
          @open-form-modal="openFormModal"
        />
        <CompanyTeam @open-form-modal="openFormModal" />
      </template>
    </main>

    <footer
      v-if="isDesktopLayout"
      class="application__footer"
      @click="openTeamModal"
    >
      <ContactBar />
    </footer>

    <transition
      enter-active-class="animate__animated animate__fadeIn"
      leave-active-class="animate__animated animate__fadeOut"
    >
      <div
        v-if="isFormModalShown"
        class="application__form-overlay"
        @click="closeFormModal"
      />
    </transition>

    <transition
      enter-active-class="animate__animated animate__fadeInDown animate__faster"
      leave-active-class="animate__animated animate__fadeOutUp animate__faster"
    >
      <div v-if="isFormModalShown" class="application__form-modal-wrapper">
        <ModalForm @close-form-modal="closeFormModal" />
      </div>
    </transition>
  </div>
</template>

<script>
import debounce from 'lodash.debounce'

export default {
  name: 'IndexPage',
  data: () => ({
    MIN_DESKTOP_VIEWPORT_WIDTH: 1218,
    MIN_DESKTOP_VIEWPORT_HEIGHT: 750,
    ENTER_ANIMATION_CLASS: 'animate__fadeInDown',
    LEAVE_ANIMATION_CLASS: 'animate__fadeOutDown',
    WHEEL_DOWN_CLASS: {
      ENTER: 'animate__fadeInDown',
      LEAVE: 'animate__fadeOutDown'
    },
    WHEEL_UP_CLASS: {
      ENTER: 'animate__fadeInUp',
      LEAVE: 'animate__fadeOutUp'
    },
    CURRENT_ANIMATION_CLASS: {
      ENTER: '',
      LEAVE: ''
    },
    currentClientWidth: 0,
    currentClientHeight: 0,
    currentContent: 'StartSection',
    isTeamModalShown: false,
    isFormModalShown: false,
    animationSlideEnterClass: 'animate__slideInDown',
    animationSlideLeaveClass: 'animate__slideOutUp',
    contentOptions: [
      {
        componentName: 'StartSection',
        description: 'Главная страница',
        navItemsColor: '#9ecbe7'
      },
      {
        componentName: 'ServicesSection',
        description: 'Описания услуг',
        navItemsColor: '#f0f0f0'
      },
      {
        componentName: 'ProfileOffer',
        description: 'Профильное предложение',
        navItemsColor: '#f0f0f0'
      },
      {
        componentName: 'SpecialOffer',
        description: 'Специальное предложение',
        navItemsColor: '#6d6f6e'
      },
      {
        componentName: 'CompanyDescription',
        description: 'О компании',
        navItemsColor: '#9dc3de'
      }
    ]
  }),
  computed: {
    isDesktopLayout () {
      const isDestopWidth = this.currentClientWidth >= this.MIN_DESKTOP_VIEWPORT_WIDTH
      const isDestopHeight = this.currentClientHeight >= this.MIN_DESKTOP_VIEWPORT_HEIGHT

      return isDestopWidth && isDestopHeight
    }
  },
  mounted () {
    this.setWindowSize()
    window.addEventListener('resize', this.setWindowSize)
    document.addEventListener('keydown', this.onEscapeButton)
    window.addEventListener('wheel', this.debouncedHander)
  },
  beforeUnmount () {
    window.removeEventListener('resize', this.setWindowSize)
    document.removeEventListener('keydown', this.onEscapeButton)
    window.removeEventListener('wheel', this.debouncedHander)
  },
  created () {
    this.debouncedHander = debounce((event) => {
      this.setContentOnWheel(event)
    }, 100)
  },
  methods: {
    setWindowSize () {
      this.currentClientWidth = window.innerWidth
      this.currentClientHeight = window.innerHeight
    },
    openTeamModal () {
      if (this.isFormModalShown) {
        return
      }

      this.isTeamModalShown = true
    },
    closeTeamModal () {
      this.isTeamModalShown = false
    },
    openFormModal () {
      this.isFormModalShown = true
    },
    closeFormModal () {
      this.isFormModalShown = false
    },
    onEscapeButton (event) {
      if (event.key !== 'Escape') {
        return
      }

      if (this.isFormModalShown) {
        this.closeFormModal()
        return
      }

      if (this.isTeamModalShown) {
        this.closeTeamModal()
      }
    },
    findCurrentComponentIndex (componentName) {
      return this.contentOptions.findIndex(option => option.componentName === componentName)
    },
    setContentOnClick (componentName) {
      const targetComponentIndex = this.findCurrentComponentIndex(componentName)
      const currentComponentIndex = this.findCurrentComponentIndex(this.currentContent)

      if (targetComponentIndex > currentComponentIndex) {
        this.CURRENT_ANIMATION_CLASS.ENTER = this.WHEEL_UP_CLASS.ENTER
        this.CURRENT_ANIMATION_CLASS.LEAVE = this.WHEEL_UP_CLASS.LEAVE
      } else {
        this.CURRENT_ANIMATION_CLASS.ENTER = this.WHEEL_DOWN_CLASS.ENTER
        this.CURRENT_ANIMATION_CLASS.LEAVE = this.WHEEL_DOWN_CLASS.LEAVE
      }

      this.currentContent = componentName
    },
    setContentOnWheel (event) {
      if (!this.isDesktopLayout || this.isFormModalShown || this.isTeamModalShown) {
        return
      }

      const currentComponentIndex = this.findCurrentComponentIndex(this.currentContent)

      if (event.deltaY > 0) {
        this.CURRENT_ANIMATION_CLASS.ENTER = this.WHEEL_UP_CLASS.ENTER
        this.CURRENT_ANIMATION_CLASS.LEAVE = this.WHEEL_UP_CLASS.LEAVE

        if (currentComponentIndex === this.contentOptions.length - 1) {
          this.currentContent = this.contentOptions[0].componentName
        } else {
          this.currentContent = this.contentOptions[currentComponentIndex + 1].componentName
        }
      }

      if (event.deltaY < 0) {
        this.CURRENT_ANIMATION_CLASS.ENTER = this.WHEEL_DOWN_CLASS.ENTER
        this.CURRENT_ANIMATION_CLASS.LEAVE = this.WHEEL_DOWN_CLASS.LEAVE

        if (currentComponentIndex === 0) {
          this.currentContent = this.contentOptions.at(-1).componentName
        } else {
          this.currentContent = this.contentOptions[currentComponentIndex - 1].componentName
        }
      }
    },
    turnPage () {
      this.setContentOnClick('ServicesSection')
    }
  }
}
</script>

<style>
.application {
  height: 100vh;
  min-width: 320px;
  display: grid;
}

.application__header {
  position: absolute;
  left: 37px;
  top: 50%;
  transform: translateY(-50%);
}

.application__main {
  position: relative;
  overflow-y: auto;
}

.application__dynamic-content {
  height: 100%;
  box-sizing: border-box;
  overflow: hidden;
  max-height: 100vh;
}

.application__form-modal-wrapper {
  position: fixed;
  width: fit-content;
  height: fit-content;
  z-index: 30;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
}

.application__form-overlay {
  content: "";
  background-color: rgba(0, 54, 88, 0.51);
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  z-index: 20;
}

@media (min-width: 1218px) {
  .application {
    grid-template-columns: 1fr auto;
    position: relative;
  }

  .application__header {
    z-index: 10;
  }

  .application__main {
    overflow: hidden;
  }

  .application__footer {
    cursor: pointer;
    width: 70px;
  }

  .application__team-modal {
    position: fixed;
    background-color: white;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 10;
  }
}
</style>
