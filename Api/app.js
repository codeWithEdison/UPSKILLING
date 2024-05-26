const express = require('express');
const app = express();
app.use(express.json)

const books = [
    { id: 1, title: 'web development', author: 'george orwell' },
    { id: 2, title: 'javascript', author: 'john smith' },
    { id: 3, title: 'python', author: 'jane doe' },
    { id: 4, title: 'java', author: 'john smith' }
];
app.get('/', (req, res) => {
    res.send('hello world')
});
app.get('/books', (req, res) => {
    res.json(books); // This will send the books array as a JSON response
});


// information of specific book
app.get('/books/:id', (req, res) => {
    const book = books.find(b => b.id == parseInt(req.params.id));
    if (!book) return res.status(404).send('Book not found');
    res.json(book);
});
app.post('/books', (req, res)=>{
    const newbook = {
        id: books.lenght+1,
        title: req.body.title,
        author: req.body.author
    }
    books.push(newbook)
    res.status(201).json(newbook)
})
// update a book by id
// app.put('/books/id', (req,res) =>{
    
// })
app.listen(3005, () => {
    console.log('Server is running on port 3005'); // Corrected this to log the message to the console
});
