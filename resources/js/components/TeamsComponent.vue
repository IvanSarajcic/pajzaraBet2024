<template>
    <div>
        <h1>Teams</h1>
    </div>
</template>

<script>
    // TeamsComponent.vue   
    // take data from `teams` table and display it
    export default {
        data() {
            return {
                teams: []
            }
        },
        mounted() {
            axios.get('/api/teams')
                .then(response => {
                    this.teams = response.data
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }

</script>