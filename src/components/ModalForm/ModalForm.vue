<template>
  <div>
  <GreenButton label="Medium" @click.native="medium = true"><slot></slot></GreenButton>
  <q-dialog v-model="medium">
    <q-card class="text-center" style="width: 700px; max-width: 80vw;">
      <q-card-section>
        <div class="title_third">
          Оставьте Заявку
        </div>
        <div class="text">
          Мы свяжемся с Вами в ближайшее время
        </div>
      </q-card-section>

      <q-card-section class="q-pt-none">
        <q-form
          @submit="onSubmit"
          class="q-gutter-md q-pa-md"
          style="max-width: 500px; margin: 0 auto;"
        >
          <q-input
            filled
            v-model="name"
            label="Имя"
            hint="Имя и фамилия"
            lazy-rules
            :rules="[ val => val && val.length > 0 || 'Пожалуйста введите имя']"
          ></q-input>

          <q-input
            filled
            type="number"
            v-model="phone"
            label="Телефон"
            lazy-rules
            :rules="[
          val => val !== null && val !== '' || 'Пожалуйста введите номер телефона',
          val => val && val.length > 0 && val && val.length > 8 || 'Пожалуйста введите правильный номер телефона'
        ]"
          ></q-input>
          <div>
            <q-btn v-close-popup label="Оставить заявку" type="submit" style="background: #ffb700; width: 200px;"></q-btn>
          </div>
        </q-form>
      </q-card-section>

<!--      <q-card-actions align="right" class="bg-white text-teal">-->
<!--        <q-btn flat label="OK" v-close-popup></q-btn>-->
<!--      </q-card-actions>-->
    </q-card>
  </q-dialog>
  </div>
</template>

<script>

import GreenButton from 'components/GreenButton'
import axios from 'axios'
export default {
  name: 'ModalForm',
  components: { GreenButton },
  data () {
    return {
      name: '',
      phone: '',
      medium: false
    }
  },
  methods: {
    onSubmit () {
      const name = this.name.trim()
      const phone = this.phone.trim()
      if (name.length > 1 && phone.length > 8) {
        axios.get('BackCall.php', {
          params: { name, phone }
        })
        this.$q.notify({
          color: 'green-4',
          textColor: 'white',
          icon: 'cloud_done',
          message: 'Заявка отправленна'
        })
      } else {
        this.$q.notify({
          color: 'red-5',
          textColor: 'white',
          icon: 'warning',
          message: 'Заявка не отправлена, попробуйте снова'
        })
      }
    }
  }
}
</script>

<style scoped>

</style>
