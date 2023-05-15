<template>
  <div class="block_7" v-on:mousemove="moveDiv">
      <div class="background_block">
        <div class="text_block_7">
          <div class="text">
<!--            <p class="prepod">ПРЕПОДАВАТЕЛИ</p>-->
<!--            <p class="matem">Математика</p>-->
<!--            <p>Русский язык</p>-->
<!--            <p>Обществознание </p>-->
<!--            <p>Информатика</p>-->
<!--            <p>Экономика</p>-->
          </div>
        <div class="img_block_7"  :style="divStyle">
<!--          <img src="../img/123213.png" class="photo">-->
<!--          <p class="maria">МАРИЯ ДОБРЫНИНА</p>-->
<!--          <div class="text_block_img">-->
<!--            <p class="p">Образование</p>-->
<!--            <p class="p">Статистика</p>-->
<!--            <p class="p">Что то от преподователей</p>-->
<!--            <p class="p">Текст</p>-->
<!--            <p class="p">Текст</p>-->
<!--          </div>-->
        </div>
        </div>
          <img src="../img/layers-1.png" class="eclipse1">
<!--          <img src="../img/Ellipse2.svg" class="eclipse2">-->
<!--          <img src="../img/Ellipse3.svg" class="eclipse3">-->
<!--          <img src="../img/Ellipse4.svg" class="eclipse4">-->
      </div>
  </div>
</template>

<script>
export default {
  name: "block_7_component",
    data() {
        return {
            mouseX: 0,
            mouseY: 0,
            maxOffset: 30,
            prepod: [
                {

                }
            ]
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
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Space+Grotesk:wght@300;400;500;600;700&display=swap');
.background_block{
  background: linear-gradient(180deg, #D0A0FF 17.65%, rgba(214, 171, 255, 0.800263) 30.01%, rgba(234, 208, 255, 0.08) 84.74%);
  height: 900px;
}
.prepod{
  font-family: 'Space Grotesk', sans-serif;
  font-size: 36px;
  font-weight: 700;
  color: black;;
}
.p{
  margin: 0;
  text-align: left;
}
.maria{
  font-weight: 800;
  margin: 10px 0 5px;
}
.text{
    position: absolute;
    font-family: Inter,sans-serif;
    font-weight: 500;
    left: 250px;
    font-size: 22px;
    color: #515151;
    text-align: left;
}
.photo{
  width: 200px;
}

.img_block_7{
    color: #515151;
    width: 200px;
    right: 250px;
    position: absolute;
}
.matem{
  color: black;
}
.text_block_7{
    display: flex;
    font-family: Inter,sans-serif;
    font-weight: 400;
    font-size: 18px;
    position: absolute;
    margin: 50px auto 0;
    color: #515151;
    left: 0;
    right: 0;
    justify-content: center;
}
.eclipse1{
  width: 100%;
  margin: 430px 0 0 0;
}
</style>
