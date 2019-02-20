<template>
    <div class="article">
        <white-header></white-header>
        <user-layout></user-layout>
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
