/* Criando as tabelas Aluno, Responsavel e Parentesco */

Create table Aluno (
  Id INT NOT NULL PRIMARY KEY,
  Nome VARCHAR(255)
);

Create table Responsavel (
  Id INT NOT NULL PRIMARY KEY,
  Nome VARCHAR(255)
);

Create table Parentesco (
  IdResponsavel INT NOT NULL,
  IdAluno INT NOT NULL,
  Parentesco VARCHAR(255),

  CONSTRAINT fk_IdResponsavel FOREIGN KEY(IdResponsavel) REFERENCES Responsavel(Id),
  CONSTRAINT fk_IdAluno FOREIGN KEY(IdAluno) REFERENCES Aluno(Id)
);

/* 01. Inserindo os dados solicitados nas respectivas tabelas. */

INSERT INTO Aluno (Id, Nome) VALUES (1, "Lucas");
INSERT INTO Responsavel (Id, Nome) VALUES (1, "Pablo");
INSERT INTO Responsavel (Id, Nome) VALUES (2, "Brenda");

INSERT INTO Parentesco (IdResponsavel, IdAluno, Parentesco) VALUES (1, 1, "Pai");
INSERT INTO Parentesco (IdResponsavel, IdAluno, Parentesco) VALUES (2, 1, "Mãe");

/* 02. Consulta SQL para retornar os dados conforme a tabela indicada. */

SELECT Aluno.nome, r1.nome as Responsável, p1.parentesco, r2.nome as Responsável, p2.parentesco
FROM Aluno
INNER JOIN Parentesco as p1, Responsavel as r1 ON r1.Id = 1 AND p1.IdResponsavel = r1.Id
INNER JOIN Parentesco as p2, Responsavel as r2 ON r2.Id = 2 AND p2.IdResponsavel = r2.Id;

/* Bônus
Consulta SQL para retornar o nome do aluno e os nomes de seus respectivos pai e mãe. */

Select Aluno.nome as Filho, r1.nome as Pai, r2.nome as Mãe
FROM Aluno
INNER JOIN Parentesco as p1, Responsavel as r1 ON r1.Id = 1 AND p1.Parentesco = 'Pai'
INNER JOIN Parentesco as p2, Responsavel as r2 ON r2.Id = 2 AND p2.Parentesco = 'Mãe';