<template>
  <div class="Tenant_intro">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-12">
          <div class="Tenant_intro_img">
            <img src="../../assets/SliderObject/SliderObject_1/one_room/IMG_4266.jpg" alt="">
          </div>
        </div>
        <div class="col-md-5 col-sm-12">
          <div class="Tenant_intro-content">
            <div class="title Tenant_intro-title">
              Вы желаете снять квартиру и чувствовать себя в ней как дома?
            </div>
            <div class="text Tenant_intro-text">
              Арендные дома "Космополит" гарантируют Вам домашний комфорт, уют, благополучие и удовольствие!
            </div>
            <div>
              <GreenButton to="AllObject">Выбрать жилье</GreenButton>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="Tenant_intro-content-2">
            <div class="title">
              Преимущества
            </div>
            <ul class="text">
              <li>Уникальная возможность стать клиентом в современной, полностью укомплектованной квартире;</li>
              <li>Удобные планировочные решения;</li>
              <li>Аренда без комиссии;</li>
              <li>Предоставляем регистрацию по месту пребывания для всех граждан РФ;</li>
              <li>Организация эксплуатации квартир забота наших технических специалистов;</li>
              <li>Прозрачные условия договора для юридических и физических лиц;</li>
              <li>Интернет и парковка включены в стоимость аренды.</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="Tenant_intro_img-2">
            <img src="../../assets/SliderObject/SliderObject_3/three_rooms/IMG_4333.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import GreenButton from 'components/GreenButton'
export default {
  name: 'TenantIntro',
  components: { GreenButton }
}
</script>

<style lang="scss">
.Tenant_intro {
  margin-bottom: 100px;
  margin-top: 35px;
  .Tenant_intro_img {
    margin-right: 70px;
    img {
      width: 100%;
    }
  }
  .Tenant_intro-content-2 {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    .Tenant_description {
      margin-top: 10px;
    }
    ul {
      margin-right: 50px;
      li {
        padding: 5px 0;
      }
    }
  }
  .Tenant_intro_img-2 {
    img {
      width: 100%;
    }
  }
  .Tenant_intro-content {
    padding-bottom: 130px;
    height: 100%;
    .Tenant_intro-title {
      margin-bottom: 32px;
    }
    .Tenant_intro-text {
      margin-bottom: 64px;
    }
  }
}
@media (max-width: 1024px) {
  .Tenant_intro {
    .Tenant_intro_img {
      margin: 0;
      img {
        border-radius: 10px;
        object-fit: cover;
        height: 300px;
      }
    }
    .Tenant_intro-content {
      padding-bottom: 50px;
      .Tenant_intro-title {
        text-align: left;
      }
    }
    .Tenant_intro-content-2 {
      ul {
        margin-right: 0;
        margin-bottom: 30px;
      }
      .title {
        text-align: left;
      }
    }
    .Tenant_intro_img-2 {
      img {
        border-radius: 10px;
        object-fit: cover;
        height: 300px;
      }
    }
  }
}
@media (max-width: 500px) {
  .Tenant_intro {
    .Tenant_intro_img {
      img {
        height: 200px;
      }
    }
    .Tenant_intro_img-2 {
      img {
        height: 200px;
      }
    }
    .Tenant_intro-content-2 {
      ul {
        padding-left: 10px;
      }
    }
  }
}
</style>
