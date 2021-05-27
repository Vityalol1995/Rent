<template>
  <div class="ApartmentCheck">
    <div class="ApartmentCheck_img">
      <img src="../../assets/divan-desktop.jpg" alt="">
    </div>
    <div class="ApartmentCheck_content">
      <div class="title ApartmentCheck_title">
        Приди и <br> выбери новую <br> квартиру в аренду
      </div>
<!--      <div class="text ApartmentCheck_text">-->
<!--        Посетите наши арендные дома и оце ните сервис сами!-->
<!--      </div>-->
      <ModalForm>Записаться на просмотр</ModalForm>
    </div>
  </div>
</template>

<script>
import ModalForm from 'components/ModalForm/ModalForm'
export default {
  name: 'ApartmentCheck',
  components: { ModalForm }
}
</script>

<style lang="scss">
.ApartmentCheck {
  padding: 100px 0 100px;
  position: relative;
  .ApartmentCheck_img {
    img {
      width: 100%;
    }
  }
  .ApartmentCheck_content {
    position: absolute;
    top: 35%;
    left: 10%;
    .ApartmentCheck_title {
      margin-bottom: 30px;
    }
    .ApartmentCheck_text {
      margin-bottom: 50px;
    }
  }
}
@media (max-width: 1024px) {
  .ApartmentCheck {
    padding: 50px 0 50px;
    .ApartmentCheck_content {
      position: unset;
      .ApartmentCheck_title {
        text-align: left;
        padding: 30px 0;
        margin: 0;
      }
    }
  }
}
</style>
