create table Cargo(
 codigo numeric(5),
 nome varchar(100) not null,
 salario_base numeric(10,2) not null,
 Constraint pk_cargo_cod Primary Key (codigo)
);

create table Cidade(
 codigo numeric(5),
 nome varchar(100) not null,
 Constraint pk_cidade_cod Primary Key (codigo)
);
create table Departamento(
 codigo numeric(5),
 nome varchar(100) not null,
 Constraint pk_depto_cod Primary Key (codigo)
);
create table Funcionario(
 codigo numeric(5),
 nome varchar(100) not null,
 telefone varchar(50) null,
 salario numeric(10,2) not null,
 cod_cargo numeric(5) not null,
 cod_cidade numeric(5) not null,
 cod_depto numeric(5) not null,
 gerente numeric(5),
 Constraint pk_func_cod Primary Key (codigo),
 Constraint fk_func_cargo Foreign Key(cod_cargo)
References Cargo(codigo),
 Constraint fk_func_cidade Foreign Key(cod_cidade)
References Cidade(codigo),
 Constraint fk_func_depto Foreign Key(cod_depto)
References Departamento(codigo),
 Constraint fk_func_gerente Foreign Key(gerente)
References Funcionario(codigo)
);



--- exercicio 1
select f.nome, f.salario
from Funcionario as f
where f.salario between 6000 and 8000


--exercicio 2
select f.nome, c.nome 
from Funcionario as f, Cargo as c
where f.cod_cargo = c.codigo
order by f.nome

-- exercicio 3
select d.nome, f.nome 
from Departamento d join Funcionario f
on d.codigo = f.cod_depto
order by d.nome

-- exercicio 4
select f.nome, f.salario, d.nome
from Funcionario as f join Departamento as d
on f.cod_depto = d.codigo
and d.nome = 'compras'

-- exercicio 5
select f.nome, c.nome
from Funcionario f join Cidade c
on f.cod_cidade = c.codigo
and c.nome like 'São%'

-- exercicio 6
select f.nome, f.salario, ca.nome, c.nome
from Funcionario f, Cidade c, Cargo ca
where f.cod_cidade = c.codigo and f.cod_cargo = ca.codigo
and c.nome = 'Campinas'
order by f.salario desc

-- exercicio 7
select f.nome, c.nome, d.nome, ca.nome
from Funcionario f, Cidade c, Departamento d, Cargo ca
where f.cod_cidade = c.codigo and f.cod_depto = d.codigo and f.cod_cargo = ca.codigo
and ca.nome = 'estagiario'

-- exercicio 8
select f.nome,f.gerente, c.nome
from Funcionario f join Cargo c
on f.cod_cargo = c.codigo
and f.gerente = 1
order by f.nome