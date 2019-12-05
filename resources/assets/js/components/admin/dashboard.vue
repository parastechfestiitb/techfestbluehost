<template>
    <div id="main-wrapper" v-if="tableId>0">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <h1 class="h2">{{name}}</h1>
        </div>
        <div class="table-responsive">
            <div @click="editing=!editing" :class="{'text-success' : editing}" title="edit" class="d-inline-block pointer">
                <i class="far fa-edit"></i>
            </div>
            <div @click="creating=!creating" :class="{'text-success' : creating}" title="create" class="d-inline-block pointer">
                <i class="fas fa-plus"></i>
            </div>
            <div @click="deleting=!deleting" :class="{'text-danger' : deleting}" title="create" class="d-inline-block pointer">
                <i class="fas fa-trash"></i>
            </div>
            <div class="d-inline-block float-right pointer font-weight-bold" @click="next()">&rarr;</div>
            <div class="page-counter float-right mr-2 font-weight-bold text-center" :style="{width:'5em'}">{{page+1}}</div>
            <div class="d-inline-block float-right pointer mr-2 font-weight-bold" @click="prev()">&larr;</div>
            <div class="text-danger" :class="{'d-none' : !creating}">
                Leave columns blank for defaults.
            </div>

            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <td :class="{'d-none' : !creating && !editing}">
                            <span :class="{'d-none' : !deleting}">Delete</span>
                            <span :class="{'d-none' : !editing}">Save</span>
                        </td>
                        <th v-for="column in columns">
                            {{column}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr :class="creating" class="creating">
                        <td @click="creating=!creating;create(nextId)" :class="{'d-none' : !creating}">
                            <i class="far fa-save" :class="{'d-none' : !creating}"></i>
                        </td>
                        <td :title="cell" :class="{'d-none':!creating,key}">{{nextId}}</td>
                        <td v-for="(cell,key) in table[0]" :title="cell" :contenteditable="creating" :class="[key,{'d-none':!creating}]" v-if="key!=='id'"></td>
                    </tr>
                    <tr v-for="rows in tableVals()" :class="'editable'+rows.id">
                        <td @click="save(rows.id)" :class="{'d-none' : !editing && !creating && !deleting}">
                            <i class="far fa-save" :class="{'d-none' : !editing}"></i>
                            <i class="fa fa-trash" :class="{'d-none' : !deleting}" @click="del(rows.id)"></i>
                        </td>
                        <td v-for="(cell,key) in rows" :title="cell" :contenteditable="editing" :class="key">
                            {{cell}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "dashboard" ,
        data: function(){
            return {
                'name': '',
                'columns': [],
                'table' : [] ,
                'editing' : null,
                'creating' : null,
                'deleting' : null,
                'role': null,
                'nextId': null,
                'key':null,
                'cell':null,
                page: 0
            }
        },
        props: ['tableId'],
        watch: {
            tableId: function(){
                if(this.tableId<=0) return false;
                else{
                    this.page = 0;
                    axios.get('/admin/role/'+this.tableId)
                        .then(response => {
                            this.name   = response.data.role.name;
                            this.columns= response.data.columns;
                            this.table  = response.data.table;
                            this.role   = response.data.role;
                            this.nextId = response.data.next;
                        });
                }

            }
        },
        methods: {
            update: function(){
                if(this.tableId<=0) return false;
                else{
                    axios.get(_routes['role']+'/'+this.tableId)
                        .then(response => {
                            this.name   = response.data.role.name;
                            this.columns= response.data.columns;
                            this.table  = response.data.table;
                            this.role   = response.data.role;
                            this.nextId = response.data.next;
                        });
                }

            },
            save: function(e){
                let data = {_token:_csrf};
                $('.editable' + e).children().each(function(e,j){
                    if(j.classList[0]) data[j.classList[0]] = j.innerText;
                });
                axios.post('/admin/role/'+this.tableId,data);
            },
            create: function(e){
                let data = {_token:_csrf};
                $('.creating').children().each(function(e,j){
                    if(j.innerText !== '' && j.classList[0]) data[j.classList[0]] = j.innerText;
                });
                data['tableId'] = this.tableId;
                axios.post(_routes['roleCreate'],data)
                    .then(response => {
                        this.update();
                    });
            },
            del: function(e){
                if(confirm("Are you sure you want to delete this?")){
                    axios.post(_routes['roleDelete'],{'id':e,'_token':_csrf,'tableId':this.tableId})
                        .then(response => {
                            this.update();
                        });
                }

            },
            next: function(){
                let c = Object.keys(this.table).length;
                if(this.page>=Math.floor(c/100)) return;
                else{
                    this.page+=1;
                }
            },
            prev: function(){
                if(this.page===0) return;
                else {
                    this.page-=1;
                }
            },
            tableVals: function(){
                return this.table.slice(this.page*100,this.page*100+99);
            }
        }
    }
</script>

<style scoped>
    #main-wrapper table td{
        max-width: 20em;
        overflow:hidden;
        white-space: nowrap;
    }
    .pointer{
        cursor:pointer;
    }
</style>

