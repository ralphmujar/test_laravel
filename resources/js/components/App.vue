<template>
	<v-app>
		<v-app-bar app dark>
			<v-tabs>
					<v-tab :to="{name : 'Hello'}"> Home </v-tab>
					<v-tab :to="{name : 'About'}"> About </v-tab>
					<v-tab :to="{name : 'Coins'}"> Coins </v-tab>
			</v-tabs>
		</v-app-bar>

		<v-main>
			<router-view />
		</v-main>
	</v-app>
</template>

<script>
export default {
	mounted() {
	}
}
</script>
