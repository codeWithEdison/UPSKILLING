import { expect } from 'chai';
import dbconn from '../db_connection.js';
import app from '../app.js';
import request from 'supertest';

before((done) => {
  dbconn.connect(done);
});

after((done) => {
  dbconn.end(done);
});

// TEST CASES:  it should create a  new user
describe('USER API', () => {
  it('should create new user', (done) => {
    request(app)
      .post('/api/createUser')
      .send({ username: 'test_username', password: 'test_password' })
      .expect(201)
      .end((err, res) => {
        if (err) return done(err);
        expect(res.text).to.equal('User created successfully');
        done();
      });
  });

  // test case : it should fetch all user
  it('it should fetch all user', ()=>{
    request(app)
    .get('/api/users')
    .expect(200)
    .end((err, res) =>{
        if(err) return done(err);
        expect(res.body).to.be.an('array')
    }
)

  })
  it('should fetch a user by ID', (done) => {
    request(app)
      .post('/api/createUser')
      .send({ username: 'testuser2', password: 'password123' })
      .end((err, res) => {
        if (err) return done(err);
        request(app)
          .get('/api/users/6') // Assuming the user ID is 1
          .expect(200)
          .end((err, res) => {
            if (err) return done(err);
            expect(res.body).to.be.an('object');
            expect(res.body.username).to.equal('testuser2');
            done();
          });
      });
  });

  it('should update a user', (done) => {
    request(app)
      .put('/api/updateUser/7')
      .send({ username: 'updateduser', password: 'newpassword123' })
      .expect(200)
      .end((err, res) => {
        if (err) return done(err);
        expect(res.text).to.equal('User updated successfully');
        done();
      });
  });

  it('should delete a user', (done) => {
    request(app)
      .delete('/api/deleteUser/8')
      .expect(200)
      .end((err, res) => {
        if (err) return done(err);
        expect(res.text).to.equal('User deleted successfully');
        done();
      });
  });
});
