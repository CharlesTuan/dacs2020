use univille;

CREATE TABLE `usuario` 
(`id_usuario` int(11) NOT NULL AUTO_INCREMENT,
`nome` varchar(100) DEFAULT NULL,
`email` varchar(200) DEFAULT NULL,
`senha` varchar(200) DEFAULT NULL,
PRIMARY KEY (`id_usuario`));

CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nm_aluno` varchar(40) NOT NULL,
  `ds_endereco` varchar(40) NOT NULL,
  `ds_cidade` varchar(20) DEFAULT NULL,
  `ds_uf` varchar(10) DEFAULT NULL,
  `ds_email` varchar(200) DEFAULT NULL,
  `nr_celular` varchar(15) DEFAULT NULL,
  `nr_cpf` varchar(15) DEFAULT NULL
)

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `ds_curso` varchar(40) NOT NULL,
  `vl_cargahoraria` int(11) NOT NULL
);ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `inscricao_curso` (
  `idinscricao` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `aluno` ADD PRIMARY KEY (`idaluno`);

ALTER TABLE `curso` ADD PRIMARY KEY (`idcurso`);

ALTER TABLE `inscricao_curso` ADD PRIMARY KEY (`idinscricao`);
  
ALTER TABLE `aluno`MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `curso` MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `inscricao_curso` MODIFY `idinscricao` int(11) NOT NULL AUTO_INCREMENT;
  
CREATE USER 'bob'@'localhost' IDENTIFIED BY 'bob';

GRANT ALL PRIVILEGES ON univille.* TO 'bob'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;
