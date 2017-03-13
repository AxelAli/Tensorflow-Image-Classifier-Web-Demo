
# Tensorflow-Image-Classifier-Web-Demo
"Calorie Counter", helps you stay fit , by using computer vision to find which item are you eating and giving you nutrition facts

###End result (It's a video , click it)
[![IMAGE ALT TEXT HERE](http://img.youtube.com/vi/ECsLu60n0ss/0.jpg)](http://www.youtube.com/watch?v=ECsLu60n0ss)


### Requirements 

Web Server of your choice (nginx/apache/etc)(PHP must be installed)(See Any tutorial for setting up a webserver)



### Files, What do they do?
uploads = user submitted images go here

index.html = upload site

postdata.php = main page, processing 

styles.css = CSS styles for the web page



###Inspiration:
![](http://i.imgur.com/xnZCjTY.jpg)
Source: SAO Ordinal Scale - A1 Pictures

###First Step
Clone this project (In terminal)
```
git clone https://github.com/AxelAli/Tensorflow-Image-Classifier-Web-Demo.git
cd Tensorflow-Image-Classifier-Web-Demo
```
then

###Setting a tensorflow image recognizer
Follow this project.
```
https://github.com/AxelAli/Tensorflow-Image-Classification
```
When finished 
```
cd ..
```


(We should now be in this proyect folder)


###Usage
Open your webserver
####Click Choose file (in mobile you just open the camera)
![](http://i.imgur.com/TdCnETp.png)

####Select your picture 
![](http://i.imgur.com/mCa64Wt.png)

####Click Upload
![](http://i.imgur.com/7ijbEbW.png)

####Results are in!
![](http://i.imgur.com/HgGTvWh.png)

#####Orange is the image that you uploaded
#####Purple is the name of the food and serving size
#####Green is the amounts of each item


### Known Bugs / Errors / Improvements
>This should be a single webpage

>if it doesnt find anything it shows a random item (we should check Accuracy of <80%)

>data is hardcoded, this should be made with a database

>if it doenst know which item it is, it should ask the user what is it and run the code to add it automatically
