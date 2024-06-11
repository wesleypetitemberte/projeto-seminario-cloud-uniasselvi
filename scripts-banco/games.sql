create database 'locadora-games';

create table games (
  id int primary key auto_increment,
  nome varchar(255) not null,
  genero varchar(255) not null,
  plataforma varchar(255) not null,
  preco decimal not null,
  imagem varchar(2000) not null
);

insert into games (nome, genero, plataforma, preco, imagem) values ('Mario Bros', 'Classico', 'Nintendo', 20, 'https://supermario-game.com/static/images/gp1-2.jpg');

select * from games;