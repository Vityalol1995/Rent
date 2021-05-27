<template>
  <div class="MobileAppSignUp">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="title">
            Ещё арендуете жилье по-старому?
          </div>
          <div class="text MobileAppSignUp_text">
            И для вас есть несколько удобных функций, которыми можно воспользоваться в личном кабинете на нашем сайте
            после быстрой регистрации
          </div>
        </div>
        <div class="col-6"></div>
      </div>
      <div class="row">
        <div class="col-7">
          <div class="MobileAppSignUp_item">
            <div class="title_third MobileAppSignUp_item-title">
              Запись на просмотр жилья
            </div>
            <div class="MobileAppSignUp_img">
              <img src="../../assets/MobileAppSignUp_img-1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="MobileAppSignUp_item">
            <div class="MobileAppSignUp_img">
              <img src="../../assets/MobileAppSignUp_img-2.jpg" alt="">
            </div>
            <div class="text MobileAppSignUp_text">
              При наличии свободных квартир в личном <br> кабинете доступна запись на просмотр <br> на любое время и дату
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <div class="MobileAppSignUp_item">
            <div class="title_third MobileAppSignUp_item-title">
              Отправка документов <br> для проверки
            </div>
            <div class="MobileAppSignUp_img">
              <img src="../../assets/MobileAppSignUp_img-3.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="MobileAppSignUp_item">
            <div class="MobileAppSignUp_img">
              <img src="../../assets/MobileAppSignUp_img-4.jpg" alt="">
            </div>
            <div class="text MobileAppSignUp_text">
              Для бронирования квартир вы можете подать документы на проверку онлайн всего за несколько минут
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MobileAppSignUp'
}
</script>

<style lang="scss">
.MobileAppSignUp {
  padding: 100px 0 0 0;

  .MobileAppSignUp_text {
    margin-top: 20px;
    margin-bottom: 80px;
  }

  .MobileAppSignUp_item {
    .MobileAppSignUp_item-title {
      margin-bottom: 50px;
    }

    .MobileAppSignUp_img {
      //max-width: 500px;
      img {
        //width: 100%;
      }
    }
  }
}
</style>
