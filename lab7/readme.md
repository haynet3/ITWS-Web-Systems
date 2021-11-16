#Lab 7: Gradebook Database


***Complete Step List/Every Command Used***

      -Went to PHPMyAdmin Homepage-clicked "new"

      -Named database websyslab7-clicked create

      -Named table courses-Hit Go

      -Filled out all columns according to lab instructions and set collation for each to utf8_mb4_general_ci and hit save

      -Checked box for "crn" and hit primary to set/add it as primary key

      -Clicked new under "websyslab7" in side panel to create new table

      -Named table students and filled out each column according to lab instructions and hit save

      -Checked box for RIN and clicked primary to set it as primary key

      -Clicked sql and used statements:

      ALTER TABLE students ADD street VARCHAR(255);
      ALTER TABLE students ADD city varchar(255);
      ALTER TABLE students ADD state varchar(255);
      ALTER TABLE students ADD zip int(5);

      -Hit Go to insert table 

      -Clicked courses table on left-hand side panel

      -Clicked SQL

      Wrote statements:

      ALTER TABLE courses ADD section varchar(255);
      ALTER TABLE courses ADD year int(4);


      -Clicked Go and inserted the new columns

      -Clicked websyslab7 on left-hand panel

      -Clicked SQL

      Ran statements:

      CREATE TABLE grades(
          id INT PRIMARY KEY AUTO_INCREMENT,
          crn INT(11),
          RIN INT(9),
          FOREIGN KEY(crn) REFERENCES courses(crn),
          FOREIGN KEY(RIN) REFERENCES students(RIN),
          grade INT(3)
      );


      -Clicked on courses table 

      -Clicked SQL 

      -Ran statement:

      INSERT INTO courses (crn, prefix, number, title, section, year)
      VALUES (61121, 'BMED', 2100 , 'Biomaterials Sci & Engineering', 01, 2022);
      INSERT INTO courses (crn, prefix, number, title, section, year)
      VALUES (65054, 'ASTR', 1520 , 'Stars, Galaxies And The Cosmos', 01, 2022);
      INSERT INTO courses (crn, prefix, number, title, section, year)
      VALUES (60068, 'ECON', 2010 , 'Intermediate Microecon Theory', 02, 2022);
      INSERT INTO courses (crn, prefix, number, title, section, year)
      VALUES (63148, 'MGMT', 1260 , 'Business Law And Ethics', 02, 2022);

      -Hit go and inserted values 

      -Clicked students table

      -Clicked SQL 

      -Ran statement:

      SELECT * FROM `students` WHERE 1;
      INSERT INTO students (RIN, RCSID, name, lastname, alias, phone, street, city, state, zip)
      VALUES (661996025, 'haynet3', 'Tyler' , 'Haynes', 'SO', 7187497499, '229-20 144th Ave', 'Rosedale', 'NY', 11413);
      INSERT INTO students (RIN, RCSID, name, lastname, alias, phone, street, city, state, zip)
      VALUES (123456789, 'bachin4', 'Divya' , 'Bachina', 'SR', 9174567689, '123-67 155th Ave', 'Brooklyn', 'NY', 19830);
      INSERT INTO students (RIN, RCSID, name, lastname, alias, phone, street, city, state, zip)
      VALUES (321456789, 'suemar5', 'Mary' , 'Sue', 'JR', 3245678945, '345-20 983rd Ave', 'Midgar', 'FL', 19283);
      INSERT INTO students (RIN, RCSID, name, lastname, alias, phone, street, city, state, zip)
      VALUES (445583920, 'daisyr4', 'Daisy' , 'Mae', 'FR', 6538765432, '123-45 345th Ave', 'Hyrule', 'OH', 12093);
      INSERT INTO students (RIN, RCSID, name, lastname, alias, phone, street, city, state, zip)
      VALUES (112354968, 'kassar8', 'Kassarenna' , 'Katwaroo', 'SO', 8756584590, '230-30 152nd Ave', 'Queens', 'NY', 11678);


      -Hit go to insert values

      -Clicked grades table 

      -Clicked SQL

      Ran statement:
      
      
      SELECT * FROM `grades` WHERE 1;
      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 60068 , 112354968, 98);
      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 61121 , 112354968, 88);

      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 60068 , 123456789, 100);
      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 63148 , 123456789, 100);

      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 65054 , 321456789, 67);
      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 63148 , 321456789, 80);

      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 65054 , 445583920, 47);
      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 61121 , 445583920, 30);

      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 65054 , 661996025, 95);
      INSERT INTO grades (id, crn, RIN, grade)
      VALUES (DEFAULT, 61121 , 661996025, 89);

      -Click on websyslab7

      -Click SQL
     
     -Commands to list out data:

      Order by RIN: SELECT * FROM students ORDER BY RIN;

      Order by name: SELECT * FROM students ORDER BY name;

      Order by lastname: SELECT * FROM students ORDER BY lastname;

      Order by RSCID: SELECT * FROM students ORDER BY RCSID;

      Order by R: SELECT * FROM students ORDER BY RIN;

      Get RIN/First name/Last name/Address where grade over 90 run: SELECT DISTINCT students.RIN, students.name, students.lastname, students.street, students.city, students.state, students.zip FROM students, grades WHERE grades.grade > 90;

      To get average grade by course crn: select crn, avg(grade) from grades group by crn;




