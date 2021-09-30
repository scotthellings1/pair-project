CREATE TABLE contact_details (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  first_name varchar(128) not null,
  last_name varchar(128) not null,
  email varchar(128) not null,
  date datetime not null,
  subject varchar(500) not null,
  content varchar(2000) not null
);
