<template>
    <div><header_component @scroll4="scrollToComponent4" @scroll5="scrollToComponent5"/></div>
    <div ref="a1" class="a111"><block_1_component/></div>
    <div ref="a2" class="a111"><block_2_comlonent/></div>
    <div ref="a3" class="a111"><block_3_component/></div>
    <div ref="a4" class="a111"><block_4_component/></div>
    <div ref="a5" class="a111"><block_5_component/></div>
    <div ref="a6" class="a111"><block_6_component/></div>
    <div ref="a7" class="a111"><block_7_component/></div>
    <div ref="a8" class="a111"><block_8_component/></div>

</template>

<script>
import header_component from "@/components/header_component.vue";
import block_1_component from "@/components/block_1_component.vue";
import block_2_comlonent from "@/components/block_2_comlonent.vue";
import block_3_component from "@/components/block_3_component.vue";
import block_4_component from "@/components/block_4_component.vue";
import block_5_component from "@/components/block_5_component.vue";
import block_6_component from "@/components/block_6_component.vue";
import block_7_component from "@/components/block_7_component.vue";
import block_8_component from "@/components/block_8_component.vue";

export default {
  name: "home_component",
  components: {
    block_6_component,
    block_7_component,
    block_5_component,
    block_8_component,
    block_4_component,
    block_3_component,
    block_2_comlonent,
    block_1_component,
    header_component
  },

    methods: {
        scrollToComponent4() {
            this.$refs.a2.scrollIntoView({ behavior: 'smooth' });
        },
        scrollToComponent5() {
            this.$refs.a7.scrollIntoView({ behavior: 'smooth' });
        }
    }
}
</script>

<style scoped>
.a111{
    height: auto;
}
</style>
