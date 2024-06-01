const express = require('express');
const mysql = require('mysql2');
const dbconn = require('./db_connection');
const crypto = require('crypto')

const app = express();
// 3A
// jwt 

app.use(express.json());

// function to ecrypt password
function encryptPassword(password){
  const secret = crypto.randomBytes(32).toString('hex')
  const passbuff = Buffer.from(password, 'utf-8')
  const hash = crypto.Hmac('sha256', secret)
  .update(passbuff)
  .digest('hex')
  return hash
}
// Create a user
app.post('/api/createUser', (req, res) => {
  const { username, password } = req.body;
  const encryptedpassword = encryptPassword(password)
  const sql = "INSERT INTO users (username, password) VALUES (?, ?)";
  dbconn.query(sql, [username, encryptedpassword], (err, result) => {
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
app.put('/api/updateUser/:id', async(req, res) => {
  const { id } = req.params;
  const { username, password } = req.body;
  const sql = "UPDATE users SET username = ?, password = ? WHERE id = ?";
 await dbconn.query(sql, [username, password, id], (err, result) => {
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
app.delete('/api/deleteUser/:id', async (req, res) => {
  const { id } = req.params;
  const sql = "DELETE FROM users WHERE id = ?";
   await dbconn.query(sql, [id], (err, result) => {
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