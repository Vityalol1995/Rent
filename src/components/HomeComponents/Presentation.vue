<template>
  <div class="presentation">
    <div class="presentation_wrapper">
      <div class="title">Наши объекты в 3D</div>
      <div class="presentation-container">
        <iframe style="width: 100%; height: 100%;" src="https://files.360crimea.ru/Simferopol/Real_Estate/SK_Consol/JK_Kosmopolit/" frameborder="0"></iframe>
      </div>
      <p>
        <b>«Космополит»</b> - это уникальный проект, представляющий
        собой 3 дома с дизайнерскими квартирами в аренду. Дома располагаются в
        молодых, развитых и обустроенных кварталах города.
      </p>
      <p>
        <b>«Космополит»</b> - это квартиры в новостройках ,арендуя которые , Вы сможете
        ощутить себя как дома, а охраняемая территория с детскими площадками,
        освещением и озеленением и полная инфраструктура  позволят Вам почувствовать
        удобство во всех аспектах жизни.
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Presentation'
}
</script>

<style lang="scss">
.presentation {
  margin-top: 64px;
  .presentation_wrapper {
    p {
      font-size: 22px;
    }
    .presentation-container {
      margin: 20px 0;
      height: 700px;
    }
  }
}

.q-btn__wrapper:before {
  box-shadow: none;
}
@media (max-width: 1024px) {
  .presentation {
    .presentation_wrapper {
      p {
        font-size: 18px;
      }
      .presentation-container {
        height: 530px;
      }
    }
  }
}
@media (max-width: 500px) {
  .presentation {
    margin-top: 45px;
    .presentation_wrapper {
      p {
        font-size: 14px;
      }
      .presentation-container {
        height: 400px;
      }
    }
  }
}
</style>
