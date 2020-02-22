<template>
    <div id="main">
        <header id="header">
            <Menu></Menu>
        </header>
        <div id="content">
            <router-view></router-view>
        </div>
        <Footer></Footer>
    </div>
</template>
<script>
    import Menu from './components/Menu.vue'
    import Footer from './components/Footer.vue'
    export default {
        data() {
            return {
                //
            }
        },
        components: {
            Menu,
            Footer
        }
    }
</script>
