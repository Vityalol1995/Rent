<template>
  <div class="ObjectPage_slider">
    <div class="container">
      <div class="title">Лучшие квартиры для Вас</div>
      <div class="q-pa-md">
        <q-carousel
          animated
          swipeable
          v-model="slide"
          infinite
          arrows
          control-type="regular"
          control-color="yellow"
          control-text-color="grey-8"
          :autoplay="autoplay"
        >
          <q-carousel-slide v-for="(slide, idx) in slides" :name="idx" :key="idx">
            <div class="ObjectPage_slider_wrapper">
              <img :src="slide"/>
            </div>
          </q-carousel-slide>
        </q-carousel>
        <div class="pagination_slider">
          <div class="pagination_slider_wrapper" v-for="(data, idx) in dataSet" :key="`slider-param-${idx}`" :class="activePointIdx === idx ? 'active_item' : 'orange'" @click="setSlides(idx, data.slides)">
            <div class="pagination_slider-img">
              <img :src="data.name" alt="">
            </div>
            <span>{{data.itemText}}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import getObjects from 'src/api/Objects'
import objectData from 'src/api/ObjectSlider'

export default {
  name: 'ObjectPagesSlider',
  data () {
    return {
      slide: null,
      dataSet: null,
      slides: null,
      activePointIdx: null,
      autoplay: true
    }
  },
  methods: {
    setSlides (idx, slides) {
      this.activePointIdx = idx

      this.slides = slides
      this.slide = 0
    }
  },
  mounted () {
    const objects = getObjects()
    this.objects = objects.find(o => o.id === parseInt(this.$route.params.id)) || {}
    const objectID = parseInt(this.$route.params.id)
    const objectsData = objectData().find(ob => ob.objectId === objectID)

    this.dataSet = objectsData.dataSet || null

    if (this.dataSet) {
      this.setSlides(0, this.dataSet[0].slides)
    }
  }
}
</script>

<style lang="scss" scoped>
.ObjectPage_slider {
  padding: 80px 0;
  .q-pa-md {
    display: flex;
    justify-content: space-between;
    overflow: hidden;
    padding-top: 30px;

    .q-carousel {
      width: 70%;
      height: 100%;

      .ObjectPage_slider_wrapper {
        height: 535px;
        display: flex;

        img {
          width: 100%;
        }
      }
      //.q-carousel__control {
      //  .q-btn {
      //    .q-btn__content {
      //      .q-icon {
      //        font-size: 40px;
      //      }
      //    }
      //  }
      //}
    }

    .q-carousel__navigation {
      width: 30%;
      //left: 0;
      overflow: hidden;
    }
    .pagination_slider {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 20px 0 20px 50px;
      width: 30%;
      .pagination_slider_wrapper {
        display: flex;
        padding: 16px 32px 16px 16px;
        height: 100%;
        align-items: center;
        cursor: pointer;
        .pagination_slider-img {
          height: 60px;
          width: 60px;
          display: flex;
          justify-content: center;
          margin-right: 26px;
          img {
            display: block;
            height: 100%;
            width: auto;
            margin: auto;
            max-width: 100%;
          }
        }
        span {
          color: #1c1b28;
          font-size: 16px;
          line-height: 24px;
          letter-spacing: .4px;
          font-family: "Gilroy-Bold",sans-serif,"Arial",sans-serif;
          font-weight: 600;
        }
      }
    }
  }
  .q-panel-parent {
    //position: unset !important;
  }

  .q-btn__wrapper:before {
    box-shadow: none;
  }

  .navigationSubtext {
    color: #000;
    font-size: 20px;
    font-weight: 700;
    width: 220px;
    text-align: left;
  }

  .q-btn__content {
    text-transform: none;
    display: flex;
    justify-content: space-around;
    padding: 15px 0;
    //height: 100px;
  }
  .scroll {
    overflow: hidden;
    transition: all 2s;
  }
  .q-carousel__slide {
    padding: 0;
  }
  .active_item {
    background-color: #f1f2f6;
  }
}
@media (max-width: 1024px) {
  .ObjectPage_slider {
    padding: 80px 0 0;
    .q-pa-md {
      display: block;
      .q-carousel {
        width: 100%;
        .ObjectPage_slider_wrapper {
          padding-right: 0;
          height: auto;
          img {
            object-fit: cover;
          }
        }
      }
      .q-carousel__navigation {
        width: 100%;
      }
      .pagination_slider {
        width: 100%;
        padding: 20px 0;
      }
    }
  }
}
@media (max-width: 500px) {
  .ObjectPage_slider {
    .title {
      text-align: left;
      margin-bottom: 15px;
    }
    .q-pa-md {
      padding: 0;
      .pagination_slider {
        .pagination_slider_wrapper {
          padding: 16px 10px 16px 10px;
          .pagination_slider-img {
            height: 35px;
            width: 45px;
            margin-right: 10px;
            //img {
            //  display: block;
            //  height: 100%;
            //  width: auto;
            //  margin: auto;
            //  max-width: 100%;
            //}
          }
          span {
            color: #1c1b28;
            font-size: 12px;
            line-height: 24px;
            letter-spacing: .4px;
            font-family: "Gilroy-Bold",sans-serif,"Arial",sans-serif;
            font-weight: 600;
          }
        }
      }
      .q-carousel {
        .ObjectPage_slider_wrapper {
          height: 200px;
        }
      }
    }
  }
}

@media (max-width: 400px) {
  .ObjectPage_slider {
    .q-pa-md {
      .q-carousel {
        .ObjectPage_slider_wrapper {
          height: 150px;
        }
      }
    }
  }
}
</style>
