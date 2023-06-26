<template>
  <div class="block_5">
    <p class="name_block5">отзывы</p>
    <div class="border_block_container">
      <div class="border_block_1">
        <div class="border_block_item1">
            <div class="img_FI">
                <img :src="'http://facours.ru/storage/' + otz[0].preview_image" class="img_otz">
                <div class="name_fi">
                    <p class="name_otz">{{otz[0].name}}</p>
                    <p class="history_post">{{otz[0].title}}</p>
                </div>
            </div>
            <p class="content_content">{{otz[0].content}}</p>

        </div>
      </div>
      <div class="border_block_1" id="block_2">
        <div class="border_block_item">
            <video controls>
                <source src="../img/123.mp4" type="video/mp4">
            </video>
        </div>
      </div>
      <div class="border_block_1">
        <div class="border_block_item">
            <img src="../img/IMG_0076.jpg" class="iamge">
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: "block_5_component",
    data(){
      return{
          otz: [],
      }
    },
    mounted(){
        this.getOtz();
    },
    methods: {
        getOtz() {
            this.axios.get('/api/otz')
                .then(res => {
                    this.otz = res.data
                    console.log(this.otz)
                })
        },
    }

}
</script>

<style scoped>
@font-face {
  font-family: 'SpriteGraffiti';
  src: url(../font/SpriteGraffiti-Shadow.otf);
}
.img_FI{
    display: flex;
    /* max-width: 90%; */
    /* width: 60%; */
    margin: 10px 0;
    align-items: center;
    justify-content: center;
}
.name_otz{
    font-weight: 700;
    font-size: 20px;
    margin: 5px 0 0 0;
}
.history_post{
    color: #4F4F4F;
    font-weight: 600;
    margin: 5px 0 0 0;
}
.name_fi{
    width: 70%;
    margin: 0 0 0 10px;
    text-align: left;
}
.border_block_item{
    display: flex;
    height: 100%;
    align-items: center;
    justify-content: center;
}
.content_content{
    margin: 50px 3px;
}
.img_otz{
    width: 75px;
    height: inherit;
    min-width: 75px;
    border-radius: 20px;
}
.iamge{
    max-width: 95%;
    border-radius: 5px;
    max-height: 95%;
}
video{
    height: 417px;
    width: 311px;
    border-radius: 10px;
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
@media (max-width: 600px) {
    .name_block5{
        font-size: 80px;
        margin: 64px 0 20px;
    }
    .block_5{
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        justify-content: center;
    }
    .border_block_container{
        display: flex;
        margin: 12px 0;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    #block_2{
        margin: 20px 0;
    }
}
</style>
