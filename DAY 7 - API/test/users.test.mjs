// Import necessary modules
import { expect } from 'chai'; // Chai is an assertion library used for writing test assertions
import request from 'supertest'; // Supertest is used to make HTTP requests to test our API endpoints
import app from '../app.js'; // Import the Express app
import dbconn from '../db_connection.js'; // Import the database connection

// Before running the tests, establish a connection to the database
before(async () => {
  await dbconn.getConnection();
});

// After all tests are done, close the database connection
after(async () => {
  await dbconn.end();
});

// Describe a test suite for the User API
describe('User API', () => {

  // Test case: it should create a new user
  it('should create a new user', async () => {
    // Make a POST request to the /api/createUser endpoint
    const res = await request(app)
      .post('/api/createUser')
      .send({ username: 'testuser', password: 'password123' }) // Send a JSON body with username and password
      .expect(201); // Expect the HTTP status to be 201 (Created)
    // Assert that the response text is as expected
    expect(res.text).to.equal('User created successfully');
  });

  // Test case: it should fetch all users
  it('should fetch all users', async () => {
    // Make a GET request to the /api/users endpoint
    const res = await request(app)
      .get('/api/users')
      .expect(200); // Expect the HTTP status to be 200 (OK)
    // Assert that the response body is an array
    expect(res.body).to.be.an('array');
  });

  // Test case: it should fetch a user by ID
  it('should fetch a user by ID', async () => {
    // First, create a user to ensure there's a user to fetch
    await request(app)
      .post('/api/createUser')
      .send({ username: 'testuser2', password: 'password123' });

    // Make a GET request to the /api/users/1 endpoint
    const res = await request(app)
      .get('/api/users/2') // Assuming the user ID is 1
      .expect(200); // Expect the HTTP status to be 200 (OK)
    // Assert that the response body is an object
    expect(res.body).to.be.an('object');
    // Assert that the username is 'testuser2'
    expect(res.body.username).to.equal('testuser2');
  });

  // Test case: it should update a user
  it('should update a user', async () => {
    // Make a PUT request to the /api/updateUser/1 endpoint
    const res = await request(app)
      .put('/api/updateUser/2')
      .send({ username: 'updateduser', password: 'newpassword123' }) // Send a JSON body with new username and password
      .expect(200); // Expect the HTTP status to be 200 (OK)
    // Assert that the response text is as expected
    expect(res.text).to.equal('User updated successfully');
  });

  // Test case: it should delete a user
  it('should delete a user', async () => {
    // Make a DELETE request to the /api/deleteUser/1 endpoint
    const res = await request(app)
      .delete('/api/deleteUser/2')
      .expect(200); // Expect the HTTP status to be 200 (OK)
    // Assert that the response text is as expected
    expect(res.text).to.equal('User deleted successfully');
  });
});
