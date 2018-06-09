<template>
    <el-aside>
        <el-menu @select="handleSelect">
            <el-menu-item :route="{path: '/'}" index="1">
                <i class="el-icon-setting"></i>
                <span slot="title">控制台</span>
            </el-menu-item>
            <router-link class="el-menu-item link" to="/foo"><i class="el-icon-setting"></i>控制台</router-link>
            <el-submenu index="2">
                <template slot="title"><i class="el-icon-message"></i>内容管理</template>
                <el-menu-item-group>
                    <el-menu-item index="2-1" :route="{path: '/mainPage/zhecai'}">脆爽浙菜</el-menu-item>
                    <router-link class="el-menu-item link" to="/foo">foo</router-link>
                    <el-menu-item index="2-2"><router-link to="/foo">foo</router-link></el-menu-item>
                </el-menu-item-group>
                <el-menu-item-group title="分组2">
                    <el-menu-item index="2-3">选项3</el-menu-item>
                </el-menu-item-group>
                <el-submenu index="2-4">
                    <template slot="title">选项4</template>
                    <el-menu-item index="2-4-1">选项4-1</el-menu-item>
                </el-submenu>
            </el-submenu>
        </el-menu>
    </el-aside>
</template>

<script>
    export default {
        name: 'CWMain',
        componentName: 'CWMain',
        methods: {
            handleSelect(key, keyPath) {
                console.log(key, keyPath);
            }
        }
    };
</script>