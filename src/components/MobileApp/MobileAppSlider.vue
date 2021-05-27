<template>
  <div class="MobileAppSlider">
    <div class="container">
      <div class="title MobileAppSlider_title">
        Другие удобные <br> функции
      </div>
      <div class="q-pa-md">
        <q-carousel
          v-model="slide"
          transition-prev="scale"
          transition-next="scale"
          swipeable
          vertical
          animated
          control-color="grey"
          navigation
          infinite
        >
          <q-carousel-slide v-for="sl in slides" :key="sl.id" :name="sl.id" class="column no-wrap flex-center">
            <div id="AppSlide_wrapper" class="AppSlide_wrapper">
              <img :src="sl.text" alt="">
            </div>
          </q-carousel-slide>
          <template v-slot:navigation-icon="{ index, active, btnProps, onClick }">
            <q-btn class="span_btn" v-if="active" size="xl" text-color="black" @click="onClick">{{ getNavigationText(index) }}
<!--              <span class="navigationSubtext text">{{ navigationSubtext(index) }}</span>-->
            </q-btn>
            <q-btn class="span_btn" v-else size="lg" text-color="grey" @click="onClick">{{ getNavigationText(index) }}</q-btn>
          </template>
        </q-carousel>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      slides: [
        {
          id: 1,
          text: require('../../assets/AppSlide-1.jpg'),
          navigationText: 'Онлайн чат жильцов',
          SlideText: 'В разделе «История платежей» арендатор может контролировать свои расходы за весь период аренды'
        },
        {
          id: 2,
          // text: require('../../assets/AppSlide-2.png'),
          text: require('../../assets/AppSlide-1.jpg'),
          navigationText: 'Онлайн чат с техподдержкой',
          SlideText: 'В режиме реального времени наш специалист поможет вам по любым вопросам, возникающих в процессе пользования жильём'
        },
        {
          id: 3,
          // text: require('../../assets/AppSlide-3.png'),
          text: require('../../assets/AppSlide-1.jpg'),
          navigationText: 'Акции от партнёров',
          SlideText: 'В разделе «История потребления» можно отслеживать расход электроэнергии, холодной и горячей воды за весь период аренды:'
        },
        {
          id: 4,
          // text: require('../../assets/AppSlide-4.png'),
          text: require('../../assets/AppSlide-1.jpg'),
          navigationText: 'Новости и уведомления от управляющей компании',
          SlideText: 'В разделе собраны все специальные предложения для арендаторов. Жильцы могут воспользоваться любым из представленных промокодов при заказе товара или услуги'
        }
      ],
      slide: 1
    }
  },
  methods: {
    getNavigationText (index) {
      return (this.slides[index] && this.slides[index].navigationText) ?? null
    },
    navigationSubtext (index) {
      return (this.slides[index] && this.slides[index].SlideText) ?? null
    }
  }
}
</script>
<style lang="scss">
.MobileAppSlider {
  //padding: 100px 0;
  .MobileAppSlider_title {
    position: relative;
    top: 140px;
  }
  .q-pa-md {
    display: flex;
    justify-content: flex-end;
    position: relative;
    overflow: hidden;

    .q-carousel {
      width: 50%;
      height: 100%;
      position: unset;

      #AppSlide_wrapper {
        display: block;
        padding: 20px;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        -webkit-box-shadow: inset -3px -2px 15px -6px rgb(9 35 72 / 50%), 10px 10px 35px -25px rgb(9 35 72 / 50%) !important;
        box-shadow: inset -3px -2px 15px -6px rgb(9 35 72 / 50%), 10px 10px 35px -25px rgb(9 35 72 / 50%);
        border-radius: 50px;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        max-width: 320px;
        height: 650px;

        img {
          width: 100%;
        }
      }
    }

    .q-carousel__navigation {
      width: 50%;
      left: 0;
      overflow: hidden;
    }
  }
}

.q-btn__wrapper:before {
  box-shadow: none;
}

.navigationSubtext {
  color: #77798C;
  text-align: left;
}

.span_btn, .active {
  span {
    text-transform: none;
    display: flex;
    justify-content: flex-start;
  }
}

.q-btn {
  width: 100%;
}
.scroll {
  overflow: hidden;
}
@media (max-width: 1024px) {
  .MobileAppSlider {
    .q-pa-md {
      margin-top: 120px;
      .q-carousel {
        width: 100%;
        #AppSlide_wrapper {
          margin: 20px auto 0 0;
          height: auto;
          img {
            width: 100%;
          }
        }
      }

      .q-carousel__navigation {
        width: 100%;
        position: inherit;
      }
    }
  }
}
.span_btn, .active {
  span {
    text-transform: none;
    display: flex;
    justify-content: flex-start;
    text-align: left;
  }
}
@media (max-width: 500px) {
  .MobileAppSlider {
    .q-pa-md {
      padding: 16px 0px;
    }
  }
  .q-btn {
    font-size: 16px !important;
  }
}
</style>
