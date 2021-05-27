<template>
  <div class="main_container">
    <MobileAppIntro/>
    <MobileAppAdvantages/>
    <MobileAppSlider/>
<!--    <MobileAppSignUp/>-->
    <AppOverview/>
  </div>
</template>

<script>
import MobileAppIntro from 'components/MobileApp/MobileAppIntro'
import MobileAppAdvantages from 'components/MobileApp/MobileAppAdvantages'
import MobileAppSlider from 'components/MobileApp/MobileAppSlider'
// import MobileAppSignUp from 'components/MobileApp/MobileAppSignUp'
import AppOverview from 'components/AppOverview'

export default {
  name: 'MobileApp',
  components: {
    AppOverview,
    // MobileAppSignUp,
    MobileAppSlider,
    MobileAppAdvantages,
    MobileAppIntro
  }

}
</script>

<style lang="scss">

</style>
