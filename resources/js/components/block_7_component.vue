<template>
  <div class="block_7" v-on:mousemove="moveDiv">
      <div class="background_block">
        <div class="text_block_7">
          <div class="text">
            <p class="prepod">ПРЕПОДАВАТЕЛИ</p>
          <div class="fffff" v-for="subject in subjects" :key="subject.id">
            <p class="prepod_name_text" @click="showTeacher(subject.id, subject)" :style="{ fontSize: subject === selectedSubject ? '32px' : '24px', color: subject === selectedSubject ? 'black' : 'rgb(81, 81, 81)'}">{{subject.title}}</p>
            <div class="img_block_7" :style="divStyle" v-if="currentTeacher">
              <img :src="'storage/' + currentTeacher.preview_image" class="photo">
              <p class="maria">{{ currentTeacher.name }}</p>
              <p class="maria">{{ currentTeacher.content }}</p>
              <div class="text_block_img"></div>
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
            subjects: [],
            teachers: [],
            currentTeacher: null,
            selectedSubject: null
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
        },
    },
    mounted(){
        this.getProductsFilter();
        this.getProducts();
    },
    methods: {
        selectSubject(subject) {
            this.selectedSubject = subject;
        },
      showTeacher(subjectId, subject) {
            this.currentTeacher = this.teachers.find((teacher) => teacher.predmet_id === subjectId);
            this.selectSubject(subject);
        },
        getProductsFilter() {
            this.axios.get('/api/prepods/filters')
                .then(res => {
                    this.subjects = res.data;
                    console.log(this.subjects)
                })
        },
        getProducts() {
            this.axios.get('/api/prepods')
                .then(res => {
                    this.teachers = res.data;
                    console.log(this.teachers)
                })
        },
        moveDiv(event) {
            // обновляем положение мыши
            this.mouseX = event.clientX;
            this.mouseY = event.clientY;
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
    right: 0;
    margin: auto;
    color: #515151;
    text-align: left;
}

.photo{
  width: 200px;
    border-radius: 10px;
}

.img_block_7{
    color: #515151;
    width: 200px;
    left: 490px;
    margin: auto;
    top: 36px;
    right: 0;
    position: absolute;
    font-weight: 400;
    font-size: 18px;
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
.fffff{
}
@media (max-width: 600px) {
    .img_block_7{
        display: flex;
        margin: 100px auto 0;
        flex-direction: column;
        align-items: center;
        position: inherit;
    }
    .prepod{
        font-size: 36px;
    }
    .text{
        left: 5px;
    }
}
</style>
