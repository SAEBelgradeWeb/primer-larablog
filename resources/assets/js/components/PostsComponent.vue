<template>
    <div>
    <data-tables
            :data="tableData"
            :table-props="tableProps"
            :actions-def="actionsDef"
    >
        <el-table-column
                prop="id"
                label="ID"
                width="180">
        </el-table-column>
        <el-table-column
                sortable="custom"
                prop="title"
                label="Title"
                width="180">
        </el-table-column>
        <el-table-column
                prop="category.title"
                label="Category">
            <template slot-scope="scope">
                <i class="el-icon-time"></i>
                <span style="margin-left: 10px">{{scope.row.category.title}}</span>
            </template>
        </el-table-column>

        <el-table-column
                prop="user.name"
                label="Author">
        </el-table-column>
    </data-tables>

    <el-dialog
            title="Create new"
            :visible.sync="dialogVisible"
            width="300"
            :before-close="handleClose">
        <post-form></post-form>
        <span slot="footer" class="dialog-footer">
  </span>
    </el-dialog>
    </div>
</template>

<script>
    export default {
        props: ['posts'],
        mounted() {
            this.tableData = JSON.parse(this.posts)
            EventBus.$on('update-posts', ()=>{
                axios.get('/api/posts')
                    .then((response)=>{

                    this.tableData = response.data
                        this.dialogVisible = false;
                        this.$message("New post added")
                    })
            })
        },
        methods: {
          handleClose() {
            this.dialogVisible = false;
          }
        },
        data() {
            return {
                dialogVisible: false,
                tableData: [],
                tableProps: {
                    striped: true,
                    border: false,
                    defaultSort: {
                        prop: 'created_at',
                        order: 'descending'
                    }
                },
                actionsDef: {
                    def: [{
                        name: 'new',
                        handler: () => {
                            this.dialogVisible = true;
                        }
                    }]
                }
            }
        }
    }
</script>