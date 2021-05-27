<template>
  <div id="q-app">
    <Header/>
    <router-view />
    <Footer/>
  </div>
</template>
<script>
import Header from 'components/MainLayouts/Header'
import Footer from 'components/MainLayouts/Footer'
export default {
  name: 'App',
  components: { Footer, Header }
}
</script>
