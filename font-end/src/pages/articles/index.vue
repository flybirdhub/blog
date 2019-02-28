<template>
    <div class="articles">
        <white-header></white-header>
        <me-layout>
            <div class="a-list">
                <div class="l-item" :key="key" v-for="(item, key) in 3">
                    <div class="i-left">
                        <img src="https://www.link-nemo.com/forumlib/images/cover/article-default-cover.jpg" alt="">
                    </div>
                    <div class="i-right">
                        <div class="r-name">
                            <span>想看美女的看这里：Python 豆瓣美女爬虫</span>
                        </div>
                        <div class="r-time">
                            <span>2,452阅读</span>
                            <span>21评论</span>
                            <span>2018-07-15 12:12</span>
                        </div>
                    </div>
                    <div class="i-more">
                        <i class="iconfont icon-iconfontgengduo"></i>
                        <div class="m-panel">
                            <div class="p-wrap">
                                <div class="w-item">
                                    <span>置顶</span>
                                </div>
                                <div class="w-item">
                                    <span>编辑</span>
                                </div>
                                <div class="w-item">
                                    <span>删除</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </me-layout>
    </div>
</template>

<script type="text/ecmascript-6">
    import meLayout from '@/components/me-layout'
    import whiteHeader from '@/components/white-header'
    export default {
        components: {
            meLayout,
            whiteHeader,
        }
    }
</script>
<style lang="less">
    @import 'index';
</style>
