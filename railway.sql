
CREATE TABLE TrainTracking(
    sfrom VARCHAR(30),
    sto VARCHAR(30),
    sname VARCHAR(30),
    StartingTime TIME,
    ReachedTime TIME,
    trackingCode VARCHAR(10), 
    phone VARCHAR(15), 
    TrCode VARCHAR(5)
)



INSERT INTO TrainTracking VALUES
("Chittagong", "Dhaka", "Subarna Express", "06:00:00","13:00:00", "3nt34", "01827374332", "723"),
("Dhaka", "Chittagong", "Subarna Express", "15:00:00","21:45:00", "u3hd7", "01477455323", "721"),
("Chittagong", "Dhaka", "Mohanagar Godhuli", "15:00:00","22:10:00", "hdu3u", "01837492932", "727"),
("Dhaka", "Chittagong", "Mohanagar Godhuli", "07:40:00","15:15:00", "3hdj4", "01739344532", "693"),
("Dhaka", "Dinajpur", "Ekota Express", "10:00:00","19:40:00", "9jfje", "01936473733", "843"),
("Dinajpur", "Dhaka", "Ekota Express", "21:20:00","07:15:00", "75jg7", "01827646643", "821"),
("Dhaka", "Dinajpur", "Drutojan Express", "19:40:00","05:30:00", "8tkg4", "01325267373", "692"),
("Dinajpur", "Dhaka", "Drutojan Express", "07:40:00","17:55:00", "95if3", "0188736443", "738"),
("Dhaka", "Rajshahi", "Silk city Express", "14:40:00","21:05:00", "76ykd", "01928748347", "243"),
("Rajshahi", "Dhaka",  "Silk city Express", "07:20:00","13:45:00", "46y5j", "0152737843", "456"),
("Dhaka", "Rajshahi", "Dhumketu Express", "06:00:00","11:50:00", "85jsd", "01629483234", "282"),
("Rajshahi", "Dhaka",  "Dhumketu Express", "23:20:00","04:50:00", "9ijd5", "01838774734", "945")



CREATE TABLE payment(
    sfrom VARCHAR(30),
    sto VARCHAR(30),
    Distance INTEGER,
    ShovonChair INTEGER,
    AC INTEGER
)

INSERT INTO payment VALUES
("Dhaka", "Rajshahi", 350, 340, 710),
("Dhaka", "Dinajpur", 450, 480, 850),
("Dhaka", "Chittagong", 400, 380, 730),
("Khulna", "Rajshahi", 250, 280, 500),
("Dinajpur", "Rajshahi", 220, 180, 300),
("Khulna", "Dinajpur", 480, 370, 620),
("Dhaka", "Sylhet", 250, 300, 450),
("Chittagong", "Sylhet", 350, 340, 710)


CREATE TABLE imp_num(
    station_name VARCHAR(20),
    mobile_no VARCHAR(15)
)

INSERT INTO imp_num VALUES
("Dhaka","+88028315857"),
("Rajshahi","+880721774043"),
("Natore","+8807716629"),
("Rangpur","+88052163006"),
("Sylhet","+880821716061"),
("Saidpur","+88055262104"),
("Thakurgaon","+88056152097")





