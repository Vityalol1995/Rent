<template>
  <div class="main_container">
    <TenantIntro/>
    <div class="container">
      <Advantages/>
      <OurHouses/>
      <Questions/>
      <ApartmentCheck/>
      <Documents/>
    </div>
    <AppOverview/>
  </div>
</template>

<script>
import TenantIntro from 'components/TenantComponent/TenantIntro'
import Advantages from 'components/Advantages'
import OurHouses from 'components/TenantComponent/OurHouses'
import Questions from 'components/TenantComponent/Questions'
import ApartmentCheck from 'components/TenantComponent/ApartmentCheck'
import Documents from 'components/TenantComponent/Documents'
import AppOverview from 'components/AppOverview'

export default {
  name: 'Tenant',
  components: {
    AppOverview,
    Documents,
    ApartmentCheck,
    Questions,
    OurHouses,
    Advantages,
    TenantIntro
  },
  data () {
    return {
      isActive: false
    }
  },
  methods: {
    toggleClass (event) {
      event.target.classList.toggle('is-active')
    }
  }
}
</script>

<style lang="scss">

</style>
