<template>
    <div class="user-layout">
        <div class="l-cover"></div>
        <div class="l-outline">
            <div class="o-wrap">
                <div class="w-item">
                    <span class="i-name">访问</span>
                    <span class="i-count">257,234</span>
                </div>
                <div class="w-item">
                    <span class="i-name">文章</span>
                    <span class="i-count">78</span>
                </div>
            </div>
        </div>
        <div class="l-content">
            <div class="c-wrap">
                <div class="w-left">
                    <div class="l-avatar">
                        <img src="https://linknemo-1253378501.picgz.myqcloud.com/linknemo/20190102/5c2c76ae5aa7cb04f55bbcfa?imageView2/1/w/200/h/200" alt="">
                    </div>
                    <div class="l-name">
                        <span>FlyBird</span>
                        <i class="iconfont icon-male"></i>
                    </div>
                    <div class="l-what-is-up">
                        <p>路漫漫其修远兮，吾将上下而求索。</p>
                    </div>
                    <div class="l-tags">
                        <div class="t-item">
                            <i class="iconfont icon-cc-tag"></i>
                            <span>佛山市</span>
                        </div>
                        <div class="t-item">
                            <i class="iconfont icon-cc-tag"></i>
                            <span>全栈工程师</span>
                        </div>
                    </div>
                </div>
                <div class="w-mid">
                    <slot></slot>
                </div>
                <div class="w-right">
                    <slot name="right"></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="less">
    @import 'index.less';
</style>
