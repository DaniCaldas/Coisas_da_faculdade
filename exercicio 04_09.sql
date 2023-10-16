create table alunos(
	rgm_alu integer,
	nome_alu varchar(20) not null,
	endereco_alu varchar(60) not null,
	telefone_alu numeric(10),
	constraint pk_rgm_alu primary key(rgm_alu)
);

create table disciplina(
	id integer,
	nome varchar(15) not null,
	imenta text,
	carga_horaria integer,
	constraint pk_disc primary key(id)
);

create table notas(
	rgm_alu integer,
	id_disc integer,
	nota1 numeric(4,2),
	nota2 numeric(4,2),
	media numeric(4,2),
	faltas integer,
	constraint pk_nota primary key(rgm_alu,id_disc),
	constraint fk_nota_aluno foreign key(rgm_alu) references alunos(rgm_alu),
	constraint fk_nota_disc foreign key(id_disc) references disciplina(id)
);