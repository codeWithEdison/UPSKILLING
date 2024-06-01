import express from 'express';
import dbconn from './db_connection.js';

const app = express();

app.use(express.json());

// Create a user
app.post('/api/createUser', (req, res) => {
  const { username, password } = req.body;
  const sql = "INSERT INTO users (username, password) VALUES (?, ?)";
  dbconn.query(sql, [username, password], (err, result) => {
    if (err) {
      console.log('Error executing query', err);
      res.status(500).send('Error in creating user');
      return;
    }
    res.status(201).send('User created successfully');
  });
});

// Read all users
app.get('/api/users', (req, res) => {
  dbconn.query("SELECT * FROM users", (err, result) => {
    if (err) {
      console.log('Error executing query', err);
      res.status(500).send('Error in fetching users');
      return;
    }
    res.json(result);
  });
});

// Read one user by ID
app.get('/api/users/:id', (req, res) => {
  const { id } = req.params;
  const sql = "SELECT * FROM users WHERE id = ?";
  dbconn.query(sql, [id], (err, result) => {
    if (err) {
      console.log('Error executing query', err);
      res.status(500).send('Error in fetching user');
      return;
    }
    if (result.length === 0) {
      res.status(404).send('User not found');
      return;
    }
    res.json(result[0]);
  });
});

// Update a user
app.put('/api/updateUser/:id', (req, res) => {
  const { id } = req.params;
  const { username, password } = req.body;
  const sql = "UPDATE users SET username = ?, password = ? WHERE id = ?";
  dbconn.query(sql, [username, password, id], (err, result) => {
    if (err) {
      console.log('Error executing query', err);
      res.status(500).send('Error in updating user');
      return;
    }
    if (result.affectedRows === 0) {
      res.status(404).send('User not found');
      return;
    }
    res.send('User updated successfully');
  });
});

// Delete a user
app.delete('/api/deleteUser/:id', (req, res) => {
  const { id } = req.params;
  const sql = "DELETE FROM users WHERE id = ?";
  dbconn.query(sql, [id], (err, result) => {
    if (err) {
      console.log('Error executing query', err);
      res.status(500).send('Error in deleting user');
      return;
    }
    if (result.affectedRows === 0) {
      res.status(404).send('User not found');
      return;
    }
    res.send('User deleted successfully');
  });
});

// Start the server
app.listen(8085, () => {
  console.log('Server is running on port 8085');
});

export default app