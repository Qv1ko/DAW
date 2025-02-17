CREATE DATABASE clasificacion;
USE clasificacion;

CREATE TABLE drivers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    nationality VARCHAR(50),
    team VARCHAR(100),
    total_points INT DEFAULT 0
);

INSERT INTO drivers(name, nationality, team) VALUES
    ('Fernando Alonso', 'Spain', 'Renault'),
    ('Rubens Barrichelo', 'Brazil', 'Ferrari'),
    ('Zsolt Baumgartner', 'Hungary', 'Minardi'),
    ('Gimmi Bruni', 'Italy', 'Minardi'),
    ('Jenson Button', 'United Kingdom', 'BAR'),
    ('David Coulthard', 'United Kingdom', 'McLaren'),
    ('Cristiano da Matta', 'Brazil', 'Toyota'),
    ('Giancarlo Fisichella', 'Italy', 'Sauber'),
    ('Timo Glock', 'Germany', 'Jordan'),
    ('Nick Heidfeld', 'Germany', 'Jordan'),
    ('Christian Klien', 'Austria', 'Jaguar'),
    ('Felipe Massa', 'Brazil', 'Sauber'),
    ('Juan Pablo Montoya', 'Colombia', 'Williams'),
    ('Olivier Pains', 'France', 'Toyota'),
    ('Kimi Raikkonen', 'Finland', 'McLaren'),
    ('Takuma Sato', 'Japan', 'BAR'),
    ('Michael Schumacher', 'Germany', 'Ferrari'),
    ('Ralf Schumacher', 'Germany', 'Williams'),
    ('Jarno Trulli', 'Italy', 'Renault'),
    ('Mark Webber', 'Australia', 'Jaguar');
