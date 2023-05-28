<template>
    <div class="poput_container">
        <div class="card_form">
            <div class="poput_header">
                <p class="name_poput">Форма</p>
                <img src="../img/Vector19.svg" class="close_poput" @click="close_poput">
            </div>
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
            </div>
        </div>
    </div>

</template>
<script>
import Recaptcha from './Recaptcha.vue'

export default {
    name: 'form_poput',
    components: {
        Recaptcha
    },
    data(){
        return{
            coment: '',
            email: '',
            FIO: '',
            number: '',
            siteKey: '6LeItSkmAAAAAHJlsevsK_E5Wt-6y0HPVFHIUDcn',
            phoneError: '',
            serverError: '',
            testnumber: false,
            serverErrorback: '',
            success: '',
        }
    },
    mounted(){
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
        onSubmit() {

            console.log(this.recaptchaResponse)
            // Handle form submission
            if (this.testnumber === true) {
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
                        if (this.serverErrorback === "reCAPTCHA test failed") {
                            this.serverError = 'Нужно пройти капчу'
                        }
                    })
            }
        },
        onRecaptchaVerify(response) {
            // Handle reCAPTCHA verification
            this.recaptchaResponse = response
        },
        close_poput(){
            this.$emit('close_poput');
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
    padding: 10px;
    border-radius: 10px;
    width: 80%;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.name_poput{
    margin: 10px 0;
}
.poput_header{
    font-size: 22px;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}
.close_poput{
    transform: rotate(315deg);
    width: 20px;
    cursor: pointer;
}
.poput_container{
    position: fixed;
    z-index: 99999;
    text-align: center;
    background-color: #0003;
    margin: auto;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}
#hight{
    height: 120px;
    margin: 14px 0;
}
.card_form{
    width: 396px;
    height: max-content;
    background: #F1A33F;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    border-radius: 15px;
    right: 0;
}
.form_order{
    display: flex;
    flex-direction: column;
    align-items: center;
}
input{
    background: #FFC882;
    border-radius: 20px;
    height: 40px;
    border: none;
    text-align: center;
    width: 90%;
    margin: 10px 0 0 0;
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
    background: #FFDCAF;
    cursor: pointer;
    margin: 10px 0 10px;
    border-radius: 20px;
}
</style>