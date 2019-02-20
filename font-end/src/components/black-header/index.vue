<template>
    <header class="black-header">
        <div class="h-wrap">
            <div class="w-left">
                <h1>FlyBird</h1>
            </div>
            <div class="w-right">
                <span class="r-text" @click="nav('/login')">登陆</span>
                <span>/</span>
                <span class="r-text">注册</span>
            </div>
        </div>
    </header>
</template>

<style lang="less" scoped>
    @import "index";
</style>
