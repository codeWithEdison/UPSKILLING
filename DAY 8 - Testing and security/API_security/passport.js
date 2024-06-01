const express = require('express');
const passport = require('passport');
const LocalStrategy = require('passport-local').Strategy;
const bcrypt = require('bcrypt');

const app = express();

// initialise passport.js
app.use(passport.initialize());

// example user db
const users = [
    {
        "id": 30,
        "username": "kvn",
        "password": "5e145e1c8830aaea9c81bf35d64627b581933373344294f0b294674d75309a18",
        "created_at": "2024-05-27T13:51:19.000Z"
    }
];

passport.use(new LocalStrategy(
    async function(username, password, done) {
        const userFound = users.find(user => user.username === username);
        if (!userFound) {
            return done(null, false, { message: 'Incorrect username' });
        }
        try {
            if (!await bcrypt.compare(password, userFound.password)) {
                return done(null, false, { message: 'Incorrect password' });
            }
            return done(null, userFound);
        } catch (err) {
            return done(err);
        }
    }
));

app.post('/login', passport.authenticate('local', { session: false }), (req, res) => {
    res.send('Login successfully');
});

app.listen(4000, () => {
    console.log('Server is running on port 4000');
});
