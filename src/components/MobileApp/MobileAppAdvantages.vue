<template>
  <div class="MobileApp_advantages">
    <div class="container">
      <div class="title">
        Управляющая <br>
        компания в телефоне
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="MobileApp_advantages-item">
            <div class="MobileApp_advantages-item-img">
              <img src="../../assets/illustration_mobileapp_benefit_1.png" alt="">
            </div>
            <div class="MobileApp_advantages-item-content">
              <div class="MobileApp_advantages-item-title">
                Связь с управляющей компанией
              </div>
              <div class="text">Возможность позвонить или написать в чат управляющей компании</div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="MobileApp_advantages-item">
            <div class="MobileApp_advantages-item-img">
              <img src="../../assets/illustration_mobileapp_benefit_2_n.png" alt="">
            </div>
            <div class="MobileApp_advantages-item-content">
              <div class="MobileApp_advantages-item-title">
                Справочная
              </div>
              <div class="text">Вызов дежурных  и диспетчерских служб онлайн</div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="MobileApp_advantages-item">
            <div class="MobileApp_advantages-item-img">
              <img src="../../assets/illustration_mobileapp_benefit_3.png" alt="">
            </div>
            <div class="MobileApp_advantages-item-content">
              <div class="MobileApp_advantages-item-title">
                Объявления
              </div>
              <div class="text">Все объявления и новости  от управляющей компании в push-уведомлениях</div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="MobileApp_advantages-item">
            <div class="MobileApp_advantages-item-img">
              <img src="../../assets/illustration_mobileapp_benefit_4.png" alt="">
            </div>
            <div class="MobileApp_advantages-item-content">
              <div class="MobileApp_advantages-item-title">
                Пропуски
              </div>
              <div class="text">Создание и отправка удалённых  гостевых доступов к вашему объекту</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MobileAppAdvantages'
}
</script>

<style lang="scss">
.MobileApp_advantages {
  .MobileApp_advantages-item {
    padding: 50px;
    .MobileApp_advantages-item-img {
      max-width: 150px;
      margin-bottom: 25px;
      img {
        width: 100%;
      }
    }
    .MobileApp_advantages-item-content {
      .MobileApp_advantages-item-title {
        margin-bottom: 16px;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: .4px;
        font-weight: 700;
      }
    }
  }
}
@media (max-width: 1024px) {
  .MobileApp_advantages {
    padding-top: 50px;
    .MobileApp_advantages-item {
      padding: 30px 5px;
      .MobileApp_advantages-item-img {
        margin: 0 auto 25px auto;
        img {
          width: 100%;
        }
      }
      .MobileApp_advantages-item-content {
        text-align: center;
        .MobileApp_advantages-item-title {
        }
      }
    }
  }
}
</style>
