<template>
    <div class="poput_container">
        <div class="card_form">
            <div class="poput_header">
                <p class="name_poput">Форма</p>
                <img src="../img/Vector19.svg" class="close_poput" @click="close_poput">
            </div>
            <div class="input">
                <input placeholder="Ваше ФИО" v-model="FIO">
                <input placeholder="Ваш Email" v-model="email">
                <input id="hight" placeholder="Ваш вопрос/желаемое направление" v-model="coment">
                <button class="button_form" @click="storeOrder">Оставить заявку</button>
            </div>
        </div>
    </div>

</template>
<script>
export default {
    name: 'form_poput',
    data(){
        return{
            coment: '',
            email: '',
            FIO: '',
        }
    },
    methods: {
        close_poput(){
            this.$emit('close_poput');
        },
        storeOrder(){
            this.axios.post('/api/orders', {
                'FIO': this.FIO,
                'email': this.email,
                'coment': this.coment,
            })

        }
    }
}
</script>

<style scoped>
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
    height: 400px;
    background: #F1A33F;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    border-radius: 15px;
    right: 0;
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
    border-radius: 20px;
}
</style>