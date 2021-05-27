<template>
  <div class="MobileApp_intro">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-12">
          <div class="MobileApp_intro-content">
            <div class="title_second">
              Полный контроль <br>  над арендой?
            </div>
            <div class="title_green">Теперь легко!</div>
          </div>
          <div class="MobileApp_intro-content">
            <div class="text MobileApp_intro-text">
              Мобильное приложение <br>
              клиента
            </div>
            <div class="AppOverview_button-group AppOverview_button-group-column">
              <ModalForm>Стать клиентом</ModalForm>
              <div class="AppOverview_button_social-wrapper">
              <router-link class="AppOverview_button_social" to="##">
                <div>
                  <img src="../../assets/icon/mac-os-logo.png" alt="">
                </div>
              </router-link>
              <router-link class="AppOverview_button_social" to="##">
                <div>
                  <img src="../../assets/icon/google-play.png" alt="">
                </div>
              </router-link>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-sm-12">
          <div class="MobileApp_intro-img-block">
            <div class="MobileApp_intro-img">
              <img src="../../assets/Mobileapp_img_starts_desktop.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ModalForm from 'components/ModalForm/ModalForm'
export default {
  name: 'MobileApp_Intro',
  components: { ModalForm }
}
</script>

<style lang="scss">
.MobileApp_intro {
  margin: 30px 0;
  .MobileApp_intro-img-block {
    display: flex;
    justify-content: center;
    .MobileApp_intro-img {
      width: 364px;
      height: 714px;
      img {
        width: 100%;
      }
    }
  }
  .MobileApp_intro-content {
    padding-top: 72px;
    padding-bottom: 72px;
    .MobileApp_intro-text {
      margin-bottom: 20px;
    }
  }
}
@media (max-width: 1024px) {
  .MobileApp_intro {
    margin: 0;
    .row {
      display: block;
      .MobileApp_intro-content {
        padding-top: 30px;
        padding-bottom: 30px;
      }
      .MobileApp_intro-img-block {
        .MobileApp_intro-img {
          height: auto;
        }
      }
    }
  }
}
@media (max-width: 500px) {
  .MobileApp_intro {
    .row {
      .MobileApp_intro-content {
        text-align: center;
        .MobileApp_intro-text {
          text-align: center;
        }
      }
    }
  }
}
</style>
