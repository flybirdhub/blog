<template>
    <div id="app">
        <router-view></router-view>
    </div>
</template>

<script>
    import {mapActions} from 'vuex'
    export default {
        name: 'app',
        methods: {
            ...mapActions('user', ['getUser'])
        },
        created () {
            this.getUser()
        }
    }
</script>

<style lang="less">
    @import '~normalize.css';
    @import './config/less/index';
    #app {
        font: 14px/24px Consolas,"Microsoft Yahei",Arial,"宋体";
        font-size: 13px;
    }
</style>
