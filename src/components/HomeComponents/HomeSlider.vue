<template>
  <q-carousel
    class="Home_carousel"
    swipeable
    animated
    v-model="slide"
    ref="carousel"
    infinite
    autoplay
  >
    <q-carousel-slide :name="1">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-12 slider_wrapper">
            <div class="slider_content">
              <div class="slider_title">Арендовать квартиру без посредников?</div>
              <div class="slider_title-green title_green">Это легко</div>
              <div class="slider_subtitle">Впервые арендные <br> дома «Космополит»</div>
            </div>
            <div class="slider_button">
              <GreenButton to="AllObject">Выбрать жилье</GreenButton>
            </div>
          </div>
          <div class="col-md-7 col-sm-12  slider_wrapper">
            <div class="slider_img-container">
              <img src="../../assets/main-slider-1-optimaln.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </q-carousel-slide>
    <q-carousel-slide :name="2">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-12 slider_wrapper">
            <div class="slider_content">
              <div class="slider_title">Арендовать квартиру и больше не переживать?</div>
              <div class="slider_title-green title_green">Это легко</div>
              <div class="slider_subtitle">Впервые арендные <br> дома «Космополит»</div>
            </div>
            <div class="slider_button">
              <GreenButton to="AllObjects">Выбрать жилье</GreenButton>
            </div>
          </div>
          <div class="col-md-7 col-sm-12 slider_wrapper">
            <div class="slider_img-container">
              <img src="../../assets/main-slider-2-optimaln.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </q-carousel-slide>
    <q-carousel-slide :name="3">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-12 slider_wrapper">
            <div class="slider_content">
              <div class="slider_title">Арендовать квартиру на любой вкус для семьи?</div>
              <div class="slider_title-green title_green">Это легко</div>
              <div class="slider_subtitle">Впервые арендные <br> дома «Космополит»</div>
            </div>
            <div class="slider_button">
              <GreenButton to="AllObject">Выбрать жилье</GreenButton>
            </div>
          </div>
          <div class="col-md-7 col-sm-12 slider_wrapper">
            <div class="slider_img-container">
              <img src="../../assets/main-slider-3-optimaln.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </q-carousel-slide>
  </q-carousel>
</template>

<script>
import GreenButton from 'components/GreenButton'

export default {
  name: 'HomeSlider',
  components: { GreenButton },
  data () {
    return {
      slide: 1
    }
  }
}
</script>

<style lang="scss">
.scroll {
  overflow: hidden;
  transition: all 2s;
}
.Home_carousel {
  margin-bottom: 80px;
  .q-carousel__slide {
    .q-panel-parent {
      position: relative;
    }
    .container {
      height: 100%;

      .row {
        height: 100%;

        .slider_wrapper {
          height: 100%;
          display: flex;
          flex-direction: column;
          //justify-content: space-between;

          .slider_content {
            .slider_title {
              font-size: 36px;
              font-weight: 700;
            }

            .slider_subtitle {
              font-size: 16px;
              line-height: 24px;
              letter-spacing: .4px;
            }
          }
          .slider_button {
            margin-top: 50px;
          }

          .slider_img-container {
            height: 100%;
            display: flex;
            justify-content: flex-end;

            img {
              width: 80%;
              height: 100%;
              border-radius: 10px;
              object-fit: cover;
            }
          }
        }
      }
    }
  }
}
@media (max-width: 1024px) {
  .Home_carousel {
    height: auto;
    margin-bottom: 25px;

    .q-carousel__slide {
      .container {
        padding: 0;
        .row {
          height: 100%;

          .slider_wrapper {
            margin-bottom: 50px;

            .slider_content {
              text-align: center;
            }

            .slider_button {
              display: flex;
              justify-content: center;
              margin-top: 20px;
            }

            .slider_img-container {
              height: 320px;

              img {
                width: 100%;
              }
            }
          }
        }
      }
    }
  }
}
@media (max-width: 500px) {
  .Home_carousel {
    .q-carousel__slide {
      padding: 0;
      .container {
        .row {
          .slider_wrapper {
            width: 100%;

            .slider_content {
              .slider_title {
                font-size: 22px;
              }
            }
            .slider_img-container {
              height: 200px;
            }
          }
        }
      }
    }
  }
}
</style>
