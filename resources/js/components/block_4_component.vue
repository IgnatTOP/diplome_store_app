<template>
  <div class="block_4" v-on:mousemove="moveDiv">
      <div class="container_block_set">
        <div class="card_block_4" id="card1_block_4">
          <img src="../img/Peace_R-Angle_A51.svg" class="hand_img" :style="divStyle">
          <img src="../img/studying1.svg" class="studing_img">
          <p id="text_light" class="font_param">закончили курсы</p>
          <p id="text_big" class="font_param">10 000+</p>
          <p id="text_medium" class="font_param">учеников</p>
        </div>
        <div class="card_block_4" id="card2_block_4">
          <img src="../img/image2.png" class="image2_img">
        </div>
        <div class="card_block_4" id="card3_block_4">
          <p class="font_param" id="text_2000">2000+</p>
          <p class="font_param" id="post_fin">поступили в Финашку</p>
          <p class="font_param" id="post_fin2">Финашку</p>
          <img src="../img/school1.svg" class="school_img">
        </div>
        <div class="card_block_4" id="card4_block_4">
          <img src="../img/graduation-hat1.svg" class="graduation_img">
          <p class="font_param" id="text_magistr">Магистратура</p>
          <p class="font_param" id="text_ech">учеников</p>
          <p class="font_param" id="text_603">603</p>
        </div>
        <div class="card_block_4" id="card5_block_4">
          <img src="../img/Thumbs_Up_or_Down_L-Angle_B31.svg" class="thumbs_img" :style="divStyle">
          <img src="../img/image1.png" class="image1_img">
        </div>
      </div>
  </div>
</template>

<script>
export default {
  name: "block_4_component",
    data() {
        return {
            mouseX: 0,
            mouseY: 0,
            maxOffset: 20,
        };
    },
    computed: {
        divStyle() {
            const offsetX = (this.mouseX / window.innerWidth - 0.5) * 2 * this.maxOffset;
            const offsetY = (this.mouseY / window.innerHeight - 0.5) * 2 * this.maxOffset;

            return {
                transition: 'transform 0.3s ease-out',
                transform: `translate3d(${offsetX}px, ${offsetY}px, 0)`,
            };
        }
    },
    methods: {
        moveDiv(event) {
            // обновляем положение мыши
            this.mouseX = event.clientX;
            this.mouseY = event.clientY;
        }
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
#text_light{
  font-size: 20px;
  margin: 0 20px;
}
.thumbs_img{
  position: absolute;
  width: 190px;
  margin: 95px 45px;
}
.hand_img{
  z-index: -1;
  margin: -130px -187px;
  position: absolute;
}
#post_fin{
  margin: 0 20px;
  text-align: right;
}
#text_magistr{
  font-size: 24px;
  text-align: center;
  margin: -14px 0;
}
#text_ech{
  margin: 10px 35px;
}
#text_603{
  font-size: 40px;
  margin: -30px 121px;
}
#text_2000{
  font-size: 40px;
  margin: 10px 20px 0;
}
#post_fin2{
  margin: 0 20px;
  font-size: 20px;
  text-align: right;
}
.font_param{
  font-family: 'Inter', sans-serif;
  font-weight: 800;
  text-align: left;
  color: black;
}
#text_big{
  font-size: 50px;
  margin: 0 20px;
}
#text_medium{
  font-size: 30px;
  margin: 0 107px;
}
.school_img{
  margin: -30px 20px;
  width: 100px;
  display: flex;
}
.graduation_img{
  width: 100px;
}
.image2_img{
  display: flex;
  width: 90%;
  margin: 12px 13px;
}
.image1_img{
  width: 80%;
  margin: 8px 10px;
}
.studing_img{
  width: 177px;
  margin: 25px 0 0 0;
}
.block_4{

  margin: 100px auto 0 auto;
  left: 0;
  right: 0;
  text-align: center;
  position: absolute;
}
.card_block_4{
  margin: 0 auto 0 auto;
  left: -496px;
  right: 0;
  text-align: center;
  position: absolute;
  width: 300px;
  height: 362px;
  background: #ECD5FF;
  border-radius: 20px;
}
#card2_block_4{
  margin: 0 auto 0 auto;
  left: 82px;
  right: 0;
  text-align: center;
  height: 170px;
  width: 243px;
}
#card3_block_4{
  margin: 184px auto 0 auto;
  left: 106px;
  right: 0;
  text-align: center;
  height: 178px;
  width: 269px;
}
#card4_block_4{
  margin: 0 auto 0 auto;
  left: 592px;
  right: 0;
  /* bottom: 267px; */
  text-align: center;
  height: 170px;
  width: 240px;
}
#card5_block_4{
  margin: 185px auto 0 auto;
  left: 619px;
  right: 0;
  /* bottom: 267px; */
  text-align: center;
  height: 178px;
  width: 204px;
}
</style>
