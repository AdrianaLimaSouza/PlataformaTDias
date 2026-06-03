

INSERT INTO niveis (id, nome) VALUES
(1,'Iniciante'),
(2,'Intermédio'),
(3,'Avançado'),
(4,'Especialista'),
(5,'Master');



INSERT INTO categorias (id, nome) VALUES
(1,'Programação'),
(2,'Design'),
(3,'Marketing'),
(4,'Base de Dados'),
(5,'Inteligência Artificial');



INSERT INTO formador
(id,nome,telefone,morada,email,password)
VALUES
(1,'Tiago Dias',912345678,'Lisboa','tiago@tdias.pt','123456'),
(2,'Maria Santos',923456789,'Porto','maria@tdias.pt','123456'),
(3,'João Costa',934567890,'Coimbra','joao@tdias.pt','123456'),
(4,'Ana Ferreira',945678901,'Braga','ana@tdias.pt','123456'),
(5,'Pedro Lopes',956789012,'Faro','pedro@tdias.pt','123456');




INSERT INTO alunos
(id,nome,telefone,morada,email,password)
VALUES
(1,'Ana Silva','911111111','Lisboa','ana@email.pt','123456'),
(2,'Carlos Costa','922222222','Porto','carlos@email.pt','123456'),
(3,'Mariana Lopes','933333333','Braga','mariana@email.pt','123456'),
(4,'Sofia Rocha','944444444','Faro','sofia@email.pt','123456'),
(5,'Ricardo Pinto','955555555','Aveiro','ricardo@email.pt','123456');



INSERT INTO cursos
(
id,
id_formador,
id_categorias,
id_niveis,
nome,
valor,
duracao,
imagem,
conteudo,
sobre
)
VALUES

(
1,
1,
1,
1,
'Desenvolvimento Web Completo',
199.99,
40,
'curso-web.jpg',
'HTML,CSS,JavaScript e PHP',
'Curso completo de desenvolvimento web'
),

(
2,
2,
2,
2,
'Design UI/UX Profissional',
149.99,
25,
'curso-design.jpg',
'Figma, UX e prototipagem',
'Curso de design profissional'
),

(
3,
3,
3,
2,
'Marketing Digital Avançado',
179.99,
30,
'curso-marketing.jpg',
'SEO, Google Ads e Redes Sociais',
'Curso de marketing digital'
),

(
4,
4,
4,
3,
'MySQL Completo',
129.99,
20,
'curso-mysql.jpg',
'Consultas SQL e modelação',
'Curso de bases de dados'
),

(
5,
5,
5,
4,
'Introdução à Inteligência Artificial',
249.99,
50,
'curso-ia.jpg',
'Machine Learning e IA',
'Fundamentos de Inteligência Artificial'
);



INSERT INTO matriculas
(
matricula,
id_alunos,
id_cursos,
estado,
concluido,
data
)
VALUES

(1,1,1,1,0,'2026-05-01'),
(2,2,2,1,1,'2026-05-02'),
(3,3,3,1,0,'2026-05-03'),
(4,4,4,1,1,'2026-05-04'),
(5,5,5,1,0,'2026-05-05');




INSERT INTO contacto
(
id,
nome,
email,
assunto,
mensagem,
data
)
VALUES

(
1,
'Ana Silva',
'ana@email.pt',
'Informações',
'Gostaria de obter mais informações sobre os cursos.',
'2026-05-01'
),

(
2,
'Carlos Costa',
'carlos@email.pt',
'Pagamento',
'Tenho dúvidas sobre o pagamento.',
'2026-05-02'
),

(
3,
'Mariana Lopes',
'mariana@email.pt',
'Suporte',
'Não consigo entrar na minha conta.',
'2026-05-03'
),

(
4,
'Sofia Rocha',
'sofia@email.pt',
'Certificados',
'Como obtenho o certificado?',
'2026-05-04'
),

(
5,
'Ricardo Pinto',
'ricardo@email.pt',
'Sugestão',
'Gostaria de sugerir novos cursos.',
'2026-05-05'
);



INSERT INTO dadosempresa
(email,telefone,
morada
)
VALUES

('suporte@tdias.pt',210000002,'Porto');

