<template>
    <div class="editor">
        <white-header></white-header>
        <graphic-layout>
            <div class="e-container">
                <div class="c-editor">
                    <div class="e-wrap">
                        <div class="w-title">
                            <input type="text" placeholder="请输入文章标题（5-20字）">
                        </div>
                        <div class="w-mavon">
                            <mavon-editor :toolbars="toolbars" :boxShadow="false" defaultOpen="edit" :subfield="false" v-model="value"/>
                        </div>
                    </div>
                </div>
                <div class="c-btn">
                    <div class="b-left">
                        <span>数字 0</span>
                    </div>
                    <div class="b-right">
                        <div class="r-publish">
                            <span>发表</span>
                        </div>
                    </div>
                </div>
            </div>
        </graphic-layout>
    </div>
</template>

<script type="text/ecmascript-6">
    import { mavonEditor } from 'mavon-editor'
    import graphicLayout from '@/components/graphic-layout'
    import whiteHeader from '@/components/white-header'
    export default {
        data () {
            return {
                value: '',
                toolbars:{
                    bold: true, // 粗体
                    italic: true, // 斜体
                    header: true, // 标题
                    underline: true, // 下划线
                    strikethrough: true, // 中划线
                    mark: true, // 标记
                    superscript: false, // 上角标
                    subscript: false, // 下角标
                    quote: true, // 引用
                    ol: true, // 有序列表
                    ul: true, // 无序列表
                    link: true, // 链接
                    imagelink: true, // 图片链接
                    code: true, // code
                    table: false, // 表格
                    fullscreen: false, // 全屏编辑
                    readmodel: false, // 沉浸式阅读
                    htmlcode: false, // 展示html源码
                    help: false, // 帮助
                    /* 1.3.5 */
                    undo: false, // 上一步
                    redo: false, // 下一步
                    trash: true, // 清空
                    save: false, // 保存（触发events中的save事件）
                    /* 1.4.2 */
                    navigation: false, // 导航目录
                    /* 2.1.8 */
                    alignleft: true, // 左对齐
                    aligncenter: true, // 居中
                    alignright: true, // 右对齐
                    /* 2.2.1 */
                    subfield: false, // 单双栏模式
                    preview: true, // 预览
                }
            }
        },
        components: {
            mavonEditor,
            graphicLayout,
            whiteHeader,
        }
    }
</script>
<style lang="less">
    @import 'index';
</style>
