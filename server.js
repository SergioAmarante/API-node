const express = require("express");
const cors = require("cors"); 
const { resolveSoa } = require("dns");
const app = express();
const port = 3005;

app.use(cors());
app.use(express.json());
app.get('/',(req, res, next)=>{
    const mysql = require ("mysql");
    const connection = mysql.createConnection({ 
        host: 'localhost', 
        user: 'root',
        password: '',
        database: 'sergio'
    })
    connection.query(("select * from produtos;"),
    (error,result) => {
        res.json(result)
    })
});

app.post('/contato',(req, res, next)=>{
    const mysql = require ("mysql");
    const connection = mysql.createConnection({ 
        host: 'localhost', 
        user: 'root',
        password: '',
        database: 'sergio'
    })
    let dados =[];
    dados.push({
      nome: req.body.nome, 
      email: req.body.email,
      comentario: req.body.comentario,
    });

    connection.query("insert into contato set ?",dados,()=>{
        dados = []
        return res.json({messagem:"Dados Enviados com Sucesso"})
    })
});





app.listen(port,()=>{
    console.log(`O servidor esta rodando ${port}`)
})