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
    Nilai_Angka INT,
    Nilai_Huruf VARCHAR(255),
    Semester ENUM('Semester I', 'Semester II', 'Semester III','Semester IV', 'Semester V', 'Semester VI'),
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
    Nilai_Angka INT,
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
