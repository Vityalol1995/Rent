<template>
  <div class="main_container">
    <Object/>
    <AppOverview/>
  </div>
</template>

<script>
import Object from 'components/Objects'
import AppOverview from 'components/AppOverview'
export default {
  name: 'AllObjects',
  components: { AppOverview, Object }
}
</script>

<style scoped>

</style>
