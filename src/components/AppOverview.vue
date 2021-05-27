<template>
  <div class="AppOverview">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="AppOverview_content">
            <div class="title">Мобильное приложение для жильцов</div>
            <ul>
              <li>
                Открывайте подъезд, дверь, лифт, ворота или шлагбаум  используя
                смартфон или  бесконтактную карту доступа / браслет / брелок
              </li>
              <li>
                Генерируйте  в один клик и отправляйте  гостевые умные ключи
              </li>
              <li>
                Контролируйте доступ к помещению или территории на расстоянии в одном приложении
              </li>
              <li>
                Один общий электронный ключ на все доступные автоматизированные точки доступа
              </li>
              <li>
                Генерируйте  в один клик временный электронный пропуск для гостей или служб доставки.
              </li>
              <li>
                Временный пропуск обеспечивает доступ гостя через все необходимые точки
                доступа от въезда на территорию через проходную и лифт до двери пользователя.
              </li>
              <li>
                История сгенерированных активных и неактивных временных пропусков хранится
                в виде отчета у пользователя системы.
              </li>
              <li>
                Общий список сгенерированных временных пропусков активных и неактивных
                хранится в виде отчета в ПО управляющей компании.
              </li>
              <li>
                Необходимые контакты управляющей компании, а также дежурных, аварийных
                и диспетчерских служб в смартфоне на одной странице
              </li>
              <li>Оповещения: <br>
                Информирование жильцов о важных событиях в виде настраиваемых  PUSH – уведомлений на смартфон (+функция «ознакомлен»)
                Общее информирование жильцов через выведение объявлений на информационные мониторы
              </li>
              <li>
                Двусторонняя онлайн связь жильцов со службами управляющей компании
              </li>
            </ul>
            <div class="AppOverview_button-group AppOverview_button-group-column">
              <GreenButton to="/MobileApp">Ещё о приложении клиента</GreenButton>
              <div class="AppOverview_button_social-wrapper">
                <a class="AppOverview_button_social" target="_blank" href="https://apps.apple.com/ua/app/euvva/id1546451487#?platform=iphone">
                  <div>
                    <img src="../assets/icon/mac-os-logo.png" alt="">
                  </div>
                </a>
                <a target="_blank" class="AppOverview_button_social" href="https://play.google.com/store/apps/details?id=com.euvva.smartbell">
                  <div>
                    <img src="../assets/icon/google-play.png" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="AppOverview_img">
            <img src="../assets/prefooter-3.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import GreenButton from 'components/GreenButton'
export default {
  name: 'AppOverview',
  components: { GreenButton }
}
</script>

<style lang="scss">
.AppOverview {
  margin-top: 80px;
  padding: 80px 0;
  .AppOverview_content {
    ul {
      padding: 18px;
      li {
        font-size: 16px;
        line-height: 24px;
        letter-spacing: .4px;
        color: #77798C;
        margin: 10px 0;
        padding-left: 16px;
        list-style-type: none;
        position: relative;
        &:before {
          content: '';
          position: absolute;
          left: -18px;
          top: 7px;
          height: 9px;
          width: 9px;
          border-radius: 100px;
          background-color: #1c1b28;
        }
      }
    }
  }
  .AppOverview_img {
    max-width: 550px;
    margin-left: auto;
    img {
      width: 100%;
    }
  }
}
@media (max-width: 1024px) {
  .AppOverview {
    .AppOverview_img {
      max-width: none;
      margin: 0;
      padding-top: 50px;
    }
  }
}
@media (max-width: 500px) {
  .AppOverview {
    .AppOverview_content {
      ul {
        padding: 0;
        margin-top: 25px;
        li {
          font-size: 12px;
        }
      }
    }
  }
}
</style>
