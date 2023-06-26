<template>
  <div class="block_8">
        <p class="form_text_title">Оставь заявку на консультацию и начни обучение!</p>

    <div class="block_form_container">
      <div class="block_form">
          <div class="card_form">
              <div class="input">
                  <form @submit.prevent="onSubmit" class="form_order">
                          <Transition name="slide-fade">
                          <p v-if="phoneError" class="help-block">{{ phoneError }}</p>
                          <p v-if="serverError" class="help-block">{{ serverError }}</p>
                          <p v-if="success" class="help-block_success">{{ success }}</p>
                          </Transition>
                      <input placeholder="Ваше ФИО" v-model="FIO">
                      <input placeholder="Ваш номер телефона" v-model="number" @blur="validatePhone">
                      <input placeholder="Ваш Email" type="email" v-model="email">
                      <input id="hight" placeholder="Ваш вопрос/желаемое направление" v-model="coment">
                      <Recaptcha :site-key="siteKey" @verify="onRecaptchaVerify"></Recaptcha>
                      <button class="button_form" type="submit">Оставить заявку</button>
                  </form>
                  <div class="contact">
                      <p class="number_text_form">Телефон: +7 (495) 249-52-49</p>
                      <p class="adres_form">Адрес: 125993, Москва,
                          Ленинградский проспект, 49</p>
                  </div>
              </div>

          </div>

      </div>
      <div class="social">
        <p>Мы в социальных сетях</p>
        <div class="image_social">
            <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru">  <img src="../img/whatsapp1.png" class="img_social"></a>
            <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru">    <img src="../img/telegram(1)1.svg" class="img_social"></a>
            <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru">  <img src="../img/youtube1.svg" class="img_social"></a>
            <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru">   <img src="../img/vk1.svg" class="img_social"></a>
            <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru">  <img src="../img/Vector.svg" class="img_social"></a>
          <div class="block_8_text_text">
            <div class="block_text_8">
              <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru"> <p>ЕГЭ</p></a>
              <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru"> <p>ОГЭ</p></a>
              <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru"> <p>Подготовка к вступительным</p></a>
              <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru"> <p>Подготовка к олимпидадам</p></a>

            </div>
            <div class="block_text_8">
                <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru"> <p>Подготовка к вступительным в магистратуру</p></a>
                <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru"> <p>Подготовка к вступительным в аспирантуру</p></a>
                <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru"> <p>Подготовка к вступительным в лицей</p></a>
                <a href="http://www.fa.ru/Pages/Home.aspx" class="fa_ru"> <p>Подготовка для иностранных поступающих</p></a>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Recaptcha from "./Recaptcha.vue";

export default {
  name: "block_8_component",
    components: {
      Recaptcha
    },
    data(){
        return{
            coment: '',
            email: '',
            FIO: '',
            number: '',
            siteKey: '6Lf_aMsmAAAAAEl0-oLymtq7iFG-WFqVj94YLhM3',
            phoneError: '',
            serverError: '',
            testnumber: false,
            serverErrorback: '',
            success: '',
        }
    },
    created() {
            this.rrr();
    },

    methods: {
        validatePhone() {
            let re = /^\+?\d{10,14}$/;
            if (!re.test(this.number)) {
                this.phoneError = 'Некорректный формат номера';
                this.testnumber = false;
            } else {
                this.phoneError = '';
                this.testnumber = true;
            }
        },
      rrr(){
          const $script = document.createElement('script')
          $script.async = true
          $script.defer = true
          $script.src = 'https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit'
          document.head.appendChild($script)

      },
        onSubmit() {
            console.log(this.recaptchaResponse)
            // Handle form submission
            if (this.testnumber === true){
                this.axios.post('/api/orders', {
                    'FIO': this.FIO,
                    'email': this.email,
                    'coment': this.coment,
                    'number': this.number,
                    recaptcha_response: this.recaptchaResponse

                })
                    .then(response => {
                        console.log(response.data)
                        this.serverError = ''
                        this.success = 'Спасибо за заявку мы обязательно вам ответим'
                        this.FIO = ''
                        this.email = ''
                        this.coment = ''
                        this.number = ''
                    })
                    .catch(error => {
                        console.log(error.response.data)
                        this.serverErrorback = error.response.data.error;
                        console.log(this.serverErrorback)
                        if (this.serverErrorback === "reCAPTCHA test failed"){
                            this.serverError = 'Нужно пройти капчу'
                        }
                    })
            }

        },
        onRecaptchaVerify(response) {
            // Handle reCAPTCHA verification
            this.recaptchaResponse = response
        },
    }
}
</script>

<style scoped>
.slide-fade-enter-active {
    transition: all .3s ease;
}
.slide-fade-leave-active {
    transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
    /* .slide-fade-leave-active до версии 2.1.8 */ {
    transform: translateX(10px);
    opacity: 0;
}
.help-block{
    background-color: #FEE;
    border: 1px solid #EDD;
    color: #a33d3d;
    border-radius: 10px;
    width: 80%;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.help-block_success{
    background-color: #EFE;
    border: 1px solid #DED;
    color: #4aaf4a;
    border-radius: 10px;
    width: 80%;
    height: 40px;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.crasota{
    background: #D0A0FF;
    border-radius: 10px;
    transform: rotate(3.14deg);
}
#hight{
    height: 120px;
    margin: 14px 0;
}
.card_form{
    position: absolute;
    z-index: 99999;
    width: 479px;
    margin: auto;
    left: -601px;
    right: 0;
    text-align: center;
}
.fa_ru{
    color: black;
    border: none;
    text-decoration: none;
}
input{
    background: white;
    border-radius: 20px;
    height: 40px;
    border: none;
    text-align: center;
    width: 90%;
    margin: 10px 0 0 0;
}
.block_form{
    margin: 410px 0;
}
.button_form{
    width: 262px;
    height: 58px;
    font-family: Inter;
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 24px;
    text-align: center;
    color: #060606;
    border: none;
    background: white;
    border-radius: 20px;
    margin: 10px 0 10px 0;
}
.input{
    position: absolute;
    z-index: -9;
    width: min-content;
    margin: -41px -43px;
    height: inherit;
    background: #D0A0FF;
    border-radius: 10px;
    transform: rotate(3.14deg);
}
.form_order{
    display: flex;
    width: 396px;
    background: #DFBFFF;
    border-radius: 10px;
    flex-direction: column;
    transform: rotate(-3.14deg);
    align-items: center;
    margin: 35px;
}
.form_text_title{
    font-family: Inter,sans-serif;
    font-weight: 800;
    font-size: 35px;
    text-align: center;
    width: 600px;
    margin: -185px auto;
    letter-spacing: -.03em;
}
.img_social{
  margin: 0 10px;
  width: 50px;
}
.block_8_text_text{
  display: flex;
  text-align: left;
  font-size: 16px;
}
.social{
    position: relative;
    z-index: 99999;
    width: 479px;
    margin: -290px auto 0;
    left: 339px;
    right: 0;
    text-align: center;
}
.block_8{
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-size: 18px;
    margin: 0 0 291px;
}
.block_text_8{
}
.contact{
    margin: 0 0 0 10px;
    position: inherit;
    text-align: left;
    font-weight: 600;
    transform: rotate(-3.14deg);
}
.number_text_form{
    margin: 30px 0 0 0;
}
.adres_form{
    margin: 5px 0 0 0;
    color: #4D4D4D;
}
@media (max-width: 600px) {
    .form_text_title{
        font-size: 35px;
        text-align: center;
        width: 95%;
        margin: -94px auto;
    }
    .form_order{
        width: 310px;
    }
    .input{
        margin: -23px -193px;
    }
    .block_form_container{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .block_form{
        margin: 143px 0 0;
    }
    .card_form{
        position: inherit;
        width: 95%;
        margin: auto;
    }
    .block_8{
        margin: 0 0 46px;
    }
    .social{
        width: 95%;
        margin: 640px 0 0;
        position: inherit;
    }
}

</style>
