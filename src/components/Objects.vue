<template>
  <div class="Object">
    <div class="container">
      <div class="row">
        <router-link tag="div" :to="'/ObjectPage/' + object.id" class="col-md-6 col-sm-12 Object_item-wrapper" v-for="object in objects" :name="object.id" :key="object.id">
          <div class="Object_item">
            <div class="title">{{object.title}}</div>
            <p>{{object.address}}</p>
            <div class="Object_item-img">
              <img :src="object.img" alt="">
              <div class="object_link text">Выбрать жилье</div>
            </div>
          </div>
        </router-link>
        <div class="col-6 Object_more">
          <div>
            <img src="../assets/object_img.jpg" alt="">
          </div>
          <div class="Object_more-button">
            <GreenButton to="Tenant">Арендаторам</GreenButton>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import getObjects from '../api/Objects'
import GreenButton from 'components/GreenButton'
export default {
  name: 'Object',
  components: { GreenButton },
  data () {
    return {
      objects: null
    }
  },
  mounted () {
    this.objects = getObjects()
  }
}
</script>

<style lang="scss">
.Object {
  padding-top: 80px;
  .Object_item-wrapper {
    display: flex;
    cursor: pointer;
    justify-content: center;
    &:nth-child(2n) {
      padding-top: 120px;
    }
    .Object_item {
      padding: 0 16px;

      p {
        font-size: 16px;
        line-height: 24px;
        letter-spacing: .4px;
        margin-bottom: 24px;
      }

      .Object_item-img {
        height: 500px;
        min-height: 500px;
        position: relative;
        max-width: 500px;
        display: block;
        position: relative;

        img {
          height: 100%;
          width: 100%;
          object-fit: cover;
          border-radius: 6px;
        }
        .object_link {
          background-color: #f70d26;
          color: #fff;
          max-width: calc(100% - 48px);
          padding: 16px 24px;
          border-radius: 4px;
          text-decoration: none;
          position: absolute;
          top: 24px;
          left: 24px;
          cursor: pointer;
        }
      }
    }
  }
  .Object_more {
    padding-top: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    div {
      max-width: 305px;
      img {
        width: 100%;
      }
    }
    .Object_more-button {
      margin-top: 40px;
    }
  }
}
@media (max-width: 1024px) {
  .Object {
    padding-top: 0;
    .Object_item-wrapper {
      padding: 40px 0;
      &:nth-child(2n) {
        padding: 0;
      }

      .Object_item {
        .Object_item-img {
          max-width: 100%;
          height: auto;
          min-height: auto;
        }
      }
    }
    .Object_more {
      margin: 0 auto;
      padding-top: 70px;
      div {
        img {
        }
      }
      .Object_more-button {
      }
    }
  }
}
@media (max-width: 500px) {
  .Object {
    .Object_item-wrapper {
      .Object_item {
        padding: 0;
        .title {
          text-align: left;
        }
        .Object_item-img {
          height: 300px;
          .object_link {
            padding: 10px 10px;
            font-size: 12px;
            top: 10px;
            left: 10px;
          }
        }
      }
    }
    .Object_more {
      padding-top: 25px;
      div {
        img {
        }
      }
      .Object_more-button {
      }
    }
  }
}
</style>
