<template>
    <div class="user-table-container">
        <h1>user data</h1>
        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>CITY</th>
                </tr>

            </thead>
            <tbody>
                <tr v-for="user in users" :key="user.id">
                <td>{{user.name}}</td>
                <td>{{user.username}}</td>
                <td>{{user.email}}</td>
                <td>{{user.address.city}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
// Importing axios for making HTTP requests
import axios from 'axios';

export default {
  // The name of the component
  name: 'UserTable',
  // The data function returns an object containing reactive data properties
  data() {
    return {
      // Initialize an empty array to hold the user data
      users: [],
    };
  },
  // The mounted lifecycle hook is called after the component is inserted into the DOM
  mounted() {
    // Call the fetchUsers method to load user data
    this.fetchUsers();
  },
  // Methods section for defining functions used in the component
  methods: {
    // Async function to fetch user data from the API
    async fetchUsers() {
      try {
        // Send a GET request to the JSONPlaceholder API to fetch user data
        const response = await axios.get('https://jsonplaceholder.typicode.com/users');
        // Update the users array with the data from the response
        this.users = response.data;
      } catch (error) {
        // Log any errors to the console
        console.error('Error fetching users:', error);
      }
    },
  },
};
</script>


<style scoped>
/* Scoped styles for the component */

/* Container for the table and heading */
.user-table-container {
  margin: 0 auto; /* Center the container */
  padding: 20px; /* Add padding around the container */
  width: 1000% ;/* Set a maximum width for the container */
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for better appearance */
  border-radius: 8px; /* Rounded corners for the container */
}

/* Style for the table */
.user-table {
  width: 100%; /* Make the table take the full width of its container */
  border-collapse: collapse; /* Collapse borders to create a single border */
  margin: 20px 0; /* Add some margin above and below the table */
}

/* Style for table headers */
.user-table th {
  background-color: #4CAF50; /* Green background for headers */
  color: white; /* White text color for headers */
  padding: 10px; /* Add padding inside header cells */
  border: 1px solid #ddd; /* Light grey border for headers */
  text-align: left; /* Align text to the left */
}

/* Style for table cells */
.user-table td {
  padding: 10px; /* Add padding inside table cells */
  border: 1px solid #ddd; /* Light grey border around each cell */
  text-align: left; /* Align text to the left */
}

/* Add alternating row colors for better readability */
.user-table tbody tr:nth-child(odd) {
  background-color: #f2f2f2; /* Light grey background for odd rows */
}

.user-table tbody tr:hover {
  background-color: #e0e0e0; /* Slightly darker background on hover */
}
</style>