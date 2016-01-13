

insert into donor values('11111','Stephen Daniels','123 Elm st', 'Seekonk', 'MA', '02345', '1998-07-03',500,'John Smith');
insert into donor values('12121','Jennifer Ames','24 Benefit st', 'Providence', 'RI', '02045', '1997-05-24',400,'Susan Jones');
insert into donor values('22222','Carl Hersey','24 Benefit st', 'Providence', 'RI', '02045', '1998-01-03', NULL ,'Susan Jones');

insert into donor values('23456','Susan Ash','21 Main st', 'Fall River', 'MA', '02720', '1992-03-04',100,'Amy Costa');
insert into donor values('33333','Nancy Taylor','26 Oak st', 'Fall River', 'MA', '02720', '1992-03-04',50,'John Adams');
insert into donor values('34567','Robert Brooks','36 Pine st', 'Fall River', 'MA', '02720', '1998-04-04',50,'Amy Costa');

 update donor
     set datefst = '1997-05-24'
     where idno = '12121';
    
     update donor
         set datefst = '1998-01-03'
         where idno = '22222';
 update donor
     set datefst = '1992-03-04'
     where idno = '23456';
 update donor
     set datefst = '1992-03-04'
     where idno = '33333';
update donor
     set datefst = '1998-04-04'
     where idno = '34567';