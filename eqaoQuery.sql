create database eqaoProject;
use eqaoProject;
create table question(
	quest_id INT NOT NULL,
    quest_text VARCHAR(300) NOT NULL,
    image VARCHAR(100) DEFAULT null,
    ans1 VARCHAR(100),
    ans2 VARCHAR(100),
    ans3 VARCHAR(100),
    ans4 VARCHAR(100),
    correct_ans INT NOT NULL,
    strand VARCHAR(100) NOT NULL,
    substrand VARCHAR(100),
    CONSTRAINT pk_quest_id PRIMARY KEY (quest_id));
        rename table question to question_6;
    select * from question_6;
    INSERT INTO question_6 values(1, "A pattern is shown below.
 1, 2, 4, 8, …
Which rule best describes the pattern?
Start with 1 and", null, "add 1 to get the next term.", "add 2 to get the next term", 
"divide by 2 to get the next term.", "multiply by 2 to get the next term.", 4, "Patterning", "number patterns");
    
INSERT INTO question_6 values (2, "The parallelogram below will be cut into
two congruent triangles. What is the area of one of the triangles?", 
"2014_gr6_quest2.jpg", "35 square cm", "42 square cm", "70 square cm", "84 square cm", 
1, "Geometry", "area of a parallelogram");

INSERT INTO question_6 values (3, "A store sells 12 oranges for $3.96.
How much does one orange cost?", null, "$3.84", "$3.03", "$0.39", "$0.33", 4,
"NumberSense", "ratio"); 


INSERT INTO question_6 values (4, "A list of numbers is shown below.
 11, 5, 11, 9, 4
What is the mean of these numbers?", null, "7", "8", "9", "11", 2, "Data", "mean"); 

INSERT INTO question_6 values (5, "Which two equations are true if n = 2?
Equation 1: 4 1 n 1 3 = 5
Equation 2: 4 2 n 1 3 = 5
Equation 3: 4 3 n 1 3 = 5
Equation 4: 4 ÷ n 1 3 = 5", null,
"Equation 2 and Equation 4 ", "Equation 2 and Equation 3", 
"Equation 1 and Equation 4", "Equation 1 and Equation 2", 1, "Patterning", "algebra");

 INSERT INTO question_6 values (6, "Dylan rotates the triangle below 90 degrees
counter-clockwise about Point Q.
Which of the following triangles shows the
result of this transformation?" , "2014_gr6_quest6.jpg", "2014_gr6_quest6ansa.jpg",
"2014_gr6_quest6ansb.jpg", "2014_gr6_quest6ansc.jpg", "2014_gr6_quest6ansd.jpg", 4, 
"Geometry", "rotations");

INSERT INTO question_6 values (7, "Which of the following shows a rectangle and
a triangle that have the same area?", null, "2014_gr6_quest7ansa.jpg",  
"2014_gr6_quest7ansb.jpg", "2014_gr6_quest7ansc.jpg", "2014_gr6_quest7ansd.jpg",
1, "Geometry", "area of a parallelogram");   

INSERT INTO question_6 values (8, "The pattern shown below is made of triangles.
Term 1 Term 2 Term 3
The pattern continues.
Which of the following represents the
number of triangles in Terms 4, 5 and 6?", "2014_gr6_quest12.jpg",
"2, 4, 6", "6, 8, 10", "8, 10, 12", "10, 12, 14", 3, "Patterning", "geometry patterns");

INSERT INTO question_6 values (9, "What is the value of 0.730 2 0.156?", null,
"0.083", "0.426", "0.574 ", "0.626", 3, "NumberSense", "decimal subtraction");

INSERT INTO question_6 values (10, "The quadrilaterals shown below are ordered
from smallest to largest based on a geometric
property.
parallelogram trapezoid rectangle square
Which geometric property was used?", "2014_gr6_quest14.jpg", "number of acute angles",
"number of lines of symmetry", "number of pairs of equal sides", "number of pairs of parallel sides",
2, "Geometry", "quadrilateral properties"); 

INSERT INTO question_6 values (11, "A spinner is shown below.
On which of the following number lines does
the point represent the probability of spinning
an even number?", "2014_gr6_quest15.jpg", "2014_gr6_quest15ansa.jpg",
"2014_gr6_quest15ansb.jpg", "2014_gr6_quest15ansc.jpg", "2014_gr6_quest15ansd.jpg",
1, "Data", "probability on a number line");

INSERT INTO question_6 values (12, "A fire truck has a ladder measuring 3 units
in length.
Which unit would be most appropriate to
measure the ladder?", null, "kilometre", "decimetre", "decametre", "centimetre", 3, "Measurement", "units");

UPDATE question_6 SET strand = "Measurement" WHERE quest_id = 2;
UPDATE question_6 SET strand = "Measurement" WHERE quest_id = 7;
UPDATE question_6 SET substrand = "decimal division" WHERE quest_id = 3;

INSERT INTO question_6 values (13, "Each beaker of water below has a capacity
of 2 L.
Which beaker appears to have about
500 mL of water in it?", null, "2014_gr6_quest17ansa.jpg", "2014_gr6_quest17ansb.jpg",
"2014_gr6_quest17ansc.jpg", "2014_gr6_quest17ansd.jpg", 4, "Measurement", "units of capacity");

INSERT INTO question_6 values (14, "Mrs. Garrett sends surveys to 120 students,
and 78 students return the survey.
Which statement best describes the percent
of students who return the survey?", null, "exactly 50%", "exactly 75%",
"between 50% and 75%", "between 75% and 100%", 3, "NumberSense", "percent");

INSERT INTO question_6 values (15, "A triangle will be constructed using the base
shown on the grid below.
Which point can be used to complete the
triangle so that its area is 8 units2?", "2015_gr6_quest1.jpg", "Point M", "Point P", "Point Q",
"Point R", 3, "Geometry", "cartesian graph");

INSERT INTO question_6 values (16, "A pattern is shown below.
64, 32, 16, 8, 4, ...
Which rule describes how to find the next term
in the pattern?", null, "divide the previous term by 2", "divide the previous term by 4",
"subtract 16 from the previous term", "subtract 32 from the previous term ", 1, "Patterning", "number patterns");

INSERT INTO question_6 values (17, "Two rectangular prisms are shown below.
How much larger is the volume of Prism M
than that of Prism T?", "2015_gr6_quest3.jpg", "5000 cubic cm", 
"7000 cubic cm", "12 000 cubic cm", "17 000 cubic cm", 2, "Measurement", "volume of a rectangular prism");

INSERT INTO question_6 values (18, "A pattern is created by rotating a rectangle
90° clockwise about Point X. This rotation is
repeated.
Which of the following shows the pattern?", null, "2015_gr6_quest4ansa.jpg", 
"2015_gr6_quest4ansb.jpg", "2015_gr6_quest4ansc.jpg", "2015_gr6_quest4ansd.jpg", 1, "Geometry", "rotations");

INSERT INTO question_6 values (19, "Which of the quadrilaterals shown below
has
• no lines of symmetry and
• two acute angles?", null, "2015_gr6_quest5ansa.jpg", 
"2015_gr6_quest5ansb.jpg", "2015_gr6_quest5ansc.jpg", "2015_gr6_quest5ansd.jpg", 2, "Geometry", "quadrilateral properties");

INSERT INTO question_6 values (20, "The graph below displays the amount of
money earned at a craft sale over 4 days.
What is the range between the smallest and
the largest amount of money earned over
the 4 days?", "2015_gr6_quest6.jpg", "$175", "$150", 
"$75", "$25", 2, "Data", "interpreting graphs");

INSERT INTO question_6 values (21, "Mr. Adams buys juice boxes for 384 students.
The juice boxes are sold in cases of 24.
If each student receives one juice box, how
many cases has Mr. Adams bought?", null, "12", "16", 
"360", "408", 2, "NumberSense", "division");

INSERT INTO question_6 values (22, "Darren starts with a triangle and creates
a pattern.
Each term in the pattern is a polygon with
one more side than the term before it.
How many sides will Term 8 have?", "2015_gr6_quest12.jpg", "6", "8", 
"9", "10", 4, "Patterning", "geometry patterns");

INSERT INTO question_6 values (23, "How many millilitres are there in 0.56 litres? ", null, 
"5.6 mL", "56 mL ", "560 mL ", "5600 mL ", 3, "Measurement", "metric conversions");

INSERT INTO question_6 values (24, "A list of numbers is shown below:
43, 50, 58, 49, 57, 50, 44, 43, 54, 45
Which of the following stem and leaf plots
represents these numbers? ", null, "2015_gr6_quest14ansa.jpg", "2015_gr6_quest14ansb.jpg", 
"2015_gr6_quest14ansc.jpg", "2015_gr6_quest14ansa.jpg", 2, "Data", "stem-and-leaf plots");

INSERT INTO question_6 values (25, "Betsy has a bakery. She uses 128.4 g of flour
to make 6 muffins.
How much flour does it take to make 72
muffins? ", null, "21.4 g", "770.4 g", "1540.8 g", "9244.8 g ", 3, "NumberSense", "ratio");

INSERT INTO question_6 values (26, "Isaac and Presley each have a jar of
coloured cubes. The contents of their jars
are shown in the table below.
They reach into their jars, and each chooses
one cube without looking.
What colour of cube has the same probability
of being chosen from Isaac’s jar as from
Presley’s jar?", "2015_gr6_quest16.jpg", "red", "blue", "green", "purple", 2, "Data", "probability");

INSERT INTO question_6 values (27, "Tyra enlarges the following shape on the grid
below.
What are the coordinates of the two missing
points that Tyra needs to complete the
enlarged shape?", "2015_gr6_quest17.jpg", "(9, 8), (2, 6)", "(8, 9), (6, 2) ", 
"(8, 9), (2, 6)", "(9, 8), (6, 2)", 2, "Geometry", "cartesian graph");

INSERT INTO question_6 values (28, "Which of the following numbers has the
greatest value? ", null, "0.4", "0.25 ", 
"0.089", "0.304", 1, "NumberSense", "comparing and ordering decimals");

INSERT INTO question_6 values (29, " Points P and Q are two vertices of a rectangle. Which set of ordered pairs could represent the other two vertices of the rectangle? ", "2013_gr6_quest1.jpg", " (4, 8) and (9, 8)", " (8, 4) and (8, 9)", " (1, 3) and (1, 8)", " (3, 1) and (8, 1) ", 4, "Geometry", "cartesian graph");
INSERT INTO question_6 values (30, " Mrs. Sherman asks students to record their favourite subjects. The data is shown in the graph below. According to the graph, how many more students chose math as their favourite subject than chose gym? ", "2013_gr6_quest2.jpg", "7", " 12", " 21", "33", 3, "Data", "interpreting graphs");
INSERT INTO question_6 values (31, " Consider the growing pattern shown on the grid below. The pattern continues in the same way. What ordered pair represents the next point to be plotted in this pattern?", "2013_gr6_quest3.jpg", "(4,9)", " (10,4)", " (9,4)", "(4,10)", 4, "Patterning", "graphing patterns");
INSERT INTO question_6 values (32, " There are 12 books in a case. There are 6 cases in a box and 24 boxes in a container. If each container of books costs $2592, what is the cost of one book?", null, "$1.50", " $9.00", " $18.00", "$36.00", 1, "NumberSense", "division");
INSERT INTO question_6 values (33, " A parallelogram is shown below. Which rectangle has the same area as this parallelogram?", "2013_gr6_quest5.jpg", "2013_gr6_quest5ansa.jpg", "2013_gr6_quest5ansb.jpg ", " 2013_gr6_quest5ansc.jpg ", "2013_gr6_quest5ansd.jpg ", 3, "Measurement", " area of a parallelogram");
INSERT INTO question_6 values (34, " If n x 3 = 24 and n + 40 - s = 36, what is the value of s? ",null, "8",  " 10 ", " 12 ", "14 ", 3, "Patterning", " algebra");
INSERT INTO question_6 values (35, "The diagram below shows a shoebox without a lid. A student covers the outside of the shoebox with construction paper. If the student does not cover the lid, what is the surface area that is covered?","2013_gr6_quest7.jpg", "982.25 square cm",  "1433.50 square cm", "1964.50 square cm", "5044.50 square cm", 2, "Measurement", " surface area");
INSERT INTO question_6 values (36, "Which of the following fractions has the smallest value?",null, "4/5",  " 4/4 ", " 4/3", "4/2 ", 1, "NumberSense", " ordering and comparing fractions");
INSERT INTO question_6 values (37, "There are 2 blue, 5 green, 6 red and 7 purple marbles in a bag. Erin picks one marble from the bag without looking. What is the probability that she will pick a marble that is purple?",null, "7%",  "20% ", " 35%", "54%", 3, "Data", " probability");
INSERT INTO question_6 values (38, "Wasim’s hair grows 0.4 cm each week. At this rate, which is closest to the increase in length of Wasim’s hair over 3 months if it is not cut?",null, "1 cm",  "5 cm ", " 8 cm", "12 cm", 2, "NumberSense", " decimal multiplication");
INSERT INTO question_6 values (39, "Consider the repeating pattern below. If the pattern continues in the same way, what will the 54th term be?", "2013_gr6_quest15.jpg", "2013_gr6_quest15ansa.jpg",  "2013_gr6_quest15ansb.jpg ", " 2013_gr6_quest15ansc.jpg ", "2013_gr6_quest15ansd.jpg ", 3, "Patterning", " geometry patterns");
INSERT INTO question_6 values (40, "Which set of data has a mean that is equal to its median?",null, "4, 5, 5, 7, 9",  " 4, 5, 6, 7, 8 ", " 4, 4, 6, 7, 7, 7, 7", " 5, 5, 5, 5, 6, 8, 8 ", 2, "Data", " mean");
INSERT INTO question_6 values (41, "Which What unit of measure is the most appropriate to estimate the thickness of a dime?",null, "cm",  " dam ", "m", " mm ", 4, "Measurement", " units");
INSERT INTO question_6 values (42, "What type of angle is shown below? ", "2013_gr6_quest18.jpg", "acute",  "right", "obtuse", " straight ", 4, "Geometry", " angles");

SELECT * FROM question_6;

INSERT INTO question_6 values (43, "Which of the following is equal in value to 8%", null, "16/200", "16/50", "4/25", "4/5", 1, "NumberSense",  "percent");
INSERT INTO question_6 values (44, "The chart below shows data about DVD sales for 2 weeks. Which of the following statements aboutthis data is false?", "2012_gr6_quest2.jpg", "Sales for all 3 DVD types decreased  over the 2 weeks.", "Week 2 sales for all 3 DVD types totalled $206 400.", 
"Comedy sold less than either of the other types of DVDs over the 2 weeks.", "Total sales for adventure DVDs are about double those for mystery. ", 4, "Data",  "interpreting charts");
INSERT INTO question_6 values (45, "If the equation x 1 4 5 12 is true, which of the following best describes the variable x? ", null, "one unknown value", "two unknown values", "three unknown values", "many unknown values ", 1, "Patterning",  "algebra");
INSERT INTO question_6 values (46, "The 4 terms of the pattern below are made of equilateral triangles with side lengths of 2 units. Which number sequence represents the perimeters of the 4 terms of this pattern? ", "2013_gr6_quest4.jpg", "1, 2, 3, 4", "3, 4, 5, 6", "6, 8, 10, 12 ", "6, 10, 14, 18 ", 3, "Patterning",  "geometry patterns");
INSERT INTO question_6 values (47, "Lucas has 5 T-shirts in a drawer: 1 red, 2 yellow, 1 pink and 1 blue. He selects one T-shirt without looking. What is the probability that Lucas selects a T-shirt that is not pink or blue?", null, "1/5", "2/5", "3/5", "4/5",  3, "Data", "probability");
INSERT INTO question_6 values (48, "Look at the figure below. Which of th e following is a top view of the figure?", "2012_gr6_quest6.jpg", "2012_gr6_quest6ansa.jpg", "2012_gr6_quest6ansb.jpg", "2012_gr6_quest6ansc.jpg", "2012_gr6_quest6ansd.jpg", 1, "Geometry", "isometric drawings" );
INSERT INTO question_6 values (49, "Kelly is drawing a rectangle on the grid below. What are the coordinates of the missing vertex?", "2012_gr6_quest11.jpg", "(11, 7)", "(7, 11)", "(11, 6)", "(6, 11)", 1, "Geometry", "cartesian graph" );
INSERT INTO question_6 values (50, "Karim is dividing the angle shown below into smaller equal angles. The first of the smaller angles is shaded. How many smaller angles can Karim make in total?" ,"2012_gr6_quest12.jpg", "60", "12", "10", "6", 2, "Geometry", "measuring angles");
INSERT INTO question_6 values (51, "Look at the numbers below. Which list shows these numbers ordered from smallest to largest?", "2012_gr6_quest13.jpg", "2012_gr6_quest13ansa.jpg", "2012_gr6_quest13ansb.jpg", "2012_gr6_quest13ansc.jpg", "2012_gr6_quest13ansd.jpg", 3, "NumberSense", "ordering and comparing fractions");  
INSERT INTO question_6 values(52, "The area of one face of a cube is 4 cm squared.What is the surface area of the cube?", "2012_gr6_quest14.jpg", "10 cm squared", "12 cm squared", "20 cm squared", "24 cm squared", 4, "Measurement", "surface area");

UPDATE question_6 SET correct_ans = 1 WHERE quest_id = 51;

INSERT INTO question_6 values (53, "The shape on the grid below goes through the following 3 transformations in order: 
• rotation of 180° about Point T
• reflection across the mirror line
• translation 5 units left
Which shaded shape is the result?", "2012_gr6_quest15.jpg", "Shape 1", "Shape 2", "Shape 3", "Shape 4", 3, "Geometry" ,"transformations");
INSERT INTO question_6 values (54, "Two triangles each have an area of 48 cm squared. Which could be their dimensions?", null, "2012_gr6_quest16ansa.jpg","2012_gr6_quest16ansb.jpg", "2012_gr6_quest16ansc.jpg", "2012_gr6_quest16ansd.jpg", 1, "Measurment", "area of a triangle");
INSERT INTO question_6 values (55, "Consider the rhombus below. What is the area of the rhombus?", "2012_gr6_quest17.jpg", "5.4 cm squared", "6.8 cm squared", "11.6 cm squared", "13.6 cm squared", 2, "Measurement", "area of a parallelogram");
INSERT INTO question_6 values (56, "The masses of 4 meteorites are 1.32 kg, 0.9 kg, 2.046 kg and 3.8 kg. Which is the best estimate of the total mass of the 4 meteorites?", null, "4 kg", "6 kg", "8 kg", "10 kg", 3, "NumberSense", "decimal addition");
INSERT INTO question_6 values (57, "If n 3 a 5 24 and n 3 a 1 b 5 33, what is the value of b? ", null, "3", "4", "6", "9", 4, "Patterning", "algebra");
INSERT INTO question_6 values(58, "Consider the pattern: 1161, 387, 129, 43. Which is its pattern rule? To get the next term, ", null, "divide each term by 3", "divide each term by 4", "subtract 86 from each term", "subtract 774 from each term", 1, "Patterning", "number patterns");
INSERT INTO question_6 values(59, "What is the ones digit of the answer to 3468 divided by 100?", null, "3", "4", "6", "8", 2, "NumberSense", "division");
INSERT INTO question_6 values(60, "Henry designs the spinner below and labels the sections with the names of colours. He wants 0.15 to be the probability of the arrow landing on “blue” in one spin. How many sections should he label “blue”?", "2012_sec2_gr6_quest4.jpg", "2", "3", "15", "17", 2, "Data", "probability" );
INSERT INTO question_6 values(61,"Two pools are being filled with water. The following table shows the height of the water in the pools at 4 different times. Which graph displays the data in the table accurately?", "2012_sec2_gr6_quest5.jpg", "2012_sec2_gr6_quest5ansa.jpg", "2012_sec2_gr6_quest5ansb.jpg", "2012_sec2_gr6_quest5ansc.jpg", "2012_sec2_gr6_quest5ansd.jpg", 4, "Data", "interpreting graphs");
INSERT INTO question_6 values(62, "Jamie buys 3 ice cream cones for $4.65. At this rate, how much will it cost to buy 2 ice cream cones? ", null, "$1.29", "$1.55", "$2.33", "$3.10", 4, "NumberSense", "ratio");
INSERT INTO question_6 values(63, "Sanjit makes a parallelogram. He starts with a rectangle and adds 2 congruent triangles as shown below. The parallelogram has an area of 190 cm squared. What is the area of each of the triangles?","2012_sec2_gr6_quest7.jpg", "15 cm squared", "30 cm squared", "160 cm squared", "175 cm squared", 1, "Measurement", "area of a triangle");
INSERT INTO question_6 values(64, "Which represents the number 93 050 in words?", null, "ninety-three thousand fifty ", "nine thousand three hundred five", "nine thousand three hundred fifty", "ninety-three thousand five hundred" , 1, "NumberSense", "place value");
INSERT INTO question_6 values (65, "Which of the following has an area of 25 cm2 and a perimeter of 25 cm?", null, "2012_sec2_gr6_quest13ansa.jpg", "2012_sec2_gr6_quest13ansb.jpg", "2012_sec2_gr6_quest13ansc.jpg", "2012_sec2_gr6_quest13ansd.jpg", 3, "Measurement", "area of a parallelogram");
INSERT INTO question_6 values (66, "It takes 1 work day to repair 100 m of road. At this rate, about how many work days will it take to repair 20 km of road?", null, "500", "200", "5", "2", 2, "Measurement", "metric conversions"); 
INSERT INTO question_6 values (67, "The following data gives the minimum temperature for six days. What is the mean of these six temperatures?", "2012_sec2_gr6_quest15.jpg", "18.0 degrees", "18.5 degrees", "19.5 degrees", "24.0 degrees", 3, "Data", "mean");

INSERT INTO question_6 values(68, "Consider the pattern. 7, 14, 28, 56, ____, 224. What is the missing term in this pattern?",null, "84", "102", "112", "168", 3, "Patterning", "number patterns");
INSERT INTO question_6 values(69, "Jacob paints the outside of the rectangular prism below, except for the bottom. What is the total area that he paints?", "2011_gr6_quest2.jpg", "108 square cm", "123 square cm", "132 square cm", "150 square cm", 2, "Measurement", "surface area");
INSERT INTO question_6 values(70, "Look at Triangle 2 in the following design. Which triangle shows Triangle 2 after a rotation of 180° about the centre point?", "2011_gr6_quest3.jpg", "Triangle 1", "Triangle 2", "Triangle 3", "Triangle 4", 3, "Geometry",  "transformations");
INSERT INTO question_6 values(71, "The following graph shows the favourite subjects of some Grade 6 students. Based on the data in the graph, which of the following statements is true?", "2011_gr6_quest4.jpg", "Most boys chose science as their favourite subject.", "Science is the least favourite subject of these students.", 
"French is the favourite subject of twice as many students as music", "Twice as many girls chose music as chose art as their favourite subject.",  4, "Data", "interpreting graphs");
INSERT INTO question_6 values(72, "Every week, Danny eats 540 grams of cereal. Over 8 weeks, he finishes a total of 12 boxesof cereal. Each box contains the same amount of cereal. How many grams of cereal are in each box?", null, "360", "810", "4320", "6480", 1, "NumberSense", "division");
INSERT INTO question_6 values(73, "Manny uses tiles to build the geometric pattern shown below. Which of the following represents the number of squares in Stages 4, 5 and 6 of Manny’s pattern?", "2011_gr6_quest6.jpg", "17, 24, 31", "13, 17, 24", "13, 17, 21", "12, 16, 20", 3, "Patterning", "geometry patterns"); 
INSERT INTO question_6 values(74, "Consider the line segment below. Which of the following is closest to its length?", "2011_gr6_quest11.jpg", "3.7 cm", "4.2 cm", "47 mm ", "57 mm", 3, "Measurement", "units");
INSERT INTO question_6 values(75, "What is the mean of a set of data?", null, "the value that occurs most often", "the middle value when the set is arranged in order", "the difference between the largest and the smallest values", "the result of adding all the values and dividing by the number of values", 4, "Data", "mean");
INSERT INTO question_6 values(76, "The following graphs show the pattern for a triangle that grows in size. ", "2011_gr6_quest13.jpg", "Y(8, 3) Z(2, 10)", "Y(3, 8) Z(10, 2)", "Y(3, 8) Z(11, 2)" ,"Y(8, 3) Z(2, 11) ", 3, "Patterning", "graphing patterns");
INSERT INTO question_6 values(77, "Consider the equation: 5 x n + 12 = 32. What is the value of n in this equation?", null, "3", "4", "14", "17", 2, "Patterning", "algebra");
INSERT INTO question_6 values(78, "Consider the parallelogram below. Which expression can be used to find the area, in square centimetres, of this parallelogram?", "2011_gr6_quest15.jpg", "5x2", "5x3", "2+3+5", "3+5+3+5", 1, "Measurement", "area of a parallelogram");
INSERT INTO question_6 values(79, "The measurements of a triangular prism are shown below in centimetres.One face has an area of 12 square cm. Another face has an area of 60 square cm. What are the areas, in square cm, of the remaining 3 faces?", "2011_gr6_quest16.jpg", "12, 12, 50", "12, 12, 60", "12, 50, 50", "12, 60, 60", 3, "Measurement", "surface area" );
INSERT INTO question_6 values(80, "Consider the number line below. What value does x represent?", "2011_gr6_quest17.jpg", "12415", "12420", "12425", "12430", 2, "NumberSense", "benchmarks");
INSERT INTO question_6 values(81, "The table below shows data about participating in school sports. Which graph represents this data?", "2011_gr6_quest18.jpg", "2011_gr6_quest18ansa.jpg", "2011_gr6_quest18ansb.jpg", "2011_gr6_quest18ansc.jpg", "2011_gr6_quest18ansd.jpg", 3, "Data", "interpreting graphs");
INSERT INTO question_6 values(82, "Which shape below has an area of 12 square cm?", null, "2011_gr6_quest19ansa.jpg", "2011_gr6_quest19ansb.jpg", "2011_gr6_quest19ansc.jpg", "2011_gr6_quest19ansd.jpg", 4, "Measurement", "area of a triangle");
INSERT INTO question_6 values(83, " A company made 1 000 000 balloons last month and packaged them in bags containing 100 balloons. Each bag of balloons sells for $2. How much money will the company receive if the company sells all of the bags?", null, "$200", "$2000", "$20000", "$200000", 3, "NumberSense", "division");
INSERT INTO question_6 values(84, "Derek makes a number cube. The theoretical probability of rolling a multiple of 3 on his number cube is 5/6. Which set of numbers could be on the faces of Derek’s number cube?", null, "1, 2, 3, 4, 5, 6", "1, 3, 3, 6, 6, 6", "3, 3, 3, 3, 3, 3", "3, 5, 5, 5, 5, 5", 2, "Data", "probability");
INSERT INTO question_6 values(85, "If 6 x a = 12 and 6 x a - b = 8, what is the value of b?", null, "2", "4", "6", "8", 2, "Patterning", "algebra");
INSERT INTO question_6 values(86, "The figure below was built using cubes. What is the top view of this figure?", "2011_gr6_quest23.jpg", "2011_gr6_quest23ansa.jpg", "2011_gr6_quest23ansb.jpg", "2011_gr6_quest23ansc.jpg", "2011_gr6_quest23ansd.jpg", 3, "Geometry", "isometric drawings");
INSERT INTO question_6 values(87, "Ming makes 4.8 litres of lemonade. How many millilitres does she make?", null, "0.048", "0.48", "480", "4800", 4, "Measurement", "metric conversions");
INSERT INTO question_6 values(88, "The graph below shows a relationship between the number of tasks Cole completes and the number of tokens he earns. According to the pattern shown on the graph, how many tasks must Cole complete to earn 16 tokens?", "2011_gr6_quest25.jpg", "6", "8", "16", "32", 2, "Patterning", "graphing patterns");      


INSERT INTO question_6 values(89, "Consider the shapes below. Which list shows the shapes in order from fewest to most lines of symmetry?", "2011_gr6_quest30.jpg", "2011_gr6_quest30ansa.jpg", "2011_gr6_quest30ansb.jpg", "2011_gr6_quest30ansc.jpg", "2011_gr6_quest30ansd.jpg", 2, "Geometry",  "lines of symmetry");
INSERT INTO question_6 values(90, "Consider the equation: 3 x m + 2 x n = 36. Which values of m and n would not make the equation true?", null, "m = 2, n = 15", "m = 4, n = 12", "m = 6, n = 9", "m = 8, n = 7", 4, "Patterning", "algebra");
INSERT INTO question_6 values(91, "A fair number cube with 1, 2, 3, 4, 5 and 6 on its faces is rolled once. The dot on the number line below represents the probability of an event. Which event could be represented by this dot?" , "2011_gr6_quest32.jpg", "rolling an odd number", "rolling an even number", "rolling a number larger than 2", "rolling a number smaller than 3", 3, "Data", "probability");
INSERT INTO question_6 values(92, "The amounts of water in two containers are shown in the table below. What is the difference between the amounts of water in the containers?", "2011_gr6_quest33.jpg", "0.053 L", "0.865 L", "1.947 L", "1.987 L", 1, "NumberSense", "decimal subtraction");
INSERT INTO question_6 values(93,"Consider the triangular prism pictured below. The area of the triangular base is 36 square cm. The volume of the triangular prism is 396 cubic cm. What is the height of the triangular prism?", "2011_gr6_quest34.jpg", "6 cm", "9 cm", "11 cm", "12 cm",  3, "Measurement", "volume of a triangular prism");
INSERT INTO question_6 values(94, "A recipe for a fruit drink uses 1 litre of cranberry juice, 2 litres of grape juice and 3 litres of orange juice. Which of the following could be represented by the ratio 3:2?", null, "grape juice to orange juice", "orange juice to grape juice", "grape juice to cranberry juice", "cranberry juice to grape juice", 2, "NumberSense", "ratio");
INSERT INTO question_6 values(95, "A number is multiplied by 0.01 to get a product of 23.6. What is the number?", null, "0.0236", "0.236", "2360", "23600", 3, "NumberSense", "decimal multiplication");
   


delete from question_6 where quest_id = "93";
 INSERT INTO question_6 values(93, "Emily makes a table of values using the following rule: Start with 2 and add 3 to get the next term. Which ordered pair belongs in her table of values?", "2010_gr6_quest2.jpg", "(4,8)", "(4,9)", "(4, 11)", "(4, 14)", 3, "Patterning", "graphing patterns");
INSERT INTO question_6 values (96, "Shape P is reflected across the dotted line and then rotated 908 clockwise. " , "2010_gr6_quest6.jpg", "Shape 1", "Shape 2", "Shape 3", "Shape 4", 1, "Geometry", "transformations");
INSERT INTO question_6 values(97, "Ten students in Mr. Smith’s class record their height and the length of their feet. The graph below displays these data. Which conclusion can be drawn from the data?", "2010_gr6_quest11.jpg", "A boy has the longest feet.", "A girl has the smallest feet.", "Taller students tend to have smaller feet.", "Shorter students tend to have smaller feet.",  4, "Data", "interpreting graphs");
INSERT INTO question_6 values(98, "Mr. Christy records the number of sit-ups the students in his class can do in one minute. The table below shows the results for 8 students. Which stem-and-leaf plot displays the same data?", "2010_gr6_quest13.jpg", "2010_gr6_quest13ansa.jpg", "2010_gr6_quest13ansb.jpg", "2010_gr6_quest13ansc.jpg", "2010_gr6_quest13ansd.jpg", 4, "Data", "stem-and-leaf plots"); 
INSERT INTO question_6 values(99, "Polygon PQRT is rotated 90° clockwise about Point Q. What are the new coordinates of Point R after this rotation?",  "2010_gr6_quest16.jpg", "(6,7)", "(7,6)", "(11, 2)", "(11, 6)", 2, "Geometry", "transformations");
INSERT INTO question_6 values(100, "A polygon has 4 sides. Two of the sides are parallel and two are not. What shape is the polygon?", null, "square", "rhombus", "trapezoid", "parallelogram", 3, "Geometry", "quadrilateral properties"); 
INSERT INTO question_6 values (101, "Which angle appears to measure 140°? ", null, "2010_gr6_quest18ansa.jpg", "2010_gr6_quest18ansb.jpg", "2010_gr6_quest18ansc.jpg", "2010_gr6_quest18ansd.jpg", 1, "Geometry", "angles"); 
INSERT INTO question_6 values (102, "Points A, B and C lie on a line in the polygon shown below. Which table best classifies the angles of the polygon?", "2009_quest17.jpg", "2009_quest17ansa.jpg", "2009_quest17ansb.jpg", "2009_quest17ansc.jpg", "2009_quest17ansd.jpg", 4, "Geometry", "angles");

CREATE TABLE Person(
userId int NOT NULL AUTO_INCREMENT,
userName varchar(20) UNIQUE NOT NULL,
password varchar(20) NOT NULL,
FirstName varchar(25) NOT NULL,
LastName varchar(30) NOT NULL,
Role enum('student', 'teacher', 'guardian') NOT NULL,
Email varchar(60) NOT NULL,
CONSTRAINT pk_person_userId PRIMARY KEY (userId));


CREATE TABLE Grades(
userId int references Person(userId),
Test1_score int,
Test2_score int,
Test3_score int,
Test4_score int,
Test5_score int,
CONSTRAINT pk_grades_userId primary key (userId)
);

CREATE TABLE Test_Result(
testId int NOT NULL AUTO_INCREMENT,
userId int NOT NULL references Person(userId),
test_number enum('1', '2', '3', '4', '5') NOT NULL,
start_time datetime,
end_time datetime,
alloted_time datetime,
overall_score int NOT NULL,
numsense_score int NOT NULL,
geo_score int NOT NULL,
meas_score int NOT NULL,
pattern_score int NOT NULL,
data_score int NOT NULL,
incorrect_questions varchar(200), 
CONSTRAINT pk_testresult_testId PRIMARY KEY (testId));


CREATE TABLE Teacher(
teacherId int NOT NULL REFERENCES Person(userId),
school varchar(200),
schoolBoard varchar(200),
CONSTRAINT pj_teacher_teacherId primary key (teacherId)
);

Select * from person;

CREATE TABLE Guardian_Child(
childId int NOT NULL references Person(userId),
guardianId int NOT NULL references Person(userId));

CREATE TABLE Teacher_Student(
teacherId int NOT NULL references Person(userId),
childId int NOT NULL references Person(userId)
);

ALTER TABLE Person modify COLUMN userName varchar(50) unique not null; 


CREATE TABLE videos (`id` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` varchar(100) NOT NULL REFERENCES question_6(substrand),
`link` varchar(100) NOT NULL
  );
 
INSERT INTO `videos`(`id`, `name`, `link`) VALUES
(1,' number patterns ','https://www.youtube.com/watch?v=4pLxoe69Jzc'),
(2,'area of a parallelogram','https://www.youtube.com/watch?v=a4UPkepMXLM'),
(3,'decimal division','https://www.youtube.com/watch?v=bosixfBHikg'),
(4,'mean','https://www.youtube.com/watch?v=FM36OLbdZv8'),
(5,'algebra','https://www.youtube.com/watch?v=1-_hZStC9fM'),
(6,'rotations','https://www.youtube.com/watch?v=a6MQTpBSNBk'),
(7,'geometry patterns','https://www.youtube.com/watch?v=Ka82QC4QvGA&list=PL4rxxS6x1HEb4VDvSxeFHAlvhxhuHDx6h'),
(8,'decimal subtraction','https://www.youtube.com/watch?v=lDXaju6JoQ0'),
(9,'lines of symmetry','https://www.youtube.com/watch?v=qDtWxr2mfoEv'),
(10,'probability on a number line','https://www.youtube.com/watch?v=wgpakdTBu7U'),
(11,'units','https://www.youtube.com/watch?v=umBdW7talCo'),
(12,'units of capacity','https://www.youtube.com/watch?v=-mfF886s_AA'),
(13,'percent','https://www.youtube.com/watch?v=rR95Cbcjzus'),
(14,'cartesian graph','https://www.youtube.com/watch?v=JM06kjvAD_0'),
(15,'volume of a rectangular prism','https://www.youtube.com/watch?v=u1nWI2b0fT4'),
(16,'quadrilateral properties','https://www.youtube.com/watch?v=udS3nkj2cfg'),
(17,'interpreting graphs','https://www.youtube.com/watch?v=FsbxlAw1Cbo'),
(18,'division','https://www.youtube.com/watch?v=jztxjTGhzRo'),
(19,'metric conversions','https://www.youtube.com/watch?v=w0nqd_HXHPQ'),
(20,'stem-and-leaf plots','https://www.youtube.com/watch?v=LEFE1km5ROY'),
(21,'ratio','https://www.youtube.com/watch?v=IKf5Bjgup6s'),
(22,'probability','https://www.youtube.com/watch?v=ix-SD2kK-b8'),
(23,'comparing and ordering decimals','https://www.youtube.com/watch?v=JJawhaMqaXg'),
(24,'graphing patterns','https://www.youtube.com/watch?v=c92xoWPp9Qg'),
(25,'area of a parallelogram','https://www.youtube.com/watch?v=a4UPkepMXLM'),
(26,'algebra','https://www.youtube.com/watch?v=1-_hZStC9fM'),
(27,'surface area','https://www.youtube.com/watch?v=IHqfTfvOEjg'),
(28,'ordering and comparing fractions','https://www.youtube.com/watch?v=N8dIOmk_lHs'),
(29,'decimal multiplication','https://www.youtube.com/watch?v=STyoP3rCmb0'),
(30,'angles','https://www.youtube.com/watch?v=pEnpwa3Yo8E'),
(31,'interpreting charts','https://www.youtube.com/watch?v=xO2HptuN5Wg'),
(32,'isometric drawings','https://www.youtube.com/watch?v=8BFjHJTs4q0'),
(33,'measuring angles','https://www.youtube.com/watch?v=umBdW7talCo'),
(34,'ordering and comparing fractions','https://www.youtube.com/watch?v=umBdW7talCo'),
(35,'transformations','https://www.youtube.com/watch?v=umBdW7talCo'),
(36,'area of a triangle','https://www.youtube.com/watch?v=umBdW7talCo'),
(37,'decimal addition','https://www.youtube.com/watch?v=umBdW7talCo'),
(38,'place value','https://www.youtube.com/watch?v=umBdW7talCo'),
(39,'benchmarks','https://www.youtube.com/watch?v=umBdW7talCotalCo'),
(40,'volume of a triangular prism','https://www.youtube.com/watch?v=umBdW7talCo'),
(41,'decimal multiplication ','https://www.youtube.com/watch?v=umBdW7talCo');

truncate table videos;
alter table videos modify link varchar(750);

INSERT INTO `videos`(`id`, `name`, `link`) VALUES 
(1, 'number patterns','<iframe width="640" height="360" src="https://www.youtube.com/embed/4pLxoe69Jzc" frameborder="0" allowfullscreen></iframe>'),
(2,'area of a parallelogram','<iframe width="640" height="360" src="https://www.youtube.com/embed/a4UPkepMXLM" frameborder="0" allowfullscreen></iframe>'),
(3,'decimal division','<iframe width="640" height="360" src="https://www.youtube.com/embed/bosixfBHikg" frameborder="0" allowfullscreen></iframe>'),
(4,'mean','<iframe width="640" height="360" src="https://www.youtube.com/embed/FM36OLbdZv8" frameborder="0" allowfullscreen></iframe>'),
(5,'algebra','<iframe width="640" height="360" src="https://www.youtube.com/embed/1-_hZStC9fM" frameborder="0" allowfullscreen></iframe>'),
(6,'rotations','<iframe width="640" height="360" src="https://www.youtube.com/embed/a6MQTpBSNBk" frameborder="0" allowfullscreen></iframe>'),
(7,'geometry patterns','<iframe width="640" height="360" src="https://www.youtube.com/embed/Ka82QC4QvGA" frameborder="0" allowfullscreen></iframe>'),
(8,'decimal subtraction','<iframe width="640" height="360" src="https://www.youtube.com/embed/lDXaju6JoQ0" frameborder="0" allowfullscreen></iframe>'),
(9,'lines of symmetry','<iframe width="640" height="360" src="https://www.youtube.com/embed/qDtWxr2mfoE" frameborder="0" allowfullscreen></iframe>'),
(10,'probability on a number line','<iframe width="640" height="360" src="https://www.youtube.com/embed/wgpakdTBu7U" frameborder="0" allowfullscreen></iframe>'),
(11,'units','<iframe width="640" height="360" src="https://www.youtube.com/embed/umBdW7talCo" frameborder="0" allowfullscreen></iframe>'),
(12,'units of capacity','<iframe width="640" height="360" src="https://www.youtube.com/embed/-mfF886s_AA" frameborder="0" allowfullscreen></iframe>'),
(13,'percent','<iframe width="640" height="360" src="https://www.youtube.com/embed/rR95Cbcjzus" frameborder="0" allowfullscreen></iframe>'),
(14,'cartesian graph','<iframe width="640" height="360" src="https://www.youtube.com/embed/JM06kjvAD_0" frameborder="0" allowfullscreen></iframe>'),
(15,'volume of a rectangular prism','<iframe width="640" height="360" src="https://www.youtube.com/embed/u1nWI2b0fT4" frameborder="0" allowfullscreen></iframe>'),
(16,'quadrilateral properties','<iframe width="640" height="360" src="https://www.youtube.com/embed/udS3nkj2cfg" frameborder="0" allowfullscreen></iframe>'),
(17,'interpreting graphs','<iframe width="640" height="360" src="https://www.youtube.com/embed/FsbxlAw1Cbo" frameborder="0" allowfullscreen></iframe>'),
(18,'division','<iframe width="640" height="360" src="https://www.youtube.com/embed/jztxjTGhzRo" frameborder="0" allowfullscreen></iframe>'),
(19,'metric conversions','<iframe width="640" height="360" src="https://www.youtube.com/embed/w0nqd_HXHPQ" frameborder="0" allowfullscreen></iframe>'),
(20,'stem-and-leaf plots','<iframe width="640" height="360" src="https://www.youtube.com/embed/LEFE1km5ROY" frameborder="0" allowfullscreen></iframe>'),
(21,'ratio','<iframe width="640" height="360" src="https://www.youtube.com/embed/IKf5Bjgup6s" frameborder="0" allowfullscreen></iframe>'),
(22,'probability','<iframe width="640" height="360" src="https://www.youtube.com/embed/ix-SD2kK-b8" frameborder="0" allowfullscreen></iframe>'),
(23,'comparing and ordering decimals','<iframe width="640" height="360" src="https://www.youtube.com/embed/JJawhaMqaXg" frameborder="0" allowfullscreen></iframe>'),
(24,'graphing patterns','<iframe width="640" height="360" src="https://www.youtube.com/embed/c92xoWPp9Qg" frameborder="0" allowfullscreen></iframe>'),
(25,'area of a parallelogram','<iframe width="640" height="360" src="https://www.youtube.com/embed/a4UPkepMXLM" frameborder="0" allowfullscreen></iframe>'),
(26,'algebra','<iframe width="640" height="360" src="https://www.youtube.com/embed/1-_hZStC9fM" frameborder="0" allowfullscreen></iframe>'),
(27,'surface area','<iframe width="640" height="360" src="https://www.youtube.com/embed/IHqfTfvOEjg" frameborder="0" allowfullscreen></iframe>'),
(28,'ordering and comparing fractions','<iframe width="640" height="360" src="https://www.youtube.com/embed/N8dIOmk_lHs" frameborder="0" allowfullscreen></iframe>'),
(29,'decimal multiplication','<iframe width="640" height="360" src="https://www.youtube.com/embed/STyoP3rCmb0" frameborder="0" allowfullscreen></iframe>'),
(30,'angles','<iframe width="640" height="360" src="https://www.youtube.com/embed/pEnpwa3Yo8E" frameborder="0" allowfullscreen></iframe>'),
(31,'interpreting charts','<iframe width="640" height="360" src="https://www.youtube.com/embed/xO2HptuN5Wg" frameborder="0" allowfullscreen></iframe>'),
(32,'isometric drawings','<iframe width="640" height="360" src="https://www.youtube.com/embed/8BFjHJTs4q0" frameborder="0" allowfullscreen></iframe>'),
(33,'measuring angles','<iframe width="640" height="360" src="https://www.youtube.com/embed/umBdW7talCo" frameborder="0" allowfullscreen></iframe>'),
(34,'ordering and comparing fractions','<iframe width="640" height="360" src="https://www.youtube.com/embed/KNdUJQ_qd4U" frameborder="0" allowfullscreen></iframe>'),
(35,'transformations','<iframe width="640" height="360" src="https://www.youtube.com/embed/r3lN_BADmPQ" frameborder="0" allowfullscreen></iframe>'),
(36,'area of a triangle','<iframe width="640" height="360" src="https://www.youtube.com/embed/dAns-8FJB1s" frameborder="0" allowfullscreen></iframe>'),
(37,'decimal addition','<iframe width="640" height="360" src="https://www.youtube.com/embed/kwh4SD1ToFc" frameborder="0" allowfullscreen></iframe> '),
(38,'place value','<iframe width="640" height="360" src="https://www.youtube.com/embed/T5Qf0qSSJFI" frameborder="0" allowfullscreen></iframe> '),
(39,'benchmarks','<iframe width="640" height="360" src="https://www.youtube.com/embed/WD7e8FZ05BI" frameborder="0" allowfullscreen></iframe>'),
(40,'volume of a triangular prism','<iframe width="640" height="360" src="https://www.youtube.com/embed/5ZHXzB28Kxc" frameborder="0" allowfullscreen></iframe>'),
(41,'decimal multiplication','<iframe width="640" height="360" src="https://www.youtube.com/embed/STyoP3rCmb0" frameborder="0" allowfullscreen></iframe>');

select * from videos;

ALTER TABLE test_result MODIFY incorrect_questions varchar(1000);

SELECT * FROM question_6 WHERE quest_id IN  (6, 10, 15, 18, 3, 9, 14, 25, 1,5, 8, 16, 4, 11, 20, 24, 2, 7, 12, 13) ORDER BY quest_id;
SELECT userId FROM Person WHERE userName = "myUserName";
INSERT INTO person VALUES (4, "myUserName", "password", "myFirstName", "myLastName", "student", "eqaotestprep@gmail.com");
Select * from person;
alter table Person add token varchar(200);
alter table Person add active bit default  0;
update  videos set name ="number patterns" where id = 1;
select * from grades;
delete from grades where userId = 7;


select * from question_6;

Update question_6 set quest_text ="Which two equations are true if n = 2?
Equation 1: 4 + n + 3 = 5
Equation 2: 4 - n + 3 = 5
Equation 3: 4 x n + 3 = 5
Equation 4: 4 ÷ n + 3 = 5" where quest_id = 5;

Update question_6 set quest_text = "What is the value of 0.730 - 0.156?" where quest_id = 9;
update question_6 set image = "2015_gr6_quest6.jpg" where quest_id = 20;
select * from question_6 where quest_id = 20;

select * from person;
insert into person values (11, "Nithya" "Nithyaisthebest1234", "Nithya", "Thayananthan", "student", 