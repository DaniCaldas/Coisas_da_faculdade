create table gravadora(
	grav_cod integer,
	grav_nome varchar(100),
	grav_end varchar(150),
	constraint pk_grav primary key(grav_cod)
);

create table cd(
	cd_cod integer,
	cd_grav_cod integer,
	cd_nome varchar(150),
	cd_valor numeric(6,2),
	cd_data_lancamento date,
	constraint pk_cd primary key(cd_cod),
	constraint fk_grav foreign key(cd_grav_cod) references gravadora(grav_cod)
);

create table musica(
	mus_code integer,
	mus_nome varchar(150),
	mus_duracao integer,
	mus_faixa integer,
	constraint pk_mus primary key(mus_code)
);

create table autor(
	autor_cod integer,
	autor_nome varchar(150),
	constraint pk_autor primary key(autor_cod)
);

create table item_cd(
	item_mus_cod integer,
	item_cd_cod integer,
	constraint pk_item_mus_cd_cod primary key(item_mus_cod,item_cd_cod),
	constraint fk_item_mus_cod foreign key(item_mus_cod) references musica(mus_code),
	constraint fk_item_cd_cod foreign key(item_cd_cod) references cd(cd_cod)
);

create table musica_autor(
	mus_cod integer,
	autor_cod integer,
	constraint pk_mus_aut_cod primary key(mus_cod, autor_cod),
	constraint fk_mus_cod foreign key(mus_cod) references musica(mus_code),
	constraint fk_aut_cod foreign key(autor_cod) references autor(autor_cod)
);


//DML

select * from cd
select * from gravadora
select * from autor