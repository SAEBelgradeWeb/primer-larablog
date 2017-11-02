<template>
    <el-form ref="form" :model="form" label-width="120px">
        <el-form-item label="Title">
            <el-input v-model="form.title"></el-input>
        </el-form-item>
        <el-form-item label="Body">
            <el-input type="textarea" v-model="form.body"></el-input>
        </el-form-item>
        <el-form-item label="Category">
        <el-select v-model="form.category_id" placeholder="Select">
            <el-option
                    v-for="item, index in categories"
                    :key="index"
                    :label="item"
                    :value="index">
            </el-option>
        </el-select>
        </el-form-item>

        <el-form-item>
            <el-button type="primary" @click="onSubmit">Create</el-button>
            <el-button>Cancel</el-button>
        </el-form-item>
    </el-form>

</template>

<script>
    export default {
        data() {
            return {
                categories: [],
                form: {
                    title: '',
                    body: '',
                    category_id: '',
                }
            }
        },
        mounted() {
          this.getCategories();
        },
        methods: {
            onSubmit() {
                axios.post('/api/posts', this.form)
                    .then((response) => {
                        EventBus.$emit('update-posts')
                    })
            },
            getCategories() {
                axios.get('/api/categories')
                    .then((response) => {
                        this.categories = response.data
                    })
            }
        }
    }
</script>