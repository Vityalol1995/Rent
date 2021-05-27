<template>
<router-link :to="to" class="button_green"><slot></slot></router-link>
</template>

<script>
export default {
  name: 'GreenButton',
  props: {
    to: {
      type: String,
      default: ''
    }
  }
}
</script>

<style lang="scss">
.button_green {
  font-size: 12px;
  line-height: 20px;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  color: #000;
  padding: 18px 35px;
  border-radius: 4px;
  background-color: #fcfc14;
  cursor: pointer;
  text-decoration: none;
  transition: 0.3s;
  margin: 0 10px 0 0;
  text-align: center;
  &:hover {
    background-color: #ff9500;
    color: #fff;
  }
}
@media (max-width: 500px) {
  .button_green {
    padding: 12px 30px;
  }
}
</style>
