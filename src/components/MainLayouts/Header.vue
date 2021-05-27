<template>
  <header id="header">
    <div class="header__wrapper">
      <div class="container">
        <div class="row header_row">
          <div class="col-4">
            <div class="header_img">
              <router-link tag="div" to="/">
                <img src="../../assets/logo_domrf.png" alt="">
              </router-link>
            </div>
          </div>
          <div class="col-8">
            <div class="menu" v-bind:class="{ active: menu }">
              <router-link class="menu_item" to="/">Главная</router-link>
              <router-link class="menu_item" to="/Tenant">Арендаторам</router-link>
              <router-link class="menu_item" to="/AllObject">Наши дома</router-link>
              <router-link class="menu_item" to="/MobileApp">Мобильное приложение</router-link>
              <a class="menu_item" @click="closeMenu" href="#" v-scroll-to="'#contact'">
                Контакты
              </a>
<!--              <div class="menu_item subtitle">-->
<!--                <img src="../../assets/icon/user.png" alt="">-->
<!--              </div>-->
            </div>
            <div class="nav-icon" v-bind:class="{ active: menu }" @click="menu = !menu">
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import Vue from 'vue'
import VueScrollTo from 'vue-scrollto'

Vue.use(VueScrollTo)

export default {
  name: 'Header',
  data () {
    return {
      menu: false
    }
  },
  watch: {
    $route () {
      this.menu = false
    }
  },
  methods: {
    closeMenu () {
      this.menu = false
    }
  }
}
</script>

<style lang="scss">
header {
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 200;
  background-color: #fcfc14;

  .header__wrapper {
    .header_row {
      padding: 10px 0;
      position: relative;
      display: flex;
      align-items: center;
      .header_img {
        div {
          width: 105px;
          cursor: pointer;
          img {
            width: 100%;
          }
        }
      }

      .menu {
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-item-align: center;
        -ms-grid-row-align: center;
        align-self: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        margin: 0 -16px;
        font-family: "Gilroy-Bold", sans-serif, "Arial", sans-serif;
        font-size: 12px;
        line-height: 20px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-weight: 600;
        padding: 0 20px;

        .menu_item {
          padding: 12px 16px;
          color: inherit;
          text-decoration: none;
          transition: all .3s ease;
          white-space: nowrap;
          cursor: pointer;
          color: #000;

          &:hover {
            color: #00b83a;
          }
          a {
            color: #000;
            text-decoration: none;
            transition: all .3s ease;
            &:hover {
              color: #ffb700;
            }
          }
        }
        .subtitle {
          display: flex;
          align-items: center;
          font-size: 16px;
          img {
            margin-right: 10px;
            width: 17px;
          }
        }
      }
      .nav-icon {
        margin: 1em;
        width: 40px;
        height: 40px;
        cursor: pointer;
        margin-left: auto;
        display: none;
        z-index: 10;
        &:after, &:before, div {
          background-color: #000;
          border-radius: 3px;
          content: '';
          display: block;
          height: 5px;
          width: 80%;
          margin: 7px 0 0 auto;
          transition: all .2s ease-in-out;
        }
        &:before {
          width: 100%;
        }
        &:after {
          width: 60%;
        }
        &:hover {
          &:after, &:before, div {
            width: 100%;
          }
        }
        &.active {
          &:after {
            background-color: #000;
            width: 100%;
            transform: translateY(-12px) rotate(-135deg);
          }
          &:before {
            background-color: #000;
            width: 100%;
            transform: translateY(12px) rotate(135deg);
          }
          div {
            transform: scale(0);
          }
        }
      }
    }
  }
}

@media (max-width: 1024px) {
  header {
    .header__wrapper {
      .header_row {
        .menu {
          position: fixed;
          height: 100vh;
          top: 0;
          flex-direction: column;
          right: 0;
          justify-content: start;
          background: #fff;
          padding-top: 100px;
          transform: translateX(260px);
          transition: all .5s;
          align-items: flex-start;
          box-shadow: 11px 0px 10px 13px rgb(0 0 0 / 50%);
          background: #fcfc14;
          &.active {
            transform: translateX(0);
          }
          .menu_item {
            padding: 25px 16px;
          }
        }
        .nav-icon {
          display: block;
          position: relative;
        }
        .header_img {
          div {
            width: 75px;
          }
        }
      }
    }
  }
}
</style>
