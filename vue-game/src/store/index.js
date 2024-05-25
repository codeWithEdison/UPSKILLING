import { createStore } from 'vuex';
import axios from 'axios';

export default createStore({
  state: {
    users: []
  },
  mutations: {
    setUsers(state, users) {
      state.users = users;
    }
  },
  actions: {
    async fetchUsers({ commit }) {
      try {
        const response = await axios.get('https://jsonplaceholder.typicode.com/users');
        commit('setUsers', response.data);
      } catch (error) {
        console.error('Error fetching users:', error);
      }
    }
  },
  getters: {
    users: state => state.users
  }
});
