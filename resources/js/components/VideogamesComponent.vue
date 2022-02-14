<template>
    <div>
        <table border="1">
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Rating</th>
                <th>Action</th>
            </tr>

            <tr v-for="videogame in videogameList" :key="videogame.id" >
                <td >{{ videogame.id }}</td>
                <td >{{ videogame.title }}</td>
                <td >{{ videogame.subtitle }}</td>
                <td >{{ videogame.rating }}</td>
                <td>
                    <button @click="deleteVideogame(videogame.id)" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
        videogameList : [],
        }
    },
    mounted() {
        axios.get('/api/get/videogames')
        .then((res) => this.videogameList = res.data)
        .catch((e) => console.log(e));

        console.log(this.videogameList);
    },

    methods: {
        deleteVideogame(id){
            axios.get(`/delete/videogame/${id}`)
            .then((res) => {
               let ind = this.matchVideogameDelete(id);
               this.videogameList.splice(ind, 1);
            })
            .catch(e => console.log(e));
        },

        matchVideogameDelete(index){
            // this.videogameList.forEach(videogame => {
                
            // });
            for(let x = 0; x<= this.videogameList.length; x++){
                if(index == this.videogameList[x].id){
                    return x
                }
            }
                return -1;


        }
    }
}
</script>

<style lang="scss" scoped>

    table {
        margin: 0 auto;

        th {
            padding: 5px 15px;
            font-size: 18px;
        }

        td {
            padding: 5px 15px;
        }
    }

</style>