<template>
    <div>
        <form class="user"  @submit.prevent="onsubmit">
            <alert-success :form="form">Success</alert-success>
            <div class="form-group">
                <input
                    v-model="form.title"
                    type="text"
                    name="title"

                    class="form-control form-control-user"
                    id="exampleInputEmail"
                    aria-describedby="emailHelp"
                    placeholder="Title"
                />
            </div>
            <div class="form-group">
                <input
                    v-model="form.body"
                    type="password"
                    class="form-control form-control-user"
                    id="exampleInputPassword"
                    placeholder="Body"
                />
                    <has-error :form="form" field="body"></has-error>

            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customCheck"
                    />
                    <has-error :form="form" field="Titie"></has-error>

                </div>
            </div>

<button type="submit">karar</button>
            <hr />
        </form>
    </div>
</template>
<script>
export default {
    name: "create" ,
    data(){
        return {
            form: new Form({
                title: "" ,
                 body: ""  ,
            }),
        }
    },
        methods: {
            onsubmit(){
                this.form.post('/api/post').then((response) => {

                }).catch(() => {

                })
            }
        }
}
</script>
