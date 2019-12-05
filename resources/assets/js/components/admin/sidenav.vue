<template>
    <ul class="nav flex-column" >
        <li class="nav-item" v-for="table in tables">
            <div class="nav-link" @click='updateTable(table.id)'>
                <span data-feather="file"></span>
                {{table.name}}
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        name: "sidenav",
        data: function(){
            return {
                "tables": [],
                "currentId": null,
            }
        },
        created: function(){
            axios.get('/admin/role/')
                .then(response => {
                    this.tables = (response.data);
                });
        },
        methods: {
            updateTable: function(e){
                if(this.currentId === e) {
                    this.currentId = null;
                    this.$emit("table-update",0);
                }
                else {
                    this.currentId = e;
                    this.$emit("table-update",e);
                }
            }
        }
    }
</script>

<style scoped>

</style>