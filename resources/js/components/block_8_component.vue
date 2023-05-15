<template>
  <div class="block_8">
        <p class="form_text_title">Оставь заявку на консультацию и начни обучение!</p>

    <div class="block_form_container">
      <div class="block_form">
        <div class="form">
          <input placeholder="Ваше ФИО">
          <input placeholder="Ваш Email">
          <input placeholder="Номер телефона">
          <input placeholder="Ваш вопрос">
          <button class="button_form">Оставить заявку</button>
        </div>
        <div class="contact"></div>
      </div>
      <div class="social">
        <p>Мы в социальных сетях</p>
        <div class="image_social">
          <img src="../img/whatsapp1.png" class="img_social">
          <img src="../img/whatsapp1.png" class="img_social">
          <img src="../img/whatsapp1.png" class="img_social">
          <img src="../img/whatsapp1.png" class="img_social">
          <img src="../img/whatsapp1.png" class="img_social">
          <div class="block_8_text_text">
            <div class="block_text_8">
              <p>ЕГЭ</p>
              <p>ОГЭ</p>
              <p>Подготовка к вступительным</p>
              <p>Подготовка к олимпидадам</p>

            </div>
            <div class="block_text_8">
              <p>подготовка к вступитленым магистру</p>
              <p>подготовка к вступитленым магистру</p>
              <p>подготовка к вступитленым магистру</p>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "block_8_component"
}
</script>

<style scoped>
.form_text_title{
  font-family: 'Inter', sans-serif;
  font-weight: 800;
  font-size: 35px;
  text-align: center;
  width: 600px;
  margin: -150px auto;
  letter-spacing: -0.03em;
}
.img_social{
  margin: 0 10px;
  width: 50px;
}
input{
  background: none;
  border: none;
  border-bottom: 1px solid black;
  width: 90%;
  margin: 15px 0;
}
.block_8_text_text{
  display: flex;
  text-align: left;
  font-size: 16px;
}
.button_form{
  width: 150px;
  height: 50px;
  background: #FFFFFF;
  border: none;
  border-radius: 20px;
}
.social{
  position: relative;
  z-index: 99999;
  width: 479px;
  margin: -290px auto 0 auto;
  left: 420px;
  right: 0;
  text-align: center;
}
.form{
  border-radius: 15px;
  z-index: 99999;
  background: #F1A33F;
  position: relative;
  width: 344px;
  height: 250px;
  margin: 247px auto 0 auto;
  left: -447px;
  right: 0;
  text-align: center;
}
.block_8{
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-size: 18px;
}
</style>