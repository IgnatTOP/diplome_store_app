<template>
  <div class="block_1" ref="component1">
    <p class="title">Подготовка с Финансовым университетом!</p>
    <div class="block_container">
        <div class="img_container_block_1">
          <img src="../img/Finuniver_mainbuilding.png" class="img_block_1">
        </div>
      <div class="text_container_block_1">
          <p id="text_title">Финансовый университет сегодня – один из ведущих вузов страны, реализующий 18 направлений подготовки бакалавров, 19 направлений подготовки магистров, 5 специальностей среднего профессионального образования. В 27 филиалах реализуются 6 направлений подготовки бакалавров, 4 направления подготовки магистров, 8 специальностей среднего профессионального образования. </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "block_1_component"
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
.title{
  font-weight: 700;
  font-size: 54px;
  max-width: 850px;
  margin: 60px auto;
}
.block_container{
  display: flex;
  align-items: center;
  width: 90%;
  max-width: 1300px;
  height: 460px;
  margin: 0 auto;
  background: linear-gradient(98.42deg, rgba(248, 209, 159, 0.53) 4.42%, rgba(233, 208, 253, 0.74) 50.13%, rgba(168, 250, 151, 0.35) 100%);
  border-radius: 20px;
}
.block_1{
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 0 auto;
    overflow: auto
}
.img_block_1{
  width: 90%;
  max-width: 450px;
}
#text_title{
  font-family: 'Inter', sans-serif;
  font-size: 20px;
  text-align: center;
  margin: 0 10px;
}
.text_container_block_1{
  width: 60%;
}
</style>
