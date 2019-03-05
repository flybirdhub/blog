<template>
    <div class="article">
        <white-header></white-header>
        <user-layout>
            <div class="m-article">
                <div class="a-header">
                    <div class="h-title">
                        <span></span>
                        <p>{{info.title}}</p>
                    </div>
                    <div class="h-time">
                        <div class="t-item">
                            <i class="iconfont icon-shijian"></i>
                            <span>2018-12-12 14:20</span>
                        </div>
                        <div class="t-item">
                            <i class="iconfont icon-liulan"></i>
                            <span>4,200</span>
                        </div>
                        <div class="t-item">
                            <i class="iconfont icon-pinglun1"></i>
                            <span>1</span>
                        </div>
                    </div>
                </div>
                <div class="a-content">
                    <mavon-editor :toolbarsFlag="false" :boxShadow="false" defaultOpen="preview" :subfield="false" v-model="info.text"/>
                </div>
                <div class="a-footer">
                    <div class="f-tag">
                        <div class="t-up">
                            <span>点赞(2)</span>
                        </div>
                        <div class="t-label">
                            <div class="l-left">
                                <span>文章标签</span>
                                <i class="iconfont icon-cc-tag"></i>
                                <span>:</span>
                            </div>
                            <div class="l-right">
                                <div class="r-item">
                                    <span>HTML</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-pre-next"></div>
                    <div class="f-comment">
                        <div class="c-count">
                            <em>1,192</em>
                            <span>条评论</span>
                        </div>
                        <div class="c-post">
                            <div class="p-left">
                                <img src="https://linknemo-1253378501.picgz.myqcloud.com/linknemo/20190102/5c2c76ae5aa7cb04f55bbcfa?imageView2/1/w/200/h/200" alt="">
                            </div>
                            <div class="p-right">
                                <div class="r-input">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="请输入您的评论"></textarea>
                                </div>
                                <div class="r-btn">
                                    <div class="b-right">
                                        <span>发表</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-list">
                            <div class="l-item">
                                <div class="i-left">
                                    <img src="https://linknemo-1253378501.picgz.myqcloud.com/linknemo/20190102/5c2c76ae5aa7cb04f55bbcfa?imageView2/1/w/200/h/200" alt="">
                                </div>
                                <div class="i-right">
                                    <div class="r-name">
                                        <span>flybird</span>
                                    </div>
                                    <div class="r-text">
                                        <p>支持习主席，为主席点赞[赞][赞][赞]</p>
                                    </div>
                                    <div class="r-reply">
                                        <div class="r-left">
                                            <span>回复</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    import {api} from '@/utils/api'
    import whiteHeader from '@/components/white-header'
    import whiteFooter from '@/components/white-footer'
    import userLayout from '@/components/user-layout'
    import { mavonEditor } from 'mavon-editor'
    export default {
        data () {
            return {
                id: this.$route.params.id,
                info:{
                    title: '',
                    text: ''
                }
            }
        },
        components: {
            mavonEditor,
            whiteHeader,
            whiteFooter,
            userLayout
        },
        methods: {
            getArticle () {
                api.article.info({id: this.id}).then(res => {
                    if (res.done) {
                        this.info = res.data
                    }
                })
            }
        },
        created () {
            this.getArticle()
        }
    }
</script>

<style lang="less">
    @import "index";
</style>
