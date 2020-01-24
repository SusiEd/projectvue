<template>
	<div>
	<h2>Hallo Susi</h2>
        {{message}}
	</div>
</template>
<script>
 export default {
 	data() {
 		return {
 			message: 'Hallo Webler'
 		}
 	}
 }
</script>
<style scoped lang="css">
h2 {
	color: red;
}

</style>
