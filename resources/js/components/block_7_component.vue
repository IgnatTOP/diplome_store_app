<template>
  <div class="block_7" v-on:mousemove="moveDiv">
      <div class="background_block">
        <div class="text_block_7">
          <div class="text">
            <p class="prepod">ПРЕПОДАВАТЕЛИ</p>
          <div class="fffff" v-for="prepod in prepods">
            <p @click="show(prepod)" :style="{ fontSize: prepod.show ? '26px' : '20px', color: prepod.show ? 'black' : '#515151' }" class="prepod_name_text">{{prepod.name}}</p>
            <div class="img_block_7" :style="divStyle" v-if="prepod.show">
              <img src="../img/123213.png" class="photo">
              <p class="maria">МАРИЯ ДОБРЫНИНА</p>
              <div class="text_block_img">
                  {{prepod.text}}
              </div>
            </div>
          </div>
          </div>
        </div>
          <img src="../img/layers-1.png" class="eclipse1">
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
            currentPrepod: null,
            prepods: [
                {
                    name: 'Математика',
                    text: '1',
                    show: true,
                },
                {
                    name: 'Русский язык',
                    text: '2',
                    show: false,
                },
                {
                    name: 'Обществознание',
                    text: '3',
                    show: false,
                },
                {
                    name: 'Информатика',
                    text: '4',
                    show: false,
                },
                {
                    name: 'Экономика',
                    text: '5',
                    show: false,
                },
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
        },
        show(prepod) {
            if (prepod.show && this.selectedPrepodIndex === 0) {
                // Скрыть выделенный предмет
                prepod.show = false;
                return;
            }

            // Скрыть другие преподаватели и сделать текущий видимым
            this.prepods.forEach((item) => (item.show = false));
            prepod.show = true;

            // Обновить индекс выделенного предмета
            this.selectedPrepodIndex = this.prepods.findIndex((item) => item.name === prepod.name);
        },
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
.prepod_name_text{
    cursor: pointer;
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
    left: 662px;
    top: 36px;
    right: 0;
    position: absolute;
    font-weight: 400;
    font-size: 18px;
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
