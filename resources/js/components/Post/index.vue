<template>
    <div>
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Body</th>
                    <th scope="col">Title</th>
                    <th scope="col">Outher</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <th scope="row">{{ post.id }}</th>
                    <td>{{ post.body }}</td>
                    <td>{{ post.title }}</td>
                    <td>
                    <div @click="deletedpost(post.id)">Delete  </div>
                        <router-link
                            to="#"
                            data-toggle="modal"
                            data-target="#exampleModal"
                            >Edit</router-link
                        >
                    </td>
                </tr>
            </tbody>
        </table>
        <!----model--->

        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Modal title
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post"  style="">
                            <div class="form-group">

                            <input
                                type="text"
                                class="form-control form-control-user"

                                id="exampleInputEmail"
                                aria-describedby="emailHelp"
                                placeholder="Title"
                            />
                            <input
                                v-model="form.body"
                                type="text"
                                class="form-control form-control-user"
                                id="exampleInputEmail"
                                aria-describedby="emailHelp"
                                placeholder="Body"
                                name="body"
                            />
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                        >
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "index",
    data() {
        return {
            posts: {} ,
            form :  new Form({
                id: "" ,
                body: "" ,
                title: ""
            })

        };
    },

    methods: {
        getPosts() {
               Fire.$emit('AffterCreate'),

            axios.get("api/post").then(({ data }) => (this.posts = data.data));


        } ,
        updatepost() {
            this.form.put('api/post/' + this.form.id);
        },

        deletedpost(id) {
             this.form.delete('/api/post/' + id).then(
               this.$Progress.start(),
             );
        }
    },

    created() {
        this.getPosts();
        Fire.$on('AffterCreate', () => {
        this.getPosts();
        });
    }

};
</script>
