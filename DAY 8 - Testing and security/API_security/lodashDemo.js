const _ = require('lodash')
const express = require('express')

const app=  express()
app.use(express.json())

// example : find unique element in array
app.post('/api/unique',async (req, res) =>{
    const arr = req.body.array;
    const uniqueelt = await _.uniq(arr);
    res.send(uniqueelt)
})
app.listen(3000, ()=>
{console.log("server is running on port 3000....");})
