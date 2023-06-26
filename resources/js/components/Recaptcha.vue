
<template>
    <div class="g-recaptcha" :data-sitekey="siteKey" ></div>
</template>

<script>
export default {
    name: 'Recaptcha',
    props: {
        siteKey: {
            type: String,
            required: true
        },
        theme: {
            type: String,
            default: 'light'
        },
        size: {
            type: String,
            default: 'normal'
        }
    },
    mounted(){
        setTimeout(() => {
        this.onLoad();
        }, 2000);
    },
    methods: {
        onLoad() {
            window.grecaptcha.render(this.$el, {
                sitekey: this.siteKey,
                theme: this.theme,
                size: this.size,
                callback: this.onVerify
            })
        },
        onVerify(response) {
            this.$emit('verify', response)
        }
    }
}
</script>


<style scoped>

</style>