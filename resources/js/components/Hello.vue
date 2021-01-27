<template>
	<v-container>
		<v-row v-if="user">
			<v-col cols="12"> Welcome {{ user.uid }}  </v-col>

			<v-col cols="12">
				<v-btn color="warning" @click="logout">
					Logout
				</v-btn>
			</v-col>
		</v-row>
		<v-form v-else>
			<v-text-field
			v-model="uid"
			label="Username"
			:rules="[rules.required]"
			:counter="10"
			maxlength="10">
			</v-text-field>

			<v-text-field
			v-model="pw"
			:type="show ? 'text' : 'password'"
			label="Password"
			:rules="[rules.required]"
			:append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
			@click:append="show = !show"
			:counter="10">
			</v-text-field>


			<v-btn color="warning" @click="login">
				Login
			</v-btn>
		</v-form>
	</v-container>
</template>

<script>
import axios from 'axios';
export default {
	data() {
		return {
			user  : JSON.parse(localStorage.getItem('user')),
			uid   : null, 
			pw    : null,
			show  : false,
			rules : {
				required : value => !!value || 'Required.',
			}
		}
	},
	methods : {
		login : async function() {
			let res =  await axios.post('/login', {
				uid : this.uid,
				pw  : this.pw
			});
			localStorage.setItem('user', JSON.stringify(res.data.user));
			this.user = JSON.parse(localStorage.getItem('user'));
			console.log(this.user);
		},
		logout : function() {
			localStorage.removeItem('user');
			this.user = null;
		}
	},
	mounted() {
	}
}
</script>
