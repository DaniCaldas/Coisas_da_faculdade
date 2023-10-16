create table cliente(
 numero integer,
 nome varchar(100) not null,
 endereco varchar(200) not null,
 constraint pk_cli primary key (numero)
);
create table carro (
 registro integer,
 marca varchar(50) not null,
 modelo varchar(50) not null,
 cor varchar(50) not null,
 constraint pk_carro primary key (registro)
);
create table apolice (
 numero integer,
 valor numeric(10,2) not null check (valor > 0),
 dt_inicio date not null,
 dt_fim date not null,
 num_cliente integer not null,
 reg_carro integer not null,
 constraint pk_apolice primary key (numero),
 constraint fk_apolice_cli foreign key (num_cliente)
 references cliente(numero),
 constraint fk_apolice_car foreign key (reg_carro)
 references carro(registro)
);
create table acidente (
 codigo integer,
 data date not null,
 hora time not null,
 local varchar(200) not null,
 constraint pk_acidente primary key (codigo)
);
create table apolice_acidente(
 num_apolice integer,
 cod_acidente integer,
 constraint pk_ap_ac primary key (num_apolice,cod_acidente),
 constraint pk_ac_apolice foreign key (num_apolice)
 references apolice(numero),
 constraint pk_ac_acidente foreign key (cod_acidente)
 references acidente(codigo)
);

-- exercício 1
select c.marca, c.modelo, c.cor 
from carro as c
where c.cor ilike 'verm%'

-- exercício 2
select ac.local, ac.data
from acidente as ac
where ac.data between '2023-05-01' and '2023-05-31'

-- exercício 3
select ap.numero, ap.valor, c.nome
from apolice as ap, cliente as c
where ap.num_cliente = c.numero
order by ap.valor desc

-- exercício 4
select ap.numero "APOLICE", c.nome "CLIENTE", ca.marca "CARRO", ap.dt_inicio
from apolice as ap, cliente as c, carro as ca
where ap.num_cliente = c.numero and ap.reg_carro = ca.registro
and ap.dt_inicio between '2023-04-01' and '2023-04-30'
order by c.nome;

-- exercicio 5

select ac.data, ac.hora, ac.local, c.modelo, c.cor
from apolice_acidente as acp, acidente as ac, apolice as ap, carro as c
where acp.cod_acidente = ac.codigo and acp.num_apolice = ap.numero
and ap.reg_carro = c.registro
and c.modelo like '%20' and c.cor like '%fite'
order by ac.data , ac.hora

-- exercício 6
select c.marca, cl.nome,ac.data
from carro c, cliente cl, apolice ap, acidente ac, apolice_acidente apl
where apl.num_apolice = ap.numero and apl.cod_acidente = ac.codigo 
and ap.reg_carro = c.registro and ap.num_cliente = cl.numero
and ac.data between '2023-05-01' and '2023-05-31'