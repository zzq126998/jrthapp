/*JS������ȡ���ֵ����Сֵ����򵥷���(Math����)*/
Array.prototype.max=function(){ return Math.max.apply({},this) }
Array.prototype.min=function(){ return Math.min.apply({},this);}

/*�������е�����(x,y)�ֳ����飺һ����X�����飻��һ����Y������*/
 function  ArrX(value){
 var NewArr=Array();
 var b=0;
 for(var i=0 ;i<value.length;i++)//ѭ�����������е�ÿһ��Ԫ��
   {
    b=b+1;
    if ((b % 2)!=0) {
    NewArr.push(value[i]);
    }
   }
   return NewArr;
 }

 function ArrY(value){
  var NewArr=Array();
 var b=0;
 for(var i=0 ;i<value.length;i++)//ѭ�����������е�ÿһ��Ԫ��
   {
    b=b+1;
    if ((b % 2)==0) {
    NewArr.push(value[i]);
    }
   }
   return NewArr;
 }

 /*����path·������*/
 function ArrPath(value,fX,fY){
 var NewArr=Array();
 var b=0;
 for(var i=0 ;i<value.length;i++)//ѭ�����������е�ÿһ��Ԫ��
   {
    b=b+1;
    if ((b % 2)==0) {//ż��λ��Y����
       NewArr.push(value[i]-fY);
    }
    else
    if ((b % 2)!=0) {//����λ��X����
      NewArr.push(value[i]-fX);
    }
   }
   return NewArr;
 }

 /*�������ת���ɾ�������*/
 function ArrChange(value,pageWidth,pageHeigth){
 var NewArr=Array();
 var b=0;
 for(var i=0 ;i<value.length;i++)//ѭ�����������е�ÿһ��Ԫ��
   {
    b=b+1;
    if ((b % 2)==0) {//ż��λ��Y����
       NewArr.push(Math.round((value[i] /100)*pageHeigth));//��ʼ����
    }
    else
    if ((b % 2)!=0) {//����λ��X����
      NewArr.push(Math.round((value[i] / 100)*pageWidth));
    }
   }
   return NewArr;
 }

 function  CalcValue3(value,W,H)
  {
  //��һ�������������ֵת�ɾ�������ֵ���ȽϷ����� ��ת��������
   eval("var arr1=["+value+"]");//ת��������

   arr1=ArrChange(arr1,W,H);//����ĳߴ�
   var firstX=ArrX(arr1).min();
   var firstY=ArrY(arr1).min();
  //�ڶ�����ȡ���������ֵ����Сֵ

  //���������Ѷ���������������<v:shape/>�е�path���и�ֵ���㡣
  var  XMax=ArrX(arr1).max();
  var  XMin=ArrX(arr1).min();
  var  YMax=ArrY(arr1).max();
  var  YMin=ArrY(arr1).min();

  //���Ĳ������ؽ��
  return ArrPath(arr1,0,0);
  }


var canvascheck = document.createElement('canvas');
var isIE = window.navigator.systemLanguage?1:0;
var isVM = document.namespaces?1:0;
var isCV = canvascheck.getContext?1:0;

if(isVM) {//IE or IE�ں˵�
	if(document.namespaces['v']==null) {
		var e=["shape","shapetype","group","background","path","formulas","handles","fill","stroke","shadow","textbox","textpath","imagedata","line","polyline","curve","roundrect","oval","rect","arc","image"],s=document.createStyleSheet();
		for(var i=0; i<e.length; i++) {s.addRule("v\\:"+e[i],"behavior: url(#default#VML); antialias: true;");} document.namespaces.add("v","urn:schemas-microsoft-com:vml");
	}
}

function draw(areaobj,coords){
var obj,v,j,p,t,n;
var canvas=document.getElementById("canvas");
if(isVM)
{//IE
  obj=areaobj;
  if (obj)
  {
  t=''; p=''; n=1;
   if(obj.shape.toLowerCase()=='poly') {
     v=obj.coords.split(",");
     for(j=2;j<v.length;j+=2) {p += parseInt(v[j])+','+parseInt(v[j+1])+',';}
     t +='<v:shape strokeweight="1" filled="f" stroked="t" strokecolor="#ff0000" coordorigin="0,0" coordsize="'+canvas.width+','+canvas.height+'" path="m '+parseInt(v[0])+','+parseInt(v[1])+' l '+p+' x e" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:0px;left:0px;width:'+canvas.width+'px;height:'+canvas.height+'px;"></v:shape>';

  }
  }
  canvas.innerHTML = t;
}
else if (isCV)
{//other broswers
var context=canvas.getContext("2d");
 v=coords.split(',');
context.beginPath();
context.moveTo(parseInt(v[0]),parseInt(v[1]));
for(j=2;j<v.length;j+=2)
{
context.lineTo(parseInt(v[j]),parseInt(v[j+1]));
}
context.closePath();
context.lineWidth=2;
context.fillStyle = 'rgba(251,5,5,1)';//�����ɫ
context.strokeStyle = '#ff0000'; //�߿���ɫ
//context.fill();
context.stroke();
}
}

function undraw()
{
if (isCV)
 {
   var canvas=document.getElementById("canvas");
   if(isVM) {canvas.innerHTML = '';}
   else
   {  var context = canvas.getContext("2d");
      context.clearRect(0,0,canvas.width,canvas.height);
   }
 }

}

function  mapinit()
{
var images,object,canvas,bgrnd,r;
 images=document.getElementById("imageth");
 images.style.border="0";
 object = images.parentNode;//div
 object.style.position = (object.style.position=='static'||object.style.position==''?'relative':  object.style.position);
 object.style.height = images.height+'px';
 object.style.width = images.width+'px';
 object.style.padding = 0+'px';
 object.style.MozUserSelect = "none";
 object.style.KhtmlUserSelect = "none";
 object.unselectable = "on";
if(isCV) {
     canvas = document.createElement('canvas');
     }
    else if(isVM) {
     canvas = document.createElement(['<var style="zoom:1;overflow:hidden;display:block;width:'+images.width+'px;height:'+images.height+'px;padding:0;">'].join(''));

   }
   else
    {canvas = document.createElement('div');}


canvas.id ="canvas";
canvas.style.height = images.height+'px';
canvas.style.width = images.width+'px';
canvas.height = images.height;
canvas.width = images.width;
canvas.left = 0; canvas.top = 0;//���Ͻ�Ϊ(0,0)
canvas.style.position = 'absolute';//���Զ�λ
canvas.style.left = 0+'px';
canvas.style.top = 0+'px';
canvas.fading = 0;

images.className = '';//���
images.style.cssText = '';//���
images.left = 0; images.top = 0;
images.style.position = 'absolute';
images.style.height = images.height+'px';
images.style.width = images.width+'px';
images.style.left = 0+'px';
images.style.top = 0+'px';
images.style.display="block";
images.style.border="0";
images.style.MozUserSelect = "none";
images.style.KhtmlUserSelect = "none";
images.unselectable = "on";


if(isIE)
   {
     if(isCV)//֧��IE9�����ϰ汾��IE�����
	 {
	    images.style.opacity = 0;
  		images.style.MozOpacity = 0;
  		images.style.KhtmlOpacity = 0;
	 }
	 else
	   images.style.filter = "progid:DXImageTransform.Microsoft.Alpha(opacity=0);";//�����ƿ�͸����
   }
else {
	  	images.style.opacity =0;
  		images.style.MozOpacity =0;
  		images.style.KhtmlOpacity =0;
      }



//create canvas
if(isCV) {
 bgrnd = document.createElement('canvas');
}
else if(isVM) {

   bgrnd = document.createElement(['<var style="zoom:1;overflow:hidden;display:block;width:'+images.width+'px;height:'+images.height+'px;padding:0;">'].join(''));

}
else {bgrnd = document.createElement('img'); bgrnd.src = images.src;}



bgrnd.id = images.id+'_image';
bgrnd.left = 0; bgrnd.top = 0;
bgrnd.style.position = 'absolute';
bgrnd.style.height = images.height+'px';
bgrnd.style.width = images.width+'px';
bgrnd.style.left = 0+'px';
bgrnd.style.top = 0+'px';

object.insertBefore(canvas,images);

if(isCV) {
var context = canvas.getContext("2d");
context.clearRect(0,0,canvas.width,canvas.height);

}
else if(!isVM && !isCV) {
       //û��ִ��
         if(isIE) {
              canvas.style.filter = "Alpha(opacity="+(0)+")";
         }
         else
          {
            canvas.style.opacity=0;
  		    canvas.style.MozOpacity=0;
  		    canvas.style.KhtmlOpacity=0;
          }
}


object.insertBefore(bgrnd,canvas); //�ѱ���ͼ��ʾ����(����Ҫ)
bgrnd.height = images.height; bgrnd.width = images.width;


if(isCV)
{
var context = bgrnd.getContext("2d");
context.clearRect(0,0,bgrnd.width,bgrnd.height);
context.drawImage(images,0,0,bgrnd.width,bgrnd.height);
}
else
{//IE
bgrnd.height = images.height; bgrnd.width = images.width;
r =0;
bgrnd.innerHTML = '<v:roundrect arcsize="'+r+'"   strokeweight="0" filled="t" stroked="f" fillcolor="#ffffff"  style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:0px;top:0px;width:'+bgrnd.width+'px;height:'+bgrnd.height+'px;"><v:fill src="'+images.src+'" type="frame" /></v:roundrect>';//opacity="0.0"
}


}

var mapperOnload = window.onload;
window.onload = function () {
    if(mapperOnload) mapperOnload();mapinit();
}



//

function showBox(AClass)
{
  var
    areobj=document.getElementById(AClass);
  draw(areobj,String(areobj.coords));
}

function HideBox(AClass){  undraw(); }
