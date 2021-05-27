<template>
  <div class="advantages">
    <div class="title">Приди и выбери современную <br> квартиру в аренду</div>
    <div class="container">
      <div class="advantages-container row">
        <div class="advantages-item col-md-3 col-sm-6 col-xs-12">
          <div class="advantages-item-img">
            <img src="../assets/advantages_img-1.png" alt="">
          </div>
          <div class="advantages-item-text">
            <h4>Надежность</h4>
            <p>Официальные договора с юр. и физ. лицами</p>
          </div>
        </div>
        <div class="advantages-item col-md-3 col-sm-6 col-xs-12">
          <div class="advantages-item-img">
            <img src="../assets/advantages_img-2.png" alt="">
          </div>
          <div class="advantages-item-text">
            <h4>Комфорт</h4>
            <p>Дизайнерская отделка, стильная мебель ,современная бытовая техника</p>
          </div>
        </div>
        <div class="advantages-item col-md-3 col-sm-6 col-xs-12">
          <div class="advantages-item-img">
            <img src="../assets/advantages_img-3.png" alt="">
          </div>
          <div class="advantages-item-text">
            <h4>Сервис</h4>
            <p>Прачечная, консьерж-служба, охрана</p>
          </div>
        </div>
        <div class="advantages-item col-md-3 col-sm-6 col-xs-12">
          <div class="advantages-item-img">
            <img src="../assets/advantages_img-4.png" alt="">
          </div>
          <div class="advantages-item-text">
            <h4>Уникальность</h4>
            <p>Выбор разных домов и планировок</p>
          </div>
        </div>
        <!--        <div class="advantages-item">-->
        <!--          <div class="advantages-item-img">-->
        <!--            <img src="../assets/illustration_main_benefit_5.svg" alt="">-->
        <!--          </div>-->
        <!--          <div class="advantages-item-text">-->
        <!--            <h4>Прозрачность</h4>-->
        <!--            <p>Контроль платежей через мобильное приложение</p>-->
        <!--          </div>-->
        <!--        </div>-->
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HomeAdvantages'
}
</script>

<style lang="scss">
.advantages-container {
  margin-top: 64px;
  display: flex;
  justify-content: space-between;
  align-items: center;

  .advantages-item {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-right: 18px;
    padding-left: 18px;
    //width: 25%;
    .advantages-item-img {
      max-width: 110px;

      img {
        width: 100%;
      }
    }

    .advantages-item-text {
      text-align: left;
      height: 200px;

      h4 {
        font-size: 16px;
        line-height: 24px;
        letter-spacing: .4px;
        margin-bottom: 12px;
        font-weight: bold;
      }

      p {
        font-size: 16px;
        line-height: 24px;
        letter-spacing: .4px;
      }
    }
  }
}

@media (max-width: 1024px) {
  .advantages-container {
    .advantages-item {
      align-items: center;
      padding: 0;

      .advantages-item-text {
        text-align: center;
      }
    }
  }
}

@media (max-width: 1024px) {
  .advantages-container {
    .advantages-item {
      .advantages-item-text {
        height: auto;
        padding: 15px 0;
      }
    }
  }
}
</style>
