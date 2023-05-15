<template>
  <div class="block_5">
    <p class="name_block5">отзывы</p>
    <div class="border_block_container">
      <div class="border_block_1">
        <div class="border_block_item">
          <p>Текст</p>
        </div>
      </div>
      <div class="border_block_1" id="block_2">
        <div class="border_block_item">
          <p>Видео</p>
        </div>
      </div>
      <div class="border_block_1">
        <div class="border_block_item">
          <p>фото</p>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: "block_5_component"
}
</script>

<style scoped>
@font-face {
  font-family: 'SpriteGraffiti';
  src: url(../font/SpriteGraffiti-Shadow.otf);
}
.block_5{
  margin: 600px 0 0 0;
}
.name_block5{
  font-family: 'SpriteGraffiti';
  font-size: 120px;
  margin: 20px 0;
}
#block_2{
  margin: -70px 0 0 0;
}

.border_block_1{
  background: #FFFFFF;
  border: 12px solid #9966CC;
  border-radius: 20px;
  width: 311px;
  height: 418px;
}
.border_block_container{
  display: flex;
  justify-content: center;
  margin: 120px auto 0 0;
}
</style>