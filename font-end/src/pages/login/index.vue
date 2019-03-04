<template>
    <div class="login">
        <div class="l-box">
            <div class="b-top">
                <div class="t-title">
                    <span>账号密码登陆</span>
                </div>
                <div class="t-field">
                    <input type="text" placeholder="账号" v-model="form.account">
                    <input type="password" placeholder="密码" v-model="form.password">
                </div>
                <div class="t-auto">
                    <input type="checkbox" checked="checked">
                    <span>自动登录</span>
                </div>
                <div class="t-btn" @click="toLogin">
                    <span>登陆</span>
                </div>
                <div class="t-reset">
                    <span>忘记密码？</span>
                </div>
            </div>
            <div class="b-bottom">
                <div class="b-left">
                    <div class="l-text">
                        <span>第三方登陆</span>
                    </div>
                    <div class="l-icon">
                        <i class="iconfont icon-wechat"></i>
                    </div>
                </div>
                <div class="b-right">
                    <span>立即注册</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/ecmascript-6">
    import {mapActions} from 'vuex'
    export default {
        data () {
            return {
                form: {
                    account: '',
                    password: ''
                }
            }
        },
        methods: {
            ...mapActions('user', ['login']),
            toLogin () {
                this.login(this.form).then(() => {
                    this.$message('登陆成功')
                    this.nav('/')
                })
            }
        }
    }
</script>

<style lang="less">
    @import 'index';
</style>
