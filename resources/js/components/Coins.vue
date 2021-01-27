<template>
	<v-container>
		</hr>
		<p>
			<ul>
				<li v-for="(coin, index) in coins">
					{{ coin.name }} 
				</li>
				<li> <a href="http://localhost:5000"> a cat </a></li>
			</ul>

		</p>
	</v-container>
</template>

<script>
export default {
	data() {
		return {
			coins : [
				{name: 'btc', price: 11000},
				{name: 'eth', price: 3000}
			]
		}
	},
	mounted() {
	}
}
</script>

<style scoped></style>
