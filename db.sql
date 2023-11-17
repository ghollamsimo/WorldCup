


CREATE TABLE IF NOT EXISTS Teams (
    TeamID INT AUTO_INCREMENT PRIMARY KEY,
    TeamName VARCHAR(255) NOT NULL,
    Continent VARCHAR(50),
    Capital VARCHAR(50),
    Poplation INT,
    Flag VARCHAR(100),
    JoueurCle VARCHAR(100),
    Victiore INT,
    Nul INT,
    Defaite INT,
    Nbr_Match INT
    -- Autres colonnes pour les détails des équipes
);


-- Table des groupes
CREATE TABLE IF NOT EXISTS Groups (
    GroupID INT AUTO_INCREMENT PRIMARY KEY,
    GroupName CHAR(50) NOT NULL,
    StadiumName VARCHAR(255) NOT NULL,
    -- Autres colonnes pour les détails des groupes
);


INSERT INTO Teams (Flag ,TeamName, JoueurCle  , Capital , Continent, Poplation ,Nbr_Match, Victiore , Nul , Defaite , TeamID)
VALUES 
('layout/image/brazil.png', 'Brésil', 'Neymar Jr', 'Brasília', 'Amérique du Sud', 210000000, 0, 0, 0, 0, 0, 1),
('layout/image/spain.png', 'Espagne', 'Sergio Ramos', 'Madrid', 'Europe', 47000000, 0, 0, 0, 0, 0, 1),
('layout/image/usa.png', 'États-Unis', 'Christian Pulisic', 'Washington, D.C.', 'Amérique du Nord', 331000000, 0, 0, 0, 0, 0, 1),
('layout/image/france.png', 'France', 'Kylian Mbappé', 'Paris', 'Europe', 67000000, 0, 0, 0, 0, 0, 1),
('layout/image/australia.png', 'Australie', 'Harry Kane', 'Canberra', 'Océanie', 26000000, 0, 0, 0, 0, 0, 0),
('layout/image/qatar.png' , 'Italie', 'Ciro Immobile', 'Rome', 'Europe', 60000000, 0, 0, 0, 0, 0, 2),
('layout/image/england.png', 'Angleterre', 'Harry Kane', 'Londres', 'Europe', 56000000, 0, 0, 0, 0, 0, 2),
('layout/image/morocco.png', 'Maroc', 'Achraf Hakimi', 'Rabat', 'Afrique', 3600000, 0, 0, 0, 0, 0, 2),
('layout/image/argentina.png', 'Argentine', 'Lionel Messi', 'Buenos Aires', 'Amérique du Sud', 44000000, 0, 0, 0, 0, 0, 2),
('layout/image/uruguay.png', 'Uruguay', 'Luis Suárez', 'Montevideo', 'Amérique du Sud', 3400000, 0, 0, 0, 0, 0, 3),
('layout/image/senegal.png', 'Sénégal', 'Sadio Mané', 'Dakar', 'Afrique', 17000000, 0, 0, 0, 0, 0, 3),
('layout/image/netherlands.png', 'Pays-Bas', 'Virgil van Dijk', 'Amsterdam', 'Europe', 17000000, 0, 0, 0, 0, 0, 3),
('layout/image/belgium.png', 'Belgique', 'Kevin De Bruyne', 'Bruxelles', 'Europe', 11500000, 0, 0, 0, 0, 0, 3),
('layout/image/iran.png', 'Colombie', 'James Rodríguez', 'Bogotá', 'Amérique du Sud', 51000000, 0, 0, 0, 0, 0, 4),
('layout/image/portugal.png', 'Portugal', 'Cristiano Ronaldo', 'Lisbonne', 'Europe', 102000000, 0, 0, 0, 0, 0, 4),
('layout/image/mexico.png', 'Mexique', 'Raúl Jiménez', 'Mexico', 'Amérique du Nord', 126000000, 0, 0, 0, 0, 0, 4),
('layout/image/germany.png', 'Allemagne', 'Leroy Sané', 'Berlin', 'Europe', 83000000, 0, 0, 0, 0, 0, 4),
('layout/image/croatia.png', 'Croatie', 'Luka Modrić', 'Zagreb', 'Europe', 4100000, 0, 0, 0, 0, 0, 5),
('layout/image/tunisia.png', 'Egypte', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 5),
('layout/image/suitzerkand.png', 'Egypte', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 5),


('layout/image/canada.png', 'Canada', 'Harry Kane', 'Ottawa', 'Amérique du Nord', 90000000, 0, 0, 0, 0, 0, 5),
('layout/image/poland.png', '', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 6),
('layout/image/wales.png', 'Egypte', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 6),
('layout/image/saudiarabia.png', 'Saudia Arabia', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 6),
('layout/image/korea.png', 'Korea', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 6),
('layout/image/ghana.png', 'Ghana', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 7),
('layout/image/cameroon.png', 'cameroon.png', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 7),
('layout/image/denmark.png', 'Denmark', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 7),
('layout/image/costarica.png', 'Costarica', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 7),
('layout/image/portugal.png', 'Portugal', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 8),
('layout/image/.png', 'Egypte', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 8),
('layout/image/spain.png', 'Egypte', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 8),
('layout/image/spain.png', 'Egypte', 'Mohammed Salah', 'Cairo', 'Afrique', 90000000, 0, 0, 0, 0, 0, 8);

INSERT INTO Groups (GroupName ,  StadiumName)
VALUES
('Groupe A' , 'Marrakech'),
('Groupe B' , 'Mohamed V'),
('Groupe C' , 'Moulay Abdallah'),
('Groupe D' , 'Adrar'),
('Groupe E' , 'Ibn Batouta'),
('Groupe F' , 'Complexe Sportif'),  
('Groupe G' , 'Complexe Sportif'),  
('Groupe H' , 'Complexe Sportif'),  