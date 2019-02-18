<template>
    <div class="home">
        <default-header></default-header>
        <article>
            <div class="h-article">
                <div class="a-main">
                    <div class="m-carousel">
                        <el-carousel height="360px">
                            <el-carousel-item v-for="item in 1" :key="item">
                                <div class="i-block">
                                    <img src="https://linknemo-1253378501.picgz.myqcloud.com/linknemo/20181128/5bfeaa8c5aa7cb045995f9bb.png?imageView2/1/w/600/h/600" alt="">
                                    <div class="b-title">
                                        <span>关于这个博客</span>
                                    </div>
                                </div>
                            </el-carousel-item>
                        </el-carousel>
                    </div>
                    <div class="m-hot">
                        <div class="h-title">
                            <span>热门博客</span>
                        </div>
                        <div class="h-list">
                            <div class="l-item" :key="key" v-for="(item, key) in 5">
                                <div class="i-title">
                                    <h3>想看美女的看这里：Python 豆瓣美女爬虫</h3>
                                </div>
                                <div class="i-content">
                                    <div class="c-left">
                                        <img src="https://www.link-nemo.com/forumlib/images/cover/article-default-cover.jpg" alt="">
                                    </div>
                                    <div class="c-right">
                                        <div class="r-text">
                                            <p>简单实现了下，自动保存豆瓣美女网站的图片到本地。</p>
                                        </div>
                                        <div class="r-author">
                                            <div class="a-left">
                                                <div class="l-avatar">
                                                    <img src="https://linknemo-1253378501.picgz.myqcloud.com/linknemo/20190102/5c2c76ae5aa7cb04f55bbcfa?imageView2/1/w/200/h/200" alt="">
                                                </div>
                                                <div class="l-name">
                                                    <span>flybird</span>
                                                </div>
                                                <div class="l-time">
                                                    <span>2018年06月15 10:00</span>
                                                </div>
                                            </div>
                                            <div class="a-right">
                                                <span>阅读更多</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="a-slide">
                    <div class="s-item">
                        <div class="i-title">
                            <span>贡献榜</span>
                        </div>
                        <div class="i-content">
                            <div class="c-devote">
                                <div class="d-item">
                                    <img src="https://linknemo-1253378501.picgz.myqcloud.com/linknemo/20181206/5c07f7cd5aa7cb1782dd55e3?imageView2/1/w/200/h/200" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-item">
                        <div class="i-title">
                            <span>热门标签</span>
                        </div>
                        <div class="i-content">
                            <div class="c-tag">
                                <div class="t-item" :style="{backgroundColor: randomColor(0.8)}">
                                    <span>python</span>
                                </div>
                                <div class="t-item" :style="{backgroundColor: randomColor(0.8)}">
                                    <span>树莓派</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-item">
                        <div class="i-title">
                            <span>最新文章</span>
                        </div>
                        <div class="i-content">
                            <div class="c-article">
                                <div class="a-top">
                                    <img src="https://www.link-nemo.com/forumlib/images/cover/article-default-cover.jpg" alt="">
                                    <div class="i-title">
                                        <span>想看美女的看这里：Python 豆瓣美女爬虫</span>
                                    </div>
                                </div>
                                <div class="a-item">
                                    <div class="i-left">
                                        <img src="https://www.link-nemo.com/forumlib/images/cover/article-default-cover.jpg" alt="">
                                    </div>
                                    <div class="i-right">
                                        <div class="r-text">
                                            <p>简单实现了下，自动保存豆瓣美女网站的图片到本地。</p>
                                        </div>
                                        <div class="r-time">
                                            <span>2018年12月 12:30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-item">
                        <div class="i-title">
                            <span>友情链接</span>
                        </div>
                        <div class="i-content">
                            <div class="c-link">
                                <div class="l-item">
                                    <span>spring cloud中文网</span>
                                </div>
                                <div class="l-item">
                                    <span>how2j教程</span>
                                </div>
                                <div class="l-item">
                                    <span>typescript中文社区</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <default-footer></default-footer>
    </div>
</template>

<script type="text/ecmascript-6">
    import defaultHeader from '@/components/default-header'
    import defaultFooter from '@/components/default-footer'
    export default {
        components: {
            defaultHeader,
            defaultFooter
        },
        methods: {
            randomColor (a) {
                let r = Math.floor(Math.random() * 255)
                let g = Math.floor(Math.random() * 255)
                let b = Math.floor(Math.random() * 255)
                return 'rgba(' + r + ',' + g + ',' + b + ',' + a + ')'
            }
        }
    }
</script>

<style lang="less">
    @import './index';
</style>
