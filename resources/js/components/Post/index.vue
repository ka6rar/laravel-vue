<template>
    <div>
        <table class="table">
  <thead >
    <tr >
      <th scope="col">BOdy</th>
      <th scope="col">Title</th>
      <th scope="col">OTher</th>
    </tr>
  </thead>
  <tbody >
  <div v-for="post in posts" :key="post.id">
    <tr>
      <td>{{post.body}}</td>
      <td>{{post.title}}</td>
      <td>
        <router-link to="/index"> Edit</router-link>
        <router-link to="/index"> Delete</router-link>
      </td>
    </tr>
  </div>

  </tbody>
</table>
    </div>
</template>
<script>
export default {
    name: "index" ,
    data() {
        return {
            posts: {}
        }
    } ,
    methods: {
         loadUsers() {
            axios.get('/api/post').then(({
                data
            }) => (this.posts = data.data));
        },
        created() {
             this.loadUsers()
        },
    }
}
</script>
