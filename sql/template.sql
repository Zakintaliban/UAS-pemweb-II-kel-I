CREATE DATABASE IF NOT EXISTS UnivDB;
USE UnivDB;

CREATE TABLE Program_Studi(
    ID INT AUTO_INCREMENT,
    Nama VARCHAR(255),
    Program_Pendidikan ENUM('Diploma III', 'Diploma IV'),
    Akreditasi ENUM('Baik','Baik Sekali','Unggul'),
    SK_Akreditasi VARCHAR(255),
    PRIMARY KEY(ID)
);

CREATE TABLE Kota(
    ID INT AUTO_INCREMENT,
    Kode_Kota VARCHAR(255),
    Nama VARCHAR(255),
    PRIMARY KEY(ID)
);

CREATE TABLE Pejabat(
    ID INT AUTO_INCREMENT,
    Nama VARCHAR(255),
    NIP VARCHAR(255),
    Golongan VARCHAR(255),
    Jabatan VARCHAR(255),
    PRIMARY KEY(ID)
);

CREATE TABLE Matakuliah(
    ID INT AUTO_INCREMENT,
    Kode VARCHAR(255),
    Matakuliah VARCHAR(255),
    SKS INT,
    Nilai_Angka FLOAT,
    Nilai_Huruf VARCHAR(255),
    Semester ENUM('Semester I', 'Semester II', 'Semester III','Semester IV', 'Semester V', 'Semester VI', 'UJIAN AKHIR PROGRAM STUDI'),
    PRIMARY KEY(ID)
);

CREATE TABLE Taruna(
    ID INT AUTO_INCREMENT,
    Nama VARCHAR(255),
    Nomor_Taruna VARCHAR(255),
    Tempat_Lahir INT,
    Tanggal_Lahir DATE,
    Program_Studi INT,
    Foto BLOB,
    PRIMARY KEY(ID),
    FOREIGN KEY (Tempat_Lahir) REFERENCES Kota(ID),
    FOREIGN KEY (Program_Studi) REFERENCES Program_Studi(ID)
);

CREATE TABLE Ijazah(
    ID INT AUTO_INCREMENT,
    Taruna INT,
    Program_Studi INT,
    Tanggal_Ijazah DATE,
    Tanggal_Pengesahan DATE,
    Gelar_Akademik VARCHAR(255),
    Nomor_SK VARCHAR(255),
    Wakil_Direktur INT,
    Direktur INT,
    Nomor_Ijazah VARCHAR(255),
    Nomor_Seri VARCHAR(255),
    Tanggal_Yudisium DATE,
    Judul_KKW VARCHAR(255),
    PRIMARY KEY(ID),
    FOREIGN KEY (Taruna) REFERENCES Taruna(ID),
    FOREIGN KEY (Program_Studi) REFERENCES Program_Studi(ID),
    FOREIGN KEY (Wakil_Direktur) REFERENCES Pejabat(ID),
    FOREIGN KEY (Direktur) REFERENCES Pejabat(ID)
);

CREATE TABLE Nilai(
    ID INT AUTO_INCREMENT,
    Taruna INT,
    Nilai_Angka FLOAT,
    Nilai_Huruf VARCHAR(255),
    Matakuliah INT,
    PRIMARY KEY(ID),
    FOREIGN KEY (Taruna) REFERENCES Taruna(ID),
    FOREIGN KEY (Matakuliah) REFERENCES Matakuliah(ID)
);

CREATE TABLE Transkrip_Nilai(
    ID INT AUTO_INCREMENT,
    Taruna INT,
    Ijazah INT,
    Program_Studi INT,
    PRIMARY KEY(ID),
    FOREIGN KEY (Taruna) REFERENCES Taruna(ID),
    FOREIGN KEY (Ijazah) REFERENCES Ijazah(ID),
    FOREIGN KEY (Program_Studi) REFERENCES Program_Studi(ID)
);

USE UnivDB;

INSERT INTO Program_Studi (Nama, Program_Pendidikan, Akreditasi, SK_Akreditasi)
VALUES ('Ilmu Komputer', 'Diploma IV', 'Unggul', 'SK-12345'),
       ('Teknik Mesin', 'Diploma III', 'Baik', 'SK-23456'),
       ('Teknik Elektro', 'Diploma IV', 'Baik Sekali', 'SK-34567');

INSERT INTO Kota (Kode_Kota, Nama)
VALUES ('K1', 'Bandung'),
       ('K2', 'Jakarta'),
       ('K3', 'Yogyakarta');

INSERT INTO Pejabat (Nama, NIP, Golongan, Jabatan)
VALUES ('Dr. Budi', '198706102006041001', 'IV/e', 'Rektor'),
       ('Ir. Santi', '198808112008122002', 'III/d', 'Dekan');

INSERT INTO Matakuliah (Kode, Matakuliah, SKS, Nilai_Angka, Nilai_Huruf, Semester)
VALUES ('MK1', 'Algoritma dan Pemrograman', 3, 4, 'A', 'Semester I'),
       ('MK2', 'Struktur Data', 3, 3.5, 'AB', 'Semester II');

INSERT INTO Taruna (Nama, Nomor_Taruna, Tempat_Lahir, Tanggal_Lahir, Program_Studi)
VALUES ('Rudi', 'T001', 1, '2000-01-01', 1),
       ('Rina', 'T002', 2, '1999-02-02', 2);

INSERT INTO Ijazah (Taruna, Program_Studi, Tanggal_Ijazah, Tanggal_Pengesahan, Gelar_Akademik, Nomor_SK, Wakil_Direktur, Direktur, Nomor_Ijazah, Nomor_Seri, Tanggal_Yudisium, Judul_KKW)
VALUES (1, 1, '2022-01-01', '2022-01-15', 'A.Md', 'SK-56789', 1, 2, 'IJZ-001', 'SERI-001', '2021-12-15', 'KKW Taruna 1'),
       (2, 2, '2022-02-01', '2022-02-15', 'A.Md', 'SK-67890', 2, 1, 'IJZ-002', 'SERI-002', '2021-12-16', 'KKW Taruna 2');

INSERT INTO Nilai (Taruna, Nilai_Angka, Nilai_Huruf, Matakuliah)
VALUES (1, 4, 'A', 1),
       (1, 3.5, 'AB', 2),
       (2, 3.5, 'AB', 1),
       (2, 3, 'B', 2);

INSERT INTO Transkrip_Nilai (Taruna, Ijazah, Program_Studi)
VALUES (1, 1, 1),
       (2, 2, 2);
