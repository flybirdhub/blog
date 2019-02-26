<template>
    <div class="article">
        <white-header></white-header>
        <user-layout>
            <div class="m-article">
                <div class="a-wrap">
                    <div class="w-header">
                        <div class="h-title">
                            <span></span>
                            <p>想看美女的看这里：Python 豆瓣美女爬虫</p>
                        </div>
                        <div class="h-time">
                            <div class="t-item">
                                <i class="iconfont icon-home"></i>
                                <span>2018-12-12 14:20</span>
                            </div>
                            <div class="t-item">
                                <i class="iconfont icon-home"></i>
                                <span>4,200</span>
                            </div>
                            <div class="t-item">
                                <i class="iconfont icon-home"></i>
                                <span>1</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-content"></div>
                    <div class="w-footer"></div>
                </div>
            </div>
            <template slot="right">
                <div class="r-block">
                    <div class="b-title">
                        <i class="iconfont icon-jiaoyiliangzongpaixing"></i>
                        <span>点击排行榜</span>
                    </div>
                    <div class="b-content">
                        <div class="c-item">
                            <div class="i-cover">
                                <img src="https://www.link-nemo.com/forumlib/images/cover/article-default-cover.jpg" alt="">
                            </div>
                            <div class="i-text">
                                <p># SpringMVC集成Shiro设置不拦截静态文件</p>
                            </div>
                        </div>
                        <div class="c-item">
                            <div class="i-cover">
                                <img src="https://www.link-nemo.com/forumlib/images/cover/article-default-cover.jpg" alt="">
                            </div>
                            <div class="i-text">
                                <p># SpringMVC集成Shiro设置不拦截静态文件</p>
                            </div>
                        </div>
                        <div class="c-item">
                            <div class="i-cover">
                                <img src="https://www.link-nemo.com/forumlib/images/cover/article-default-cover.jpg" alt="">
                            </div>
                            <div class="i-text">
                                <p># SpringMVC集成Shiro设置不拦截静态文件</p>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </user-layout>
        <white-footer></white-footer>
    </div>
</template>

<script type="text/ecmascript-6">
    import whiteHeader from '@/components/white-header'
    import whiteFooter from '@/components/white-footer'
    import userLayout from '@/components/user-layout'
    export default {
        components: {
            whiteHeader,
            whiteFooter,
            userLayout
        }
    }
</script>

<style lang="less">
    @import "index";
</style>
