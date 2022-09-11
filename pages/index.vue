<template>
  <div>
    <StartSection />
    <ServicesSection />
    <ProfileOffer />
  </div>
</template>

<script>
import StartSection from '~/components/StartSection.vue'
import ServicesSection from '~/components/ServicesSection.vue'
import ProfileOffer from '~/components/ProfileOffer.vue'

export default {
  name: 'IndexPage',
  components: {
    StartSection,
    ServicesSection,
    ProfileOffer
  },
  layout: 'DefaultLayout'
}
</script>
