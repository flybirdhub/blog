import Vue from 'vue'

Vue.mixin({
    methods: {
        nav (s, o = {}) {
            this.$router.push({path: s, query: o})
        },
        rep (s, o = {}) {
            this.$router.replace({path: s, query: o})
        },
        back () {
            this.$router.go(-1)
        }
    }
})
