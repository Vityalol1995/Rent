<template>
  <div class="main_container">
    <div class="ObjectPage">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="ObjectPage_img">
              <img :src="objects.img" alt="">
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="ObjectPage_content">
              <div class="title_third ObjectPage_title">{{objects.title}}</div>
              <div class="title ObjectPage_text">{{objects.text}}</div>
              <div class="text">{{objects.address}}</div>
              <div class="ObjectPage_tel text">Тел.: {{objects.tel}}</div>
            </div>
          </div>
        </div>
        <div class="ObjectPage_description text_description">{{objects.description}}</div>
      </div>
    </div>
    <div class="Map">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="title Map_title">Инфраструктура</div>
            <div class="text">
              Когда арендуешь жилье, важно, <br>
              чтобы всё необходимое было рядом.
            </div>
            <div class="Map_list">
              <div class="Map_list-item" v-for="ob in objects.infrastructure" :name="ob" :key="ob">{{ob}}</div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="Map_container">
              <iframe :src="objects.map" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ObjectPagesSlider/>
    <AppOverview/>
  </div>
</template>

<script>

import getObjects from '../api/Objects'
import ObjectPagesSlider from 'components/ObjectPagesComponent/ObjectPagesSlider'
import AppOverview from 'components/AppOverview'

export default {
  name: 'ObjectPages',
  components: { AppOverview, ObjectPagesSlider },
  data () {
    return {
      objects: {}
    }
  },
  mounted () {
    const objects = getObjects()
    this.objects = objects.find(o => o.id === parseInt(this.$route.params.id)) || {}
  }
}
</script>

<style lang="scss">
.ObjectPage {
  .ObjectPage_img {
    width: 100%;
    height: 500px;
    max-height: 400px;
    img {
      width: 100%;
      height: 100%;
      border-radius: 10px;
      object-fit: fill;
    }
  }
  .ObjectPage_content {
    padding: 40px 80px;
    height: 100%;
    .ObjectPage_title {
      margin-bottom: 10px;
      color: #8bc540;
      font-weight: 700;
    }
    .ObjectPage_text {
      margin-bottom: 20px;
    }
    .ObjectPage_tel {
      margin-top: 10px;
    }
  }
  .ObjectPage_description {
    margin-top: 50px;
  }
}
.Map {
  padding: 80px 0 0 0;
  .Map_title {
    margin-bottom: 20px;
  }
  .Map_list {
    padding: 70px 18px;
    .Map_list-item {
      margin-bottom: 20px;
      font-size: 14px;
      line-height: 20px;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      font-family: "Gilroy-Bold",sans-serif,"Arial",sans-serif;
      font-weight: 600;
      transition: all 0.3s;
      cursor: pointer;
      &:hover {
        color: #ff9500;
      }
    }
  }
}
@media (max-width: 1024px) {
  .ObjectPage {
    .ObjectPage_img {
      height: 400px;
      max-height: none;
    }
    .ObjectPage_content {
      padding: 40px 0;
      .ObjectPage_title {
      }
      .ObjectPage_text {
      }
      .ObjectPage_tel {
      }
    }
  }
  .Map {
    .container {
      .row {
        display: block;
        .Map_container {
          width: 100%;
          iframe {
            width: 100%;
          }
        }
      }
    }
  }
}
@media (max-width: 500px) {
  .ObjectPage {
    .ObjectPage_img {
      height: 220px;
    }
    .ObjectPage_content {
      .ObjectPage_text {
        text-align: left;
      }
      .text {
        font-size: 12px;
      }
    }
    .ObjectPage_description {
      margin: 0;
      font-size: 12px;
      line-height: 23px;
    }
  }
  .Map {
    .Map_title {
      text-align: left;
    }
    .Map_list {
      padding: 18px 0px;
      .Map_list-item {
        font-size: 12px;
      }
    }
    .Map_container {
      height: 250px;
      iframe {
        height: 100%;
      }
    }
  }
}
</style>
