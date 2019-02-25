<template>
    <div class="editor">
        <white-header></white-header>
        <article>
            <div class="e-article">
                <div class="a-side">
                    <div class="s-menu">
                        <div class="m-item">
                            <i class="iconfont icon-bianxie"></i>
                            <span>发文章</span>
                        </div>
                        <div class="m-item">
                            <i class="iconfont icon-ai-article"></i>
                            <span>内容管理</span>
                        </div>
                        <div class="m-item">
                            <i class="iconfont icon-pinglun"></i>
                            <span>评论管理</span>
                        </div>
                    </div>
                </div>
                <div class="a-main">
                    <mavon-editor v-model="value"/>
                </div>
            </div>
        </article>
        <white-footer></white-footer>
    </div>
</template>

<script type="text/ecmascript-6">
    import { mavonEditor } from 'mavon-editor'
    import whiteHeader from '@/components/white-header'
    import whiteFooter from '@/components/white-footer'
    export default {
        data () {
            return {
                value: '|column1|column2|column3|\n' +
                    '|-|-|-|\n' +
                    '|content1|content2|content3|'
            }
        },
        components: {
            mavonEditor,
            whiteHeader,
            whiteFooter
        }
    }
</script>
<style lang="less">
    @import 'index';
</style>
