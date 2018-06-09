<template>
    <el-container>
        <el-header style="padding: 0;">
            <h1 class="logo">CraziesWorld</h1>
            <el-row type="flex" justify="end" class="navbar-static-top">

                <el-dropdown>
                    <span class="el-dropdown-link">
                        <i class="el-icon-arrow-down el-icon-tickets"></i>
                    </span>
                    <el-dropdown-menu slot="dropdown">
                        <el-dropdown-item>黄金糕</el-dropdown-item>
                        <el-dropdown-item>狮子头</el-dropdown-item>
                        <el-dropdown-item>螺蛳粉</el-dropdown-item>
                        <el-dropdown-item disabled>双皮奶</el-dropdown-item>
                        <el-dropdown-item divided>蚵仔煎</el-dropdown-item>
                    </el-dropdown-menu>
                </el-dropdown>
                <el-dropdown>
                    <span class="el-dropdown-link">
                        <i class="el-icon-arrow-down el-icon-setting"></i>
                    </span>
                    <el-dropdown-menu slot="dropdown">
                        <el-dropdown-item>黄金糕</el-dropdown-item>
                        <el-dropdown-item>狮子头</el-dropdown-item>
                        <el-dropdown-item>螺蛳粉</el-dropdown-item>
                        <el-dropdown-item disabled>双皮奶</el-dropdown-item>
                        <el-dropdown-item divided>蚵仔煎</el-dropdown-item>
                    </el-dropdown-menu>
                </el-dropdown>
            </el-row>
        </el-header>
        <el-container>
            <c-w-main></c-w-main>
            <el-container>
                <el-main>
                    <router-view></router-view>

                </el-main>
                <el-footer>
                    Copyright © 2017-2018 CraziesWorld. All rights reserved.
                    <span style="float: right">Version 0.0.1 </span>
                </el-footer>
            </el-container>
        </el-container>
    </el-container>
</template>

<script>
    import CWMain from "./Menu";
    export default {
        components: {CWMain},
        computed: {
            username () {
                // 我们很快就会看到 `params` 是什么
                return this.$route.params.username
            }
        },
        data() {
            const item = {
                date: '2016-05-02',
                name: '王小虎',
                address: '上海市普陀区金沙江路 1518 弄'
            };
            return {
                tableData: Array(20).fill(item)
            }
        },
        mounted(){
        },
        methods: {
            open(){
                this.$notify({
                    title: '提示',
                    message: '这是一条不会自动关闭的消息',
                    duration: 0,
                    offset: 32
                });
            }
        }
    };
</script>