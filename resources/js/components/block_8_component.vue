<template>
  <div class="block_8">
        <p class="form_text_title">Оставь заявку на консультацию и начни обучение!</p>

    <div class="block_form_container">
      <div class="block_form">
          <div class="card_form">
              <div class="input">
                  <input placeholder="Ваше ФИО">
                  <input placeholder="Ваш Email">
                  <input id="hight" placeholder="Ваш вопрос/желаемое направление">
                  <button class="button_form">Оставить заявку</button>
              </div>
          </div>
        <div class="contact"></div>
      </div>
      <div class="social">
        <p>Мы в социальных сетях</p>
        <div class="image_social">
          <img src="../img/whatsapp1.png" class="img_social">
          <img src="../img/telegram(1)1.svg" class="img_social">
          <img src="../img/youtube1.svg" class="img_social">
          <img src="../img/vk1.svg" class="img_social">
          <img src="../img/Vector.svg" class="img_social">
          <div class="block_8_text_text">
            <div class="block_text_8">
              <p>ЕГЭ</p>
              <p>ОГЭ</p>
              <p>Подготовка к вступительным</p>
              <p>Подготовка к олимпидадам</p>

            </div>
            <div class="block_text_8">
              <p>Подготовка к вступительным в магистратуру</p>
              <p>Подготовка к вступительным в аспирантуру</p>
              <p>Подготовка к вступительным в лицей</p>
              <p>Подготовка для иностранных поступающих</p>

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
#hight{
    height: 120px;
    margin: 14px 0;
}
.card_form{
    width: 396px;
    height: 325px;
    background: #F1A33F;
    margin: auto;
    position: absolute;
    /* top: 0; */
    left: 0;
    /* bottom: 0; */
    border-radius: 15px;
    right: 724px;
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
    background: #FFDCAF;
    border-radius: 20px;
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
    left: 420px;
    right: 0;
    text-align: center;
}
.block_8{
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-size: 18px;
    margin: 0 0 80px;
}
.block_text_8{
    width: 80%;
}
</style>