##### VERSION 1.3 (November 30th, 2012) ##### 

Just put these into a www folder

This works if put on a server where php, mysql are running and the table is created for this I created my table like:

CREATE TABLE XRaid
(
id INT NOT NULL AUTO_INCREMENT,
time DATETIME,
arch VARCHAR(5),
snapshot INT,
onedisk TINYINT,
numberofdisks INT,
d1 DOUBLE,
d2 DOUBLE,
d3 DOUBLE,
d4 DOUBLE,
d5 DOUBLE,
d6 DOUBLE,
d7 DOUBLE,
d8 DOUBLE,
d9 DOUBLE,
d10 DOUBLE,
d11 DOUBLE,
d12 DOUBLE,
rawtb DOUBLE,
raid5beforetb DOUBLE,
raid6beforetb DOUBLE,
raid5aftertb DOUBLE,
raid6aftertb DOUBLE,
extra TEXT,
PRIMARY KEY (id)
)

##### VERSION 1.4 (December, 3rd 2012) ##### 

Added IP column for remote ip (for statistic information, not hacking) of clients:
ALTER TABLE XRaid ADD ip varchar(15)