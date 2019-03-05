<template>
    <div class="editor">
        <white-header></white-header>
        <me-layout>
            <div class="e-container">
                <div class="c-editor">
                    <div class="e-wrap">
                        <div class="w-title">
                            <input type="text" placeholder="请输入文章标题（5-20字）" v-model="form.title">
                        </div>
                        <div class="w-mavon">
                            <mavon-editor :toolbars="toolbars" :boxShadow="false" defaultOpen="edit" :subfield="false"
                                          v-model="form.text"/>
                        </div>
                    </div>
                </div>
                <div class="c-btn">
                    <div class="b-left">
                        <span>数字 0</span>
                    </div>
                    <div class="b-right">
                        <div class="r-publish" @click="doPublish">
                            <span>发表</span>
                        </div>
                    </div>
                </div>
            </div>
        </me-layout>
    </div>
</template>

<script type="text/ecmascript-6">
    import {api} from '@/utils/api'
    import {mavonEditor} from 'mavon-editor'
    import meLayout from '@/components/me-layout'
    import whiteHeader from '@/components/white-header'

    export default {
        data() {
            return {
                form: {
                    title: '',
                    text: '#### HTML 代码 HTML codes\n' +
                        '\n' +
                        '```html\n' +
                        '<!DOCTYPE html>\n' +
                        '<html>\n' +
                        '    <head>\n' +
                        '        <mate charest="utf-8" />\n' +
                        '        <meta name="keywords" content="Editor.md, Markdown, Editor" />\n' +
                        '        <title>Hello world!</title>\n' +
                        '        <style type="text/css">\n' +
                        '            body{font-size:14px;color:#444;font-family: "Microsoft Yahei", Tahoma, "Hiragino Sans GB", Arial;background:#fff;}\n' +
                        '            ul{list-style: none;}\n' +
                        '            img{border:none;vertical-align: middle;}\n' +
                        '        </style>\n' +
                        '    </head>\n' +
                        '    <body>\n' +
                        '        <h1 class="text-xxl">Hello world!</h1>\n' +
                        '        <p class="text-green">Plain text</p>\n' +
                        '    </body>\n' +
                        '</html>\n' +
                        '```'
                },
                toolbars: {
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
            meLayout,
            whiteHeader,
        },
        methods: {
            doPublish() {
                api.user.createArticle(this.form).then(res => {
                    if (res.done) {
                        this.$message('发表成功')
                    }
                })
            }
        }
    }
</script>
<style lang="less">
    @import 'index';
</style>
