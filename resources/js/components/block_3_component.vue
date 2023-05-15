<template>
  <div class="block_3" v-on:mousemove="moveDiv">
      <div class="block_container_1">
        <img src="../img/Group2.svg" class="minus_svg" :style="divStyle">
        <img src="../img/Group2.svg" class="minus_svg2" :style="divStyle">
        <img src="../img/Group2.svg" class="minus_svg3" :style="divStyle">
          <p class="text_container_1">Минусы самостоятельной подготовки</p>
        <p class="text_container_2">- Нехватка контроля</p>
        <p class="text_container_2">- Бессвязность получаемой</p>
        <p class="text_container_2">информацией</p>
        <p class="text_container_2">- Отсутствие мотивации</p>
      </div>
    <div class="block_container_2">
      <img src="../img/Group3.svg" class="plus_svg" :style="divStyle">
      <img src="../img/Group3.svg" class="plus_svg2" :style="divStyle">
      <img src="../img/Group3.svg" class="plus_svg3" :style="divStyle">
        <p class="text_container_1">Вы можете положиться на нас:</p>
      <p class="text_container_2">+ Педагоги – профессионалы своего дела</p>
      <p class="text_container_2">+ Постоянная поддержка от наставников</p>
      <p class="text_container_2">+ Контроль учебного процесса</p>
      <p class="text_container_2">+ Помощь в определении своей будущей</p>
      <p class="text_container_2">профессии</p>
      <p class="text_container_2">+ Авторские учебные материалы</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "block_3_component",
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
.block_3{
  height: 1000px;
}
.minus_svg{
  position: absolute;
  right: 667px;
  bottom: 232px;
  rotate: -20deg;
}
.minus_svg2{
  position: absolute;
  right: 17px;
  bottom: 321px;
  width: 180px;
  rotate: 32deg;
}
.minus_svg3{
  position: absolute;
  right: 450px;
  bottom: -142px;
  width: 160px;
  rotate: 43deg;
}
.plus_svg{
  position: absolute;
  right: 754px;
  bottom: 185px;
  width: 151px;
  rotate: 55deg;
}
.plus_svg2{
  position: absolute;
  right: -14px;
  bottom: 321px;
  width: 161px;
}
.plus_svg3{
  position: absolute;
  right: 157px;
  bottom: -69px;
  width: 110px;
  rotate: 14deg;
}
.text_container_1{
  margin: 30px 0 5px;
  font-weight: 700;
  font-size: 45px;
}
.text_container_2{
  text-align: left;
  margin: 0 20px;
  font-weight: 700;
  font-size: 32px;
}
.block_container_1{
  position: absolute;
  width: 798px;
  height: 360px;
  margin: 200px auto 0 auto;
  left: 0;
  right: 250px;
  text-align: center;

  background: linear-gradient(116.78deg, #D8FDD0 49.74%, rgba(216, 253, 208, 0) 124.71%);
  border-width: 0px 0px 12px 12px;
  border-style: solid;
  border-color: #BADAB3;
  filter: drop-shadow(-10px 10px 23px rgba(0, 0, 0, 0.15));
  border-radius: 50px;
  transform: rotate(12deg);
}
.block_container_2{
  position: absolute;
  width: 800px;
  height: 370px;
  margin: 570px auto 0 auto;
  left: 300px;
  right: 0;
  text-align: center;
  background: #D8FDD0;
  border-width: 0px 12px 12px 0px;
  border-style: solid;
  border-color: #BADAB3;
  box-shadow: 10px 10px 23px rgba(0, 0, 0, 0.15);
  border-radius: 50px;
  transform: rotate(-12deg);
}
</style>
