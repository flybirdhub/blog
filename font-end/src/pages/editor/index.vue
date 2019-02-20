<template>
    <div class="editor">
        <mavon-editor v-model="value" defaultOpen="preview" :subfield="false"/>
    </div>
</template>

<script type="text/ecmascript-6">
    import { mavonEditor } from 'mavon-editor'
    export default {
        data () {
            return {
                value: '|column1|column2|column3|\n' +
                    '|-|-|-|\n' +
                    '|content1|content2|content3|'
            }
        },
        components: {
            mavonEditor
        }
    }
</script>
<style lang="less">
    @import 'index';
</style>
