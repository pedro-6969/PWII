-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS sistema_ebooks;
USE sistema_ebooks;

-- Tabela Autor
CREATE TABLE IF NOT EXISTS autor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    biografia TEXT,
    foto VARCHAR(255),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela Editora
CREATE TABLE IF NOT EXISTS editora (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    site VARCHAR(255),
    email VARCHAR(255),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela Categoria
CREATE TABLE IF NOT EXISTS categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela Usuario
CREATE TABLE IF NOT EXISTS usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('admin', 'comum') DEFAULT 'comum',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabela Ebook
CREATE TABLE IF NOT EXISTS ebook (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT,
    isbn VARCHAR(20) NOT NULL UNIQUE,
    data_publicacao DATE,
    preco DECIMAL(10, 2) NOT NULL,
    idioma VARCHAR(50),
    foto VARCHAR(255),
    editora_id INT,
    autor_id INT,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (editora_id) REFERENCES editora(id) ON DELETE SET NULL,
    FOREIGN KEY (autor_id) REFERENCES autor(id) ON DELETE SET NULL
);

-- Tabela de relacionamento Ebook_Categoria (N para N)
CREATE TABLE IF NOT EXISTS ebook_categoria (
    ebook_id INT,
    categoria_id INT,
    data_associacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ebook_id, categoria_id),
    FOREIGN KEY (ebook_id) REFERENCES ebook(id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id) ON DELETE CASCADE
);

-- Tabela Avaliacao
CREATE TABLE IF NOT EXISTS avaliacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nota INT CHECK (nota BETWEEN 1 AND 5),
    comentario TEXT,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario_id INT,
    ebook_id INT,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id) ON DELETE CASCADE,
    FOREIGN KEY (ebook_id) REFERENCES ebook(id) ON DELETE CASCADE,
    UNIQUE KEY unique_avaliacao (usuario_id, ebook_id)
);

-- Inserir alguns dados de exemplo
INSERT INTO autor (nome, biografia, foto) VALUES
('Machado de Assis', 'Escritor brasileiro, considerado o maior nome da literatura nacional.', 'machado.jpg'),
('Clarice Lispector', 'Escritora e jornalista brasileira nascida na Ucrânia.', 'clarice.jpg');

INSERT INTO editora (nome, site, email) VALUES
('Companhia das Letras', 'www.companhiadasletras.com.br', 'contato@companhiadasletras.com.br'),
('Editora Rocco', 'www.rocco.com.br', 'contato@rocco.com.br');

INSERT INTO categoria (nome) VALUES
('Romance'),
('Ficção'),
('Contos'),
('Literatura Brasileira');

INSERT INTO usuario (nome, email, senha, tipo) VALUES
('Admin', 'admin@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin'),
('João Silva', 'joao@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'comum');

INSERT INTO ebook (titulo, descricao, isbn, data_publicacao, preco, idioma, foto, editora_id, autor_id) VALUES
('Dom Casmurro', 'Romance clássico da literatura brasileira', '978853590', '1899-01-01', 29.90, 'Português', 'dom_casmurro.jpg', 1, 1),
('A Hora da Estrela', 'Último romance publicado por Clarice Lispector', '978853250', '1977-01-01', 34.90, 'Português', 'hora_estrela.jpg', 2, 2);

INSERT INTO ebook_categoria (ebook_id, categoria_id) VALUES
(1, 1),
(1, 4),
(2, 1),
(2, 4);

INSERT INTO avaliacao (nota, comentario, usuario_id, ebook_id) VALUES
(5, 'Obra prima da literatura brasileira!', 2, 1),
(4, 'Livro incrível, leitura obrigatória', 2, 2);