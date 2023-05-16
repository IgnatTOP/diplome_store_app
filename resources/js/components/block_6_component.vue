<template>
  <div class="block_6">
    <div class="block_6_contnainer">
        <p class="FAQ">FAQ</p>
      <div class="items_block_6">
        <div class="item_block" v-for="(item, index) in items" :key="index">

          <div class="item" @click="toggleAdditionalText(item)">
              <p>{{ item.mainText }}</p>
              <p class="plus" v-if="item.minus"><img src="../img/Vector13.svg"> </p>
              <p class="plus" v-if="!item.minus"><img src="../img/Vector19.svg"></p>
          </div>
            <Transition name="slide-fade">
            <div class="content" v-if="item.showAdditionalText">
                <p>{{ item.additionalText }}</p>
            </div>
            </Transition>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: "block_6_component",
    data() {
        return {
            isExpanded: false,
            items: [
                {
                    mainText: 'Где проходит обучение?',
                    additionalText: 'Оффлайн занятия проходят по адресам Ленинградский пр-т, 51/1 (м. Аэропорт) или Кибальчича, 1 (м. ВДНХ). Онлайн занятия проходят на платформе Moodle.',
                    showAdditionalText: false,
                    minus:false
                },
                {
                    mainText: 'Будут ли записи занятий?',
                    additionalText: 'Для обучения на вебинарах и дистанционных курсах записи будут сохраняться в личном кабинете. Для оффлайн занятий записей нет.',
                    showAdditionalText: false,
                    minus:false

                },
                {
                    mainText: 'Есть ли личные наставники?',
                    additionalText: 'Дополнительный текст 3',
                    showAdditionalText: false,
                    minus:false

                },
                {
                    mainText: 'Как проходит контроль успеваемости?',
                    additionalText: 'Дополнительный текст 2',
                    showAdditionalText: false,
                    minus:false

                },
                {
                    mainText: 'Какие есть способы оплаты?',
                    additionalText: 'Дополнительный текст 2',
                    showAdditionalText: false,
                    minus:false

                },
            ]
        };
    }, methods: {
        toggleAdditionalText(item) {
            item.showAdditionalText = !item.showAdditionalText;
            item.minus = !item.minus;
        }
    },
}
</script>

<style scoped lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Space+Grotesk:wght@300;400;500;600;700&display=swap');
.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.3s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(20px);
  opacity: 0;
}
.item{
  display: flex;
  justify-content: space-between;
  padding: 0 30px;
  font-family: 'Space Grotesk', sans-serif;
  font-weight: 700;
  font-size: 25px;
  margin: 5px 0;
}
.content{
    font-size: 20px;
    font-weight: 400;
}
.plus{
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 45px;
  cursor: pointer;
  margin: 5px 0;
}
.FAQ{
  font-family: 'Space Grotesk', sans-serif;
  font-weight: 700;
  font-size: 75px;
  padding: 50px 0 0 0;
  margin: 0 80px 20px;
  text-align: left;
}
.block_6{
  margin: 100px 0 0 0;
}
.items_block_6{
  width: 750px;
  margin: 0 0 0 60px;
}
.item_block{
  border-top: 2px solid #F1A33F;
}
:root {
    --my-inherit: inherit;
}
.block_6_contnainer{
  background: #FFE5C4;
    padding: 0 0 50px 0;
    height: inherit;
    transition: height 0.3s ease-in-out;
}
</style>
