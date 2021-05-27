<template>
  <div class="OurHouses">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad0c308a64e0356b3825d3752c6e9b9a351d43514c0dbba8585c2155d0e76ee55&amp;source=constructor"></iframe>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="OurHouses_content">
            <div class="title">Арендные квартиры оборудованы всем необходимым</div>
            <div class="text text_mr">
              Жилье уже оборудовано <br>
              всем необходимым для жизни
              <div class="row OurHouses_icon-wrapper-container">
                <div class="col-6">
                  <div class="OurHouses_icon-wrapper">
                    <div class="OurHouses_icon-item text">
                      <div>
                        <img src="../../assets/icon/OurHouses_icon-1.png" alt="">
                      </div>
                      <span>Полная меблировка</span>
                    </div>
                    <div class="OurHouses_icon-item text">
                      <div>
                        <img src="../../assets/icon/OurHouses_icon-2.png" alt="">
                      </div>
                      <span>Детские площадки</span>
                    </div>
                    <div class="OurHouses_icon-item text">
                      <div>
                        <img src="../../assets/icon/OurHouses_icon-3.png" alt="">
                      </div>
                      <span>Прачечная</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="OurHouses_icon-wrapper">
                    <div class="OurHouses_icon-item text">
                      <div>
                        <img src="../../assets/icon/OurHouses_icon-4.png" alt="">
                      </div>
                      <span>Консьерж</span>
                    </div>
                    <div class="OurHouses_icon-item text">
                      <div>
                        <img src="../../assets/icon/OurHouses_icon-5.png" alt="">
                      </div>
                      <span>Охрана</span>
                    </div>
                    <div class="OurHouses_icon-item text">
                      <div>
                        <img src="../../assets/icon/OurHouses_icon-6.png" alt="">
                      </div>
                      <span>Парковка</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <GreenButton to="AllObject">Выбрать жилье</GreenButton>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import GreenButton from 'components/GreenButton'
export default {
  name: 'OurHouses',
  components: { GreenButton }
}
</script>

<style lang="scss">
.OurHouses {
  padding: 80px 0;
  .map {
    max-width: 500px;
    height: 500px;
    iframe {
      width: 100%;
      height: 100%;
    }
  }
  .OurHouses_content {
    .text_mr {
      margin-top: 20px;
    }
    .OurHouses_icon-wrapper {
      padding: 40px 0;
      .OurHouses_icon-item {
        display: flex;
        margin-bottom: 20px;
        div {
          margin-right: 15px;
          width: 25px;
          display: flex;
          justify-content: center;
          align-items: center;
          img {
            width: 100%;
          }
        }
      }
    }
  }
}
@media (max-width: 1024px) {
  .OurHouses {
    .container {
      padding: 0;
      .row {
        display: block;
        .map {
          max-width: none;
          height: 500px;
          margin-bottom: 40px;
          iframe {
            border-radius: 10px;
            border: 0;
          }
        }
        .OurHouses_content {
          .title {
            text-align: left;
          }
          .OurHouses_icon-wrapper-container {
            padding: 40px 0;
            .text_mr {
            }
            .OurHouses_icon-wrapper {
              padding: 0;
              .OurHouses_icon-item {
                div {
                }
              }
            }
          }
        }
      }
    }
  }
}
@media (max-width: 500px) {
  .OurHouses {
    .container {
      .row {
        .map {
          height: 300px;
        }
      }
    }
  }
}
</style>
