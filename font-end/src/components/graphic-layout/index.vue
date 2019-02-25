<template>
    <article class="graphic-layout">
        <div class="l-article">
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
                <slot></slot>
            </div>
        </div>
    </article>
</template>

<script type="text/ecmascript-6">
    export default {
        methods: {
            getClientHeight()
            {
                var clientHeight=0
                if(document.body.clientHeight&&document.documentElement.clientHeight)
                {
                    clientHeight = (document.body.clientHeight<document.documentElement.clientHeight)?document.body.clientHeight:document.documentElement.clientHeight
                }
                else
                {
                    clientHeight = (document.body.clientHeight>document.documentElement.clientHeight)?document.body.clientHeight:document.documentElement.clientHeight
                }
                return clientHeight
            }
        },
        mounted () {
            /* eslint-disable */
            console.log(this.getClientHeight())
        }
    }
</script>
<style lang="less">
    @import 'index';
</style>
