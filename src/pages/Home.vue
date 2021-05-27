<template>
  <div>
    <div class="main_container">
      <div class="container">
        <div>
          <HomeSlider/>
        </div>
        <HomeAdvantages/>
        <Presentation/>
        <Object/>
      </div>
      <AppOverview/>
    </div>
  </div>
</template>

<script>
import HomeSlider from 'components/HomeComponents/HomeSlider'
import HomeAdvantages from 'components/Advantages'
import Presentation from 'components/HomeComponents/Presentation'
import Object from 'components/Objects'
import AppOverview from 'components/AppOverview'

export default {
  name: 'Home',
  components: {
    AppOverview,
    Object,
    Presentation,
    HomeAdvantages,
    HomeSlider
  },
  data () {
    return {
      slide: 1
    }
  }
}
</script>
<style lang="scss">

</style>
