
INSERT INTO markersdata VALUES
('1','-0.220927','51.414520','1','Hanna','hey','female','1994-10-10','20 Lantern Court, 99 Worple Road, London, UK , SW20 8HB','07455288677','GCSEs,A-levels','I am a student at Brunel','maths, physics','ks1, ks2','10','Monday afternoons from 1pm-4pm','imagesTree/image.jpg','https://www.youtube.com/watch?v=FTQbiNvZqaY','haha','haha','yes');

INSERT INTO markersdata VALUES
('2','-0.034336','51.474385','2','Eneinta','Veliai','female','1994-10-10','2Lewisham Way, New Cross, London SE14 6NW','020 7919 7171','GCSEs,BTEC','I am a CS student at Goldsmiths','maths, english','ks4, ks3','20','Tuesdayafternoons from 11am-2pm','imagesTree/image0.jpg','https://www.youtube.com/watch?v=xaFEWKObHA4','tutu','tutu','yes');


CREATE TABLE tutor_reviews(
  id int NOT NULL AUTO_INCREMENT,
  tutor_id int not null, 
  review_body text,
  primary key (id)
);

INSERT INTO tutor_reviews VALUES
('1','1','Hanna is a such a great Maths tutor.');
INSERT INTO tutor_reviews VALUES
('1','2','Thanks to Eneinta, my 16 year old girl got an A* in her Maths GCSE.');

