<template>
  <div class="Questions">
    <div class="title">
      Основные вопросы <br> от наших арендаторов
    </div>
    <div class="row Questions_block">
      <div class="col-md-6 col-sm-12">
        <div class="Questions_content">
<!--          <div class="title_second">-->
<!--            У Вас остались ещё вопросы?-->
<!--          </div>-->
          <div class="text_description Questions_text">
            У Вас остались  ещё вопросы?
          </div>
            <ModalForm>Задать вопрос</ModalForm>
          <div class="Questions_info" v-scroll-to="'#contact'">
            <div class="title_second">Позвоните нам</div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="Questions_wrapper">
          <q-list class="rounded-borders">
            <q-expansion-item @click="toggleClass" label="Что такое Арендный дом «Космополит»?">
              <q-card>
                <q-card-section>
                  Современные квартиры в аренду в новых жилых комплексах: <br>
                  - с удобным месторасположением<br>
                  - полностью укомплектованы мебелью и техникой<br>
                  - без комиссии<br>
                  - с удачными планировочными решениями<br>
                  - круглосуточной охраняемой парковкой и территорией<br>
                  - техническим обслуживанием и качественным сервисом во время проживания<br>
                  - прозрачными условиями договора
                </q-card-section>
              </q-card>
            </q-expansion-item>

            <q-expansion-item @click="toggleClass" label="Входят ли коммунальные услуги в стоимость аренды?">
              <q-card>
                <q-card-section>
                  Коммунальные платежи оплачиваются отдельно по счетчикам: газ, вода, электроэнергия.
                  Также в стоимость коммунальных услуг включена оплата управляющей компании за
                  обслуживание дома и придомовой территории.
                </q-card-section>
              </q-card>
            </q-expansion-item>

            <q-expansion-item @click="toggleClass" label="Что входит в стоимость аренды?">
              <q-card>
                <q-card-section>
                  - кабельное ТВ и Интернет (скорость 100мБит) <br>
                  - парковка одного легкового автомобиля на квартиру<br>
                  - услуги постирочной.
                </q-card-section>
              </q-card>
            </q-expansion-item>

            <q-expansion-item @click="toggleClass" label="Какой минимальный срок аренды?">
              <q-card>
                <q-card-section>
                  В наших домах долгосрочная аренда от 3 месяцев. Проживание от 1 до 3 месяцев возможно
                  при условии, что стоимость аренды в месяц будет выше.
                </q-card-section>
              </q-card>
            </q-expansion-item>

            <q-expansion-item @click="toggleClass" label="Возможно ли зарегистрировать меня и проживающих со мной?">
              <q-card>
                <q-card-section>
                  Арендный дом «Космополит» предоставляет временную регистрацию по месту пребывания
                  для всех граждан РФ. Сотрудники компании помогут Вам подготовить документы.
                </q-card-section>
              </q-card>
            </q-expansion-item>

            <q-expansion-item @click="toggleClass" label="Разрешено проживание с домашними животными?">
              <q-card>
                <q-card-section>
                  В арендном доме возможно проживание с мелкими домашними животными за отдельную
                  плату. Любой ущерб, причиненный животными, подлежит возмещению Арендатором
                  Арендодателю из суммы залога.
                </q-card-section>
              </q-card>
            </q-expansion-item>

            <q-expansion-item @click="toggleClass" label="Что входит в комплектацию квартиры кроме мебели и бытовой техники?">
              <q-card>
                <q-card-section>
                  В комплектацию каждой квартиры входят постельное белье и постельные принадлежности
                  (подушки, одеяла, матрасы), полотенца, столовая посуда и посуда для готовки, а также
                  предметы быта (гладильная доска, сушилка для белья, урны и т.д.).
                </q-card-section>
              </q-card>
            </q-expansion-item>
            <q-expansion-item @click="toggleClass" label="Какие оплаты необходимо сделать при заселении в квартиру?">
              <q-card>
                <q-card-section>
                  Перед заселением необходимо оплатить две суммы: за первый месяц аренды и залог за
                  имущество.
                </q-card-section>
              </q-card>
            </q-expansion-item>
          </q-list>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ModalForm from 'components/ModalForm/ModalForm'
import Vue from 'vue'
import VueScrollTo from 'vue-scrollto'

Vue.use(VueScrollTo)
export default {
  name: 'Questions',
  components: { ModalForm },
  props: {
    medium: {
      type: Boolean
    }
  },
  data () {
    return {
      isActive: false
    }
  },
  methods: {
    toggleClass (event) {
      event.target.classList.toggle('is-active')
    }
  }
}
</script>

<style lang="scss">
.Questions {
  .q-item__label {
    font-size: 28px;
    line-height: 36px;
    color: #77798C;
    cursor: pointer;
  }
  .q-card__section {
    color: #77798C;
    font-size: 16px;
    line-height: 24px;
  }
  .q-expansion-item__toggle-icon {
    font-size: 38px !important;
  }
  .q-hoverable:hover {
    background: #fff !important;
  }
  .q-expansion-item {
    margin-bottom: 20px;
  }
}
.q-item__label.is-active {
  color: #000;
}
.q-expansion-item__toggle-icon--rotated {
  color: #ffb700;
}
.Questions {
  .Questions_block {
    margin: 80px 0 0 0;
    .Questions_content {
      .title_second {
        margin-bottom: 10px;
      }
      .Questions_text {
        margin-bottom: 64px;
      }
      .Questions_info {
        margin-top: 64px;
        cursor: pointer;
        transition: all 0.3s;
        &:hover {
          color: #ffb700;
        }
      }
      .q-card {
        text-align: center;
        .q-card__section {
          text-align: center;
        }
      }
    }
  }
}
@media (max-width: 1024px) {
  .Questions {
    .title {
      text-align: left;
    }
    .Questions_block {
      margin: 10px 0 0 0;
      .Questions_content {
        .title_second {
        }
        .Questions_text {
          margin-bottom: 25px;
        }
        .Questions_info {
          margin: 35px 0;
          padding-left: 10px;
        }
        .q-card {
          .q-card__section {
          }
        }
      }
    }
  }
}
@media (max-width: 500px) {
  .Questions {
    .q-item__label {
      font-size: 16px;
    }
    .q-card__section {
      padding: 5px;
    }
    .q-expansion-item {
      .q-item {
        padding: 8px 5px;
      }
    }
    .q-expansion-item__toggle-icon {
      font-size: 28px !important;
    }
  }
}
</style>
