<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sampls2018.uz</title>
<link href="css/Html sayt.css" rel="stylesheet" type="text/css" />
<style type="text/css">
</style>
<link href="css/stayl.css" rel="stylesheet" type="text/css">
</head>
<body>
<body  background="img/Misc-Ethereal-Icons-icon.png">

<b><font face="Academy" size="2"><form name=clock>
<input type=text size=25 name=full>
</form>
</font></b>
<h3><b><font face="Academy" size="2">


  <script language="JavaScript">
<!--
function fulltime() {
var time=new Date();
document.clock.full.value=time.toLocaleString();
setTimeout('fulltime()',500)
}
//-->
</script>
  <script language="JavaScript">
<!--
function display_title() {
date = new Date();
var hours = date.getHours();
if (hours >= 6) { time_of_day = 'Доброе утро';}
if ((hours >= 12) && (hours < 18)) { time_of_day = 'Добрый день';}
if (hours >= 18) { time_of_day = 'Добрый вечер';}
if ((hours >= 0) && (hours < 6)){ time_of_day = 'Доброй ночи';}
document.write(time_of_day + '!');
}
//-->
</script>
  
  <script language="JavaScript">
<!--
fulltime();
//-->
</script>
  </font></b>
  </p>
  </form>
 <p><a href="http://www.google.com">Google.com</a>
 
<table align="right">
 <html>
<script language="JavaScript">
<!--
<!-- Begin
monthnames = new Array(
"Yanvar",
"Febral",
"Mart",
"Aprel",
"May",
"iyun",
"iyul",
"Аvgust",
"Sentiyabir",
"Оktiyabir",
"Noyabir",
"Dekabir");
var linkcount=0;
function addlink(month, day, href) {
var entry = new Array(3);
entry[0] = month;
entry[1] = day;
entry[2] = href;
this[linkcount++] = entry;
}
Array.prototype.addlink = addlink;
linkdays = new Array();
monthdays = new Array(12);
monthdays[0]=31;
monthdays[1]=28;
monthdays[2]=31;
monthdays[3]=30;
monthdays[4]=31;
monthdays[5]=30;
monthdays[6]=31;
monthdays[7]=31;
monthdays[8]=30;
monthdays[9]=31;
monthdays[10]=30;
monthdays[11]=31;
todayDate=new Date();
thisday=todayDate.getDay();
thismonth=todayDate.getMonth();
thisdate=todayDate.getDate();
thisyear=todayDate.getYear();
thisyear = thisyear % 100;
thisyear = ((thisyear < 50) ? (2000 + thisyear) : (1900 + thisyear));
if (((thisyear % 4 == 0) 
&& !(thisyear % 100 == 0))
||(thisyear % 400 == 0)) monthdays[1]++;
startspaces=thisdate;
while (startspaces > 7) startspaces-=7;
startspaces = thisday - startspaces + 1;
if (startspaces < 0) startspaces+=7;
document.write("<table border=4 bgcolor=#CCFFFF // цвет фона>");
document.write("<tr><td colspan=7 align=center><b><font size=2>" + monthnames[thismonth] + " " + thisyear + "</font></b></td></tr>");
document.write("<tr>");
document.write("<td align=center><font size=2>Вс</font></td>");
document.write("<td align=center><font size=2>Пн</font></td>");
document.write("<td align=center><font size=2>Вт</font></td>");
document.write("<td align=center><font size=2>Ср</font></td>");
document.write("<td align=center><font size=2>Чт</font></td>");
document.write("<td align=center><font size=2>Пт</font></td>");
document.write("<td align=center><font size=2>Сб</font></td>"); 
document.write("</tr>");
document.write("<tr>");
for (s=0;s<startspaces;s++) {
document.write("<td></td>");
}
count=1;
while (count <= monthdays[thismonth]) {
for (b = startspaces;b<7;b++) {
linktrue=false;
document.write("<td><font size=2>");
for (c=0;c<linkdays.length;c++) {
if (linkdays[c] != null) {
if ((linkdays[c][0]==thismonth + 1) && (linkdays[c][1]==count)) {
document.write("<a href=\"" + linkdays[c][2] + "\">");
linktrue=true;}
}
}
if (count==thisdate) {
document.write("<font color='FF0000'><b>");
}
if (count <= monthdays[thismonth]) {
document.write(count);
}
else {
document.write(" ");
}
if (count==thisdate) {
document.write("</b></font>");
}
if (linktrue)
document.write("</a>");
document.write("</font></td>");
count++;
}
document.write("</tr>");
startspaces=0;
}
document.write("</table>");
// End
// -->
</script>
</h1>
 
 <body bgcolor=white>

<!-- Forma strukturasi quyidagicha. Konstruksiyasi 'Manzil ~ Nomi | kalit so`z^ Tavsif * Manzil http:// -->

<FORM NAME="database">

<INPUT TYPE="hidden" NAME="list" VALUE='index.html~Bos sahifa nomi: Java Applets DHTML FLASH CGI|Birinchi sahifaning kalit so`zi: script, applet^Safifa nomi: WEB-master uchun!*http://manzil.2-chi daraja.uz/2_page.htm~Title 2-chi sahifa|keywords 2-chi sahifa misol Javaap^ikkinchi sahifa- kiritish*your_third_page.htm~Your Third Page Title|keywords for third file go here separated by spaces^Third page description here!*your_fourth_page.htm~Your Fourth Page Title|keywords for fourth file go here separated by spaces^Fourth page description here!*'>

</FORM>

<script language="JavaScript">
<!--
function Page(url,title,keywords,description) {
while ((url.length > 0) && (url.charAt(0) == " ")) {
url = url.substring(1,url.length);
}
this.url = url;
while ((title.length > 0) && (title.charAt(0) == " ")) {
title = title.substring(1,title.length);
}
this.title = title;
this.keywords = keywords;
this.description = description;
return this;
}
function Database() {
var pos = 0;
while ((pos1 = amorphous.indexOf("~",pos)) != -1) {
pos2 = amorphous.indexOf("|",pos1+1);
pos3 = amorphous.indexOf("^",pos2+1);
pos4 = amorphous.indexOf("*",pos3+1);
if ((pos2 != -1)
&& (pos2 < pos3) && (pos3 < pos4)
&& (pos4 <= amorphous.indexOf("*",pos))) {
this[database_length++] = new Page(amorphous.substring(pos,pos1),
amorphous.substring(pos1+1,pos2),
amorphous.substring(pos2+1,pos3),
amorphous.substring(pos3+1,pos4));
pos = pos4+1;
} else { // error reading amorphous database
if (pos+30 <= amorphous.length)
alert('Error reading in amorphous database around "'
+ amorphous.substring(pos,pos+30) + '"');
pos = amorphous.indexOf("*",pos) + 1;
}
}
return this;
}
function search(str) {
menu_length = 0;
temp = new Object();
temp_length = 0;
words_length = 0;
words = new Object();
pos = 0;
while ((pos = str.indexOf(" ")) != -1
&& and_search != "exact") {
words[words_length] = str.substring(0,pos);
if (words[words_length].length > 0)
words_length++;
if (str.length == 1)
str="";
else
str = str.substring(pos+1,str.length);
}
if (str.length > 0)
words[words_length++] = str;
for (q=0;q<words_length;q++) {
temp_length = 0;
str = words[q].toLowerCase();
len = (and_search=="and"&&q>0?menu_length:database_length);
for (n=0; n<len; n++) {
if (and_search=="and"&&q>0) {
combo = (menu[n].title + " " + menu[n].description
+ " " + menu[n].keywords).toLowerCase();
} else {
combo = (database[n].title + " " + database[n].description
+ " " + database[n].keywords).toLowerCase();
}
if (combo.indexOf(str) != -1) // found
temp[temp_length++] = (and_search=="and"&&q>0?menu[n]:database[n]);
}
if (and_search!="and" && q>0) {
added = 0;
for (i=0;i<temp_length;i++) {
duplicate = false;
for (j=0;j<menu_length&&!duplicate;j++) {
if (menu[j] == temp[i]) {
duplicate = true;
}
}
if (!duplicate)
menu[menu_length+(added++)] = temp[i];
}
menu_length += added;
} else {
for(h=0;h<temp_length;h++)
menu[h] = temp[h];
menu_length = temp_length;
}
}
}
function entry() {
if ((document.entryform.keyword.value.length == 0)
|| (document.entryform.keyword.value == " ")) {
alert("Qidruvga bironta ham so`z kiritmadingiz.");
return false;
}
and_search = (document.entryform.and_or.selectedIndex == 0?"and":"or");
if (document.entryform.and_or.selectedIndex == 2)
and_search = "exact";
location.href = location.pathname + "?"
+ escape(document.entryform.keyword.value)
+ (and_search != "or"?"&"+and_search:"");
return false;
}
function redWord(str) {
for(r=0; r<words_length; r++) {
pos = -3;
word = words[r].toLowerCase();
while ((pos = str.toLowerCase().indexOf(word,pos+3)) != -1) {
val = pos+word.length;
str = str.substring(0,pos) + "*"
+ str.substring(pos,val) + "|"
+ str.substring(val,str.length);
}
}
pos = -16;
while ((pos = str.toLowerCase().indexOf("*",pos+16)) != -1)
str = str.substring(0,pos) + "<font color=red>"
+ str.substring(pos+1,str.length);
pos = -7;
while ((pos = str.toLowerCase().indexOf("|",pos+7)) != -1)
str = str.substring(0,pos) + "</font>"
+ str.substring(pos+1,str.length);
return str;
}

var amorphous = document.database.list.value;
temp_str = amorphous.substring(amorphous.length-2,amorphous.length);
if (temp_str.indexOf("*") == -1)
amorphous += "* ";
else
amorphous += " "; // amorphous database must have characters after last asterisk

database_length = 0; // Netscape 2 fix
var database = new Database(); // read in from amorphous database

menu_length = 0; // Netscape 2 fix
var menu = new Object();

string = "";
and_search = "or";
if (location.search.length > 1) {
string = unescape(location.search.substring(1,location.search.length));
pos = 0;
while ((pos = string.indexOf('"',pos)) != -1) {
string = string.substring(0,pos) + '\\"' + string.substring(pos+1,string.length);
pos += 2;
}
if (string.substring(string.length-4,string.length) == "&and") {
string = string.substring(0,string.length-4);
and_search = "and";
} else if (string.substring(string.length-6,string.length) == "&exact") {
string = string.substring(0,string.length-6);
and_search = "exact";
} else if (string.substring(string.length-3,string.length) == "&or") {
string = string.substring(0,string.length-3);
and_search = "or";
}
search(string);
}
document.write('<form name="entryform" onSubmit="return entry()">'
+'<b>Qidruv:</b><br><input type="text" size=25 '
+'name="keyword" value="'+string+'"> '
+'<input type="button" value="Search" onClick="entry()"><br><select name="and_or" '
+'size=1><option'+(and_search=="and"?" selected":"")+'>barcha so`zlarni topish '
+'(AND)<option'+(and_search=="or"?" selected":"")+'>Ixtiyoriy so`zni topish '
+'(OR)<option'+(and_search=="exact"?" selected":"")+'>talab qilinadigan so`zni topish'
+'(match)</select></form><br>');
if (location.search.length > 1)
document.write('<b>Ðåçóëüòàò ïîèñêà:</b><br><br>\n');

// description va keywords kalit so`zlar orqali sahifani saytdan izlash

for (n=0; n<menu_length; n++)
document.write('<b><a href="'+menu[n].url+'">'+menu[n].title
+'</a></b><br>'+redWord(menu[n].description)+'<br>Kalit so`z: ' 
+redWord(menu[n].keywords)+'<br><br>\n');
if ((menu_length == 0) && (location.search.length > 1))
document.write('Kalit so`z "'+string+'" topilmadi!\n');
// -->
</script>

 
 
 
<font color="#FFFFFF">
<h3><strong><a href="#">Registiratsiya+</a></strong></h3>
</font>
<font color="#FFFFFF">
<h3><strong><a href="loginnew.php">LOGIN  kirish</a></strong></h3>
</font>

<u>
<h1 align="center">&nbsp;
  <var><font color="#000000">PES</font> <font color="#ff0000">2013-2018 </font> <font color="#000000"> Chempianat  Liga Uzbekistan Samarkand</h1></td></u>

</tr>
<h1 align="center">
<img src="img/images(10).jpg" width="223" height="132"><img src="img/images(13).jpg" width="234" height="80"><img src="img/images(11).jpg" width="280" height="80"><var><img src="img/images(14).jpg" width="131" height="80"></var>
  <var><img src="img/images(10).jpg" width="223" height="132"></var>
  </h1>
  
  <html>
<title>Uefa chempiom liga</title>
<body>
<audio controls>
 <source src="mp3/Champions League - UEFA Champions League (emusic.me).mp3">your browser does not support the audio element.
</audio>
<table align="center" width="800" height="2946" border="0" cellpadding="0"
cellspacing="0">
  <tr>
<td height="100" colspan="2" class="separator">

  <table width="500" border="1" align="center" class="nav">
    <tbody>
      <tr>
        <th class="separator" scope="col"><a href="#">Bosh sahifa</a></th>
        <th class="separator" scope="col"><a href="news.html">Yangliklar</a></th>
        <th class="separator" scope="col"><a href="pls.html">Pls 3/4</a></th>
        <th class="separator" scope="col"><a href="mini.html"> Mini Futbol </a></th>
        <th align="center" class="separator" scope="col"><a href="#">Bi</a><a href="about.html">z haqimizda
          </a>
          <div class="separator"> </div>
    </tbody>
  </table></td>
</tr>
<tr>
<td height="23" class="header">&nbsp;</td>
<td  width="220">

</td>
</tr>
<tr>
<td height="100" colspan="2"><h1 align="center"><img src="animatsiya/kubok-ligi-200288285-350x197.jpg" width="1201" height="676">
  <marquee direction="right">
        <img src="img/images(17).jpg" width="300" height="300"><img src="img/images(20).jpg" width="300" height="300"><img src="img/9k=(2).jpg" width="300" height="300"><img src="img/images(22).jpg" width="300" height="300" /><img src="img/images(16).jpg" width="300" height="300"><img src="img/images(23).jpg" width="300" height="300"><img src="img/9k=(1).jpg" width="300" height="300"><img src="img/Z(1).jpg" width="300" height="300">
      <img src="img/images(18).jpg" width="300" height="300" /><img src="img/2Q==(1).jpg" width="300" height="300"><img src="img/images(19).jpg" width="300" height="300">
<img src="img/Z.jpg" width="300" height="300"><img src="img/images(24).jpg" width="300" height="300">
<img src="img/images(25).jpg" width="300" height="300">
<img  src="img/images(26).jpg" width="300" height="300">
<img src="img/images(28).jpg" width="300" height="300">
<img src="img/images(29).jpg" width="300" height="300">
<img src="img/images(31).jpg" width="300" height="300">
<img  src="img/images(32).jpg" width="300" height="300">
<img src="img/images(33).jpg" width="300" height="300">
<img src="img/images(35).jpg" width="300" height="300">
<img src="img/images(36).jpg" width="300" height="300">
<img src="img/images(37).jpg" width="300" height="300"><img src="img/images(39).jpg" width="300" height="300">
<img src="img/images(40).jpg" width="300" height="300">
<img src="img/images(41).jpg" width="300" height="300"><img src="img/maxresdefault.jpg" width="300" height="300"></marquee><img src="animatsiya/Provisional-Review-PES-SIZED-FOR-ARTICLE-EMBED-720x540.jpg" width="1300" height="600">
<marquee >
<img src="animatsiya/0.jpg" width="400" height="400">
<img src="animatsiya/417025928.jpg" width="400" height="400">
<img src="animatsiya/DDDXzRPU0AExjJq.jpg" width="400" height="400"><img src="animatsiya/DGLmvAkXYAAPxwS.jpg" width="400" height="400">
<img src="animatsiya/FIFA-18-Hack.jpg" width="400" height="400">
<img src="animatsiya/hqdefault (1).jpg" width="400" height="400">
<img src="animatsiya/hqdefault (2).jpg" width="400" height="400">
<img src="animatsiya/hqdefault (3).jpg" width="400" height="400">
<img src="animatsiya/hqdefault (4).jpg" width="400" height="400">
<img src="animatsiya/hqdefault.jpg" width="400" height="400">
<img src="animatsiya/maxresdefault (1).jpg" width="400" height="400">
<img src="animatsiya/maxresdefault (2).jpg" width="400" height="400">
<img src="animatsiya/maxresdefault (3).jpg" width="400" height="400">
<img src="animatsiya/maxresdefault.jpg" width="400" height="400"><img src="animatsiya/maxresdefault.jpg" width="400" height="400"><img src="animatsiya/p1_2360896_a1857c51.jpg" width="400" height="400">
<img src="animatsiya/PES-2018-header.jpg" width="400" height="400">

</marquee>


<html>
<head>
<title>Tablisa</title>
<div id="article_block">
<style>
table,th,td{
	border:thin solid black
}
th{
	color:white
	text-align:center;
	background-color:green;
}
tr{
	text-align:center
}
tr:hover{
	background-color:#999;
}
</style>
<table width="1000" height="113">
  <caption style="text-align:center"Marks sheet></caption>
<tr>
<th>Tr</th>
<th>Ismi</th>
<th>G`alaba</th>
<th>Durrang</th>
<th>Mag`lubiyat</th>
<th>gol</th>
</tr>
<tr>
<td>1</td>
<td>Murod</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>2</td>
</tr>
<td>2</td>
<td>Sanjar</td>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
</tr>
<td>3</td>
<td>Maqsud</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>-1</td>
</tr>
  <td>4</td>
<td>Mehroj</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>-2</td>
</tr>
<td>5</td>
<td>Dilmurod</td>
<td>3</td>
<td>0</td>
<td>0</td>
<td>4</td>
</tr>
</table>

<p><img src="animatsiya/futbol_myunhen_alyans_arena_myach_81193_1366x768.gif" width="1000" height="300" /><table style="width:100%">
  <tr>
   <font color="#Fffff"> <th> Name Admin</th></font>
    <th colspan="2">Telefon</th>
  </tr>
  <tr>
    <td>MEHROJ </td>
    <td>+998995939353</td>
    <td>+998995939353</td>
  </tr>
</table>
<img src="shaxsi rasim/IMG_20171008_080653.jpg" width="46" height="65"><img src="shaxsi rasim/IMG_20171008_080206.jpg" width="46" height="65">
</body>



	
	
