create table departamento(
	codigo integer,
	nome varchar(25),
	constraint e primary key (codigo)
);

create table cidade(
	codigo integer,
	nome varchar(30),
	constraint pk_cid primary key (codigo)
);

create table cargo(
	codigo integer,
	nome varchar(30),
	salario_base numeric(6,2)
	constraint pk_cargo primary key (codigo)
);

create table funcionario(
	codigo integer not null,
	nome varchar(100) not null,
	telefone integer,
	salario numeric(6,2),
	cod_depto integer,
	cod_cidade integer,
	cod_cargo integer,
	constraint pk_func primary key (codigo),
	constraint fk_depto foreign key (cod_depto) references departamento(codigo),
	constraint fk_cidade foreign key (cod_cidade) references cidade(codigo),
	constraint fk_cargo foreign key (cod_cargo) references cargo(codigo)
);

-- exercicio 4
select nome,salario from funcionario
where salario > 10000.00

--exercicio 5
select nome,salario from funcionario
where salario < 500.00

--exercicio 6
select sum(salario), avg(salario) 
from funcionario
group by nome

--exercicio 7
select sum(salario), avg(salario)
from funcionario 
where salario < 1000

--exercicio 8
select max(salario)
from funcionario

-- exercicio 9
select min(salario)
from funcionario

--exercicio 10 
select count(*)
from funcionario

-- exercicio 11
select sum(salario)
from funcionario

-- exercicio 12
select d.nome, sum(salario)
from funcionario f join departamento d on f.cod_depto = d.codigo
group by (d.nome)

-- exercicio 13
select nome 
from funcionario
order by nome

-- exercicio 14
select nome
from funcionario
order by nome desc

-- exercicio 15
select nome, salario
from funcionario
where salario > 200.00

-- exercicio 16
select f.nome, f.salario, d.nome
from funcionario f join departamento d on f.cod_depto = d.codigo
where f.salario > 200 and f.cod_depto = 1

--exercici 17