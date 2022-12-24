INSERT INTO OFFICE (office_id,office_name,country,city,address) VALUES 
(1,'fisrt_office','Egypt','Cairo','Madent nasr'),
(2,'second_office','Egypt','Alexandria','Smoha'),
(3,'third_office','Saudi Arabia','Jeddah','Baradwan Street'),
(4,'forth_office','Saudi Arabia','Riyadh','tahlia Street'),
(5,'Fifth_office','United States','Chicago ','Clark Street'),
(6,'sixth_office','United States','New york','Crosby Street') ;


INSERT INTO ADMIN VALUES (1,'Sayed','sayedabdelfatah@gmail.com','0000');

INSERT INTO CAR (Plate_id,Color,Year,Brand,Model,Price_per_day,office_id,Status,image) VALUES
(2323,'white','2021','BMW','X5 xDrive40i',3000,5,'active','https://www.ccarprice.com/products/BMW_X5_xDrive40i_2021.jpg'),
(2655,'blue','2021','BMW','New BMW 8 Series Convertible 2021',2950,1,'active','https://cdn.bmwblog.com/wp-content/uploads/2019/07/BMW-M850i-Convertible-21-of-30.jpg'),
(2222,'black','2022','mercedes','Coupe AMG',3100,6,'rented','https://images.carandbike.com/car-images/colors/mercedes-amg/gle-coupe/mercedes-amg-gle-coupe-selenite-grey.png?v=1629707416'),
(2455,'black','2018','mercedes','2018 Mercedes-Maybach S 560 & S 650',2900,2,'active','https://imgcdnblog.carbay.com/wp-content/uploads/2018/08/02121104/mer_650x420.jpg'),
(1121,'white','2019','Audi','A5 Cabriolet',1950,3,'out_of_service','https://www.ccarprice.com/products/Audi_A5_35_TFSI_Cabriolet_2017.jpg'),
(1929,'red','2021','toyota','Camry Hybrid',1750,1,'rented','https://imgd.aeplcdn.com/0x0/n/1g8lpua_1557431.jpg'),
(1239,'black','2021','toyota','Camry Hybrid',1200,1,'active','https://imgd.aeplcdn.com/0x0/n/1g8lpua_1557431.jpg'),
(2343,'blue','2015','kia','forte',1000,4,'out_of_service','https://media.ed.edmunds-media.com/kia/forte/2015/oem/2015_kia_forte_sedan_ex_fq_oem_1_1600.jpg'),
(2121,'black','2019','chevrolet','cruze',950,2,'active','https://www.motortrend.com/uploads/sites/10/2019/03/2019-chevrolet-cruze-lt-sedan-angular-front.png'),
(2874,'red','2021','jeep','Wrangler Rubicon 392',2250,6,'rented','https://media.ed.edmunds-media.com/jeep/wrangler/2021/oem/2021_jeep_wrangler_convertible-suv_unlimited-rubicon-392_fq_oem_1_1600.jpg'),
(2099,'blue','2022','fiat','Tipo Hatchback',1550,1,'active','http://www.bauto.com/storage/cars/YC7PClIrXZ8YDivRGqlke2rGdD54UjBwCj2bcoZ2.png'),
(2155,'red','2022','hyundai','hyundai ALcazar',1450,2,'active','https://www.ccarprice.com/products/Hyundai_Aura_SX_Plus_Turbo_2022.jpg'),
(2911,'black','2018','hyundai','elantra',1300,4,'rented','https://tdrresearch.azureedge.net/photos/chrome/Expanded/White/2018HYC020004/2018HYC02000401.jpg'),
(2872,'red','2018','ferrari','488 pista',4000,6,'active','https://www.pushstart.it/en/test-drive/ferrari-488-pista/images/IMG1_9252_D-p-c_hu8346bd8583d10d9c1ce1fd2ddde091e4_1998652_1024x640_fill_q75_box_center.jpg'),
(2421,'blue','2021','skoda','octavia',2000,1,'out_of_service','https://ymimg1.b8cdn.com/resized/car_model/8514/logo/mobile_listing_main_01.png'),
(2761,'yellow','2015','Lamborghini','Huracan spyder',5000,4,'active','https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/masterpieces/huracan_spyder/over/huracan_spyder_over_02_m.jpg'),
(2333,'black','2022','BMW','X4',3200,5,'active','https://www.ccarprice.com/products/BMW_X4_xDrive30i_2023.jpg');




INSERT INTO customer (national_id,Fname,Lname,email,password,phone_number,country,sex,licence_id) VALUES
(301100,'john','smith','john@gmail.com','1234','9982822010','United States','male',1021001),
(301103,'leo','messi','leo@gmail.com','0909','9912012000','United States','male',1090999),
(301919,'linda','davis','linda@yahoo.com','1110','9012011332','United States','female',1099921),
(301212,'sarah','ahmed','sara_11@yahoo.com','2123','0123378112','Egypt','female',1088181),
(301344,'ali','mohamed','ali@gmail.com','2233','0119220113','Egypt','male',1099323),
(309231,'natasha','williams','natasha@gmail.com','2144','9190011002','United States','female',1098212),
(302122,'hugo','lloris','hugo@gmail.com','2332','9811366621','United States','male',1022321),
(306672,'van','neto','van@gmail.com','2235','9832199129','United States','male',1099211), 
(308712,'robert','brown','robert@yahoo.com','3212','9822355561','United States','male',1099123),
(306561,'james','smith','james@gmail.com','7821','9871289610','United States','male',1092221),
(302191,'ramy','saber','ramy@gmail.com','3334','0112292101','Egypt','male',1099221),
(309821,'aya','mohamed','aya_12@yahoo.com','7771','0154541872','Egypt','female',1087651),
(301234,'jasem','abdallah','jasem@gmail.com','2312','9021928301','Saudi arabia','male',1020192),
(309876,'fred','james','fredo@gmail.com','5652','9827665512','United States','male',1092830),
(309812,'ahmed','ibrahim','ahmed@gmail.com','9021','0101928101','Egypt','male',1092341),
(309123,'sawsan','sayed','sawsan@gmail.com','8821','0120120323','Egypt','female',1098312),
(309111,'abdelrahman','ibrahim','abdelrahman@gmail.com','7777','9876585722','Saudi arabia','female',1098221),
(302123,'sagda','abdallah','sagda@gmail.com','1562','9872462244','Saudi arabia','female',1098766),
(309912,'ahmed','sakr','sakr@gmail.com','0091','9872225111','Egypt','male',1092222);
