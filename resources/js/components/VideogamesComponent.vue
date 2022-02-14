<template>
    <div>
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Rating</th>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    mounted() {
        axios.get()
    }
}
</script>

<style lang="scss" scoped>

    table {
        margin: 0 auto;

        th {
            padding: 5px 15px;
        }

        td {
            padding: 5px 15px;
        }
    }

</style>