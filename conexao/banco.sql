CREATE DATABASE bdEspectrum;

--DROP DATABASE bdEspectrum;

USE bdEspectrum;

/* Tabela das mensagens recebidas pelo contato*/
CREATE TABLE tbContato (
    idContato INT PRIMARY KEY AUTO_INCREMENT
    ,nomeContato VARCHAR (120)
    ,emailContato VARCHAR (90)
    ,mensagemContato VARCHAR (15500)
);