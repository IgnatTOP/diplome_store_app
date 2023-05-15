<template>
  <div class="block_2">
    <p class="name_block_2">курсы</p>
    <div class="card_container">
      <div class="card_height">
          <div class="card" id="card_1">
            <p class="card_name">9 класс</p>
            <div class="block_1">
              <p class="text_card">поступление в
                лицей</p>
            </div>
            <div class="block_1">
              <p class="text_card">сдача
                огэ</p>
            </div>
          </div>
        <div class="card" id="card_2">
          <p class="card_name">10 класс</p>
          <div class="block_1" id="viol">
            <p class="text_card">подготовка к олимпиадам</p>
          </div>
          <div class="block_1" id="viol1">
            <p class="text_card">сдача егэ</p>
          </div>
        </div>
        <div class="card" id="card_3">
          <p class="card_name">11 класс</p>
          <div class="block_1" id="green">
            <p class="text_card">подготовка к олимпиадам</p>
          </div>
          <div class="block_1" id="green1">
            <p class="text_card">сдача егэ</p>
          </div>
        </div>
      </div>
      <div class="card_height-">
        <div class="card-" id="card-1">
          <p class="card_name1" id="card_name-big">спо</p>
          <div class="block_1">
            <p class="text_card">поступление в</p>
            <p class="text_card2">вуз</p>
          </div>
        </div>
        <div class="card-" id="card-2">
          <p class="card_name1" id="card_name-medium">студенты</p>
          <div class="block_1" id="viol3">
            <p class="text_card">обучение на</p>
            <p class="text_card2">магистра</p>
          </div>
      </div>
        <div class="card-" id="card-3">
          <p class="card_name1">иностранные студенты</p>
          <div class="block_1" id="green3">
            <p class="text_card">поступление в</p>
            <p class="text_card2">вуз</p>
          </div>
      </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "block_2_comlonent"
}
</script>

<style scoped>
@font-face {
  font-family: 'SpriteGraffiti';
  src: url(../font/SpriteGraffiti-Shadow.otf);
}
.name_block_2{
  font-family: 'SpriteGraffiti';
  font-size: 150px;
  margin: 20px 0;
}
.card_name{
  font-size: 73px;
  margin: 40px 0 10px 0;
  font-family: 'SpriteGraffiti';
}
#card_name-big{
  font-size: 93px;
}
#viol, #viol1, #viol3{
  border: 7px solid #B285D6;
}
#green, #green1, #green3{
  border: 7px solid #A4EB95;
}
#card_name-medium{
  font-size: 57px;
  margin: 40px 0 10px 0;
  height: 70px;
}
.card_height{
  display: flex;
  justify-content: center;
}
.card_name1{
  height: 90px;
  font-size: 45px;
  margin: 20px 0 10px 0;
  font-family: 'SpriteGraffiti';
}
.card_height-{
  display: flex;
  justify-content: center;
}
.text_card2{
  font-size: 40px;
  margin: 0 0;
}
.text_card{
  margin: 0 0;
}
.card{
  border-radius: 20px;
  width: 300px;
  height: 450px;
  margin: 0 20px 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
#card-1{
  background: #F8D19F;
}
#card-2{
  background: #ECD4FF;
}
#card-3{
  background: #D8FDD0;
}
.card-{
  border-radius: 20px;
  width: 300px;
  height: 270px;
  margin: 0 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.block_1{
  font-family: 'SpriteGraffiti';
  font-size: 25px;
  width: 250px;
  height: 80px;
  background: white;
  border: 7px solid #BC9665;
  margin: 10px 0;
  border-radius: 30px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.25);
}
#card_1{
  background: #F8D19F;
}
#card_2{
  background: #ECD4FF;
}
#card_3{
  background: #D8FDD0;
}
</style>