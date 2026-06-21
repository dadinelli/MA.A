<template>
    <form class="homeform" action="./projects.php" method="post">
        <label for="projectTitle">Nome progetto</label>
        <input id="projectTitle" value="projectTitle" type="text" placeholder="" required v-model="projectTitle">

        <label for="coverImg">Immagine di copertina</label>
        <input id="coverImg" value="coverImg" type="file" required v-model="coverImg">

        <label for="importance">Importanza</label>
        <input id="importance" value="importance" type="number" required v-model="importance">

        <label for="position">Posizione</label>
        <input id="position" value="position" type="number" required v-model="position">

        <Button type="submit">Submit</button>
    </form>

    <p>projectTitle: {{ projectTitle }}</p>
    <p>coverImg: {{ coverImg }}</p>
    <p>importance: {{ importance }}</p> 
</template>

<script>
export default{
    data() {
        return{
            prohectTitle: '',
            coverImg: '',
            importance: '',
        }
    }
}
</script>